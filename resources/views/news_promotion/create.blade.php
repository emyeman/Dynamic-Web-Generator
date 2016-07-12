@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')

<h2><div class='col-lg-1 col-ms-1'>
    @if($type=='promotion')
        <a href="{{url('/news_promotion/promotion')}}"><span class="glyphicon glyphicon-backward"></span></a>
     @else
        <a href="{{url('/news_promotion/news')}}"><span class="glyphicon glyphicon-backward"></span></a>
     @endif  
</div></small></h2>

    <h2 class='page-header'>
        @if($type=='promotion')
            Add New Promotion
        @else
            Add New News
        @endif
    </h2>
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
    {!!Form::open(['route'=>'news_promotion.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>English Title *</label>
            <div class='col-md-10'>
                <input placeholder='title...' class='form-control required' name='title' type='text' value="{{old('title')}}"/>
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Arabic Title *</label>
            <div class='col-md-10'>
                <input placeholder='title...' class='form-control required' name='ar_title' type='text' value="{{old('ar_title')}}"/>
            </div>
        </div> 

        <input type='hidden' value="{{$type}}" name='type'>
        <div class='form-group'>
            <label class='col-md-2'>Image *</label>
            <div class='col-md-10'>
                <input class='form-control required' name='image' type='file' />
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>English Description *</label>
            <div class='col-md-10'>
                <textarea placeholder='description...' class='form-control required' name='description'  rows="4" style='resize: none;'>{{old('description')}}</textarea>
            </div>
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description *</label>
            <div class='col-md-10'>
                <textarea placeholder='description...' class='form-control required' name='ar_description'  rows="4" style='resize: none;'>{{old('ar_description')}}</textarea>
            </div>
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Start Date *</label>
            <div class='col-md-10'>
                <input type='text' style='position: absolute; z-index: 5;' name='start_date' class='form-control required' value="{{date('Y-m-d')}}">
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>End Date *</label>
            <div class='col-md-10'>
                <input type='text' style='position: absolute; z-index: 5;' name='end_date' class='form-control required' value="<?= date('Y-m-d');?>">
            </div>
        </div>   
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
    {!! Html::style('assets/css/jquery-ui.min.css') !!}
    {!! Html::script('assets/js/jquery-ui.min.js') !!}
   <script>

    $( "[name=end_date]" ).datepicker({dateFormat: "yy-mm-dd"});
    $( "[name=start_date]" ).datepicker({dateFormat: "yy-mm-dd"});
  </script>

@endsection