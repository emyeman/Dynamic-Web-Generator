@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
{{--         <h2 class='page-header'>Edit your Branding</h2>
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
      {!!Form::open(['route'=>['branding.update', $header->id],'method'=>'patch','files'=>true,'class'=>'form-horizontal']) !!}
        {{ method_field('patch') }}
            <div class='form-group'>
                <label class='col-md-2'>English Company Name</label>
                <div class='col-md-10 input-group'>               
                    <input placeholder='company name ...' class='form-control' name='company_name' type='text' value="{{ $header['company_name'] }}"/>
                </div>
            </div>

            <div class='form-group'>
                <label class='col-md-2'>Arabic Company Name</label>
                <div class='col-md-10 input-group'>               
                    <input placeholder='company name ...' class='form-control' name='ar_company_name' type='text' value="{{ $header['ar_company_name'] }}"/>
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
                    <input placeholder='slogan ...' class='form-control' name='slogan' type='text' value="{{ $header['slogan'] }}" />
                </div>
            </div>  

            <div class='form-group'>
                <label class='col-md-2'>Arabic Company Slogan</label>
                <div class='col-md-10 input-group'>                
                    <input placeholder='slogan ...' class='form-control' name='ar_slogan' type='text' value="{{ $header['ar_slogan'] }}" />
                </div>
            </div>  

            <span class='col-md-2'></span>
            <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
        {!!Form::close() !!} --}}

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
      
    {!!Form::open(['route'=>['branding.update', $header->id],'method'=>'patch','files'=>true,'class'=>'form-horizontal']) !!}
        {{ method_field('patch') }}
       <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        
                <!-- text input -->
                <div class="form-group">
                 <!--  <label>Choose Date</label>
                  <input type="text" class="form-control" placeholder="00/00/0000  "> -->

    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>English Company Name</label>
      <input type="text" class="form-control" name='company_name' placeholder="" value="{{ $header['company_name'] }}">
      </div>
    </div>  

    <div class="row">
      <div class="col-md-5 col-md-offset-1 ">
      <label>Arabic Company Name</label>
      <input type="text" class="form-control" name='ar_company_name' placeholder="" value="{{ $header['ar_company_name'] }}">
      </div>
    </div>  

      <div class="row">
    <div class="col-md-5 col-md-offset-1 ">
     <label>English Company Slogan</label>
      <input type="text" class="form-control" name='slogan' placeholder="" value="{{ $header['slogan'] }}">
      </div>
      </div>


    <div class="row">
    <div class="col-md-5 col-md-offset-1 ">
        <label>Arabic Company Slogan</label>
        <input type="text" class="form-control" name='ar_slogan' placeholder="" value="{{ $header['ar_slogan'] }}">
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
                <input type='submit' class='btn btn-primary btn-flat pull-right' name='ok' value='Update' />
            </div>
        </div>
 
 {!!Form::close() !!}
        </section>
@endsection


