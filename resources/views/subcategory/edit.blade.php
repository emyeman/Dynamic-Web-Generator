@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Edit SubCategory</h2>
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
    {!!Form::open(['route'=>['subcategory.update',$subcategory->id],'files'=>true,'method'=>'put']) !!}
       <div class='form-group has-warning'>
            <label class='col-md-2'>Select Category</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control' id='category_id' name='category_id'>
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @foreach ($categories as $sel_category) 
                        @if (Auth::user()->id == $sel_category->site_id)
                            @if($sel_category->category_id ==NULL)
                                <!-- for no repeat name of category-->
                                @if($category->name !=$sel_category->name)
                                    <option class='form-control' value="{{$sel_category->id}}">{{$sel_category->name}}</option>
                                @endif
                            @endif
                        @endif
                    @endforeach    
                </select>           
             </div>
        </div>

        <div class='form-group has-warning'>
            <label class='col-md-2'>Title SubCategory</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input value='{{$subcategory->name}}' class='form-control' name='title_subcategory' type='text'/>
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>SubCategory Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <label class='form-control'>{{$subcategory->image}}</label>
                <input class='form-control' name='image_subcategory' type='file' />
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <textarea  class='form-control' name='subdescription'>{{$subcategory->description}}</textarea> 
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='Edit' />
{!!Form::close() !!}


      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>
</div>
@endsection


    