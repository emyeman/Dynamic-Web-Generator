@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
      <h2><div class='col-lg-1 col-ms-1'>
            <a href='/contactus'><span class="glyphicon glyphicon-backward"></span></a>
        </div></small>Edit Contact Us</h2>
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
    {!!Form::open(['route'=>['contactus.update',$contact->id],'files'=>true,'method'=>'put']) !!}
        
        <div class='form-group has-warning'>
            <label class='col-md-2'>Address:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input value="{{$contact->address}}" class='form-control' name='address' type='text'/>
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Phone:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->phone==NULL)
                    <input placeholder='PlZ,enter your phone' class='form-control' name='phone' type='text'/>
                @else
                    <input value="{{$contact->phone}}" class='form-control' name='phone' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Mobile:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->mobile==NULL)
                    <input placeholder='PlZ,enter your mobile' class='form-control' name='mobile' type='text'/>
                @else
                    <input value="{{$contact->mobile}}" class='form-control' name='mobile' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>E-mail:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'>@</span>
                @if($contact->email==NULL)
                    <input placeholder='PlZ,enter your email' class='form-control' name='email' type='text'/>
                @else
                    <input value="{{$contact->email}}" class='form-control' name='email' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Fax:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->fax==NULL)
                    <input placeholder='PlZ,enter your fax' class='form-control' name='fax' type='text'/>
                @else
                    <input value="{{$contact->fax}}" class='form-control' name='fax' type='text'/>
                @endif
            </div>
        </div>  
        <div class='form-group has-warning'>
            <label class='col-md-2'>FaceBook:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->facebook==NULL)
                    <input placeholder='PlZ,enter your facebook' class='form-control' name='facebook' type='text'/>
                @else
                    <input value="{{$contact->facebook}}" class='form-control' name='facebook' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group has-warning'>
            <label class='col-md-2'>Google_Plus:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->google_plus==NULL)
                    <input placeholder='PlZ,enter your google plus' class='form-control' name='google_plus' type='text'/>
                @else
                    <input value="{{$contact->google_plus}}" class='form-control' name='google_plus' type='text'/>
                @endif
            </div>
        </div> 
        <div class='form-group has-warning'>
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
        <div class='form-group has-warning'>
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
        <div class='form-group has-warning'>
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
        <div class='form-group has-warning'>
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
            <!-- image googlemap  -->
        <img width="500px" src='http://maps.googleapis.com/maps/api/staticmap?center={{$contact->lat_lon}}&markers=color:blue|label:N|{{$contact->lat_lon}}&zoom=15&size=1057x600&sensor=false'/>
        <br/>
        <!-- for display select between write address and use google map -->
        <div class='col-lg-offset-4 col-ms-8' id="sel_googlemap">
            <!-- <label class='col-md-2'>SelectTo Enter Your Address:</label><br/> -->
            <h1> <a class="getaddress btn btn-primary btn-lg">Edit Address  <span class="glyphicon glyphicon-pencil"></span> </a>
              &nbsp; <a class="getlocation"><span class="google glyphicon glyphicon-globe"></span> </a></h1>
        
        </div>
        <br/>
        <!-- for enter adress to obtain googlemap -->
         <div id="savelocation">
                <!-- there draw input of value lat and lon  and draw google map -->

               <br/><br/>                     
          </div> 
            
        <div class='form-group has-warning' id="enteraddress">
            <label class='col-md-2'>Address:</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                @if($contact->address==NULL)
                    <input placeholder='PlZ,enter your address' class='form-control' name='address' type='text'/>
                @else
                    <input value="{{$contact->address}}" class='form-control' name='address' type='text'/>
                @endif
            </div>
            <br/>
        </div>

        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='Edit' />
      {!!Form::close() !!}

      <br/><br/>

        <!-- for make cancel -->
        <!-- <a class="col-md-10 btn btn-info btn-lg" href="/contactus" >Cansel Edit<span class="glyphicon glyphicon-edit"></span></a> -->

      <br><br>
      <br><br>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

</div>

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src='/assets/js/jquery-2.1.4.min.js'></script>
<script type="text/javascript" src='/assets/js/jquery-1.12.0.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        console.log('hiiiiiii');
        // console.log({{$contact->lat_lon}});
        

        // var str = "{{$contact->lat_lon}}";
        // var res = str.split(",");
        // console.log(res[0]);
            savelocation = document.getElementById('savelocation');
            savelocation.style.width="646px";
            savelocation.style.height="650px";
            var token = $('#token').attr('content');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
            document.getElementById('enteraddress').style.display = "none";
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

            document.getElementById('enteraddress').style.display = "none";
            document.getElementById('savelocation').style.display = "block";

             // for display google map of this location
            lat = position.coords.latitude;
            lon = position.coords.longitude;
            latlon = lat + ' , ' + lon;
            var savedata;
            savedata="<input type='hidden' name='latitude' value="+lat+">";
            savedata+="<input type='hidden' name='longitude' value="+lon+">";

            img = "http://maps.googleapis.com/maps/api/staticmap?center="
             + latlon + "&markers=color:blue|label:N|" + latlon + "&zoom=15&size=1057x600&sensor=false";
            savedata+="<img src='"+img+"'/>";

            // button for make cancel btn-lg
            savedata+="<br/>";
            savedata+="<a class='cancelgooglemap col-lg-offset-10 btn btn-info'>Cansel Edit <span class='glyphicon glyphicon-edit'></span></a>";

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
        $('.getaddress').click(function() {            
            document.getElementById('enteraddress').style.display = "block";
            document.getElementById('savelocation').style.display = "none";
            
            }); //for function enter address

        // for enter cancel googlemap
        $('.cancelgooglemap').click(function() {            
            document.getElementById('enteraddress').style.display = "none";
            document.getElementById('savelocation').style.display = "none";
            var savedata;
            savedata="<input type='hidden' name='latitude' value=''>";
            savedata+="<input type='hidden' name='longitude' value=''>";
            $('#savelocation').html(savedata);
            
            }); //for function cancel googlemap

    });//end function
</script>

@endsection
<!-- 
<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src='/assets/js/jquery-2.1.4.min.js'></script>
<script type="text/javascript" src='/assets/js/jquery-1.12.0.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        console.log('hiiiiiii');
    //************************ for make validation **************************
             var emailspan=document.getElementById("spemail");
             var contemail=document.getElementById("email");
             var phonespan=document.getElementById("spphone");
             var contphone=document.getElementById("phone");
             var mobilespan=document.getElementById("spmobile");
             var contmobile=document.getElementById("mobile");
             var faxspan=document.getElementById("spfax");
             var contfax=document.getElementById("fax");
             var facebookspan=document.getElementById("spfacebook");
             var contfacebook=document.getElementById("facebook");
             var instagramspan=document.getElementById("spinstagram");
             var continstagram=document.getElementById("instagram");
             var googlespan=document.getElementById("spgoogle");
             var contgoogle=document.getElementById("google");
             var linkedinspan=document.getElementById("splinkedin");
             var contlinkedin=document.getElementById("linkedin");
             var pinterestspan=document.getElementById("sppinterest");
             var contpinterest=document.getElementById("pinterest");
             var youtubespan=document.getElementById("spyoutube");
             var contyoutube=document.getElementById("youtube");

             // valdation for email
             contemail.onblur=function(){
              // $('#contemail').click(function() {  
               var checkma=/[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
               console.log(this.value);
                if(this.value.match(checkma))
                  { 
                    this.className="form-control";
                    emailspan.style.display="none";
                  }
                  else
                  {
                    // this.focus();
                    this.select();
                    this.className="form-control Error";
                    emailspan.style.display="block";
                  }   
            // });
                }  

            //         // validation for phone
            // contphone.onblur=function(){
            // // $('#contphone').click(function() {   
            //    var checkph= /[0-9]{7}/;
            //     if(this.value.match(checkph))
            //       { 
            //         this.className="form-control";
            //         phonespan.style.display="none";
            //       }
            //       else
            //       {
            //         // this.focus();
            //         this.select();
            //         this.className="form-control Error";
            //         phonespan.style.display="block";
            //       }   
            // // }); 
            // }   


            
            // validation for mobile
            contmobile.onblur=function(){
            // $('#contmobile').click(function() {   
               var checkmob= /[0-9]{10}/;
                if(this.value.match(checkmob))
                  { 
                    this.className="form-control";
                    mobilespan.style.display="none";
                  }
                  else
                  {
                    // this.focus();
                    this.select();
                    this.className="form-control Error";
                    mobilespan.style.display="block";
                  }   
            // }); 
            } 
                //validation for facebook
            contfacebook.onblur=function(){
            // $('#contfacebook').click(function() {
               var checkfac= /[a-zA-z]{5,40}/;
                if(this.value.match(checkfac))
                  { 
                    this.className="form-control";
                    facebookspan.style.display="none";
                  }
                  else
                  {
                    // this.focus();
                    this.select();
                    this.className="form-control Error";
                    facebookspan.style.display="block";
                  }   
            // }); 
            } 

                        // validation for fax
            contfax.onblur=function(){
            // $('#contfax').click(function() {

               var checkfax= /[0-9]{9}/;
                if(this.value.match(checkfax))
                  { 
                    this.className="form-control";
                    faxspan.style.display="none";
                  }
                  else
                  {
                    // this.focus();
                    this.select();
                    this.className="form-control Error";
                    faxspan.style.display="block";
                  }   
            // });
            }   

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

 -->    