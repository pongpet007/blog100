<div class="breadcrumb-area gray-bg-7">
  <div class="container">
    <div class="breadcrumb-content">
      <ul>
        <li><a href="index.html">หน้าแรก</a></li>
        <li class="active">ติดต่อเรา </li>
      </ul>
    </div>
  </div>
</div>
<div class="blog-area pb-60" style="padding-top: 60px;padding-bottom: 0px;">
  <div class="container">
    <div class="section-border">
      <h4 class="section-title section-bg-white-2"><?=$lang=='EN'?'ติดต่อเรา':'ติดต่อเรา' ?></h4>
    </div>
  </div>
</div>
<div class="about-us-area pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-lg-6 col-md-8">
            <div class="">
              <h5>ที่อยู่</h5>
              <?
                if(strstr($config->com_address_th,',')){
                  $arrs = explode(',', $config->com_address_th);
                  foreach ($arrs as $arr) {
                    echo "$arr<br>";
                  }
                }
                else{
                   $arr = $config->com_address_th;
                   echo "$arr<br>";
                }
                
                ?>
            </div>
          </div>
          <?php if ($companyData->com_phone) { ?>
            <div class="col-lg-6 col-md-4">
            <div class="">
              <h5>เบอร์โทรศัพท์</h5>
              <?
                if(strstr($config->com_phone,',')){
                  $arrs = explode(',', $config->com_phone);
                  foreach ($arrs as $arr) {
                    echo "<a href='tel:$arr' >$arr</a><br>";
                  }
                }
                else{
                   $arr = $config->com_phone;
                   echo "<a href='tel:$arr' >$arr</a><br>";
                }
                
                ?>
            </div>
          </div>
          <? } ?>

          <?php if ($companyData->com_fax) { ?>
            <div class="col-lg-6 col-md-8">
              <div class="">
                <h5>โทรสาร</h5>
                <?
                  if(strstr($config->com_fax,',')){
                    $arrs = explode(',', $config->com_fax);
                    foreach ($arrs as $arr) {
                      echo "<a href='tel:$arr' >$arr</a><br>";
                    }
                  }
                  else{
                     $arr = $config->com_fax;
                     echo "<a href='tel:$arr' >$arr</a><br>";
                  }
                  
                  ?>
              </div>
            </div>
          <? } ?>

          <?php if ($companyData->com_email) { ?>
            <div class="col-lg-6 col-md-4">
            <div class="">
              <h5>อีเมล</h5>
              <?
                if(strstr($config->com_email,',')){
                  $arrs = explode(',', $config->com_email);
                  foreach ($arrs as $arr) {
                    echo "<a href='mailto:$arr' >$arr</a><br>";
                  }
                }
                else{
                   $arr = $config->com_email;
                   echo "<a href='mailto:$arr' >$arr</a><br>";
                }
                
                ?>
            </div>
          </div>
          <? } ?>

          <?php if ($companyData->url1) { ?>
            <div class="col-lg-12 col-md-12">
            <div class="">
              <h5>เว็บไซต์</h5>
              <?
                if(strstr($config->url1,',')){
                  $arrs = explode(',', $config->url1);
                  foreach ($arrs as $arr) {
                    echo "<a target='_blank' href='$arr' >$arr</a><br>";
                  }
                }
                else{
                   $arr = $config->url1;
                   echo "<a target='_blank' href='$arr' >$arr</a><br>";
                }
                
                ?>
            </div>
          </div>
          <? } ?>
          
          
            
          
          
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <img src="assets_theme_2020_v1/img/intiporn/logo-contact.png" style="width: 100%">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row" style="">
      <div class="col-lg-12 col-md-12" style="padding-top:55px; padding-bottom: 50px;">
        <h2>กรอกข้อมูลผู้ติดต่อ</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <form class="cons-contact-form" id="frm-contact" name="frm-contact" method="post" action="<?=base_url("Contactus/sendMail")?>">
          <?php if($this->session->flashdata('errors')){ ?>  
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> มีช้อผิดพลาด</h4>
            <small><?=$this->session->flashdata('errors') ?></small>
          </div>
          <?php } ?>  
          <div class="col-md-12">
            <div class="tax-select">
              <input type="text" name="name"  placeholder="<?=$lang=='EN'?'Fullname':'ชื่อ'?>" value="<?=set_value('fullname')?set_value('fullname'):'' ?>"  required> 
            </div>
          </div>
          <div class="col-md-12">
            <div class="tax-select">
              <input type="email" name="email"  placeholder="<?=$lang=='EN'?'email':'อีเมล'?>" value="<?=set_value('email')?set_value('email'):'' ?>"  required> 
            </div>
          </div>
          <div class="col-md-12">
            <div class="tax-select">
              <input type="text" name="telephone"  placeholder="<?=$lang=='EN'?'telephone':'เบอร์ติดต่อ'?>" value="<?=set_value('telephone')?set_value('telephone'):'' ?>"  required> 
            </div>
          </div>
          <div class="col-md-12">
            <div class="tax-select">
              <textarea type="text" name="telephone"  placeholder="<?=$lang=='EN'?'telephone':'เบอร์ติดต่อ'?>" value="<?=set_value('telephone')?set_value('telephone'):'' ?>"  required> </textarea>
            </div>
          </div>
          <div class="col-md-12 " style="margin-bottom: 30px;">
            <?=$widget?>
            <?=$script?>                                    
            <button class="cart-btn-2" type="submit" style="width: 100%;background-color: #32c427;color: #fff;margin-top: 29px;">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-lg-6">
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
        <br>
        <center>
          <a href="https://maps.google.com/?q=<?=$companyData->latitude?>,<?=$companyData->longitude?>" target="_blank">
          <button type="button" class="btn btn-primary">นำทาง</button>
          </a>
        </center>
      </div>
    </div>
  </div>
</div>