@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Services
                    <small>
                    <!-- <i>Hello current_user</i> -->
                    <div class='col-lg-offset-11 col-ms-1'>
                        <a href='/service/create'><span class="glyphicon glyphicon-plus"></span></a>
                    </div></small>
                    <!-- <small><i>Hello current_user</i></small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">

            <div class="col-md-5">
                <a href="#">
                </a>
            </div>
            <div class="col-md-7">
               <table class="table">
                @foreach($services as $service)
                    <tr>
                        <td>
                            <button class="btn btn-default btn-icon" value="{{$service->icon}}" title="glyphicon-adjust" style="display: inline-block;"><i class="glyphicon {{$service->icon}}"></i></button>
                        </td>
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


    