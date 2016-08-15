@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
    @if($type=='promotion')
        <!-- <a href="{{url('/news_promotion/promotion')}}"><span class="glyphicon glyphicon-backward"></span></a> -->
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <img style="min-width: 30%; " src="{{url('assets/reseller_assets/images/6b.png')}}" class="img-responsive"> 
        </div>
        </div>
     @else
        <!-- <a href="{{url('/news_promotion/news')}}"><span class="glyphicon glyphicon-backward"></span></a> -->
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <img style="min-width: 30%; " src="{{url('assets/reseller_assets/images/2b.png')}}" class="img-responsive"> 
        </div>
        </div>
     @endif

       <section class="content">
       <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">
                    @if($row->type=='promotion')
                        Add New Promotion
                    @else
                        Add New News
                    @endif
              </h3>
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
        {{Form::model($row,['route'=>['news_promotion.update',$row->id],'method'=>'put' , 'files'=>true,'class'=>'form-horizontal']) }}
                <!-- text input -->
                <div class="form-group">

    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>English Title</label>
      {{Form::text('title', old('title') ,['class'=>'col-ms-2 form-control'])}}
      </div>
    </div>

    <div class="row">
      <div class="col-md-5 col-md-offset-1 ">
      <label>Arabic Title</label>
      {{Form::text('ar_title', old('ar_title') ,['class'=>'col-ms-2 form-control'])}}
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

     <input type='hidden' value="{{$row->type}}" name='type'>

<div class="row" style="margin-top:15px;">
     <div class="col-md-5 col-md-offset-1 ">
     <img width='100px' height='100px' src="{{url('/assets/images'.$row->image)}}">
     </div>
     </div>

    <div class="row" style="margin-top:15px;">
     <div class="col-md-5 col-md-offset-1 ">
     <label class="btn btn-default btn-file">
                    Choose Picture <input id="image" type="file" name="image" style="display: none;">
    </label>
    </div>
   </div>

   <div class="row" style="margin-top:15px;">
     <div class="col-md-5 col-md-offset-1 ">
     <label>Start Date</label>
      {{Form::text('start_date', old('start_date') ,['class'=>'form-control','rows'=>'4','style'=>'position: absolute; z-index: 5;'])}}
      </div>
    </div>

    <div class="row" style="margin-top:40px;"> 
     <div class="col-md-5 col-md-offset-1 ">
     <label>End Date</label>
      {{Form::text('end_date', old('end_date') ,['class'=>'form-control','rows'=>'4','style'=>'position: absolute; z-index: 5;'])}}
      </div>
    </div>
<br/>
        <div class="box-footer clearfix col-md-5 col-md-offset-1" style="margin-top:30px;">
                        <div class="input-group-btn">
               <div class="row">
               <div class="col-md-4">
               @if($type=='promotion')
                 <a href="{{url('/news_promotion/promotion')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:200px;"></a>
              @else
                <a href="{{url('/news_promotion/news')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:200px;"></a>
              @endif
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



    {!! Html::style('assets/css/jquery-ui.min.css') !!}
    {!! Html::script('assets/js/jquery-ui.min.js') !!}
   <script>

    $( "[name=end_date]" ).datepicker({dateFormat: "yy-mm-dd"});
    $( "[name=start_date]" ).datepicker({dateFormat: "yy-mm-dd"});

  </script>
@endsection


    