<footer class="footer-area pt-65" style=";padding-top: 47px; background-image: url(<?=base_url("images/bgfooter.jpg")?>); background-size: cover; background-repeat: no-repeat; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 30px;">
                        <h4><?=$lang=='EN'?$companyData->com_name_en:$companyData->com_name_th?></h4>
                    </div>
                    <div class="footer-about">
                        <p>
                        <? $x = ($lang=='EN')?$companyData->com_desc_en:$companyData->com_desc_th;
                            echo  mb_substr(strip_tags($x), 0,400); 
                        ?></p>
                        <div class="footer-map d-none">
                            
                            <a href="#" target="_blank">
                                <p id="myBtn" style="color: #fff" class=""><i class="ion-ios-location-outline"></i><?=$lang=='EN'?'View map':'ดูแผนที่'?> </p>
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
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 30px;">
                        <h4><?=$lang=='EN'?'MENU':'เมนู'?></h4>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <?php 
                                            foreach ($menus as $menu) { 

                                                if($menu->is_header==1){

                                                    if($menu->menu_type_id==1){ // Content
                                                        $url =base_url("Content/index/$menu->content_id"); 
                                                    }
                                                    elseif ($menu->menu_type_id==2) {// Feature
                                                        $url= base_url("$menu->feature_name");
                                                    }
                                                    elseif ($menu->menu_type_id==3) {// External link
                                                        $str = $menu->url;
                                                        if(!strstr($str, 'http'))
                                                        {
                                                            $str = 'http://'.$str;
                                                        }

                                                        $url = $str;
                                                    }
                                                   
                                                    if($menu->menu_id == 1){                                                       
                                                        $url = base_url("Home");
                                                    }
                                                   
                                        ?>
                                        <li>
                                            <a href="<?=$url ?> ">
                                                <?=$menu->menu_name ?> 
                                                <?=sizeof($menu->submenu)>0?'<i class="ion-chevron-down" style="color:black;"></i>':''?>
                                            </a>                                            
                                        </li>
                                        <?php 
                                                }
                                            }

                                         ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-9">
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 30px;">
                        <h4><?=$lang=='EN'?'Contact us':'ติดต่อเรา' ?></h4>
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
                                <li><?=$lang=='EN'?'Telephone':'เบอร์โทรศัพท์'?> : 
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
                               <li><?=$lang=='EN'?'Fax':'แฟกซ์'?> : 
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
                                <li><?=$lang=='EN'?'E-mail':'อีเมล'?> : <?
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

                                
                            <li><?=$lang=='EN'?'Line id':'ไลน์ไอดี'?> : <a target="_blank" href="http://line.me/ti/p/~<?php echo $companyData->line_id ?>"> <?php echo $companyData->line_id ?>  </a></li>
                            <li><?=$lang=='EN'?'website':'เว็บไซต์'?> : <?
                                if(strstr($companyData->url1,',')){
                                  $arrs = explode(',', $companyData->url1);
                                  foreach ($arrs as $arr) {
                                    echo "<a target='_blank' href='$arr' >$arr</a><br>";
                                  }
                                }
                                else{
                                   $arr = $companyData->url1;
                                   echo "<a target='_blank' href='$arr' >$arr</a><br>";
                                }
                                
                                ?></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 0px;">
                        <h4><?=$lang=='EN'?'Fill email for receive our information':'กรอกอีเมลของท่านเพื่อรับข้อมูลข่าวสารจากทางเรา' ?></h4>
                    </div>
                    <div class="footer-newsletter">
                        <div id="mc_embed_signup" class="subscribe-form-2">
                            <form name="frmsubscription" id="frmsubscription" action="#" onsubmit="return subscription()">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" id="email" name="email" class="email" placeholder="<?=$lang=='EN'?'Fill your email for receive our information':'กรอกอีเมลของท่านเพื่อรับข้อมูลข่าวสารจากทางเรา' ?>" required="" autocomplete="off">
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <button type="Submit" class="btn btn-warning" style="background-color: #7B962D;    border-color: #7B962D;color: #fff;padding: 0px 36px 11px;margin-top: 20px;"><?=$lang=='EN'?'Confirm':'ยืนยัน' ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pb-25 pt-25" style="border-top: solid 1px #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center" style="float: left;">
                        <p>Copyright © 2020 <a href="https://www.brandexdirectory.com/" style="color: #fff">Brandex Directory Co., Ltd.</a>. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>