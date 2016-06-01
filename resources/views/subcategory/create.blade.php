@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2><div class='col-lg-1 col-ms-1'>
            <a href='/subcategory'><span class="glyphicon glyphicon-backward"></span></a>
        </div></small>Add New SubCategory</h2>
        
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
      {!!Form::open(['route'=>'subcategory.store','files'=>true,'method'=>'post']) !!}
       <div class='form-group has-warning'>
            <label class='col-md-2'>Select Category</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control'id='category_id' name='category_id' >
                    <option value="">PLZ,Select Category</option>
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

        <div class='form-group has-warning'>
            <label class='col-md-2'>Title SubCategory</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter title subcategory' class='form-control' name='title_subcategory' type='text'/>
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>SubCategory Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <input class='form-control' name='image_subcategory' type='file' />
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <textarea placeholder='PlZ,enter description' class='form-control' name='subdescription'></textarea> 
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


    