<div class="white-text">
    <div class="row light-green">
      <div class="col s12">
        <h4 align="center" style="font-weight: bold;"><?php echo Content::getContent('about'); ?></h4>
      </div>
    </div>
    <div class="row light-green darken-1" style=" margin-top: -20px">
      <div class="col s12">
        <div class="container" style="margin-bottom: 20px;">
            <h3>Visi Misi</h3>
            <?php echo Content::getContent('visimisi'); ?>
        </div>
      </div>
    </div>
    <div class="row light-green darken-2" style=" margin-top: -20px">
      <div class="col s12">
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <h5><?php echo Content::getContent('organisasi'); ?></h5>
                    <p><?php echo Content::getContent('alamat'); ?></p>
                </div>
                <div class="col s6 black-text">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:400px;'><div id='gmap_canvas' style='height:320px;width:400px;'></div><div><small><a href="http://embedgooglemaps.com">                                   embed google maps                           </a></small></div><div><small><a href="http://www.buyinstagramfollowersreviews.net/">buy instagram followers cheap</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(-7.965804318308881,110.59729253862305),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-7.965804318308881,110.59729253862305)});infowindow = new google.maps.InfoWindow({content:'<strong>Gunungkidul Open Source</strong><br>Wonosari, Gunungkidul<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>