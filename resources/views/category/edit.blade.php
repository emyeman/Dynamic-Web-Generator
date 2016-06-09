@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/category')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div></small>Edit Category</h2>
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
    {!!Form::open(['route'=>['category.update',$category->id],'files'=>true,'method'=>'put']) !!}
      <div class='form-group has-warning'>
            <label class='col-md-2'>Title Category</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input class='form-control' name='title_category' type='text' value='{{$category->name}}'/>
            </div>
        </div>

        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="{{url('/assets/images/'.$category->image)}}"></div>          
        <div class='form-group has-warning'>
            <label class='col-md-2'>Category Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <label class='form-control'>{{$category->image}}</label>
                <input class='form-control' name='image_category' type='file' />
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <textarea  class='form-control' name='description'>{{$category->description}}</textarea> 
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='Edit' />
    {!!Form::close() !!}

      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>


 </div>
@endsection
 


    