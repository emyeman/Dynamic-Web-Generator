@extends('layouts.UserDashboard')

@section('content')
@include('../UserDashboardHeader')
{{-- <div class="container">

@include('../UserDashboardHeader')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
        <div class="col-md-4 col-md-offset-4"> 
                <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/3.png')}}" class="img-responsive"> 
                </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
@if(isset($branding) && $branding != null)
        <div class="row">

            <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive" width="500" height="30" src="{{ url($branding[0]->logo) }}" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <h3><label >English Company Name: &nbsp;</label>{{ $branding[0]->company_name }}<br/>
                <label >Arabic Company Name: &nbsp;</label>{{ $branding[0]->ar_company_name }}<br/>
                <label >English Company Slogan:&nbsp;</label>{{ $branding[0]->slogan }}
                <label >Arabic Company Slogan:&nbsp;</label>{{ $branding[0]->ar_slogan }}
                </h3>
                 <h4><label >Publish At:&nbsp;</label>{{ $branding[0]->created_at }}

                 </h4>
                <a class="btn btn-primary" href="{{ url('branding/edit/') }}/{{ $branding[0]->id }}" >Edit Branding</a><span class="glyphicon glyphicon-chevron-right"></span>

<!--                <a class="btn btn-danger" href="{{ url('branding/destroy') }}">Remove Branding</a><span class="glyphicon glyphicon-chevron-right"></span>-->
            </div>
        </div>
        @endif
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

 </div> --}}


        <section class="content">
            <div class="row">
                <div class="col-md-4  col-md-offset-4  col-xs-12">
     <img class=" img-responsive" src="{{ url('assets/reseller_assets/images/3.png') }}" alt="brand">

                </div>  
            </div>
    <div class="row">
        <div class="col-md-6  col-md-offset-3  col-xs-12">
         <h2 style="font-weight: 900; margin-left: 50px;"> Here you can see your Brand</h2> 
        </div>  
    </div>
    <hr>
    @if(isset($branding) && $branding != null)
     <div class="row">
      <div class="col-md-5 col-md-offset-1" >

        <div class="box">
            <div class="box-header with-border">
             <center> <h3 class="box-title">Show your LOGO</h3></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <center><img src="{{ url($branding[0]->logo) }}" class="img-responsive" alt="brand"></center>
            </div>
            <div class="box-footer clearfix">
               <div class="input-group-btn"> 
               </div>
            </div>  
       </div>


       
        </div>
        <div class="col-md-5 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <center> <h3 class="box-title">Show Your Brand</h3></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
              
                <tr>
                  <td>1.</td>
                  <td>English Company Name</td>
                  <td>
                    <div class="input-group">
                      <span>{{ $branding[0]->company_name }}</span>
                    </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Arabic Company Name</td>
                  <td>
                    <div class="input-group">
                      <span>{{ $branding[0]->ar_company_name }}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>2.</td>
                  <td>English Company Slogan</td>
                  <td>
                    <div class="input-group">
                      <span>{{ $branding[0]->slogan }}</span>
                    </div>
                  </td>
                
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Arabic Company Slogan</td>
                  <td>
                    <div class="input-group">
                      <span>{{ $branding[0]->ar_slogan }}</span>
                    </div>
                  </td>
                
                </tr>

                <tr>
                  <td>3.</td>
                  <td>Publish At</td>
                  <td>   
              <div class="input-group">
                <span>{{ $branding[0]->created_at }}</span>
              </div>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
              <div class="box-footer clearfix">
              <div class="input-group-btn">
                 <a id="add-new-event" href="{{ url('branding/delete') }}/{{ $branding[0]->id }}" type="button" class="btn btn-danger btn-flat pull-right">Delete</a>  
               </div>
               <div class="input-group-btn">
                 <a id="add-new-event" href="{{ url('branding/edit') }}/{{ $branding[0]->id }}" type="button" class="btn btn-primary btn-flat pull-right">Edit</a>  
               </div>
               
            </div>
           
          </div>
          <!-- /.box --> 
     </div>
     </div>
     @endif
        <!-- /.col -->
        </section>
@endsection


    