<section id="page-banner" class="page-banner-main-block" style="background-image: url('<?php echo base_url() ?>assets_theme_2020_v2/img/about/1.png')">
  <h1 class="page-banner-heading text-center">ติดต่อเรา</h1>
</section>
<section class="breadcrumb-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
          <li>ติดต่อเรา</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section id="contact" class="contact-page-main-block">
  <div class="container-fluid">
    <div style="margin-bottom: 68px;" id="map_canvas"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="contact-section">
          <h5 class="contact-heading">หน้าแรก</h5>
        </div>
        <form class="cons-contact-form" id="frm-contact" name="frm-contact" method="post" action="<?=base_url("Contactus/sendMail")?>">
          <?php if($this->session->flashdata('errors')){ ?>  
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> มีช้อผิดพลาด</h4>
            <small><?=$this->session->flashdata('errors') ?></small>
          </div>
          <?php } ?> 
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>ชื่อ <span>*</span></label>
                <input type="text" class="form-control" name="name"  placeholder="<?=$lang=='EN'?'Fullname':'ชื่อ'?>" required>
              </div>
              <div class="form-group">
                <label>เบอร์ติดต่อ</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="<?=$lang=='EN'?'phone':'เบอร์ติดต่อ'?>" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>อีเมล <span>*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="<?=$lang=='EN'?'e-mail':'อีเมล'?>" required>
              </div>
              <div class="form-group">
                <label>ชื่อบริษัท</label>
                <input type="text" class="form-control" id="com-name" name="com-name" placeholder="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label>หัวข้อ</label>
                <input type="text" class="form-control" id="subject-contact" name="subject-contact" placeholder="">
              </div>
              <div class="form-group">
                <label>ข้อความ</label>
                <textarea class="form-control" id="message-contact" name="message-contact" placeholder=""></textarea>
              </div>
            </div>
          </div>
          <?=$widget?>
          <?=$script?> <br>
          <button type="submit" class="btn btn-default">ส่งข้อความ</button>
        </form>
      </div>
      <div class="col-sm-4">
        <div class="address-block">
          <div class="address-dtl-block">
            <h5 class="address-dtl-heading"><?=$lang=='EN'?$companyData->com_name_en:$companyData->com_name_th ?></h5>
            <ul>
              <li><?
                if(strstr($companyData->com_address_th,',')){
                  $arrs = explode(',', $companyData->com_address_th);
                  foreach ($arrs as $arr) {
                    echo "$arr<br>";
                  }
                }
                else{
                   $arr = $companyData->com_address_th;
                   echo "$arr<br>";
                }
                
                ?></li>
              <li><span>T</span>  <?
                if(strstr($companyData->com_phone,',')){
                  $arrs = explode(',', $companyData->com_phone);
                  foreach ($arrs as $arr) {
                    echo "<a href='tel:$arr' >$arr</a>";
                  }
                }
                else{
                   $arr = $companyData->com_phone;
                   echo "<a href='tel:$arr' >$arr</a>";
                }
                
                ?></li>
              <li><span>E</span>  <?
                if(strstr($companyData->com_email,',')){
                  $arrs = explode(',', $companyData->com_email);
                  foreach ($arrs as $arr) {
                    echo "<a href='mailto:$arr' >$arr</a><br>";
                  }
                }
                else{
                   $arr = $companyData->com_email;
                   echo "<a href='mailto:$arr' >$arr</a><br>";
                }
                
                ?></li>
            </ul>
            <a href="https://maps.google.com/?q=<?=$companyData->latitude?>,<?=$companyData->longitude?>">View on Google Map</a>
          </div>
          <hr>
          <div class="address-arrow">
            <ul>
              <li><a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
    var myLatLng = new google.maps.LatLng(<?php echo $companyData->latitude ?>, <?php echo $companyData->longitude ?>);
    
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