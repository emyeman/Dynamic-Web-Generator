@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
<section class="content">
        <!-- <div>
        <img src="{{url('assets/reseller_assets/images/13.png')}}" class="img-responsive"> 
        </div> -->

    <div class="row text-uppercase" style="text-align: center;">
        <h1 style="color:#01A4A4;">
        <span style="font-size:34px; font-weight: 700;">
          Show Message<br>
        </span>
        </h1>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; ">  
        </div>

     <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="color:#01A4A4; font-weight:blod;">
                 <a href="{{url('/message')}}"><span class="glyphicon glyphicon-backward"></span></a>
				&nbsp; &nbsp; View all Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding col-md-offset-1">
            
			<h2>{{$message->subject}}</h2>
			<span class='glyphicon glyphicon-user'> {{$message->name}}</span>
			<b>|</b> <span class='glyphicon glyphicon-envelope'> {{$message->email}}</span>
			<b>|</b> <span class='glyphicon glyphicon-calendar'> {{$message->created_at}}</span>
		
			<br><br>
			<div class='col-md-10'>{{$message->content}}<br/><br/></div>
		</div>
 </div>
 <!-- /.box -->
</div>
     </div>
</section>
<!-- /.content -->
</div>
@endsection