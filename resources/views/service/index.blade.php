@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show News
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">

            <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive" width="500" height="30" src="/assets/images/News.jpg" alt="">
                </a>
            </div>
            <div class="col-md-7">
               <table class="table">
                @foreach($services as $service)
                    <tr>
                        <td>{{$service->title}}</td>
                        <td>{{$service->description}}</td>
                        <td></td>
                        <td><a href="{{ url('/service/edit') }}/{{$service->id}}" class="btn btn-primary">edit</a></td>
                        <td><a href="{{ url('/service/delete') }}/{{$service->id}}" class="btn btn-danger">delete</a></td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>
@endsection


    