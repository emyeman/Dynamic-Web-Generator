@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')

    <h2 class='page-header'>Add New Branding</h2>
    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br><br>
    {!!Form::open(['route'=>'branding.store','method'=>'post', 'files'=>true ,'class'=>'form-horizontal']) !!}
    <div class='form-group'>
        <label class='col-md-2'>Company Name</label>
        <div class='col-md-10 input-group'>
            <input placeholder='company name ...' class='form-control' name='companyname' type='text' value="{{old('companyname')}}"/>
        </div>
    </div>  
    <div class='form-group'>
        <label class='col-md-2'>Logo</label>
        <div class='col-md-10 input-group'>
            {!! Form::file('image', ['class'=>'form-control']) !!}

        </div>
    </div>  
    <div class='form-group'>
        <label class='col-md-2'>Company Slogan</label>
        <div class='col-md-10 input-group'>
            <input placeholder='slogan ...' class='form-control' name='slogan' type='text' />
        </div>
    </div>      
    <span class='col-md-2'></span>
    <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
@endsection


