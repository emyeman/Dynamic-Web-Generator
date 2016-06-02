@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show  Branding
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive" width="500" height="30" src="{{ url($branding['logo']) }}" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <h3><label >Company Name: &nbsp;</label>{{ $branding['company_name'] }}<br/>
                <label >Company Slogan:&nbsp;</label>{{ $branding['slogan'] }}</h3>
                 <h4><label >Publish At:&nbsp;</label>{{ $branding['created_at'] }}</h4>
                <a class="btn btn-primary" href="#" >Edit Branding</a><span class="glyphicon glyphicon-chevron-right"></span>

                <a class="btn btn-danger" href="#">Remove Branding</a><span class="glyphicon glyphicon-chevron-right"></span>
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

 </div>
@endsection


    