@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <h2><div class='col-lg-1 col-ms-1'>
        <a href="{{url('/subcategory')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small> </h2>  

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
    
    @if(Session::has('insert_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
    @endif
    
    <br>
    {!!Form::open(['route'=>'subcategory.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}
       <div class='form-group'>
            <label class='col-md-2'>Category</label>
            <div class='col-md-10 input-group'>
                <select class='form-control'id='category_id' name='category_id' >
                    <option value="">choose a category</option>
                    @foreach ($subcategories as $subcategory) 

                        
                            @if($subcategory->category_id == NULL)
                                <option  value="{{$subcategory->id}}">{{$subcategory->name}} &nbsp; &nbsp;{{$subcategory->ar_name}}</option>
                            @endif
                        

                    @endforeach    
                </select>           
             </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>English Title *</label>
            <div class='col-md-10 input-group'>                
                <input placeholder='PLZ,enter title ...' class='form-control' name='title_subcategory' type='text' value="{{old('title_subcategory')}}"/>
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Arabic Title *</label>
            <div class='col-md-10 input-group'>                
                <input placeholder='من فضلك ادخل اسم القسم الفرعى' class='form-control' name='ar_title_subcategory' type='text' value="{{old('ar_title_subcategory')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>        
                <input class='form-control' name='image_subcategory' type='file' />
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>English Description*</label>
            <div class='col-md-10 input-group'>                
                <textarea placeholder='PLZ,enter description ...' class='form-control' rows='3' name='subdescription'>{{old('subdescription')}}</textarea> 
            </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>Arabic Description *</label>
            <div class='col-md-10 input-group'>                
                <textarea placeholder='من فضلك ادخل الوصف' class='form-control' rows='3' name='ar_subdescription'>{{old('ar_subdescription')}}</textarea> 
            </div>
        </div>      
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
@endsection


    