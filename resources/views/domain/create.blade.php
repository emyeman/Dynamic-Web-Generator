@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
  <h2>Add New Domain</h2>
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

  {!!Form::open(['route'=>'domain.store','method'=>'post','class'=>'form-horizontal']) !!}
    <div class='form-group'>
        <label class='col-md-2'>Domain Name</label>
        <div class='col-md-10 input-group'>
            <input placeholder='domain name ...' class='form-control' name='domain_name' type='text' value="{{old('domain_name')}}"/>
        </div>
    </div>    
    <span class='col-md-2'></span>
    <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
  {!!Form::close() !!}
@endsection


    