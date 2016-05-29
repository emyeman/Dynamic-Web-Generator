@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Navbar
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-10">
                <h3><label >Menu Item Name:</label><br/>
                <label >Parent :</label><br/>
                <label >Rout To :</label></h3>
                 <h4><label >Publish At:</label></h4>
                <a class="btn btn-primary" href="#" >Edit Navbar</a><span class="glyphicon glyphicon-chevron-right"></span>

                <a class="btn btn-danger" href="#">Remove Navbar</a><span class="glyphicon glyphicon-chevron-right"></span>
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection


    