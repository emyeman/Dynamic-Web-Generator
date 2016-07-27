@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
{{--     <h2 class='page-header'>
        Edit Crusal Image
    </h2>
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
    {{Form::model($row,['route'=>['crusal.update',$row->id],'method'=>'put' , 'files'=>true,'class'=>'form-horizontal']) }}
        <div class='form-group'>
            <label class='col-md-2'>English Title</label>
            <div class='col-md-10 input-group'>
                {{Form::text('title', old('title') ,['class'=>'col-ms-2 form-control'])}}
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Arabic Title</label>
            <div class='col-md-10 input-group'>
                {{Form::text('ar_title', old('ar_title') ,['class'=>'col-ms-2 form-control'])}}
            </div>
        </div> 

        <div class='form-group'>
            <label class='col-md-2'>English Description</label>
            <div class='col-md-10 input-group'>
                {{Form::textarea('description', old('description') ,['class'=>'form-control','rows'=>'4'])}}
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Arabic Description</label>
            <div class='col-md-10 input-group'>
                {{Form::textarea('ar_description', old('ar_description') ,['class'=>'form-control','rows'=>'4'])}}
            </div>
        </div>  


        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="{{url('/assets/images'.$row->image)}}"></div>
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>                
                {{Form::file('image' ,['class'=>'form-control'])}}
            </div>
        </div>     
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {{Form::close() }} --}}


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
            @if(Session::has('update_success'))
             <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
            @endif
            <div class="box-body">
       {{Form::model($row,['route'=>['crusal.update',$row->id],'method'=>'put' , 'files'=>true,'class'=>'form-horizontal']) }}
                <!-- text input -->
                <div class="form-group">

    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>English Title</label>
      <input type="text" class="form-control" name='title' placeholder="" value="{{ $row['title'] }}">
      </div>
    </div>  

    <div class="row">
      <div class="col-md-5 col-md-offset-1 ">
      <label>Arabic Title</label>
      <input type="text" class="form-control" name='ar_title' placeholder="" value="{{ $row['ar_title'] }}">
      </div>
    </div>  

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>English Description</label>
       {{Form::textarea('description', old('description') ,['class'=>'form-control','rows'=>'4'])}}
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>Arabic Description</label>
       {{Form::textarea('ar_description', old('ar_description') ,['class'=>'form-control','rows'=>'4'])}}
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
                <input type='submit' class='btn btn-primary btn-flat pull-right' name='ok' value='Update' />
            </div>
        </div>
            {!!Form::close() !!}
             </div>
            </div>
        </div>
        </section>
@endsection


    