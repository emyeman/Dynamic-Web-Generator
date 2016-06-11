@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
 <?php $flagadd=0?>
    @foreach($contacts as $contact)
        @if($contact->site_id==Auth::user()->id)
            <?php $flagadd=1?>
        @endif
    @endforeach
 @if($flagadd==0)
  <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/contactus')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div></small>Add New Contact Us</h2>
      <br><br>
        
      {!!Form::open(['route'=>'contactus.store','method'=>'post']) !!}

        <div class='form-group has-warning'>
            <label class='col-md-2'>Address:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your address' class='form-control' name='address' type='text'/>
            </div>
        </div> 

        <div class='form-group has-warning'>
            <label class='col-md-2'>Phone:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your phone' class='form-control'id=='phone' name='phone' type='text'/>
            </div>
          <span class='col-lg-offset-3' id="spphone">Please enter a valid phone number Like (34125678).  </span>  
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Mobile:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your mobile' class='form-control' id='mobile' name='mobile' type='text'/>
            </div>
             <span class='col-lg-offset-3' id="spmobile">Please enter a valid mobile number Like (01023456789).  </span>                        
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>E-mail:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'>@</span>
                <input placeholder='PlZ,enter your e-mail' id="email" class='form-control' name='email' type='text'/>
            </div>
             <span class='col-lg-offset-3' id="spemail">Please enter a valid email address Like (test@Gmail.com).  </span>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Fax:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your fax' class='form-control' id='fax' name='fax' type='text'/>
            </div>
            <span class='col-lg-offset-3' id="spfax">Please enter a valid fax address Like ().  </span>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>FaceBook:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your facebook' class='form-control' id='facebook' name='facebook' type='text'/>
            </div>
            <span class='col-lg-offset-3' id="spemail">Please enter a valid facebook address Like (aaa bbb).  </span>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Google_Plus:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your google_plus' class='form-control' id='google_plus' name='google_plus' type='text'/>
            </div>
           <span class='col-lg-offset-3' id="spgoogle">Please enter a valid google plus address Like ().  </span> 
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Instagram:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your instagram' class='form-control'id='instagram' name='instagram' type='text'/>
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Pinterest:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your pinterest' class='form-control' id='pinterest' name='pinterest' type='text'/>
            </div>
            <span class='col-lg-offset-3' id="sppinterest">Please enter a valid pinterest address Like ().  </span>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Linkedin:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your linkedin' class='form-control' id='linkedin' name='linkedin' type='text'/>
            </div>
            <span class='col-lg-offset-3' id="splinkedin">Please enter a valid linkedin address Like ().  </span>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Youtube:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter your youtube' class='form-control' id='youtube' name='youtube' type='text'/>
            </div>
            <span class='col-lg-offset-3' id="spyoutube">Please enter a valid youtube address Like ().  </span>
        </div>  

        <!-- for display select between write address and use google map -->
        <!-- <div class='col-lg-offset-4 col-ms-8' id="sel_googlemap"> -->
            <!-- <label class='col-md-2'>SelectTo Enter Your Address:</label><br/> -->
            <!-- <h1> <a class="getaddress btn btn-primary btn-lg">Enter localization  <span class="glyphicon glyphicon-pencil"></span> </a>
              &nbsp; <a class="getlocation"><span class="google glyphicon glyphicon-globe"></span> </a></h1>
        
        </div> -->
<!--         <br/>
 -->     <div  id="enterlatlng">      
            <div class='form-group has-warning'>
                  <label class='col-md-2'>Latitude (X):</label>
                  <div class='col-md-10 input-group'>
                      <span class='input-group-addon'>X</span>
                      <input placeholder='PlZ,enter your latitude X' class='form-control' name='latitude' type='text'/>
                  </div>
              </div>

              <div class='form-group has-warning'>
                  <label class='col-md-2'> Longitude(Y):</label>
                  <div class='col-md-10 input-group'>
                      <span class='input-group-addon'>Y</span>
                      <input placeholder='PlZ,enter your longitude Y' class='form-control' name='longitude' type='text'/>
                  </div>
              </div> 
          </div>
        <div  id="googlelatlng">    
<!--           <div class='form-group has-warning'>
              <label class='col-md-2'>Latitude (X):</label>
              <div class='col-md-10 input-group'>
                  <span class='input-group-addon'>X</span>
                  <input placeholder='PlZ,enter your latitude X' class='form-control' name='latitude' type='text'/>
              </div>
          </div>

          <div class='form-group has-warning'>
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
          <br/>
        <span class='col-md-1'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='add' />
      {!!Form::close() !!}

@else
    <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/contactus')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div><span style="color:red;">Sorry,Can't Add New Contact Us,PLZ press</span><a style="color:blue;" href="{{url('/contactus')}}"> here</a></h2>
@endif
      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script>
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
            //         // this.select();
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

             showdata="<div class='form-group has-warning'>";
             showdata+="<label class='col-md-2'>Latitude (X):</label>";
             showdata+="<div class='col-md-10 input-group'>";
             showdata+=" <span class='input-group-addon'>X</span>";
             showdata+="<input value="+lat+" class='form-control' name='latitude' type='text'/>";
             showdata+="</div>";
             showdata+="</div>";

          showdata+="<div class='form-group has-warning'>";
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
            savedata+="<img src='"+img+"'/>";

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


    