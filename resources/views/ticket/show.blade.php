@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

@section('content')
<h2><div class='col-lg-1 col-ms-1'>
        <a href="{{url('/ticket')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small></h2>

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
	<div class='col-md-10'>{{$ticket->message}}</div>

@endsection