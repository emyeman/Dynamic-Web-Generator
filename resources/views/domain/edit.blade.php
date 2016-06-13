@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
  <h2>Edit Domain</h2>
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
  {!!Form::open(['route'=>['domain.update',$domain->id,'class'=>'form-horizontal' ],'method'=>'patch']) !!}
  {{ method_field('patch') }}
    <div class='form-group has-warning'>
        <label class='col-md-2'>Domain Name</label>
        <div class='col-md-10 input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
            <input value='{{$domain->Domain_name}}' class='form-control' name='domain_name' type='text'/>
        </div>
    </div>    
    <span class='col-md-2'></span>
    <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='Update' />
  {!!Form::close() !!}

@endsection


    