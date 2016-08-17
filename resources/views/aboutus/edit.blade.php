@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

            <section class="content">
        <div class="box box-warning">
            <div class="box-header with-border">
              <div>
        <img style="min-width: 30%; margin-left: 400px;" src="{{url('assets/reseller_assets/images/11-b.png')}}" class="img-responsive"> 
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
            @if(Session::has('update_success'))
             <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
            @endif
            <div class="box-body">
        {{Form::model($row,['route'=>['aboutus.update',$row->id],'method'=>'put' , 'files'=>true ,'class'=>'form-horizontal']) }} 
                <!-- text input -->
                <div class="form-group">
    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>English Description</label>
        {{Form::textarea('description', old('description') ,['class'=>'form-control','rows'=>'7'])}}
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>Arabic Description</label>
       {{Form::textarea('ar_description', old('ar_description') ,['class'=>'form-control','rows'=>'7'])}}
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
     <div class="col-md-5 col-md-offset-1 ">
     <label class="btn btn-default btn-file">
                    Choose Picture {{Form::file('image' ,['class'=>'form-control'])}}
    </label>
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


    