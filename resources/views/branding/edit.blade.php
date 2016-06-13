@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
        <h2 class='page-header'>Edit your Branding</h2>
        <br><br>
        {!!Form::model($branding, ['route'=>array('branding.update', $branding->id),'method'=>'put', 'files'=>true,'class'=>'form-horizontal']) !!}
        {!! csrf_field() !!}
            <div class='form-group'>
                <label class='col-md-2'>Company Name</label>
                <div class='col-md-10 input-group'>               
                    <input placeholder='company name ...' class='form-control' name='companyname' type='text' value="{{ $branding['company_name'] }}"/>
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
                    <input placeholder='slogan ...' class='form-control' name='slogan' type='text' value="{{ $branding['slogan'] }}" />
                </div>
            </div>      
            <span class='col-md-2'></span>
            <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
        {!!Form::close() !!}
@endsection


