@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2>Add New Navbar</h2>
      <br><br>
    {!!Form::open(['route'=>'navbar.store','method'=>'post']) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Menu Item Name</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter Menu item name' class='form-control' name='menuitem' type='text'/>
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>Select Parent Item</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-king'></i></span>
				<select class='form-control'>
			  		<option value="parent">Parent</option>
			  		<option value="parent">ex.namepage</option>
				</select>           
			 </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Select Rout To</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-share-alt'></i></span>
				<select class='form-control'>
			  		<option value="parent">RoutTo</option>
			  		<option value="parent">ex.namepage</option>
				</select>           
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


    