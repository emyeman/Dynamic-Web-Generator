@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
{{--     <h2 class='page-header'>Aboutus</h2>
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
    {!!Form::open(['route'=>'aboutus.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>English Description*</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='description'  rows="15" style='resize: none;'>{{old('description')}}</textarea>
            </div>
        </div> 

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description*</label>
            <div class='col-md-10 input-group'>
                <textarea placeholder='description...' class='form-control' name='ar_description'  rows="15" style='resize: none;'>{{old('ar_description')}}</textarea>
            </div>
        </div> 
       
        <div class='form-group'>
            <label class='col-md-2'>Image*</label>
            <div class='col-md-10 input-group'>
                <input class='form-control' name='image' type='file' />
            </div>
        </div> 
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
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
        {!!Form::open(['route'=>'aboutus.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
                <!-- text input -->
                <div class="form-group">
    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>English Description</label>
        <textarea placeholder='description...' class='form-control' name='description'  rows="4" style='resize: none;'>{{old('description')}}</textarea>
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>Arabic Description</label>
       <textarea placeholder='description...' class='form-control' name='ar_description'  rows="4" style='resize: none;'>{{old('ar_description')}}</textarea>
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
     <div class="col-md-5 col-md-offset-1 ">
     <label class="btn btn-default btn-file">
                    Choose Picture <input id="image" type="file" name="image" style="display: none;">
    </label>
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


    