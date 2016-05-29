@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Crusal</h2>
      <br><br>
      {!!Form::open(['route'=>'crusal.store','method'=>'post']) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Title</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter title crusal' class='form-control' name='title_crusal' type='text'/>
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Crusal Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <input class='form-control' name='crusal_image' type='file' />
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <input placeholder='PlZ,enter description' class='form-control' name='description' type='text' />
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


    