@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Categories
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        @foreach ($categories as $category) 
            @if (Auth::user()->id == $category->site_id)
                @if($category->category_id ==NULL)
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#">
                                <img class="img-responsive" width="500" height="30" src="/assets/images/{{$category->image}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <h3><label >Title Category:</label>{{$category->name}}<br/>
                            <label >Description:</label>{{$category->description}}</h3>
                             <h4><label >Publish At:</label>{{$category->created_at}}</h4>
                            <a class="btn btn-primary" href="/category/{{$category->id}}/edit" >Edit Category</a><span class="glyphicon glyphicon-chevron-right"></span>
                            <?php $flage_relation=0 ?>
                            @foreach ($categories as $del_category)
                                @if($category->id==$del_category->category_id)
                                    <?php $flage_relation=1 ?>
                                @endif    
                            @endforeach

                            @if($flage_relation==1)
                                <span class="btn btn-danger disabled" > Remove Category </span><span class="glyphicon glyphicon-remove disabled"></span>
                            @endif
                            @if($flage_relation==0)
                                <a  class="btn btn-danger" href="/category/destroy/{{$category->id}}">Remove Category</a><span class="glyphicon glyphicon-remove"></span>

                                <!-- use ajax for remove -->
                                <!-- <a id="{{$category->id}}" class="btn btn-danger remove">Remove Category</a><span class="glyphicon glyphicon-remove"></span> -->
                            @endif
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr/>
                @endif
            @endif
        @endforeach


        <div  id="alldata"></div>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>


 </div>
<!-- <meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src='/assets/js/jquery-2.1.4.min.js'></script>
<script type="text/javascript" src='/assets/js/jquery-1.12.0.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        
    console.log('hiiiiiii');
    draw_table();
    //display all data in table in div in browser
    function draw_table() {
        event.preventDefault();
            console.log("show");
            //Declaration
            // var token = $('#token').attr('content');
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
        $.ajax({
            url: '/category',
            type: 'GET',
            dataType: 'html',
            // data:   { _token :token },
            success:function(response)
            {
                console.log('okkkkkkkkk');
                console.log(response);
            },
            error:function() {
                console.log('error: onn responser');
            }
        
        });     
    }

        $('.remove').on('click',function(event){
            event.preventDefault();
            console.log("remove");
            //Declaration
            var token = $('#token').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            console.log($(this));
            id=$(this).attr('id');
            console.log(id);
             $.ajax({
                // type: "POST",
                type: "DELETE",
                url:'/category/'+ id, //resource
                data:   { _token :token },
                // dataType: 'json',
                success: function(response) {
                    console.log(response);
                    $(this).parent().parent().remove();
                    console.log('sucessful');
                    draw_table();
                },
                error: function (response) {
                    console.log(response);
                    console.log("fail remove category");
                }
            });
           
        });
        // deleteRow($('.delete').attr('id'));
        // alert();

    });
</script>
 -->
@endsection

    