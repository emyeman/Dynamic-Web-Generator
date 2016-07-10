@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
      <!-- <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/subcategory')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div></small>Edit SubCategory</h2> -->
    <h2 class='page-header'>Edit SubCategory</h2>
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
    {!!Form::open(['route'=>['subcategory.update',$subcategory->id],'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
       <div class='form-group'>
            <label class='col-md-2'>Category</label>
            <div class='col-md-10 input-group'>                
                <select class='form-control' id='category_id' name='category_id'>
                    <option value="{{$category->id}}">{{$category->name}} &nbsp; &nbsp;{{$category->ar_name}}</option>
                    @foreach ($categories as $sel_category) 
                        @if (Auth::user()->id == $sel_category->site_id)
                            @if($sel_category->category_id ==NULL)
                                <!-- for no repeat name of category-->
                                @if($category->name !=$sel_category->name)
                                    <option class='form-control' value="{{$sel_category->id}}">{{$sel_category->name}}&nbsp; &nbsp;{{$sel_category->ar_name}}</option>
                                @endif
                            @endif
                        @endif
                    @endforeach    
                </select>           
             </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>English Title *</label>
            <div class='col-md-10 input-group'>                
                <input value='{{$subcategory->name}}' class='form-control' name='title_subcategory' type='text'/>
            </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>Arabic Title *</label>
            <div class='col-md-10 input-group'>                
                <input value='{{$subcategory->ar_name}}' class='form-control' name='ar_title_subcategory' type='text'/>
            </div>
        </div> 
        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="{{url('/assets/images/'.$subcategory->image)}}"></div>         
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>                
                <!-- <label class='form-control'>{{$subcategory->image}}</label> -->
                <input class='form-control' name='image_subcategory' type='file' />
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>English Description *</label>
            <div class='col-md-10 input-group'>                
                <textarea  class='form-control' rows='3' name='subdescription'>{{$subcategory->description}}</textarea> 
            </div>
        </div> 
         <div class='form-group'>
            <label class='col-md-2'>Arabic Description *</label>
            <div class='col-md-10 input-group'>                
                <textarea  class='form-control' rows='3' name='ar_subdescription'>{{$subcategory->ar_description}}</textarea> 
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {!!Form::close() !!}
@endsection


    