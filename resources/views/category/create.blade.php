@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <!-- <h2><div class='col-lg-1 col-ms-1'>
        <a href="{{url('/category')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small>Add New Category</h2> -->
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
    <br><br>
    {!!Form::open(['route'=>'category.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}
      <div class='form-group'>
            <label class='col-md-2'>Title *</label>
            <div class='col-md-10 input-group'>
                <input placeholder='title ...' class='form-control' name='title_category' type='text' value="{{old('title_category')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>
                <input class='form-control' name='image_category' type='file' />
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description ...' class='form-control' rows='5' name='description'>{{old('description')}}</textarea> 
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
@endsection
 


    