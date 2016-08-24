@extends('layouts.UserDashboard')

@section('content')
{{-- <div class="container"> --}}

@include('../UserDashboardHeader')

<section class="content">
       <div class="row">
        <div class="col-md-4 col-md-offset-4"> 
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/13-c.png')}}" class="img-responsive"> 
        </div>
        </div>
    <div class="row text-uppercase" style="text-align: center;">
        
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; ">  
        </div>

    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif


     <div class="row">
     @if(!$domain)
      <div class="pull-right col-md-2 col-md-offset-10">
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
                        <th width='45%'>Domain Name</th>
                         <th width='20%'> &nbsp; &nbsp; Seen</th>
                        <th width='20%'> &nbsp; &nbsp; &nbsp; Status</th>
                        <th width='15%'>Edit</th>
                    </tr>
                    <tr>
                    @if($domain)
                        <td>{{ $domain->Domain_name }}</td>

                        @if($domain->is_seen==1)
                            <td> &nbsp; <span style="color:green" class='glyphicon glyphicon-eye-open'> Seen</span></td>
                        @else
                            <td> &nbsp; <span style="color:red" class='glyphicon glyphicon-eye-close'> unseen</span></td>
                        @endif

                        @if($domain->is_solved==1)
                            <td> &nbsp; <span style="color:green" class='glyphicon glyphicon-ok'> Selling</span></td>
                        @else
                            <td> &nbsp; <span style="color:red" class='glyphicon glyphicon-remove'> Not Selling</span></td>
                        @endif



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
        </div>
@endsection


    