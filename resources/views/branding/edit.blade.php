@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
        <h2 class='page-header'>Edit your Branding</h2>
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
      {!!Form::open(['route'=>['branding.update', $header->id],'method'=>'patch','files'=>true,'class'=>'form-horizontal']) !!}
        {{ method_field('patch') }}
            <div class='form-group'>
                <label class='col-md-2'>Company Name</label>
                <div class='col-md-10 input-group'>               
                    <input placeholder='company name ...' class='form-control' name='company_name' type='text' value="{{ $header['company_name'] }}"/>
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
                <label class='col-md-2'>Company Slogan</label>
                <div class='col-md-10 input-group'>                
                    <input placeholder='slogan ...' class='form-control' name='slogan' type='text' value="{{ $header['slogan'] }}" />
                </div>
            </div>      
            <span class='col-md-2'></span>
            <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
        {!!Form::close() !!}
@endsection


