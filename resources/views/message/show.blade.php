@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
<h2><div class='col-lg-1 col-ms-1'>
        <a href="{{url('/message')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small></h2>

	<h2>{{$message->subject}}</h2>
	<span class='glyphicon glyphicon-user'> {{$message->name}}</span>
	<b>|</b> <span class='glyphicon glyphicon-envelope'> {{$message->email}}</span>
	<b>|</b> <span class='glyphicon glyphicon-calendar'> {{$message->created_at}}</span>
	<br><br>
	<div class='col-md-10'>{{$message->content}}</div>
@endsection