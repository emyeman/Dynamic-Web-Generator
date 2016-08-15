@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
    <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/9a.png')}}" class="img-responsive">    
        </div>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    @if(Session::has('insert_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
    @endif
    
    <br>
    {!!Form::open(['route'=>'subcategory.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}
      
     <div class="row">
    <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Category Name</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >Choose Category</label>
                  <select class='form-control'id='category_id' name='category_id' >
                    <option value="">choose a category</option>
                    @foreach ($subcategories as $subcategory) 

                        
                            @if($subcategory->category_id == NULL)
                                <option  value="{{$subcategory->id}}">{{$subcategory->name}} &nbsp; &nbsp;{{$subcategory->ar_name}}</option>
                            @endif
                        

                    @endforeach    
                </select> 

                </div>
            </div>
        </div>
        </div>

     <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Title Sub Category</h3>
            <!--   <div class="pull-right">
                <a href="{{url('/subcategory')}}"><span class="glyphicon glyphicon-backward"></span></a>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >English Title *</label>
                   <input placeholder='PLZ,enter english title ...' class='form-control title_subcategory' name='title_subcategory' id='title_subcategory' type='text' value="{{old('title_subcategory')}}"/>
                   <span id="title_err" style="color:red; size:12px; padding:10px 100px;font-weight:bold;background-color:lightpink;">This sub category already exists</span>
                </div>
                <div class="form-group col-md-12">
                  <label>Arabic Title *</label>
                  <input placeholder='من فضلك ادخل اسم القسم الفرعى' class='form-control' name='ar_title_subcategory' type='text' value="{{old('ar_title_subcategory')}}"/>
                </div>
            </div>
        </div>
        </div>
    
    <div class="col-md-10 col-md-offset-1" >
        <div class="box">
            <div class="box-header with-border">
             <center> <h3 class="box-title">Choose Picture</h3></center>
            </div>
            <!-- <div class="box-body">
             <center><img src="image/11.jpg" class="img-responsive" alt="brand"></center>
            </div> -->
            <div class="box-footer clearfix">
               <div class="input-group-btn col-md-offset-1">
                    <input class='form-control' name='image_subcategory' type='file' />
                    <!-- <button id="add-new-event" type="button" class="btn btn-info btn-flat pull-right form-control">Browse</button>   -->
               </div>
            </div>  
       </div>
        </div>
   
        <div class="col-md-5 col-xs-12 col-md-offset-1" >      
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">English Description
                <small>Write some words descriping this Sub Categorie ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea placeholder="Place some text here" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='subdescription'>{{old('subdescription')}}</textarea>
            </div>
            </div>
            </div>
        <div class="col-md-5 col-xs-12 "> 
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Arabic Description
                <small>من فضلك ادخل وصف لهذا القسم الفرعى ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea placeholder="من فضلك ادخل الوصف" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"name='ar_subdescription'>{{old('ar_subdescription')}}</textarea>
            </div>
            </div>               
          <!-- /.box --> 
     </div>
        <!-- <span class='col-md-2'></span> col-xs-8 -->
     <div class="col-md-10 col-md-offset-1">       
         <div class="box">
            <div class="box-header">
                <div class="box-footer clearfix">
                <div class="input-group-btn">
               <div class="row">
               <div class="col-md-4">
                 <a href="{{url('/subcategory')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:250px;"></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type='submit' class='pull-right btn btn-primary ' name='ok' value='ADD' style="width:250px;"/>   
                 </div>
                 </div>  
            </div>
            </div>
            </div>
          <!-- /.box --> 
     </div>
       
     </div>
     </div>
      
 {!!Form::close() !!}
    
        <!-- /.col -->
        </section>
        <!-- /.content -->
</div>  

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('.title_subcategory').on('blur',function(event) {            
        event.preventDefault();
        // alert($(this).text());
        console.log("emy");
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        console.log($(this));
        title=$(this).val();
        console.log(title);
        
        $.get("{{url('/subcategory/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_subcategory').focus();
               $('.title_subcategory').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>

@endsection


    