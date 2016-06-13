@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
      <h2 class='page-header'>Edit Site</h2>
      <br><br>
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
            <label class='col-md-2'>SubDomain</label>
            <div class='col-md-10 input-group'>                                
                <input value='{{ $site->subdomain }}' class='form-control' name='subdomain' type='text'/>
            </div>
        </div>  

         <div class='form-group'>
            <label class='col-md-2'>Site Color</label>
            <div class='col-md-10 input-group'>                
                <input value='{{ $site->color }}' class='form-control picker' name='color' type='text'/>
            </div>
        </div>  
          
        <div class='form-group'>
            <label class='col-md-2'>Primary Color</label>
            <div class='col-md-10 input-group'>                
                <input value='{{ $site->primary_color }}' class='form-control picker' name='primary_color' type='text' />
            </div>
        </div>      

         <div class='form-group'>
            <label class='col-md-2'>Secondary Color</label>
            <div class='col-md-10 input-group'>                
                <input value='{{ $site->secondry_color }}' class='form-control picker' name='secondry_color' type='text' />
            </div>
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Site Body</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                       <select name="body_type" class="form-control">
                            <option>fill</option>
                            <option>centered</option>
                        </select>
            </div>
        </div>

         <div class='form-group'>
            <label class='col-md-2'>Background Image</label>
            <div class='col-md-10 input-group'>               
                    <input  class='form-control' id="image" type="file" name="background_image"/>
            </div>
        </div>
      

        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {!!Form::close() !!}
@endsection


    
