@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2><div class='col-lg-1 col-ms-1'>
            <a href='/product'><span class="glyphicon glyphicon-backward"></span></a>
        </div></small>Edit Product</h2>
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
    {!!Form::open(['route'=>['product.update',$product->id],'files'=>true,'method'=>'put']) !!}
       <div class='form-group has-warning'>
            <label class='col-md-2'>Select Category</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control' id='category_id' name='category_id' >
                    <option value="{{$category->id}}"> {{$category->name}}</option>
                    @if (Auth::user()->id == $category->site_id)
                        @foreach ($categories as $sel_category) 
                            <!-- for no repeat name of category-->
                            @if($category->name !=$sel_category->name)
                                <option value="{{$sel_category->id}}">{{$sel_category->name}}</option>
                            @endif    
                        @endforeach 
                    @endif
                </select>           
             </div>
        </div>

        <div class='form-group has-warning'>
            <label class='col-md-2'>Select Sub Category</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control' id='subcategory_id' name='subcategory_id'>
                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                    @if (Auth::user()->id == $subcategory->site_id)
                        @foreach ($subcategories as $sel_subcategory) 
                            <!-- for no repeat name of subcategory-->
                            @if($subcategory->name !=$sel_subcategory->name)
                                <option value="{{$sel_subcategory->id}}">{{$sel_subcategory->name}}</option>
                            @endif
                        @endforeach 
                    @endif    
                </select>           
             </div>
        </div>

        <div class='form-group has-warning'>
            <label class='col-md-2'>Title Product</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input value='{{$product->name}}' class='form-control' name='title_product' type='text'/>
            </div>
        </div>

        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="/assets/images/{{$product->image}}"></div>
        <div class='form-group has-warning'>
            <label class='col-md-2'>Product Image</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-picture'></i></span>
                <label class='form-control'>{{$product->image}}</label>
                <input class='form-control' name='image_product' type='file' />
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <textarea  class='form-control' name='description'>{{$product->description}}</textarea> 
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


    