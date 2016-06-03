@extends('layouts.app')

@section('content')

<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Service</h2>
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
      {!!Form::open(['route'=>'service.store','method'=>'post','files'=>true]) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Service Tilte</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
            <input placeholder='PlZ,enter title service' class='form-control' name='title' type='text'/>
            </div>
        </div>  

         <div class='form-group has-warning'>
            <label class='col-md-2'>Service Icon</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <button class="btn btn-default form-control" name="icon" role="iconpicker"></button>
            </div>
        </div>  


        <div class='form-group has-warning'>
            <label class='col-md-2'>Service Description</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <!-- <input placeholder='PlZ,enter description' class='form-control'name='description' type='text' />--> 
                <textarea placeholder='PlZ,enter description' class='form-control' name='description'></textarea> 

            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='add' />


    {!!Form::close() !!}

      <br><br>
      <br><br>
</div><!--end leftsideof from-->
 <br/><br/><hr/><hr/>
</div>
@endsection


    