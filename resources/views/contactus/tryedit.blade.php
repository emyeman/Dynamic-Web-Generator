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


    