@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
{{--     <h2 class='page-header'>Edit Service</h2>
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
    {!!Form::open(['route'=>['service.update', $service->id  ],'method'=>'patch','class'=>'form-horizontal']) !!}
        {{ method_field('patch') }}
        <div class='form-group'>
            <label class='col-md-2'>English Tilte *</label>
            <div class='col-md-10 input-group'>                
                <input value='{{$service->title}}' class='form-control' name='title' type='text'/>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Arabic Tilte *</label>
            <div class='col-md-10 input-group'>                
                <input value='{{$service->ar_title}}' class='form-control' name='ar_title' type='text'/>
            </div>
        </div>  

        
        <div class='form-group'>
            <label class='col-md-2'>Icon *</label>
            <div class='col-md-10 input-group'>                
                <button class="btn btn-default form-control" name="icon" role="iconpicker"></button>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>English Description *</label>
            <div class='col-md-10 input-group'>                
                <!-- <input value='{{$service->description}}' class='form-control'name='description' type='text' /> -->
                <textarea class='form-control' name='description'>{{$service->description}}</textarea> 

            </div>
        </div>   

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description *</label>
            <div class='col-md-10 input-group'>                
                <!-- <input value='{{$service->description}}' class='form-control'name='description' type='text' /> -->
                <textarea class='form-control' name='ar_description'>{{$service->ar_description}}</textarea> 

            </div>
        </div>   

        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {!!Form::close() !!} --}}

            <section class="content">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- /.box-header -->
            @if(Session::has('insert_success'))
             <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
            @endif
            <div class="box-body">
      {!!Form::open(['route'=>['service.update', $service->id  ],'method'=>'patch','class'=>'form-horizontal']) !!}
        {{ method_field('patch') }}
                <!-- text input -->
                <div class="form-group">

    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>English Title</label>
      <input type="text" id='title_service' class="form-control" name='title' placeholder="" value="{{ $service->title }}">
      </div>
    </div>  

    <div class="row">
      <div class="col-md-5 col-md-offset-1 ">
      <label>Arabic Title</label>
      <input type="text" class="form-control" name='ar_title' placeholder="" value="{{$service->ar_title}}">
      </div>
    </div>  

    <div class="row" style="margin-top:15px;">
        <div class="col-md-5 col-md-offset-1 ">
            <label>Icon</label>
            <button class="btn btn-default form-control" name="icon" role="iconpicker"></button>
        </div>
    </div>    

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>English Description</label>
        <textarea placeholder='description...' class='form-control' name='description'  rows="4" style='resize: none;'>{{$service->description}}</textarea>
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>Arabic Description</label>
       <textarea placeholder='description...' class='form-control' name='ar_description'  rows="4" style='resize: none;'>{{$service->ar_description}}</textarea>
      </div>
    </div>

        <div class="box-footer clearfix col-md-5 col-md-offset-1">
            <div class="input-group-btn">
                <input type='submit' class='btn btn-primary btn-flat pull-right' name='ok' value='Update' />
            </div>
        </div>
            {!!Form::close() !!}
             </div>
            </div>
        </div>
        </section>

@endsection


    