@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Products
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        @if (Auth::user()) 
            @foreach ($products as $product) 
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#">
                                <img class="img-responsive" width="500" height="30" src="/assets/images/{{$product->image}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <!-- for obtain name of category  -->
                            @foreach ($categories as $allcategory)
                                @if($allcategory->id==$product->category_id)
                                     @foreach ($categories as $category)
                                        @if($category->id==$allcategory->category_id)
                                            <h3><label >Title Category:</label>{{$category->name}}<br/>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            <!-- for obtain name of subcategory  -->
                            @foreach ($subcategories as $subcategory)
                                @if($subcategory->id == $product->category_id)
                                    <label >Title SubCategory:</label>{{$subcategory->name}}<br/>                              
                                @endif
                            @endforeach
            
                            <label >Title Product:</label>{{$product->name}}<br/>
                            <label >Description:</label>{{$product->description}}</h3>
                             <h4><label >Publish At:</label>{{$product->created_at}}</h4>
                            <a class="btn btn-primary" href="/product/{{$product->id}}/edit" >Edit Product</a><span class="glyphicon glyphicon-chevron-right"></span>

                            <a class="btn btn-danger" href="/product/destroy/{{$product->id}}">Remove Product</a><span class="glyphicon glyphicon-chevron-right"></span>
                        
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr/>
             @endforeach
         @endif     
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>
  <button class="getrequest" id="2">Get Product</button>

<div id='getrequestdata'></div>
  <br/>
 </div>
 <meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src='/assets/js/jquery-2.1.4.min.js'></script>
<script type="text/javascript" src='/assets/js/jquery-1.12.0.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
    console.log('hiiiiiii');
        $('.getrequest').click(function() {
            // alert($(this).text());
            
            category_id=$(this).attr('id');
           // console.log(id);

            $.get('/product/'+category_id,function(data){
                console.log(data);
                $('#getrequestdata').append(data);
            });
        });   


    });
</script>

@endsection

    