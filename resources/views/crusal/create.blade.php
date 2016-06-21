@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')

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
            <label class='col-md-2'>Title</label>
            <div class='col-md-10 input-group'>
                <input placeholder='title...' class='form-control' name='title' type='text' value="{{old('title')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='description'  rows="4" style='resize: none;'>{{old('description')}}</textarea>
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

@endsection


    