@extends('layouts.app')

@section('content')

<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Edit Service</h2>
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
      {!!Form::open(['route'=>['service.update', $service->id  ],'method'=>'patch']) !!}
      {{ method_field('patch') }}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Service Tilte</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input value='{{$service->title}}' class='form-control' name='title' type='text'/>
            </div>
        </div>  
        
        <div class='form-group has-warning'>
            <label class='col-md-2'>Service Icon</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <button class="btn btn-default" name="icon" role="iconpicker"></button>
            </div>
        </div>  

        <div class='form-group has-warning'>
            <label class='col-md-2'>Service Description</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <input value='{{$service->description}}' class='form-control'name='description' type='text' />
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='Update' />
    {!!Form::close() !!}

      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection


    