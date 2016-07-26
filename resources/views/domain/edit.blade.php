@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
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
    <input type='submit' class='col-md-1 btn btn-primary' name='ok' value='Update' style="margin:10px 10px;" />
  {!!Form::close() !!}

@endsection


    