@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Categories
                    <small>
                    <!-- <i>Hello current_user</i> -->
                    <div class='col-lg-offset-11 col-ms-1'>
                        <a href="{{url('/category/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
                    </div></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        @foreach ($categories as $category) 
            @if (Auth::user()->id == $category->site_id)
                @if($category->category_id ==NULL)
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#">
                                <img width="400" height="30" src="{{url('/assets/images/'.$category->image)}}" />
                            </a>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-8">
                            <h3><label >Title Category:</label>{{$category->name}}<br/>
                            <label >Description:</label>{{substr($category->description,0,100)}}</h3>
                            <!-- <label >Description:</label>{{$category->description}}</h3> -->
                             <h4><label >Publish At:</label>{{$category->created_at}}</h4>
                            <a class="btn btn-primary" href="{{url('/category/'.$category->id.'/edit')}}" >Edit Category  <span class="glyphicon glyphicon-edit"></span></a>
                            <?php $flage_relation=0 ?>
                            @foreach ($categories as $del_category)
                                @if($category->id==$del_category->category_id)
                                    <?php $flage_relation=1 ?>
                                @endif    
                            @endforeach

                            @if($flage_relation==1)
                                <span class="btn btn-danger disabled" > Remove Category  <span class="glyphicon glyphicon-remove disabled"></span></span>
                            @endif
                            @if($flage_relation==0)
                                <!-- <a  class="btn btn-danger" href="/category/destroy/{{$category->id}}">Remove Category <span class="glyphicon glyphicon-remove"></span></a> -->

                                <!-- use ajax for remove -->
                                <a id="{{$category->id}}" class="btn btn-danger delete">Remove Category <span class="glyphicon glyphicon-remove"></span></a>
                            @endif
                            <hr/>
                        </div>
                    </div>
                    <!-- /.row -->
                     <!-- <hr/> -->
                @endif
            @endif
        @endforeach


        <div  id="alldata"></div>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>


 </div>
<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
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
            del_category=$(this);
            id=$(this).attr('id');
            $.ajax({
                type: "DELETE",
                url: "{{url('/category/')}}/"+ id, //resource
                data:   { _token :token },
                success: function(del_categories) { 
                    del_category.parent().parent().remove();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });

    });
</script>

@endsection

    