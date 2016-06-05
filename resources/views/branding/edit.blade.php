@extends('layouts.app')

@section('content')
<div class="container">

    @include('../header')

    <div class="col-sm-9">
        <h2>Edit your Branding</h2>
        <br><br>
        {!!Form::model($branding, ['route'=>array('branding.update', $branding->id),'method'=>'put', 'files'=>true]) !!}
        {!! csrf_field() !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Company Name</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter company name' class='form-control' name='companyname' type='text' value="{{ $branding['company_name'] }}"/>
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
                <input placeholder='PlZ,enter Slogan' class='form-control' name='slogan' type='text' value="{{ $branding['slogan'] }}" />
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='edit' />
        {!!Form::close() !!}


        <br><br>
        <br><br>
    </div><!--end leftsideof from-->

    <br/><br/><hr/><hr/>



</div>
@endsection


