@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')


<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Products
                    <small>
                    <!-- <i>Hello current_user</i> -->
                    <div class='col-lg-offset-11 col-ms-1'>
                        <a href="{{url('/product/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
                    </div></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        @if (Auth::user()) 
            @foreach ($products as $product) 
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#">
                                <img width="400" height="30" src="{{url('/assets/images/'.$product->image)}}"/>
                            </a>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-8">
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
                            <label >Description:</label>{{substr($product->description,0,100)}}<br/>
                            <!-- <label >Description:</label>{{$product->description}}</h3> -->
                            <label >Price Product:</label>{{$product->price}} LE</h3>
                             <h4><label >Publish At:</label>{{$product->created_at}}</h4>
                            <a class="btn btn-primary" href="{{url('/product/'.$product->id.'/edit')}}" >Edit Product <span class="glyphicon glyphicon-edit"></span></a>
                            <!-- <a class="btn btn-danger" href="/product/destroy/{{$product->id}}">Remove Product <span class="glyphicon glyphicon-remove"></span></a> -->
                             
                                <!-- use ajax for remove -->
                            <a id="{{$product->id}}" class="btn btn-danger delete">Remove Product<span class="glyphicon glyphicon-remove"></span> </a>
                           <hr/>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- <hr/> -->
             @endforeach
         @endif     
</div><!--end leftsideof from-->

  
 </div>

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
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
            del_product=$(this);
            id=$(this).attr('id');
            $.ajax({
                type: "DELETE",
                url: "{{url('/product/')}}/"+ id, //resource
                data:   { _token :token },
                success: function(del_products) { 
                    del_product.parent().parent().remove();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });

    });
</script>
@endsection

    
// for check about product aleary exit or not
    $('.title_product').on('blur',function(event) {            
        event.preventDefault();
        // alert($(this).text());
        console.log("emy");
        
        console.log($(this));
        title=$(this).val();
        console.log(title);
        
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.get("{{url('/product/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_product').focus();
               $('.title_product').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
    });  //end get title and check product aleary exit or not