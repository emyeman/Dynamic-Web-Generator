@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        <div>
        <img src="{{url('assets/reseller_assets/images/12.png')}}" class="img-responsive"> 
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

    {!!Form::open(['route'=>'category.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}

     <div class="row">
    <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Title Category</h3>
            <!--   <div class="pull-right">
                <a href="{{url('/category')}}"><span class="glyphicon glyphicon-backward"></span></a>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label>English Title *</label>
                   <input placeholder='PLZ,enter english title ...' class='form-control title_category' name='title_category' id='title_category' type='text' value="{{old('title_category')}}"/>
                   <span id="title_err" style="color:red; size:12px; padding:10px 100px;font-weight:bold;background-color:lightpink;">This category already exists</span>
                </div>
                <div class="form-group col-md-12">
                  <label>Arabic Title *</label>
                <input placeholder='من فضلك ادخل اسم القسم' class='form-control' name='ar_title_category' type='text' value="{{old('ar_title_category')}}"/>
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
                    <input class='form-control' name='image_category' type='file' />
                    <!-- <button id="add-new-event" type="button" class="btn btn-info btn-flat pull-right form-control">Browse</button>   -->
               </div>
            </div>  
       </div>
        </div>
   
          
        <div class="col-md-5 col-xs-12 col-md-offset-1" >      
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">English Description
                <small>Write some words descriping this Categorie ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea placeholder="Place some text here" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='description'>{{old('description')}}</textarea>
            </div>
            </div>
            </div>
        <div class="col-md-5 col-xs-12 "> 
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Arabic Description
                <small>من فضلك ادخل وصف لهذا القسم ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea  placeholder="من فضلك ادخل الوصف" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"name='ar_description'>{{old('ar_description')}}</textarea>
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
                    <input type='submit' class='btn-flat pull-right form-control btn btn-primary' name='ok' value='ADD' />   
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
 </div>

 <meta name="_token" id='token' content="{!! csrf_token() !!}"/>
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('.title_category').on('blur',function(event) {            
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
        
        $.get("{{url('/category/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_category').focus();
               $('.title_category').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>       
@endsection

 


    