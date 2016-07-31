@extends('layouts.UserDashboard')

@section('content')
{{-- <div class="container"> --}}

@include('../UserDashboardHeader')
{{-- <div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Show Domain
                    <small>
                    <!-- <i>Hello current_user</i> -->
                    @if(!$domain)
                    <div class='col-lg-offset-11 col-ms-1'>
                        <a href="{{url('/domain/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
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
                        <td><a href="{{ url('/domain/edit/'.$domain->id) }}">
                        <span class="glyphicon glyphicon-edit edit" id="{{$domain->id}}"></span></a></td>
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


</div> --}}
        <section class="content">
     <div class="row">
     @if(!$domain)
            <div class="pull-right">
              <a href="{{url('/domain/create')}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i>
              </a>
            </div>
    @endif
        </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
        <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Edit</th>
                    </tr>
                    <tr>
                    @if($domain)
                        <td>{{ $domain->Domain_name }}</td>
                        <td><a href="{{ url('/domain/edit/'.$domain->id) }}">
                        <span class="glyphicon glyphicon-edit edit" id="{{$domain->id}}"></span></a></td>
                    @else
                        <h1 style="color:red;text-align:center;">Empty Set</h1>
                    @endif
                    </tr>
                </table>
      </div>
      </div>
      </div>
      </div>
        </section>
@endsection


    