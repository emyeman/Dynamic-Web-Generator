@extends('layouts.outside')

@section('content')

<div class="container">


<h5 class="col-md-4 col-md-offset-1" style="margin-top:120px;">Create <font color="red">Website</font></h5>
<hr class="col-md-10 col-md-offset-1" style="margin-top:0px;"/>

<div class="col-md-10 col-md-offset-1">


       @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

      @endif
      {!!Form::open(['route'=>'site.store' , 'method'=>'post', 'files'=>true]) !!}
        <div class='form-group '>
            <label class='col-md-2'>Site Name</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input placeholder='PlZ,enter title news' class='form-control' name='subdomain' type='text' value="{{old('subdomain')}}"/>
            </div>
        </div>  

         <div class='form-group'>
            <label class='col-md-2'>Slogan Color</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input placeholder='PlZ,enter title news' class='form-control picker' name='slogan_color' type='text' value="{{old('slogan_color')}}"/>
            </div>
        </div>  
          


         <div class='form-group'>
            <label class='col-md-2'>Text Color</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input placeholder='PlZ,enter title news' class='form-control picker' name='text_color' type='text' value="{{old('text_color')}}"/>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Primary Color</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <input placeholder='PlZ,enter description' class='form-control picker' name='primary_color' type='text' value="{{old('primary_color')}}"/>
            </div>
        </div>      

         <div class='form-group'>
            <label class='col-md-2'>Secondary Color</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <input placeholder='PlZ,enter description' class='form-control picker' name='secondry_color' type='text' value="{{old('secondry_color')}}"/>
            </div>
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Site Body</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                       <select name="body_type" class="form-control">
  							<option>fill</option>
							<option>centered</option>
						</select>
            </div>
        </div>

         <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-4 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <label class="btn btn-info form-control btn-file">
                    Browse <input id="image" type="file" name="background_image" style="display: none;">
                </label>  

            </div>
        </div>

        <input type="hidden" value="{{ Session::get('user_id') }}" name="site_id"/>

        <div class='form-group'>
            <label class='col-md-2'></label>
            <div class='col-md-8 input-group'>
                <input type='submit' class='col-md-1 form-control btn btn-primary' name='ok' value='add' />
            </div>
        </div>        
    {!!Form::close() !!}

</div><!--end leftsideof from-->
</div>
</div>
@endsection


    
