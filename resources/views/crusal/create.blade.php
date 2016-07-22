@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/crusal')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small></h2>

    <h2 class='page-header'>Add Image to Crusal</h2>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <br><br>
    
    @if(Session::has('insert_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
    @endif
    {!!Form::open(['route'=>'crusal.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>English Title</label>
            <div class='col-md-10 input-group'>
                <input placeholder='title...' class='form-control title_crusal' id='title_crusal' name='title' type='text' value="{{old('title')}}"/>
            </div>
            <span id="title_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This crusal already exists</span>            
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Arabic Title</label>
            <div class='col-md-10 input-group'>
                <input placeholder='title...' class='form-control' name='ar_title' type='text' value="{{old('ar_title')}}"/>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>English Description</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='description'  rows="4" style='resize: none;'>{{old('description')}}</textarea>
            </div>
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='ar_description'  rows="4" style='resize: none;'>{{old('ar_description')}}</textarea>
            </div>
        </div>


        <div class='form-group'>
            <label class='col-md-2'>Image*</label>
            <div class='col-md-10 input-group'>
                <input class='form-control' name='image' type='file' />
            </div>
        </div>    
        <input type='submit' class='col-md-offset-2 col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}

<meta name="_token" id='token' content="{!! csrf_token() !!}"/>
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('#title_crusal').on('blur',function(event) {            
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
        
        $.get("{{url('/crusal/is_exit/')}}"+title,function(data){
            console.log(data[0]);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_crusal').focus();
               $('.title_crusal').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
        
        });
    });

  </script>

@endsection


    