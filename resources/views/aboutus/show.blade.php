@extends('layouts.UserDashboard')

@section('content')

@include('../UserDashboardHeader')
{{-- <div class="col-sm-9">
      <h2>
        Aboutus
    </h2>
    <a href="{{url('/aboutus/'.$row->id.'/edit')}}"><div class='glyphicon glyphicon-edit'> Edit</div></a>
	@if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
<div class='col-lg-offset-3' style='margin-bottom:20px; margin-top:50px;'>
	<a href="{{url('/aboutus/'.$row->id.'/edit')}}">
		<img width='400px' height='400px' src="{{url('/assets/images'.$row->image)}}">
	</a>
</div>
<div class='col-lg-offset-1'>
<p>
{{$row->description}}
</p>

<p>
{{$row->ar_description}}
</p>
</div>
</div> --}}

        <section class="content">
        <div class="row text-uppercase" style="text-align: center;">
        <h1 style="color:#66B0C1;">
        <span style="font-size:34px; font-weight: 700; ">
        Modfiy your "About Us" page<br>
        Choose a picture and write some words.
        </span>
        </h1>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; margin-bottom: 75px;">  
        </div>
        @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
        @endif
    <div class='col-lg-offset-11' style='margin-bottom:20px; margin-top:50px;'>
            <a href="{{url('/aboutus/'.$row->id.'/edit')}}"><div class='glyphicon glyphicon-edit'> Edit</div></a>
    </div>
     <div class="row">
        <div class="col-md-4" >
            <div class="box">
                <div class="box-header with-border">
                 <center> <h3 class="box-title">Show your Image</h3></center>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                 <center><img src="{{url('/assets/images'.$row->image)}}" class="img-responsive" alt="brand"></center>
                </div>
                <div class="box-footer clearfix">
                   <div class="input-group-btn"> 
                   </div>
                </div>  
           </div>
        </div>
        <div class="col-md-4" >
            <div class="box">
                <div class="box-header with-border">
                 <center> <h3 class="box-title">English About Content</h3></center>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                 <center>{{$row->description}}</center>
                </div>
                <div class="box-footer clearfix">
                   <div class="input-group-btn"> 
                   </div>
                </div>  
           </div>
        </div>
        <div class="col-md-4" >
            <div class="box">
                <div class="box-header with-border">
                 <center> <h3 class="box-title">Arabic About Content</h3></center>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                 <center>{{$row->ar_description}}</center>
                </div>
                <div class="box-footer clearfix">
                   <div class="input-group-btn"> 
                   </div>
                </div>  
           </div>
        </div>
     </div>
        
        <!-- /.col -->
        </section>

@endsection