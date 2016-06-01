@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Promotion</h2>
      @if (isset($path_parts))
        <?php var_dump($path_parts); ?>
      @endif
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
      {!!Form::open(['route'=>'promotion.store','method'=>'post','files'=>true]) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Title Promotion</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='title...' class='form-control' name='title' type='text'/>
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Promotion Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <input class='form-control' name='image' type='file' />
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='description'  rows="4" style='resize: none;'></textarea>
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Start Date</label>
            <div class='col-md-10 input-group'>
                <input type='date' name='start_date' value="<?= date('Y-m-d');?>">
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>End Date</label>
            <div class='col-md-10 input-group'>
                <input type='date' name='end_date' value="<?= date('Y-m-d');?>">
            </div>
        </div>   
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='ADD' />
    {!!Form::close() !!}


      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection


    