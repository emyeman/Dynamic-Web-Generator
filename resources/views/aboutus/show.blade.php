@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')
<div class="col-sm-9">
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
</div>
</div>

@endsection