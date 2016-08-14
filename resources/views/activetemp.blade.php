@extends('layouts.UserDashboard')
@section('sidebar')
    @include('../UserDashboardHeader')
@endsection
@section('content')

{{--   <h2 class='page-header col-md-8 col-md-offset-2' style="margin-top:100px;">Templates</h2>
	<div class="row">
		<div class="col-md-8 col-md-offset-5">
      @if (Auth::guest())
				<a href="{{ url('/login') }}" class="btn btn-primary">create your own website</a>
		  @endif
    </div>
  </div>

  <div class="row col-md-10 col-md-offset-2">
    @foreach($temps as $temp)
<a href="/activetemp/{{ $temp->id }}">
<ul class="demo-2 effect" id="{{ $temp->id }}" style="margin-top:5px;">
    <li>
       <h2 class="zero">{{ $temp->name }}</h2>
       <p class="zero">{{ $temp->name }}</p>
    </li>
    <li><img class="top" src="{{ $temp->image }}" alt=""/></li>
</ul>
</a> --}}
{{-- 

      <div class="col-sm-6 col-md-4 container" >
        <div class="thumbnail" id="{{ $temp->id }}">
        <a href="/activetemp/{{ $temp->id }}">
          <img src="{{$temp->image}}" />
          <div class="textbox">
          <p class="text" style="text-align:center;"><strong>
          <font color="gray" style="font-size:20px;">{{ $temp->name }}</font></strong></p>
          </div>
          </a>
        </div>
      </div>
 --}}    
 {{-- @endforeach --}}

  {{-- </div> --}}


<section class="content" style="background-image: url({{ url('assets/reseller_assets/images/21.png') }});">

<?php $count = 0 ; ?>    
@foreach($temps as $temp)

@if($count % 2 == 0)
<?php $row = 0 ?>
  <div class="row" style="margin-top: 40px;">
@endif

  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lg-offset-2 myim">
      <div class="hovereffect">
          <img class="img-responsive" src="{{ $temp->image }}" alt="" width="350" height="200" style=" margin-top: 25px;">
          <div class="overlay">
             <h2>{{ $temp->name }}</h2>
              <a class="info" href="{{ $temp->image }}" data-lightbox="23">live Demo</a>
          </div>
      </div>
  </div>
      
<?php $row++; ?>
@if($row % 2 == 0)
  </div>
@endif
<?php $count++; ?>
@endforeach


      </section>

@endsection
