@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

{!! Html::style('assets/css/table-scroll.css') !!}

<!-- Main content -->
        <section class="content">
        <!-- <div>
        <img src="{{url('assets/reseller_assets/images/13.png')}}" class="img-responsive"> 
        </div> -->

    <div class="row text-uppercase" style="text-align: center;">
        <h1 style="color:#01A4A4;">
        <span style="font-size:34px; font-weight: 700;">
          Show Ticket<br>
        </span>
        </h1>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; ">  
        </div>

     <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="color:#01A4A4; font-weight:blod;">
                 <a href="{{url('/ticket')}}"><span class="glyphicon glyphicon-backward"></span></a>
				&nbsp; &nbsp; View your Ticket</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding col-md-offset-1">
            

			<h2>{{$ticket->subject}}</h2>
			<span class='glyphicon glyphicon-user'> {{$user->name}}</span>
			<b>|</b> <span class='glyphicon glyphicon-envelope'> {{$user->email}}</span>
			<b>|</b> <span class='glyphicon glyphicon-calendar'> {{$ticket->created_at}}</span> &nbsp;
			@if($ticket->is_solved==1) 
				<b>|</b>  &nbsp;  &nbsp;  &nbsp; <span style="color:green" class='glyphicon glyphicon-ok'> solved</span>
			@else
				<b>|</b>  &nbsp;  &nbsp;  &nbsp; <a href="{{url('/ticket/solve_show/'.$ticket->id)}}"><span style="color:red" class='glyphicon glyphicon-remove'> unsolved</span></a>
			@endif
			<br><br>
			<div class='col-md-10'>{{$ticket->message}} <br/><br/></div>
			
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
             </div>
        </section>
        <!-- /.content -->
</div>


@endsection