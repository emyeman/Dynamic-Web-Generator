@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
 {{--  <h2>Edit Domain</h2>
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
  {!!Form::open(['route'=>['domain.update',$domain->id,'class'=>'form-horizontal' ],'method'=>'patch']) !!}
  {{ method_field('patch') }}
    <div class='form-group has-warning'>
        <label class='col-md-2'>Domain Name</label>
        <div class='col-md-10 input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
            <input value='{{$domain->Domain_name}}' class='form-control' name='domain_name' type='text'/>
        </div>
    </div>    
    <span class='col-md-2'></span>
    <input type='submit' class='col-md-1 btn btn-primary' name='ok' value='Update' style="margin:10px 10px;" />
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
            @if(Session::has('update_success'))
             <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
            @endif
            <div class="box-body">
      {!!Form::open(['route'=>['domain.update',$domain->id,'class'=>'form-horizontal' ],'method'=>'patch']) !!}
     {{ method_field('patch') }}
                <!-- text input -->
                <div class="form-group">

    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>Domain Name</label>
        <input value='{{$domain->Domain_name}}' class='form-control' name='domain_name' type='text'/>
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


    