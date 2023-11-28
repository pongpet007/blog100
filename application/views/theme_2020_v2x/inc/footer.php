<footer id="footer" class="footer-main-block" style="background-position: center center;background-size: cover;background-image: url('<? echo base_url() ?>assets_theme_2020_v2/img/home/9.png')">
    <div class="footer-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about footer-widget">
                      <h5 class="footer-heading">เกี่ยวกับเรา</h5>
                        <?php echo $companyData->about_footer_th ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-solutions footer-widget">
                        <h5 class="footer-heading">เมนู</h5>
                        <ul>
                            <li><a href="#">หน้าแรก</a></li>
                            <li><a href="#">เกี่ยวกับเรา</a></li>
                            <li><a href="#">สินค้า</a></li>
                            <li><a href="#">ข่าวสาร</a></li>
                            <li><a href="#">ติดต่อเรา</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-news footer-widget">
                        <h5 class="footer-heading">หมวดหมู่</h5>
                        <ul><?php foreach ($categorys as $key => $categoryss) { ?>
                            <li><a href="<?php echo base_url() ?>Products"><?=$lang=='EN'?$categoryss->short_cat_name:$categoryss->short_cat_name_th ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-contact footer-widget">
                        <h5 class="footer-heading">ติดต่อเรา</h5>
                        <p><?=$lang=='EN'?$companyData->com_name_en:$companyData->com_name_th ?></p>
                        <p><?
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
                                    
                                    ?></p>
                        <ul class="footer-address">
                            <li><span>โทร : </span><?
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
                                
                                ?></li>
                            <li><span>อีเมล : </span> <?
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
                            <li><span>แฟกซ์ : </span> <?
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
                                
                                ?></li>
                                <?php if ($companyData->line_id != "") { ?>
                                  <li><span>ไลน์ไอดี : </span><a target="_blank" href="http://line.me/ti/p/~<?php echo $companyData->line_id ?>"> <?php echo $companyData->line_id ?>  </a></li>
                                <?php } ?>
                            
                            <li><span>เว็บไซต์ : </span> <?
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