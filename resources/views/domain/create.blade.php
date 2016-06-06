@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Domain</h2>
      <br><br>
      {!!Form::open(['route'=>'domain.store','method'=>'post']) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Domain Name:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your address' class='form-control' name='domain_name' type='text'/>
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


    