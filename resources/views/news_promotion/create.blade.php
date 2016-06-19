@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')

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

    <br><br>
    {!!Form::open(['route'=>'news_promotion.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>Title *</label>
            <div class='col-md-10'>
                <input placeholder='title...' class='form-control required' name='title' type='text' value="{{old('title')}}"/>
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
            <label class='col-md-2'>Description *</label>
            <div class='col-md-10'>
                <textarea placeholder='description...' class='form-control required' name='description'  rows="4" style='resize: none;'>{{old('description')}}</textarea>
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