@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" id="afterdelet">
                    <span class="google glyphicon glyphicon-globe"></span>Show Google Map</h1>
                        <!-- <small><i>Hello current_user</i> </small>-->

                        <?php $flagadd=0?>
                        @foreach($googlemaps as $googlemap)
                            @if($googlemap->id==Auth::user()->id)
                                <?php $flagadd=1?>
                            @endif
                        @endforeach

                        @if($flagadd==0)
                            {!!Form::open(['route'=>'googlemap.store','method'=>'post']) !!}
                                <div id="savelocation">
                                    
                                </div>      
                                <div class='col-lg-offset-11 col-ms-1'>
                                <input type='submit' class='btn btn-primary btn-lg' name='ok' value='Add' />
                                </div>
                           {!!Form::close() !!}
                        @else
                            {!!Form::open(['route'=>['googlemap.update',$googlemap->id],'files'=>true,'method'=>'put']) !!}
                                <div id="savelocation">
                                    
                                </div>      
                                <div class='col-lg-offset-11 col-ms-1'>
                                <input type='submit' class='btn btn-primary btn-lg' name='ok' value='Edit' />
                                </div>
                           {!!Form::close() !!}
                        @endif
                    
                
            </div>
        </div>
        <!-- /.row -->
        <hr/> 
        <div class="row">
            <div class="col-lg-offset-10 col-md-1">
                <!-- <h3><label >Maping:</label></h3> -->
                @if($flagadd==1)
                    <a id="{{$googlemap->id}}" class="btn btn-danger delete"><span class="glyphicon glyphicon-remove"></span> </a>
                @endif
            </div>
            <div class="col-lg-offset-1 col-md-10">
                <!-- <div id="map">

                </div> -->

                @foreach($googlemaps as $googlemap)
                    <img src='http://maps.googleapis.com/maps/api/staticmap?center={{$googlemap->latitude}},{{$googlemap->longitude}}&markers=color:blue|label:N|{{$googlemap->latitude}},{{$googlemap->longitude}}&zoom=15&size=1057x600&sensor=false'/>
                @endforeach
            </div>
            
        </div>
        <!-- /.row -->
        <hr/>
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
            // map = document.getElementById('map');
            // map.style.width="646px";
            // map.style.height="605px";
            if(navigator.geolocation)
            {
                navigator.geolocation.getCurrentPosition(getmylocation, errorhandeler);
                
            }
            else
            {
                map.innerText = "Not Supported Google Map!";
            }



        function getmylocation(position) {
             // for display google map of this location

            lat = position.coords.latitude;
            lon = position.coords.longitude;
            latlon = lat + ' , ' + lon;
            var savedata;
            savedata="<input type='hidden' name='latitude' value="+lat+">";
            savedata+="<input type='hidden' name='longitude' value="+lon+">";
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

        // for make delete google map
        $('.delete').on('click',function(event){
            event.preventDefault();
            //Declaration
            var token = $('#token').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            document.getElementById('afterdelet').style.display = "block";
            del_googlemap=$(this);
            id=$(this).attr('id');
            $.ajax({
                type: "DELETE",
                url: '/googlemap/'+ id, //resource
                data:   { _token :token },
                success: function(del_googlemaps) { 
                    del_googlemap.parent().parent().remove();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    });//end function
</script>
  
@endsection


