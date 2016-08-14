@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
    <section class="content">
    <div>
        <img style="min-width: 30%; margin-left: 400px;" src="{{url('assets/reseller_assets/images/1b.png')}}" class="img-responsive"> 
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


