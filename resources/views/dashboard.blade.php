@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard
                    <small><i>Hello <font color="green">{{ Auth::user()->name }}</font></i></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-10">
                <h3>Message for Dashboard .....................<br/>
                ............................................................<br/>
                ............................................................<br/>
                ............................................................<br/>
                ............................................................<br/>
                ............................................................<br/>
                ............................................................<br/></h3>
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>
 
</div>
@endsection
