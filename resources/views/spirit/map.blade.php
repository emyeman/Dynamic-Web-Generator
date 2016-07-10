<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div style='overflow:hidden;height:440px;width:700px;'>
<div id='gmap_canvas' style='height:440px;width:700px;'>
	
</div>
<div>
<small>
<a href="http://embedgooglemaps.com">		
	embed google maps
</a>
</small>
</div>
<div>
<small><a href="https://privacypolicygenerator.info">privacy policy generator</a></small>

</div>
<style>#gmap_canvas img{max-width:none!important;background:none!important;}</style>
</div>
<script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(51.310332701209546,-0.1277582999999849),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.310332701209546,-0.1277582999999849)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>London, United Kingdom<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>




<!-- *********************************************************************  -->

<!-- <div id="googleMap" style="width:100%;height:500px;"></div>
            <?php 
                $lat=$contact->lat;
                $lng=$contact->lng;
            ?> -->



            
       <!--  // <script
        //         src="http://maps.googleapis.com/maps/api/js">
        // </script>

        // <script>
        // console.log(<?php echo $lat;?>);
        // console.log(<?php echo $lng;?>);
        //     function initialize() {
        //         var mapProp = {
        //             center:new google.maps.LatLng(<?php echo $lat;?>,<?php echo $lng;?>),
        //             zoom:5,
        //             mapTypeId:google.maps.MapTypeId.ROADMAP
        //         };
        //         var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        //     }
        //     google.maps.event.addDomListener(window, 'load', initialize);

        // </script> -->