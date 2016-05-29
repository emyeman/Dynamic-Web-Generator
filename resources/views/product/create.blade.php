@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Product</h2>
      <br><br>
      {!!Form::open(['route'=>'product.store','method'=>'post']) !!}
       <div class='form-group has-warning'>
            <label class='col-md-2'>Select Sub Category</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control'>
                    <option value="parent">Sub Category</option>
                    <option value="parent">ex.laptop</option>
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
                <input placeholder='PlZ,enter description' class='form-control' name='description' type='text' />
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


    