@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <h2 class='page-header'>
        Add New Menu
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
    @if(Session::has('insert_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
    @endif
    {!!Form::open(['route'=>'menu.store','method'=>'post','class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>Title*</label>
            <div class='col-md-10 input-group'>
                <input placeholder='title...' class='form-control' name='title' type='text' value="{{old('title')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Parent</label>
            <div class='col-md-10 input-group'>
                {!! Form::select('parent_id', $menus, old('parent_id'), ['class' => 'form-control','placeholder' => 'Pick a menu..']) !!}
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Page*</label>
            <div class='col-md-10 input-group'>
                {!! Form::select('route', $pages, old('route'), ['class' => 'form-control','placeholder' => 'Pick a page..']) !!}
            </div>
        </div>    
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
@endsection