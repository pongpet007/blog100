<footer class="footer-area black-bg pt-65" style=";padding-top: 47px; background-color:#31542E ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 30px;">
                        <h4>บริษัท อินทิพร (ประเทศไทย) จำกัด</h4>
                    </div>
                    <div class="footer-about">
                        <p>จำหน่ายเคมีภัณฑ์ ชุดน้ำยาทำใช้ในครัวเรือนและวัตถุดิบทางเคมีต่างๆ ทั้งในราคา ปลีก - ส่ง ไม่ว่าใครก็ต้องการสินค้าคุณภาพที่มีราคาไม่แพง โดยเฉพาะสินค้าอุปโภคที่เราต้องใช้ในชีวิตของเราทุกๆ วัน ไม่ว่าจะเป็นน้ำยาล้างจาน น้ำยาซักผ้าหรือสบู่ที่เราใช้ถูตัว ซึ่งน้ำยาเหล่านี้ อยู่ในชีวิตของเรา หมดเลย บริษัท อินทิพร (ประเทศไทย) จำกัด จึงช่วยตอบสนองความต้องการของลูกค้า โดยการนำหัวเชื้อเคมีต่างๆ มาจัดเป็นชุดน้ำยาที่ลูกค้าใช้ในครัวเรือนและเลือกสรรวัตถุดิบส่วนใหญ่ที่มาจากธรรมชาติ เพื่อช่วยลดค่าใช้จ่ายในครัวเรือน อีกทั้งลูกค้ายังมั่นใจได้อีกว่า " ชุดน้ำยาที่เราทำ ไม่มีสารปนเปื้อนที่เป็นอันตรายต่อเราและมีคุณภาพอย่างแน่นอน "
                        </p>
                        <div class="footer-map">
                            
                            <a href="https://www.intiponthailand.com/admin/../images/map/1.jpg" target="_blank">
                                <p id="myBtn" style="color: #fff" class=""><i class="ion-ios-location-outline"></i> ดูแผนที่</p>
                            </a>
                            
                        </div>
                    </div>
                    <!-- <div class="social-icon mr-40">
                        <ul>
                            <li><a class="facebook" href="https://www.facebook.com/IntiponCheme"><i class="ion-social-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a class="instagram" href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                        </div> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 30px;">
                        <h4>ข้อมูล</h4>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <li><a href="<?php echo base_url();?>Home ">หน้าแรก</a></li>
                            <li><a href="<?php echo base_url();?>Products ">สินค้า </a></li>
                            <li><a href="<?php echo base_url();?>Portforio">ผลงานของเรา</a></li>
                            <li><a href="<?php echo base_url();?>Video">วีดีโอสื่อการสอน</a></li>
                            <li><a href="<?php echo base_url();?>News">บล็อก</a></li>
                            <li><a href="<?php echo base_url();?>Aboutus">เกี่ยวกับเรา</a></li>
                            <li><a href="<?php echo base_url();?>Contactus"> ติดต่อเรา </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 30px;">
                        <h4>ติดต่อเรา</h4>
                    </div>
                    <div class="footer-contact">
                        <ul>
                            <li><?=$lang=='EN'?$companyData->com_name_en:$companyData->com_name_th ?><br>
                                <?
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
                                    
                                    ?>
                            </li>
                            <? if ($companyData->com_phone) { ?>
                                <li>เบอร์โทรศัพท์ : 
                                    <?
                                    if(strstr($companyData->com_phone,',')){
                                      $arrs = explode(',', $companyData->com_phone);
                                      foreach ($arrs as $arr) {
                                        echo "<a href='tel:$arr' >$arr</a><br>";
                                      }
                                    }
                                    else{
                                       $arr = $companyData->com_phone;
                                       echo "<a href='tel:$arr' >$arr</a><br>";
                                    }
                                    
                                    ?>
                                </li>
                            <? } ?>
                            
                            <? if ($companyData->com_fax) { ?>
                               <li>แฟกซ์ : 
                                    <?
                                    if(strstr($companyData->com_fax,',')){
                                      $arrs = explode(',', $companyData->com_fax);
                                      foreach ($arrs as $arr) {
                                        echo "<a href='tel:$arr' >$arr</a><br>";
                                      }
                                    }
                                    else{
                                       $arr = $companyData->com_fax;
                                       echo "<a href='tel:$arr' >$arr</a><br>";
                                    }
                                    
                                    ?>
                                </li> 
                            <? } ?>

                            <? if ($companyData->com_email) { ?>
                                <li>อีเมล : <?
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
                                    
                                    ?>
                                </li>
                            <? } ?>

                                
                            <li>ไลน์ไอดี : <a target="_blank" href="http://line.me/ti/p/~<?php echo $companyData->line_id ?>"> <?php echo $companyData->line_id ?>  </a></li>
                            <li>เว็บไซต์ : <?
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
                                
                                ?></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 0px;">
                        <h4>กรอกอีเมลของท่านเพื่อรับข้อมูลข่าวสารจากทางเรา</h4>
                    </div>
                    <div class="footer-newsletter">
                        <div id="mc_embed_signup" class="subscribe-form-2">
                            <form name="frmsubscription" id="frmsubscription" action="#" onsubmit="return subscription()">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" id="email" name="email" class="email" placeholder="กรอกอีเมลของท่าน" required="">
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <button type="Submit" class="btn btn-warning" style="background-color: #7B962D;    border-color: #7B962D;color: #fff;padding: 0px 36px 11px;margin-top: 20px;">ยืนยัน</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom black-bg-2 pb-25 pt-25" style="border-top: solid 1px #ffffff14;background-color: #31542E ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center" style="float: left;">
                        <p>Copyright ©  <a href="https://www.brandexdirectory.com/" style="color: #fff">Brandex Directory Co., Ltd.</a>. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>