@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')
{!! Html::style('assets/css/table-scroll.css') !!}

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Categories
                    
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive" width="500" height="30" src="/assets/images/category.jpg" alt="">
                </a>
            </div> -->
            <div class='col-lg-offset-11 col-ms-1'>
                <a href='/category/create'><span class="glyphicon glyphicon-plus"></span></a>
            </div>
        
            <div >
                <!-- *************************** -->
                <div id="table-wrapper">
                  <div id="table-scroll">
                    <table class='table table-hover' style="table-layout: fixed;">
                        <thead>
                            <tr>
                                <th width='25%'><span class="text">Image Category</span></th>
                                <th width='20%'><span class="text">Title Category</span></th>
                                <th width='30%'><span class="text">Description</span></th>
                                <th width='15%'><span class="text">Publish At</span></th>
                                <th width='15%'></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category) 
                            @if (Auth::user()->id == $category->site_id)
                                @if($category->category_id ==NULL)
                                <tr> 
                                    <td>
                                        <a href='/category/{{$category->id}}/edit'>
                                            <img src="/assets/images/{{$category->image}}" width='150px' height='100px'></td>
                                        </a>
                                    <td class='wrap'><a href='/category/{{$category->id}}/edit'>{{$category->name}}<a/></td> 
                                    <td class='wrap'>{{substr($category->description,0,100)}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td><?php $flage_relation=0 ?>
                                        @foreach ($categories as $del_category)
                                            @if($category->id==$del_category->category_id)
                                                <?php $flage_relation=1 ?>
                                            @endif    
                                        @endforeach

                                        @if($flage_relation==1)
                                            <span class="btn btn-danger disabled" > <span class="glyphicon glyphicon-remove disabled"></span></span>
                                            <!-- <span class="glyphicon glyphicon-remove disabled"></span> -->
                                        @endif
                                        @if($flage_relation==0)
                                            <!-- <a  class="btn btn-danger" href="/category/destroy/{{$category->id}}">Remove Category <span class="glyphicon glyphicon-remove"></span></a> -->

                                            <!-- use ajax for remove -->
                                            <a id="{{$category->id}}" class="btn btn-danger delete"><span class="glyphicon glyphicon-remove"></span></a>
                                            <!-- <span class="glyphicon glyphicon-remove delete" id="{{$category->id}}"></span> -->
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endif
                    @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
             </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src='/assets/js/jquery-2.1.4.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        
        $('.delete').on('click',function(event){
            event.preventDefault();
            //Declaration
            var token = $('#token').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            affected_row=$(this);
            id=$(this).attr('id');
            $.ajax({
                type: "DELETE",
                url: '/category/'+ id, //resource
                data:   { _token :token },
                success: function(affectedRows) { 
                    affected_row.parent().parent().remove();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
        // deleteRow($('.delete').attr('id'));
        // alert();

    });
</script>
@endsection


    