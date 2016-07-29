@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
{{--     <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/service')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small></h2>
    <h2 class='page-header'>Add New Service</h2>
    <br><br>
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
    <br/>

    {!!Form::open(['route'=>'service.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>English Tilte* </label>
            <div class='col-md-10 input-group'>
            <input placeholder='title ...' class='form-control title_service' id='title_service' name='title' type='text' value="{{old('title')}}"/>
            </div>
            <span id="title_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This service already exists</span>            
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Arabic Tilte* </label>
            <div class='col-md-10 input-group'>
            <input placeholder='title ...' class='form-control' name='ar_title' type='text' value="{{old('ar_title')}}"/>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Icon* </label>
            <div class='col-md-10 input-group'>
                <button class="btn btn-default form-control" name="icon" role="iconpicker"></button>
            </div>
        </div> 

        <div class='form-group'>
            <label class='col-md-2'>English Description* </label>
            <div class='col-md-10 input-group'>                
                <!-- <input placeholder='PlZ,enter description' class='form-control'name='description' type='text' />--> 
                <textarea placeholder='description ...' class='form-control' name='description'>{{old('description')}}</textarea> 

            </div>
        </div>      

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description* </label>
            <div class='col-md-10 input-group'>                
                <!-- <input placeholder='PlZ,enter description' class='form-control'name='description' type='text' />--> 
                <textarea placeholder='description ...' class='form-control' name='ar_description'>{{old('ar_description')}}</textarea> 

            </div>
        </div>    

        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value="ADD" />
    {!!Form::close() !!} --}}








        <section class="content">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
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
            <!-- /.box-header -->
            @if(Session::has('insert_success'))
             <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
            @endif
            <div class="box-body">
       {!!Form::open(['route'=>'service.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
                <!-- text input -->
                <div class="form-group">

    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>English Title</label>
      <input type="text" id='title_service' class="form-control title_service" name='title' placeholder="" value="{{old('title')}}">
      </div>
    </div>  

    <div class="row">
      <div class="col-md-5 col-md-offset-1 ">
      <label>Arabic Title</label>
      <input type="text" class="form-control" name='ar_title' placeholder="" value="{{old('ar_title')}}">
      </div>
    </div>  

    <div class="row" style="margin-top:15px;">
        <div class="col-md-5 col-md-offset-1 ">
            <label>Icon</label>
            <button class="btn btn-default form-control" name="icon" role="iconpicker"></button>
        </div>
    </div>    

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>English Description</label>
        <textarea placeholder='description...' class='form-control' name='description'  rows="4" style='resize: none;'>{{old('description')}}</textarea>
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>Arabic Description</label>
       <textarea placeholder='description...' class='form-control' name='ar_description'  rows="4" style='resize: none;'>{{old('ar_description')}}</textarea>
      </div>
    </div>

        <div class="box-footer clearfix col-md-5 col-md-offset-1">
            <div class="input-group-btn">
                <input type='submit' class='btn btn-primary btn-flat pull-right' name='ok' value='Add' />
            </div>
        </div>
            {!!Form::close() !!}
             </div>
            </div>
        </div>
        </section>


<meta name="_token" id='token' content="{!! csrf_token() !!}"/>
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('.title_service').on('blur',function(event) {            
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
        
        $.get("{{url('/service/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_service').focus();
               $('.title_service').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>

@endsection


    