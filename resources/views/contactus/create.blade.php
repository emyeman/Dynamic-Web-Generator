@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Contact Us</h2>
      <br><br>
      {!!Form::open(['route'=>'contactus.store','method'=>'post']) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Address:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your address' class='form-control' name='address' type='text'/>
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Phone:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your phone' class='form-control' name='phone' type='text'/>
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Mobile:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your mobile' class='form-control' name='mobile' type='text'/>
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>E-mail:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your e-mail' class='form-control' name='email' type='text'/>
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Fax:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your fax' class='form-control' name='fax' type='text'/>
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


    