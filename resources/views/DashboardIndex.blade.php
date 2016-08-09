@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
<section class="content" style="background-image: url({{ url('assets/reseller_assets/images/1.jpg') }})">	
	    <div class="row">
        <div class="col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-4">
         <img src="{{ url('assets/reseller_assets/images/2.png') }}" style="margin-top:20px;" class="img-responsive" >
        </div>
        </div>
        <div class="row">
         <div class="col-xs-12">
         <div class="info">
        <h1> We Provide you with high quality templets at low prices. </h1>
        </div>
        </div>
        </div>
        
        </section>

@endsection