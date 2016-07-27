@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
<div class="col-sm-9">
<!-- Main content -->
    <section class="content">
    <div class="col-md-6 col-md-offset-3">
      <img src="{{url('assets/reseller_assets/images/10.png')}}" width="350" height="329" class="img-responsive" style="margin-left: 100px;
              margin-top: -15px;">
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
     <div class="row">
   
        <div class="col-md-12 col-xs-12  col-md-offset-2">
         
           <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title"><a href="{{url('/contactus')}}"><span class="glyphicon glyphicon-backward"></span></a>
              Edit Contact Us</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
       {!!Form::open(['route'=>['contactus.update',$contact->id],'files'=>true,'method'=>'put']) !!}
        
        <div class='form-group'>
            <label class='col-md-2'>En_Address:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                 @if($contact->address==NULL)
                <input placeholder='PlZ,enter your address' class='form-control' name='address' type='text'/>
                @else
                <input value="{{$contact->address}}" class='form-control' name='address' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Ar_Address:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->ar_address==NULL)
                    <input placeholder='من فضلك ادخل عنوانك' class='form-control' name='ar_address' type='text'/>
                @else
                <input value="{{$contact->ar_address}}" class='form-control' name='ar_address' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>En_Phone:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->phone==NULL)
                    <input placeholder='PlZ,enter your phone' class='form-control' name='phone' type='number'/>
                @else
                    <input value="{{$contact->phone}}" class='form-control' name='phone' type='number'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Ar_Phone:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->ar_phone==NULL)
                    <input placeholder='من فضلك ادخل التلفون' class='form-control' name='ar_phone' type='number'/>
                @else
                    <input value="{{$contact->ar_phone}}" class='form-control' name='ar_phone' type='number'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>En_Mobile:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->mobile==NULL)
                    <input placeholder='PlZ,enter your mobile' class='form-control' name='mobile' type='number'/>
                @else
                    <input value="{{$contact->mobile}}" class='form-control' name='mobile' type='number'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Ar_Mobile:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->ar_mobile==NULL)
                    <input placeholder='من فضلك ادخل رقم الجوال' class='form-control' name='ar_mobile' type='number'/>
                @else
                    <input value="{{$contact->ar_mobile}}" class='form-control' name='ar_mobile' type='number'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>E-mail:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'>@</span>
                @if($contact->email==NULL)
                    <input placeholder='PlZ,enter your email' class='form-control' name='email' type='email'/>
                @else
                    <input value="{{$contact->email}}" class='form-control' name='email' type='email'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Fax:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->fax==NULL)
                    <input placeholder='PlZ,enter your fax' class='form-control' name='fax' type='number'/>
                @else
                    <input value="{{$contact->fax}}" class='form-control' name='fax' type='number'/>
                @endif
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Facebook:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->facebook==NULL)
                    <input placeholder='PlZ,enter your facebook Like (aaabbb)' class='form-control' name='facebook' type='text'/>
                    <!-- <span style="color:blue;" class='col-lg-offset-3' id="spemail">Please enter a valid facebook address Like (aaabbb).  </span> -->

                @else
                    <input value="{{$contact->facebook}}" class='form-control' name='facebook' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Google+:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->google_plus==NULL)
                    <input placeholder='PlZ,enter your google plus' class='form-control' name='google_plus' type='text'/>
                @else
                    <input value="{{$contact->google_plus}}" class='form-control' name='google_plus' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Instagram:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->instagram==NULL)
                    <input placeholder='PlZ,enter your instagram' class='form-control' name='instagram' type='text'/>
                @else
                    <input value="{{$contact->instagram}}" class='form-control' name='instagram' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Pinterest:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->pinterest==NULL)
                    <input placeholder='PlZ,enter your pinterest' class='form-control' name='pinterest' type='text'/>
                @else
                    <input value="{{$contact->pinterest}}" class='form-control' name='pinterest' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Linkedin:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->linkedin==NULL)
                    <input placeholder='PlZ,enter your linkedin' class='form-control' name='linkedin' type='text'/>
                @else
                    <input value="{{$contact->linkedin}}" class='form-control' name='linkedin' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Youtube:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->youtube==NULL)
                    <input placeholder='PlZ,enter your youtube' class='form-control' name='youtube' type='text'/>
                @else
                    <input value="{{$contact->youtube}}" class='form-control' name='youtube' type='text'/>
                @endif
            </div>
        </div>  

        <!-- for display select between write address and use google map -->
        <!-- <div class='col-lg-offset-4 col-ms-8' id="sel_googlemap"> -->
            <!-- <label class='col-md-2'>SelectTo Enter Your Address:</label><br/> -->
            <!-- <h1> <a class="getaddress btn btn-primary btn-lg">Enter localization  <span class="glyphicon glyphicon-pencil"></span> </a>
              &nbsp; <a class="getlocation"><span class="google glyphicon glyphicon-globe"></span> </a></h1>
        
        </div> -->
<!--         <br/>
 -->     <div  id="enterlatlng">      
            <div class='form-group'>
                  <label class='col-md-2'>Latitude (X):</label>
                  <div class='col-md-10 input-group'>
                      <span class='input-group-addon'>X</span>
                      <input value="{{$contact->lat}}" class='form-control' name='latitude' type='text'/>
                  </div>
              </div>

              <div class='form-group'>
                  <label class='col-md-2'> Longitude(Y):</label>
                  <div class='col-md-10 input-group'>
                      <span class='input-group-addon'>Y</span>
                      <input value="{{$contact->lng}}" class='form-control' name='longitude' type='text'/>
                  </div>
              </div> 
          </div>
        <div  id="googlelatlng">    
<!--           <div class='form-group'>
              <label class='col-md-2'>Latitude (X):</label>
              <div class='col-md-10 input-group'>
                  <span class='input-group-addon'>X</span>
                  <input placeholder='PlZ,enter your latitude X' class='form-control' name='latitude' type='text'/>
              </div>
          </div>

          <div class='form-group'>
              <label class='col-md-2'> Longitude(Y):</label>
              <div class='col-md-10 input-group'>
                  <span class='input-group-addon'>Y</span>
                  <input placeholder='PlZ,enter your longitude Y' class='form-control' name='longitude' type='text'/>
              </div>
          </div> 
 -->
       </div> 
        <div class='col-lg-offset-11 col-ms-1' id="sel_googlemap">
            <h1><a class="getlocation"><span class="google glyphicon glyphicon-globe"></span> </a></h1>
        
        </div>
        <!-- for enter adress to obtain googlemap -->
         <div id="savelocation">
                <!-- there draw input of value lat and lon  and draw google map -->
               <br/><br/>                     
          </div> 

        <!-- <span class='col-md-2'></span> col-xs-8 -->
       <div class="col-md-10 col-md-offset-1">  
       <br/>     
           <div class="box">
              <div class="box-header">
                  <div class="box-footer clearfix">
                 <div class="input-group-btn">Edit
                      <input type='submit' class='btn-flat pull-right form-control btn btn-primary' name='ok' value='Edit' />   
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
        
        <!-- /.col -->
      </section>
    <!-- /.content -->
</div> 
</div>  



<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        console.log('hiiiiiii');
    //************************ for make validation **************************
            //  var emailspan=document.getElementById("spemail");
            //  var contemail=document.getElementById("email");
            
            //  // valdation for email
            //  contemail.onblur=function(){
            //   // $('#contemail').click(function() {  
            //    var checkma=/[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
            //    console.log(this.value);
            //     if(this.value.match(checkma))
            //       { 
            //         this.className="form-control";
            //         emailspan.style.display="none";
            //       }
            //       else
            //       {
            //         // this.focus();
            //         this.select();
            //         this.className="form-control Error";
            //         emailspan.style.display="block";
            //       }   
            // // });
            //     }    

// ************************************ end validation ******************************************
                  // for google map
            // document.getElementById('googlelatlng').style.display = "none";      
            savelocation = document.getElementById('savelocation');
            savelocation.style.width="646px";
            savelocation.style.height="605px";
            var token = $('#token').attr('content');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
            document.getElementById('googlelatlng').style.display = "none";
            document.getElementById('savelocation').style.display = "none";
                //for use google map and display map
            $('.getlocation').click(function() {
            if(navigator.geolocation)
            {
                navigator.geolocation.getCurrentPosition(getmylocation, errorhandeler);
            }
            else
            {
                msg="Not Supported !";
                $('#savelocation').html(msg);
            }
         });

        function getmylocation(position) {

            document.getElementById('enterlatlng').style.display = "none";
            document.getElementById('savelocation').style.display = "block";
            document.getElementById('googlelatlng').style.display = "block";

             // for display google map of this location
            lat = position.coords.latitude;
            lon = position.coords.longitude;
            latlon = lat + ' , ' + lon;
            var showdata;
console.log(latlon);
             showdata="<div class='form-group'>";
             showdata+="<label class='col-md-2'>Latitude (X):</label>";
             showdata+="<div class='col-md-10 input-group'>";
             showdata+=" <span class='input-group-addon'>X</span>";
             showdata+="<input value="+lat+" class='form-control' name='latitude' type='text'/>";
             showdata+="</div>";
             showdata+="</div>";

          showdata+="<div class='form-group'>";
          showdata+=" <label class='col-md-2'> Longitude(Y):</label>";
          showdata+="<div class='col-md-10 input-group'>";
          showdata+="<span class='input-group-addon'>Y</span>";
          showdata+="<input value="+lon+" class='form-control' name='longitude' type='text'/>";
          showdata+="</div>";
          showdata+="</div>"; 
          $('#googlelatlng').html(showdata);

          // for display google map
            var savedata;
            // savedata="<input type='hidden' name='latitude' value="+lat+">";
            // savedata+="<input type='hidden' name='longitude' value="+lon+">";

            img = "http://maps.googleapis.com/maps/api/staticmap?center="
             + latlon + "&markers=color:blue|label:N|" + latlon + "&zoom=15&size=1057x600&sensor=false";
            savedata+="<img src='{{url("+img+")}}/>";

            $('#savelocation').html(savedata);
            console.log(latlon);
            }

        function errorhandeler(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    map.innerText = "PERMISSION_DENIED";
                    break;
                case error.POSITION_UNAVAIABLE:
                    map.innerText = "POSITION_UNAVAIABLE";
                    break;
                case error.TIMEOUT:
                    map.innerText = "TIMEOUT";
                    break;
                case error.UNKONWON_ERROR:
                    map.innerText = "UNKONWN_ERROR";
                    break;
            }

        }

        // for enter address
        // $('.getaddress').click(function() {            
        //     document.getElementById('googlelatlng').style.display = "block";
        //     document.getElementById('savelocation').style.display = "none";
            
        //     });

    });//end function
</script>

@endsection


    