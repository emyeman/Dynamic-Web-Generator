@extends('layouts.UserDashboard')
@section('sidebar')
    @include('../UserDashboardHeader')
@endsection
@section('content')


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
  

<br/><br/>
  <button style="width:250px; height:60px;" class="col-sm-6 col-md-4 container">
    <a target="_blank" href="/activetemp/{{ $temp->id }}">  
      <p class="text" style="text-align:center;"><strong>
      <font color="gray" style="font-size:20px;">{{ $temp->name }}</font></strong></p> 
    </a>
  </button>
</div>

<?php $row++; ?>
@if($row % 2 == 0)
  </div>
@endif
<?php $count++; ?>
@endforeach


      </section>

@endsection
