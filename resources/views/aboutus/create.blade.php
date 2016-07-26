@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
    <h2 class='page-header'>Aboutus</h2>
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
    {!!Form::open(['route'=>'aboutus.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>English Description*</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='description'  rows="15" style='resize: none;'>{{old('description')}}</textarea>
            </div>
        </div> 

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description*</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='ar_description'  rows="15" style='resize: none;'>{{old('ar_description')}}</textarea>
            </div>
        </div> 
       
        <div class='form-group'>
            <label class='col-md-2'>Image*</label>
            <div class='col-md-10 input-group'>
                <input class='form-control' name='image' type='file' />
            </div>
        </div> 
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
@endsection


    