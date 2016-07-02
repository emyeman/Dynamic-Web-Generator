@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')


{!! Html::style('assets/css/table-scroll.css') !!}

    <h1 class="page-header">
        Show Categories
    </h1>
    <div class="category">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/category/create/')}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div >

    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    
    <div class="category">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th width='30%'><span class="text">Image</span></th>
                            <th width='20%'><span class="text">Sub Category</span></th>
                            <th width='30%'><span class="text">Description</span></th>
                            <th width='20%'><span class="text">Publish At</span></th>
                            <th width='5%'></th>
                            <th width='5%'></th> <!-- edit operation -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category) 
                            @if (Auth::user()->id == $category->site_id)
                            <tr> 
                                <td>
                                    <a href="{{url('/category/'.$category->id.'/edit')}}">
                                        <img src="{{url('/assets/images/'.$category->image)}}" width='100px' height='100px'></td>
                                    </a>
                                <td class='wrap'><a href="{{url('/category/'.$category->id.'/edit')}}">{{$category->name}}<a/></td>
                                <td class='wrap'>{{substr($category->description,0,100)}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <a href="{{url('/category/'.$category->id.'/edit')}}">
                                        <span style="color:blue;" class="glyphicon glyphicon-edit edit" id="{{$category->id}}"></span>
                                    </a>
                                </td> 

                             <?php $flage_relation=0 ?>
                            @foreach ($categories as $del_category)
                                @if($category->id==$del_category->category_id)
                                    <?php $flage_relation=1 ?>
                                @endif    
                            @endforeach

                            @if($flage_relation==1)
                                <!-- <span class="btn btn-danger disabled" > Remove category  <span class="glyphicon glyphicon-remove disabled"></span></span> -->
                                <td><span style="size-weight:bold;" class="disabled">x</span></td>
                            @endif
                            @if($flage_relation==0)
                            <!-- <a class="btn btn-danger" href="/category/destroy/{{$category->id}}">Remove category <span class="glyphicon glyphicon-remove"></span></a> -->

                                <!-- use ajax for remove -->
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$category->id}}"></span></td>

                                 <!-- <a id="{{$category->id}}" class="btn btn-danger delete">Remove Category<span class="glyphicon glyphicon-remove"></span> </a> -->
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
        del_category=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/category') }}/"+id, //resource
            data:   { _token :token },
            success: function(del_categories) { 
                del_category.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection   

