@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')


        <section class="content">
        <div class="row">
        <div class="col-md-4 col-md-offset-4"> 
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/1a.png')}}" class="img-responsive"> 
        </div>
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
               <div class="row">
               <div class="col-md-4">
                 <a href="{{url('/branding')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:250px;"></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type='submit' class='pull-right btn btn-primary ' name='ok' value='ADD' style="width:250px;"/>   
                 </div>
                 </div>  
            </div>
        </div>
 
 {!!Form::close() !!}
        </section>
@endsection


