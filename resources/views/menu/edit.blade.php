@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsectio

@section('content')
    <h2 class='page-header'>Edit Menu</h2>
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
    {{Form::model($row,['route'=>['menu.update',$row->id],'method'=>'put','class'=>'form-horizontal']) }}
        <div class='form-group'>
            <label class='col-md-2'>English Title*</label>
            <div class='col-md-10 input-group'>
                {{Form::text('title', old('title') ,['class'=>'col-ms-2 form-control'])}}
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Arabic Title*</label>
            <div class='col-md-10 input-group'>
                {{Form::text('ar_title', old('ar_title') ,['class'=>'col-ms-2 form-control'])}}
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
                {!! Form::select('route', $pages, old('route'), ['class' => 'form-control']) !!}
            </div>
        </div>    
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {{Form::close() }}
@endsection


    