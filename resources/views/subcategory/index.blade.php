@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show SubCategories
                    <small>
                    <!-- <i>Hello current_user</i> -->
                    <div class='col-lg-offset-11 col-ms-1'>
                        <a href='/subcategory/create'><span class="glyphicon glyphicon-plus"></span></a>
                    </div></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        @foreach ($subcategories as $subcategory) 
            @if (Auth::user()->id == $subcategory->site_id)
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#">
                                <img width="400px" height="30px" src="/assets/images/{{$subcategory->image}}" />
                            </a>
                            <!-- <hr/> -->
                        </div>
                        <div class="col-md-7">
                            <!-- for obtain name of category  -->
                            @foreach ($categories as $category)
                                @if($category->id==$subcategory->category_id)
                                    <h3><label >Title Category:</label>{{$category->name}}<br/>
                                @endif
                            @endforeach
                            
                            <label >Title SubCategory:</label>{{$subcategory->name}}<br/>
                            <label >Description:</label>{{substr($subcategory->description,0,100)}}</h3>
                            <!-- <label >Description:</label>{{$subcategory->description}}</h3> -->
                             <h4><label >Publish At:</label>{{$subcategory->created_at}}</h4>
                            <a class="btn btn-primary" href="/subcategory/{{$subcategory->id}}/edit" >Edit SubCategory<span class="glyphicon glyphicon-edit"></span></a>

                            <?php $flage_relation=0 ?>
                            @foreach ($products as $product)
                                @if($subcategory->id==$product->category_id)
                                    <?php $flage_relation=1 ?>
                                @endif    
                            @endforeach

                            @if($flage_relation==1)
                                <span class="btn btn-danger disabled" > Remove SubCategory  <span class="glyphicon glyphicon-remove disabled"></span></span>
                            @endif
                            @if($flage_relation==0)
                            <!-- <a class="btn btn-danger" href="/subcategory/destroy/{{$subcategory->id}}">Remove SubCategory <span class="glyphicon glyphicon-remove"></span></a> -->

                                <!-- use ajax for remove -->
                                 <a id="{{$subcategory->id}}" class="btn btn-danger delete">Remove Category<span class="glyphicon glyphicon-remove"></span> </a>
                            @endif

                             <hr/>
                        </div>

                    </div>
                    <!-- /.row -->
                    <!-- <hr/> -->
            @endif
        @endforeach
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
            del_subcategory=$(this);
            id=$(this).attr('id');
            $.ajax({
                type: "DELETE",
                url: '/subcategory/'+ id, //resource
                data:   { _token :token },
                success: function(del_subcategories) { 
                    del_subcategory.parent().parent().remove();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });

    });
</script>
@endsection

    