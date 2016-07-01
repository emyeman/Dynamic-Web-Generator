@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <h2><div class='col-lg-1 col-ms-1'>
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
            <label class='col-md-2'>Tilte* </label>
            <div class='col-md-10 input-group'>
            <input placeholder='title ...' class='form-control' name='title' type='text' value="{{old('title')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Icon* </label>
            <div class='col-md-10 input-group'>
                <button class="btn btn-default form-control" name="icon" role="iconpicker"></button>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Description* </label>
            <div class='col-md-10 input-group'>                
                <!-- <input placeholder='PlZ,enter description' class='form-control'name='description' type='text' />--> 
                <textarea placeholder='description ...' class='form-control' name='description'>{{old('description')}}</textarea> 

            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value="ADD" />
    {!!Form::close() !!}
@endsection


    