@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
	<h2>{{$message->subject}}</h2>
	<span class='glyphicon glyphicon-user'> {{$message->name}}</span>
	<b>|</b> <span class='glyphicon glyphicon-envelope'> {{$message->email}}</span>
	<b>|</b> <span class='glyphicon glyphicon-calendar'> {{$message->created_at}}</span>
	<br><br>
	<div class='col-md-10'>{{$message->content}}</div>
@endsection