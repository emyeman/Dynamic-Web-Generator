@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')
<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Domain
                    <small>
                    <!-- <i>Hello current_user</i> -->
                    @if(!$domain)
                    <div class='col-lg-offset-11 col-ms-1'>
                        <a href='/domain/create'><span class="glyphicon glyphicon-plus"></span></a>
                    </div></small>
                    @endif
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
            <div class="col-md-10">
               <table class="table">
                    <tr>
                    @if($domain)
                        <td>{{ $domain->Domain_name }}</td>
                        <td><a href="/domain/edit/{{  $domain->id }}" class="btn btn-primary">Edit</a></td>
                    @else
                        <h1>Empty Set</h1>
                    @endif
                    </tr>
                </table>
            </div> 
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>


</div>
@endsection


    