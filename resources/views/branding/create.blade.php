@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
{{--     <h2 class='page-header'>Add New Branding</h2>
    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br><br>
    {!!Form::open(['route'=>'branding.store','method'=>'post', 'files'=>true ,'class'=>'form-horizontal']) !!}
    <div class='form-group'>
        <label class='col-md-2'>English Company Name</label>
        <div class='col-md-10 input-group'>
            <input placeholder='company name ...' class='form-control' name='company_name' type='text' value="{{old('company_name')}}"/>
        </div>
    </div>

    <div class='form-group'>
        <label class='col-md-2'>Arabic Company Name</label>
        <div class='col-md-10 input-group'>
            <input placeholder='company name ...' class='form-control' name='ar_company_name' type='text' value="{{old('ar_company_name')}}"/>
        </div>
    </div>  

    <div class='form-group'>
        <label class='col-md-2'>Logo</label>
        <div class='col-md-10 input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                <label class="btn btn-default btn-file">
                    Browse <input id="image" type="file" name="logo" style="display: none;">
                </label>  
        </div>
    </div>  

    <div class='form-group'>
        <label class='col-md-2'>English Company Slogan</label>
        <div class='col-md-10 input-group'>
            <input placeholder='slogan ...' class='form-control' name='slogan' type='text' />
        </div>
    </div>

    <div class='form-group'>
        <label class='col-md-2'>Arabic Company Slogan</label>
        <div class='col-md-10 input-group'>
            <input placeholder='slogan ...' class='form-control' name='ar_slogan' type='text' />
        </div>
    </div>


    <span class='col-md-2'></span>
    <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
    {!!Form::close() !!}
 --}}

        <section class="content">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      
        {!!Form::open(['route'=>'branding.store','method'=>'post', 'files'=>true ,'class'=>'form-horizontal']) !!}
       <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        
                <!-- text input -->
                <div class="form-group">
    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>English Company Name</label>
      <input type="text" class="form-control" name='company_name' placeholder="" value="{{old('company_name')}}">
      </div>
    </div>  

    <div class="row">
      <div class="col-md-5 col-md-offset-1 ">
      <label>Arabic Company Name</label>
      <input type="text" class="form-control" name='ar_company_name' placeholder="" value="{{old('ar_company_name')}}">
      </div>
    </div>  

    <div class="row">
      <div class="col-md-5 col-md-offset-1 ">
      <label>English Company Slogan</label>
      <input type="text" class="form-control" name='slogan' placeholder="" value="{{old('slogan')}}">
      </div>
    </div>


    <div class="row">
    <div class="col-md-5 col-md-offset-1 ">
        <label>Arabic Company Slogan</label>
        <input type="text" class="form-control" name='ar_slogan' placeholder="" value="{{old('ar_slogan')}}">
    </div>
    </div>

    <div class="row" style="margin-top:15px;">
     <div class="col-md-5 col-md-offset-1 ">
     <label class="btn btn-default btn-file">
                    Choose Picture <input id="image" type="file" name="logo" style="display: none;">
    </label>
    </div>
   </div>


        
             </div>
            
       
            </div>

        </div>
        <div class="box-footer clearfix">
            <div class="input-group-btn">
                <input type='submit' class='btn btn-primary btn-flat pull-right' name='ok' value='Add' />
            </div>
        </div>
 
 {!!Form::close() !!}
        </section>
@endsection


