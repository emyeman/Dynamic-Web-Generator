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
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/14-a.png')}}" class="img-responsive"> 
        </div></div>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; ">  
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

    <br><br>
    @if(Session::has('insert_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
    @endif


    {!!Form::open(['route'=>'ticket.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}

        <input class='form-control reseller_id' id='reseller_id' name='reseller_id' type='hidden' value="{{$user->user_id}}"/>
        <div class="form-group">
        	<label class='col-md-1'></label>
        	<div class='col-md-10 input-group'>
				<label class="form-control">To: &nbsp; {{$reseller->email}} &nbsp; ({{$reseller->name}})</label>
			</div>
		</div>
		
        <div class='form-group'>
            <label class='col-md-1'></label>
            <div class='col-md-10 input-group'>
            	<input placeholder="Subject:" class='form-control title_ticket' id='title_ticket' name='subject' type='text' value="{{old('subject')}}"/>
                <span id="title_err" style="color:red; size:12px; margin-top:32px; padding:10px 100px;font-weight:bold;background-color:lightpink;">Subject of this ticket already exists.PLZ,Write another title ...</span>            
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-1'></label>
            <div class='col-md-10 input-group'>                
                <!-- <input placeholder='PlZ,enter description' class='form-control'name='description' type='text' />--> 
                <textarea style="height: 270px" placeholder='Message ...' class='form-control' name='message'>{{old('message')}}</textarea> 

            </div>
        </div>      
          
        <!-- <span class='col-md-1'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value="send" /> -->
        <!-- <span class='col-md-2'></span> col-xs-8 -->
             <div class="col-md-10 col-md-offset-1">       
                 <div class="box">
                    <div class="box-header">
                        <div class="box-footer clearfix">
                        <div class="input-group-btn">
                           <div class="row">
                           <div class="col-md-4">
                             <a href="{{url('/ticket')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:250px;"></a>
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
    </section>
        <!-- /.content -->
</div>  

<meta name="_token" id='token' content="{!! csrf_token() !!}"/>
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('.title_ticket').on('blur',function(event) {            
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
        
        $.get("{{url('/ticket/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_ticket').focus();
               $('.title_ticket').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>

@endsection


    