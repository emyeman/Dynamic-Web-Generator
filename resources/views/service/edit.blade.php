@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <h2 class='page-header'>Edit Service</h2>
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
    {!!Form::open(['route'=>['service.update', $service->id  ],'method'=>'patch','class'=>'form-horizontal']) !!}
        {{ method_field('patch') }}
        <div class='form-group'>
            <label class='col-md-2'>English Tilte *</label>
            <div class='col-md-10 input-group'>                
                <input value='{{$service->title}}' class='form-control' name='title' type='text'/>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Arabic Tilte *</label>
            <div class='col-md-10 input-group'>                
                <input value='{{$service->ar_title}}' class='form-control' name='ar_title' type='text'/>
            </div>
        </div>  

        
        <div class='form-group'>
            <label class='col-md-2'>Icon *</label>
            <div class='col-md-10 input-group'>                
                <button class="btn btn-default form-control" name="icon" role="iconpicker"></button>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>English Description *</label>
            <div class='col-md-10 input-group'>                
                <!-- <input value='{{$service->description}}' class='form-control'name='description' type='text' /> -->
                <textarea class='form-control' name='description'>{{$service->description}}</textarea> 

            </div>
        </div>   

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description *</label>
            <div class='col-md-10 input-group'>                
                <!-- <input value='{{$service->description}}' class='form-control'name='description' type='text' /> -->
                <textarea class='form-control' name='ar_description'>{{$service->ar_description}}</textarea> 

            </div>
        </div>   

        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {!!Form::close() !!}
@endsection


    