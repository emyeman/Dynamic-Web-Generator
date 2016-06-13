@extends('layouts.app')

@section('content')
    <h2>create Site</h2>
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
    {!!Form::open(['route'=>'site.store' , 'method'=>'post', 'files'=>true,'class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>SubDomain *</label>
            <div class='col-md-7 input-group'>
                <input placeholder='sub domain ...' class='form-control' name='subdomain' type='text' value="{{old('subdomain')}}"/>
            </div>
        </div>  
         <div class='form-group'>
            <label class='col-md-2'>Site Color *</label>
            <div class='col-lg-7 input-group'>
                <input placeholder='site color ...' class='form-control picker' name='color' type='text' value="{{old('color')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Primary Color *</label>
            <div class='col-md-7 input-group'>      
                <input placeholder='primary color ...' class='form-control picker' name='primary_color' type='text' value="{{old('primary_color')}}" />
            </div>
        </div>      
         <div class='form-group'>
            <label class='col-md-2'>Secondary Color *</label>
            <div class='col-md-7'>   
                <input placeholder='secondary color ...' class='form-control picker' name='secondry_color' type='text' value="{{old('secondry_color')}}" />
            </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>Site Body *</label>
            <div class='col-md-7 input-group'>
               <select name="body_type" class="form-control">
    				<option>fill</option>
    				<option>centered</option>
    			</select>
            </div>
        </div>
         <div class='form-group'>
            <label class='col-md-2'>Background Image *</label>
            <div class='col-md-7 input-group'>
                    <input id="image" type="file" name="background_image">
            </div>
        </div>
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-7 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
@endsection


    
