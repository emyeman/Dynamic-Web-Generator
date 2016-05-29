@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Number View</h2>
      <br><br>
      {!!Form::open(['route'=>'numberview.store','method'=>'post']) !!}
        <div class='form-group has-warning'>
          <label class='col-md-2'>Select Page Name</label>
          <div class='col-md-10 input-group'>
              <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
              <select class='form-control'>
                  <option value="Page Name">Page Name</option>
                  <option value="Page Name">ex.Home</option>
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


    