@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')



{!! Html::style('assets/css/table-scroll.css') !!}

    <h1 class="page-header">
        Show Products
    </h1>
    <div class="row">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/product/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div >

    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    
    <div class="row">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th width='10%'><span class="text">Category</span></th>
                            <th width='10%'><span class="text">Sub Category</span></th>
                            <th width='10%'><span class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Image</span></th>
                            <th width='10%'><span class="text">En_Title</span></th>
                            <th width='10%'><span class="text">Ar_Title</span></th>
                            <th width='15%'><span class="text">En_Description</span></th>
                            <th width='15%'><span class="text">Ar_Description</span></th>
                            <th width='10%'><span class="text">En_Price</span></th>
                            <th width='10%'><span class="text">Ar_Price</span></th>
                            <th width='10%'><span class="text">Publish At</span></th>
                            <th width='5%'></th>
                            <th width='5%'></th> <!-- edit operation -->
                        </tr>
                    </thead>
                    <tbody>
                       @if (Auth::user()) 
                        @foreach ($products as $product)
                            <tr> 
                                   <!-- for obtain name of category  -->
                                @foreach ($categories as $allcategory)
                                    @if($allcategory->id==$product->category_id)
                                         @foreach ($categories as $category)
                                            @if($category->id==$allcategory->category_id)
                                             <td class='wrap'><a href="{{url('/product/'.$product->id.'/edit')}}">{{$category->name}} &nbsp; {{$category->ar_name}}<a/></td>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                            <!-- for obtain name of subcategory  -->
                            @foreach ($subcategories as $subcategory)
                                @if($subcategory->id == $product->category_id)
                                <td class='wrap'><a href="{{url('/product/'.$product->id.'/edit')}}">{{$subcategory->name}} &nbsp; {{$subcategory->ar_name}}<a/></td>
                                @endif
                            @endforeach
                            <td>
                                <a href="{{url('/product/'.$product->id.'/edit')}}">
                                    <img src="{{url('/assets/images/'.$product->image)}}" width='100px' height='100px'>
                                </a>
                            </td>

                             <td class='wrap'><a href="{{url('/product/'.$product->id.'/edit')}}">{{$product->name}}<a/></td>
                             <td class='wrap'><a href="{{url('/product/'.$product->id.'/edit')}}">{{$product->ar_name}}<a/></td>
                                <td class='wrap'>{{substr($product->description,0,50)}}</td>
                                <td class='wrap'>{{substr($product->ar_description,0,50)}}</td>
                                <td>{{$product->price}} LE</td>
                                <td>{{$product->ar_price}} جنيها</td>
                                <td>{{substr($product->created_at,0,10)}}</td> 
                                <td>
                                    <a href="{{url('/product/'.$product->id.'/edit')}}">
                                        <span style="color:blue;" class="glyphicon glyphicon-edit edit" id="{{$product->id}}"></span>
                                    </a>
                                </td> 
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$product->id}}"></span></td>
                            </tr>
                        @endforeach
                     @endif 
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script type="text/javascript">
    $('.delete').on('click',function(event){
        event.preventDefault();
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        del_product=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/product') }}/"+id, //resource
            data:   { _token :token },
            success: function(del_products) { 
                del_product.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection   