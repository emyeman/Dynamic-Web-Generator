@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2><div class='col-lg-1 col-ms-1'>
            <a href='/googlemap'><span class="glyphicon glyphicon-backward"></span></a>
        </div></small>Add New Product</h2>
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br/><br/>
      {!!Form::open(['route'=>'branding.store','method'=>'post']) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Location Name</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter company name' class='form-control' name='locationname' type='text'/>
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

    
