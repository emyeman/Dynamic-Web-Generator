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
        <label class='col-md-2'>English Company Name</label>
        <div class='col-md-10 input-group'>
            <input placeholder='company name ...' class='form-control' name='company_name' type='text' value="{{old('company_name')}}"/>
        </div>
    </div>

    <div class='form-group'>
        <label class='col-md-2'>Arabic Company Name</label>
        <div class='col-md-10 input-group'>
            <input placeholder='company name ...' class='form-control' name='ar_company_name' type='text' value="{{old('ar_company_name')}}"/>
        </div>
    </div>  

    <div class='form-group'>
        <label class='col-md-2'>Logo</label>
        <div class='col-md-10 input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <label class="btn btn-default btn-file">
                    Browse <input id="image" type="file" name="logo" style="display: none;">
                </label>  
        </div>
    </div>  

    <div class='form-group'>
        <label class='col-md-2'>English Company Slogan</label>
        <div class='col-md-10 input-group'>
            <input placeholder='slogan ...' class='form-control' name='slogan' type='text' />
        </div>
    </div>

    <div class='form-group'>
        <label class='col-md-2'>Arabic Company Slogan</label>
        <div class='col-md-10 input-group'>
            <input placeholder='slogan ...' class='form-control' name='ar_slogan' type='text' />
        </div>
    </div>


    <span class='col-md-2'></span>
    <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
@endsection


