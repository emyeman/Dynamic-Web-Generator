@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Style Container</h2>
      <br><br>
      {!!Form::open(['route'=>'stylecontainer.store','method'=>'post']) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Select Type Style Container:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control'>
                    <option value="parent">Select Style Container</option>
                    <option value="parent">fill</option>
                    <option value="parent">Center</option>
                </select>           
             </div>
        </div>
        <div class='form-group has-warning'>
            <label class='col-md-2'>Select Primary Button Color</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control'>
                    <option value="parent">Primary</option>
                    <option value="parent">ex.blue</option>
                </select>           
             </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Select Secondary Button Color</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control'>
                    <option value="parent">Secondary</option>
                    <option value="parent">ex.orange</option>
                </select>           
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


    