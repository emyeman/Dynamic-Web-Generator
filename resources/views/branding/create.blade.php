@extends('layouts.app')

@section('content')
<div class="container">

    @include('../header')

    <div class="col-sm-9">
        <h2>Add New Branding</h2>
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
        {!!Form::open(['route'=>'branding.store','method'=>'post', 'files'=>true ]) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Company Name</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter company name' class='form-control' name='companyname' type='text'/>
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Logo</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                {!! Form::file('image', ['class'=>'form-control']) !!}

            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Company Slogan</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <input placeholder='PlZ,enter Slogan' class='form-control' name='slogan' type='text' />
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


