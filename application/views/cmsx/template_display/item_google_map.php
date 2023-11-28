 <? 
 
 	$i = json_decode($jsondata);

    $style = "margin-left:{$i->ml}px;";
    $style .= "margin-right:{$i->mr}px;";
    $style .= "margin-bottom:{$i->mb}px;";
    $style .= "margin-top:{$i->mt}px;";

    $style .= "padding-left:{$i->pl}px;";
    $style .= "padding-right:{$i->pr}px;";
    $style .= "padding-bottom:{$i->pb}px;";
    $style .= "padding-top:{$i->pt}px;";

?>
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>">  
    <div class="wrap" style="">
          <div id="map_canvas"></div>
            <style type="text/css">
                #map:hover img{
                opacity: 0.8;
                }
                .google-map{
                margin:30px 0 0 0 ;
                width: 100%;
                }
                #map_canvas {
                border: 1px solid #000;
                width: 100%;
                height: 400px;
                margin: 0 auto;
                }
            </style>
            <script type="text/javascript"
                src="http://maps.google.co.th/maps/api/js?key=AIzaSyCPuVKfynlixzVRAPfO4D1w5xV4ItBeBbQ"> </script>
            <script type="text/javascript">
                function initialize() {
                  var image ;
                  var myLatLng = new google.maps.LatLng(<?=$companyData->latitude ?>, <?=$companyData->longitude ?>);
                  
                  var myOptions = {
                    zoom: 16,
                  mapTypeControl: false,
                    center: myLatLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                  };
                  
                  var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
                
                  var contentString = '<?=$this->session->userdata('site_lang')=='EN'?$companyData->com_name_en:$companyData->com_name_th?><br /><?=$this->session->userdata('site_lang')=='EN'?$companyData->com_address_en:$companyData->com_address_th?><br />โทรศัพท์ : <?=$companyData->com_phone?>';
                
                  var infowindow = new google.maps.InfoWindow({
                      content: contentString
                  });
                  
                  
                  
                  var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map
                   });
                   
                  google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                  
                  });
                  
                  var marker2 = new google.maps.Marker({
                  position: new google.maps.LatLng(<?php echo $companyData->latitude ?>, <?php echo $companyData->longitude ?>),
                  map: map,
                  icon: image
                  })
                  
                  google.maps.event.addListener(marker2, 'click', function() {
                  infowindow2.open(map,marker2);
                  });
                
                } 
                initialize();
            </script>
            <div style="text-align: center;">
              <a href="https://maps.google.com/?q=<?=$companyData->latitude ?>,<?=$companyData->longitude ?>" target="_blank">
                    <button class="submit" type="submit" style="background-color: red;
                        padding: 11px 39px;
                        color: white;
                        border: none;
                        margin: 32px;
                        border-radius: 4px;">นำทาง</button> 
                    </a>
            </div>  
    </div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>