@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <h2><div class='col-lg-1 col-ms-1'>
        <a href="{{url('/category')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small> </h2>

    <h2 class='page-header'>Add New Category</h2>
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
      <div class='form-group'>
            <label class='col-md-2'>English Title *</label>
            <div class='col-md-10 input-group'>
                <input placeholder='PLZ,enter title ...' class='form-control title_category' name='title_category' id='title_category' type='text' value="{{old('title_category')}}"/>
            </div>
            <span id="title_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This category already exists</span>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Arabic Title *</label>
            <div class='col-md-10 input-group'>
                <input placeholder='من فضلك ادخل اسم القسم' class='form-control' name='ar_title_category' type='text' value="{{old('ar_title_category')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>
                <input class='form-control' name='image_category' type='file' />
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>English Description</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='PLZ,enter description ...' class='form-control' rows='5' name='description'>{{old('description')}}</textarea> 
            </div>
        </div> 

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='من فضلك ادخل الوصف' class='form-control' rows='5' name='ar_description'>{{old('ar_description')}}</textarea> 
            </div>
        </div> 

        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}

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

 


    