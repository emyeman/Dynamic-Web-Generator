@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2 class='page-header'>
        @if($row->type == 'promotion')
            Edit Promotion
        @else
            Edit News
        @endif
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
      {{Form::model($row,['route'=>['news_promotion.update',$row->id],'method'=>'put' , 'files'=>true]) }}
        <input type='hidden' value="{{$row->type}}" name='type'>
        <div class='form-group'>
            <label class='col-md-2'>Title</label>
            <div class='col-md-10 input-group'>
                {{Form::text('title', null ,['class'=>'col-ms-2 form-control'])}}
            </div>
        </div>  
        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="{{url('/assets/images'.$row->image)}}"></div>
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>
                {{Form::file('image' ,['class'=>'form-control'])}}
                
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                {{Form::textarea('description', null ,['class'=>'form-control','rows'=>'4'])}}
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Start Date</label>
            <div class='col-md-10 input-group'>
                {{Form::date('start_date', null ,['class'=>'form-control','rows'=>'4'])}}
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>End Date</label>
            <div class='col-md-10 input-group'>
                {{Form::date('end_date', null ,['class'=>'form-control','rows'=>'4'])}}
            </div>
        </div>   
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {{Form::close() }}


      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection


    