@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
        <section class="content" style="background-color: #EDE6C6;">
    <div class="row text-uppercase" style="text-align: center;">
        <div>
    <img style="min-width: 30%; margin-left: 400px;" src="{{url('assets/reseller_assets/images/10c.png')}}" class="img-responsive"> 
    </div>

       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; margin-bottom: 75px;">  
        </div>
    
    
     <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">View your Servies</h3>

              <div class="pull-right">
              <a href="{{url('/service/create')}}">
                <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;">
                </i>
              </a>
              </div>
              @if(Session::has('update_success'))
                <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th>Icons</th>
                  <th>English Title</th>
                  <th>Arabic Title</th>
                  <th>English Description</th>
                  <th>Arabic Description</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach($services as $service)
                <tr>
                  <td>
                  <button class="btn btn-default btn-icon" value="{{$service->icon}}" title="glyphicon-adjust" style="display: inline-block;"><i class="glyphicon {{$service->icon}}"></i></button>
                  </td>
                  <td>{{$service->title}}</td>
                  <td>{{$service->ar_title}}</td>
                  <td style="width:200px;">
                    <div >
                      <p>{{$service->description}}</p>
                    </div>
                  </td>
                <td style="width:200px;">
                    <div >
                      <p>{{$service->ar_description}}</p>
                    </div>
                  </td>
                  <td>
                            <a href="{{ url('/service/edit') }}/{{$service->id}}">
                                <span class="glyphicon glyphicon-edit edit" id="{{$service->id}}"></span>
                            </a>
                        </td> 
                        <td>
                            <a href="{{ url('/service/delete') }}/{{$service->id}}">
                                <span class="glyphicon glyphicon-remove delete" style='color:red;'></span>
                            </a>
                        </td>

                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
             </div>
        </section>
@endsection


    
