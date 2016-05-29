@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show SubCategories
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive" width="500" height="30" src="/assets/images/SubCategory.jpg" alt="">
                </a>
            </div>
            <div class="col-md-7">
            <h3><label >Title Category:</label><br/>
                <label >Title SubCategory:</label><br/>
                <label >Description:</label></h3>
                 <h4><label >Publish At:</label></h4>
                <a class="btn btn-primary" href="#" >Edit SubCategory</a><span class="glyphicon glyphicon-chevron-right"></span>

                <a class="btn btn-danger" href="#">Remove SubCategory</a><span class="glyphicon glyphicon-chevron-right"></span>
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>
</div>
@endsection


    