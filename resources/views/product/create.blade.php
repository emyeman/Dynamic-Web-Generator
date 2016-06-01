@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Product</h2>
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
      {!!Form::open(['route'=>'product.store','files'=>true,'method'=>'post']) !!}
       <div class='form-group has-warning'>
            <label class='col-md-2'>Select Category</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control' id='category_id' name='category_id'>
                    <option value=""> Category</option>
                    @foreach ($categories as $category) 
                        @if(Auth::user()->id == $category->site_id)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            
                        @endif
                    @endforeach 
                </select>           
             </div>
        </div>

        <div class='form-group has-warning'>
            <label class='col-md-2'>Select Sub Category</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control' id='subcategory_id' name='subcategory_id'>
                    <option value="">Sub Category</option>
                    @foreach ($subcategories as $subcategory) 
                        @if(Auth::user()->id == $subcategory->site_id)
                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                        @endif
                    @endforeach 
                </select>           
             </div>
        </div>

        <div class='form-group has-warning'>
            <label class='col-md-2'>Title Product</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter title product' class='form-control' name='title_product' type='text'/>
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Product Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <input class='form-control' name='image_product' type='file' />
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <textarea placeholder='PlZ,enter description' class='form-control' name='description'></textarea> 
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


    