@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>
        Aboutus
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
      {{Form::model($row,['route'=>['aboutus.update',$row->id],'method'=>'put' , 'files'=>true]) }} 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                {{Form::textarea('description', null ,['class'=>'form-control','rows'=>'7'])}}
            </div>
        </div> 
        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="/assets/images{{$row->image}}"></div>
        <div class='form-group has-warning'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                {{Form::file('image' ,['class'=>'form-control'])}}
            </div>
        </div>  
        
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='EDIT' />
    {{Form::close() }}


      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection


    