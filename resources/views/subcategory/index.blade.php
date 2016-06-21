@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')


{!! Html::style('assets/css/table-scroll.css') !!}

    <h1 class="page-header">
        Show SubCategories
    </h1>
    <div class="subcategory">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/subcategory/create/')}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div >
    <div class="subcategory">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th width='20%'><span class="text">Category</span></th>
                            <th width='30%'><span class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Image</span></th>
                            <th width='20%'><span class="text">Sub Category</span></th>
                            <th width='30%'><span class="text">Description</span></th>
                            <th width='20%'><span class="text">Publish At</span></th>
                            <th width='5%'></th>
                            <th width='5%'></th> <!-- edit operation -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $subcategory) 
                            @if (Auth::user()->id == $subcategory->site_id)
                            <tr>
                            <!-- for obtain name of category  -->
                            @foreach ($categories as $category)
                                @if($category->id==$subcategory->category_id)
                                <td class='wrap'><a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">{{$category->name}}<a/></td>
                             @endif
                            @endforeach
                                <td>
                                    <a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">
                                        <img src="{{url('/assets/images/'.$subcategory->image)}}" width='100px' height='100px'>
                                    </a>
                                 </td>   
                                <td class='wrap'><a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">{{$subcategory->name}}<a/></td>
                                <td class='wrap'>{{substr($subcategory->description,0,100)}}</td>
                                <td>{{$subcategory->created_at}}</td>
                                <td>
                                    <a href="{{url('/subcategory/'.$subcategory->id.'/edit')}}">
                                        <span style="color:blue;" class="glyphicon glyphicon-edit edit" id="{{$subcategory->id}}"></span>
                                    </a>
                                </td> 

                                 <?php $flage_relation=0 ?>
                            @foreach ($products as $product)
                                @if($subcategory->id==$product->category_id)
                                    <?php $flage_relation=1 ?>
                                @endif    
                            @endforeach

                            @if($flage_relation==1)
                                <!-- <span class="btn btn-danger disabled" > Remove SubCategory  <span class="glyphicon glyphicon-remove disabled"></span></span> -->
                               <td><span style="size-weight:bold;" class="disabled">x</span></td>


                            @endif
                            @if($flage_relation==0)
                            <!-- <a class="btn btn-danger" href="/subcategory/destroy/{{$subcategory->id}}">Remove SubCategory <span class="glyphicon glyphicon-remove"></span></a> -->

                                <!-- use ajax for remove -->
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$subcategory->id}}"></span></td>

                                 <!-- <a id="{{$subcategory->id}}" class="btn btn-danger delete">Remove Category<span class="glyphicon glyphicon-remove"></span> </a> -->
                            @endif

                            </tr>
                        @endif
                        @endforeach
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
        del_subcategory=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/subcategory') }}/"+id, //resource
            data:   { _token :token },
            success: function(del_subcategories) { 
                del_subcategory.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection  

