@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <!-- <h2><div class='col-lg-1 col-ms-1'>
        <a href="{{url('/subcategory')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small>Add New SubCategory</h2> -->   
    <h2 class='page-header'>Add New Sub Category</h2> 
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
    {!!Form::open(['route'=>'subcategory.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}
       <div class='form-group'>
            <label class='col-md-2'>Category</label>
            <div class='col-md-10 input-group'>
                <select class='form-control'id='category_id' name='category_id' >
                    <option value="">choose a category</option>
                    @foreach ($subcategories as $subcategory) 
                        @if(Auth::user()->id == $subcategory->site_id)
                            @if($subcategory->category_id == NULL)
                                <option  value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                            @endif
                        @endif
                    @endforeach    
                </select>           
             </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>Title *</label>
            <div class='col-md-10 input-group'>                
                <input placeholder='title ...' class='form-control' name='title_subcategory' type='text' value="{{old('title_subcategory')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>        
                <input class='form-control' name='image_subcategory' type='file' />
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>                
                <textarea placeholder='description ...' class='form-control' name='subdescription'>{{old('subdescription')}}</textarea> 
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
@endsection


    