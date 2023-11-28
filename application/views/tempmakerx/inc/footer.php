<footer id="footer" class="footer-main-block" style="background-size: cover;background-image: url('<? echo base_url() ?>images/bgfooter.png')">
    <div class="footer-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about footer-widget">
                      <h5 class="footer-heading"><?=$lang=='EN'?$companyData->com_name_en:$companyData->com_name_th?></h5>
                        <?=$lang=='EN'?$companyData->com_desc_en:$companyData->com_desc_th  /* $x = ($lang=='EN')?$companyData->com_desc_en:$companyData->com_desc_th;
                            echo  mb_substr(strip_tags($x), 0,700); 
                        */?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-solutions footer-widget">
                        <h5 class="footer-heading"><?=$lang=='EN'?'MENU':'เมนู'?></h5>
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
                <div class="col-md-3 col-sm-6">
                    <div class="footer-news footer-widget">
                        <h5 class="footer-heading"><?=$lang=='EN'?'Category':'หมวดหมู่'?></h5>
                        <ul> 
                          <?php  foreach ($categorys as $category) { ?>
                                    <li>
                                        <a href="<?=base_url("Products/?cat_id=$category->cat_id")?>" target="_blank">
                                            <?=$lang=='EN'?$category->cat_name:$category->cat_name_th?> 
                                           
                                        </a>                                            
                                    </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-contact footer-widget">
                        <h5 class="footer-heading"><?=$lang=='EN'?'Contact us':'ติดต่อเรา' ?></h5>
                       
                        <ul class="footer-address">
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
            </div>
        </div>
    </div>
    <div class="copyright" style="background-image: url('images/bg/copy-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copyright-text">
                        <p>Copyright © <?php echo date("Y"); ?> <a href="https://www.brandexdirectory.com/">Brandex Directory Co., Ltd..</a> All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>