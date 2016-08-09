@extends('layouts.outside')

@section('sidebar')
    @include('../header')
@endsection

@section('content')

<div class="container">

<h5 class="col-md-4 col-md-offset-1" style="margin-top:120px;">Update <font color="red">Website</font></h5>
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
      {!!Form::open(['route'=>['site.update', $site->id],'method'=>'patch','files'=>true,'class'=>'form-horizontal']) !!}
      {{ method_field('patch') }}
        <div class='form-group'>
            <label class='col-md-2'>Site Name</label>

            <div class='col-md-8 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>

                <input value='{{ $site->subdomain }}' class='form-control' name='subdomain' type='text'/>
            </div>
        </div>  

         <div class='form-group'>
            <label class='col-md-2'>Slogan Color</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input value='{{ $site->slogan_color }}' class='form-control picker' name='slogan_color' type='text'/>
            </div>
        </div>


         <div class='form-group'>
            <label class='col-md-2'>Text Color</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input value='{{ $site->text_color }}' class='form-control picker' name='text_color' type='text'/>
            </div>
        </div>  

          
        <div class='form-group'>
            <label class='col-md-2'>Primary Color</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <input value='{{ $site->primary_color }}' class='form-control picker' name='primary_color' type='text' />
            </div>
        </div>      

         <div class='form-group'>
            <label class='col-md-2'>Secondary Color</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <input value='{{ $site->secondry_color }}' class='form-control picker' name='secondry_color' type='text' />
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
      
        <div class='form-group'>
            <label class='col-md-2'></label>
            <div class='col-md-8 input-group'>
                <input type='submit' class='col-md-1 btn btn-primary form-control' name='ok' value='update' />
            </div>    
        </div>
        <br/><br/><br/><br/>
    {!!Form::close() !!}

</div>
</div>
</div>
@endsection


    
