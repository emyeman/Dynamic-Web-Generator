@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
    <h2>
        Add Image to Crusal
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
      {!!Form::open(['route'=>'crusal.store','method'=>'post','files'=>true]) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Title</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='title...' class='form-control' name='title' type='text'/>
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='description'  rows="4" style='resize: none;'></textarea>
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <input class='form-control' name='image' type='file' />
            </div>
        </div>    
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='ADD' />
    {!!Form::close() !!}


      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection


    