@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
            <section class="content">
        <div class="box box-warning">
            <div class="box-header with-border">
                <div class="row">
                 <div class="col-md-4 col-md-offset-4">
                <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/10b.png')}}" class="img-responsive"> 
                </div> 
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
               <div class="row">
               <div class="col-md-4">
                 <a href="{{url('/service')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:200px;"></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type='submit' class='pull-right btn btn-primary ' name='ok' value='EDIT' style="width:200px;"/>   
                 </div>
                 </div>  
            </div>
        </div>
            {!!Form::close() !!}
             </div>
            </div>
        </div>
        </section>

@endsection


    