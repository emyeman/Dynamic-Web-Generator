@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-sm-9">
      <h2>create Site</h2>
      <br><br>
      {!!Form::open(['route'=>'site.store','method'=>'post']) !!}
        <div class='form-group has-warning'>
            <label class='col-md-2'>Domain Name</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input placeholder='PlZ,enter title news' class='form-control' name='doman_name' type='text'/>
            </div>
        </div>  

        <div class='form-group has-warning'>
            <label class='col-md-2'>Doman Type</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                        <select name="doman_type" class="form-control">
                            <option>com</option>
                            <option>eg</option>
                            <option>org</option>
                        </select>
            </div>
        </div>

         <div class='form-group has-warning'>
            <label class='col-md-2'>Site Color</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input placeholder='PlZ,enter title news' class='form-control picker' name='color' type='text'/>
            </div>
        </div>  
          
        <div class='form-group has-warning'>
            <label class='col-md-2'>Primary Color</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <input placeholder='PlZ,enter description' class='form-control picker' name='primary_color' type='text' />
            </div>
        </div>      

         <div class='form-group has-warning'>
            <label class='col-md-2'>Secondary Color</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <input placeholder='PlZ,enter description' class='form-control picker' name='secondry_color' type='text' />
            </div>
        </div>

        <div class='form-group has-warning'>
            <label class='col-md-2'>Site Body</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                       <select name="body_type" class="form-control">
  							<option>fill</option>
							<option>centered</option>
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
</div>
@endsection


    