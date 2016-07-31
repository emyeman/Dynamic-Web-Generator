@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
{{--   <h2>Add New Domain</h2>
  @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <br><br>

  {!!Form::open(['route'=>'domain.store','method'=>'post','class'=>'form-horizontal']) !!}
    <div class='form-group'>
        <label class='col-md-2'>Domain Name</label>
        <div class='col-md-10 input-group'>
            <input placeholder='domain name ...' class='form-control' name='domain_name' type='text' value="{{old('domain_name')}}"/>
        </div>
    </div>    
    <span class='col-md-2'></span>
    <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
  {!!Form::close() !!} --}}

              <section class="content">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Domain</h3>
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
      {!!Form::open(['route'=>'domain.store','method'=>'post','class'=>'form-horizontal']) !!}
                <!-- text input -->
                <div class="form-group">

    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>Domain Name</label>
        <input placeholder='domain name ...' class='form-control' name='domain_name' type='text' value="{{old('domain_name')}}"/>
      </div>
    </div>  

        <div class="box-footer clearfix col-md-5 col-md-offset-1">
            <div class="input-group-btn">
                <input type='submit' class='btn btn-primary btn-flat pull-right' name='ok' value='Add' />
            </div>
        </div>
            {!!Form::close() !!}
             </div>
            </div>
        </div>
        </section>

@endsection


    