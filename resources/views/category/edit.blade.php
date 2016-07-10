@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
      <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/category')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div></small>Edit Category</h2> 
        <h2 class='page-header'>Edit Category</h2>
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
    {!!Form::open(['route'=>['category.update',$category->id],'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>English Title* </label>
            <div class='col-md-10 input-group'>                
                <input class='form-control' name='title_category' type='text' value='{{$category->name}}'/>
            </div>
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Arabic Title* </label>
            <div class='col-md-10 input-group'>                
                <input class='form-control' name='ar_title_category' type='text' value='{{$category->ar_name}}'/>
            </div>
        </div>

        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="{{url('/assets/images/'.$category->image)}}"></div>          
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>
                <!-- <label class='form-control'>{{$category->image}}</label> -->
                <input class='form-control' name='image_category' type='file' />
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>English Description</label>
            <div class='col-md-10 input-group'>                
                <textarea  class='form-control' name='description'>{{$category->description}}</textarea> 
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Arabic Description</label>
            <div class='col-md-10 input-group'>                
                <textarea  class='form-control' name='ar_description'>{{$category->ar_description}}</textarea> 
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {!!Form::close() !!}
@endsection
 


    