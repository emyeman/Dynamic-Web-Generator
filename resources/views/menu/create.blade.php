@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
    <h2 class='page-header'>
        Add New Menu
    </h2>
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
      {!!Form::open(['route'=>'menu.store','method'=>'post']) !!}
        <div class='form-group'>
            <label class='col-md-2'>Title</label>
            <div class='col-md-10 input-group'>
                <input placeholder='title...' class='form-control' name='title' type='text'/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Parent</label>
            <div class='col-md-10 input-group'>
                {!! Form::select('parent_id', $menus, null, ['class' => 'form-control','placeholder' => 'Pick a menu..']) !!}
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Page</label>
            <div class='col-md-10 input-group'>
                {!! Form::select('route', $pages, null, ['class' => 'form-control','placeholder' => 'Pick a page..']) !!}
            </div>
        </div>    
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}


      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection