@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

<!-- Main content -->
    <section class="content">
    <div class="row text-uppercase" style="text-align: center;">
        <div class="row">
        <div class="col-md-4 col-md-offset-4"> 
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/13-a.png')}}" class="img-responsive"> 
        </div>
        </div>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; ">  
        </div>
    

        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Domain</h3>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- /.box-header -->
            @if(Session::has('insert_success'))
             <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
            @endif
            <div class="box-body">
      {!!Form::open(['route'=>'domain.store','method'=>'post','class'=>'form-horizontal']) !!}
                <!-- text input -->
  <div class="form-group">
  <div class="form-group">
  <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Domain Name</h3>
            <!--   <div class="pull-right">
                <a href="{{url('/domain')}}"><span class="glyphicon glyphicon-backward"></span></a>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >Domain Name *</label>
                   <input placeholder='domain name ...' class='form-control domain_name' name='domain_name' id='domain_name' type='text' value="{{old('domain_name')}}"/>
                   <span id="title_err" style="color:red; size:12px; padding:10px 100px;font-weight:bold;background-color:lightpink;">This Domain name already exists ,PLZ,Write another Domain name ...</span>
                </div>
            </div>
        </div>
        </div>
        <!-- <span class='col-md-2'></span> col-xs-8 -->
     <div class="col-md-10 col-md-offset-1">       
         <div class="box">
            <div class="box-header">
                <div class="box-footer clearfix">
               <div class="input-group-btn">
               <div class="row">
               <div class="col-md-4">
                 <a href="{{url('/domain')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:250px;"></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type='submit' class='pull-right btn btn-primary ' name='ok' value='ADD' style="width:250px;"/>   
                 </div>
                 </div>  
            </div>
            </div>
            </div>
          <!-- /.box --> 
     </div> 
     </div>
     
 {!!Form::close() !!}
             </div>
            </div>
        </div>
        </section>

<meta name="_token" id='token' content="{!! csrf_token() !!}"/>
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('.domain_name').on('blur',function(event) {            
        event.preventDefault();
        // alert($(this).text());
        console.log("emy");
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        console.log($(this));
        title=$(this).val();
        console.log(title);
        
        $.get("{{url('/domain/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.domain_name').focus();
               $('.domain_name').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>

@endsection


    