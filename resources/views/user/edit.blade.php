@extends('layouts.app')

@section('content')
    <h2 class='page-header'>Edit User</h2>
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
    {!!Form::open(['route'=>['user.update', Auth::user()->id ],'method'=>'patch','files'=>true,'class'=>'form-horizontal']) !!}
    {{ method_field('patch') }}
        <div class='form-group'>
            <label class='col-md-2'>Name</label>
            <div class='col-md-7 input-group'>                               
                <input value='{{ $user->name }}' class='form-control' name='name' type='text'/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Email</label>
            <div class='col-md-7 input-group'>                
                    <input value='{{ $user->email }}' class='form-control' name='email' type='text'/>
            </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>Mobile</label>
            <div class='col-md-7 input-group'>                
                    <input value='{{ $user->mobile }}' class='form-control' name='mobile' type='text'/>
            </div>
        </div>
        <img id="profile" class="col-md-offset-3" src="{{ Auth::user()->image }}" width='300px' height='300px'>
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-7 input-group'>
                <input class='form-control' id="image" type="file" name="image">
            </div>
        </div>
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-7 btn btn-primary' name='ok' value='EDIT' />
    {!!Form::close() !!}
@endsection


    
