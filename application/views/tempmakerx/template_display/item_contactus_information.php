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
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>" >  
  <div class="wrap" style="text-align: left;">
        <div class="row">
            <div class="col-md-12">
                <h2 style="padding-bottom: 10px;border-bottom: solid 1px #eee;"><?=$lang=='EN'?'Contact us':'ติดต่อเรา' ?></h2>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12" style="padding-top: 10px;">
              <div class="contact-information">
                  <h4 style="font-weight: bold; padding-bottom: 10px;"><?=$lang=='EN'?'Address':'ที่อยู่' ?></h4>
                  <p><?=$lang=='EN'?$companyData->com_name_en:$companyData->com_name_th ?><br>
                      <?
                          if(strstr($companyData->com_address_th,',')){
                            $arrs = explode(',', $companyData->com_address_th);
                            foreach ($arrs as $arr) {
                              echo "$arr<br>";
                            }
                          }
                          else{
                             $arr = $companyData->com_address_th;
                             echo "$arr";
                          }
                          
                          ?>
                  </p>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"style="padding-top: 10px;">
              <div class="contact-information">
                  <h4 style="font-weight: bold; padding-bottom: 10px;"><?=$lang=='EN'?'Phone':'เบอร์โทรศัพท์' ?></h4>
                  <p><?
                      if(strstr($companyData->com_phone,',')){
                        $arrs = explode(',', $companyData->com_phone);
                        foreach ($arrs as $arr) {
                          echo "<a href='tel:$arr' >$arr</a><br>";
                        }
                      }
                      else{
                         $arr = $companyData->com_phone;
                         echo "<a href='tel:$arr' >$arr</a>";
                      }
                      
                      ?></p>
              </div>
          </div>
        </div>
        <?php if($companyData->com_fax){ ?>
        <div class="row">
          <div class="col-md-12" style="padding-top: 10px;">
              <div class="contact-information">
                  <h4 style="font-weight: bold; padding-bottom: 10px;"><?=$lang=='EN'?'Fax':'โทรสาร' ?></h4>
                  <p><?
                      if(strstr($companyData->com_fax,',')){
                        $arrs = explode(',', $companyData->com_fax);
                        foreach ($arrs as $arr) {
                          echo "<a href='tel:$arr' >$arr</a><br>";
                        }
                      }
                      else{
                         $arr = $companyData->com_fax;
                         echo "<a href='tel:$arr' >$arr</a>";
                      }
                      
                      ?></p>
              </div>
          </div>
        </div>
        <?php } ?>
        <div class="row">
          <div class="col-md-12"style="padding-top: 10px;">
                <div class="contact-information">
                    <h4 style="font-weight: bold; padding-bottom: 10px;"><?=$lang=='EN'?'E-mail':'อีเมล' ?></h4>
                    <p><?
                        if(strstr($companyData->com_email,',')){
                          $arrs = explode(',', $companyData->com_email);
                          foreach ($arrs as $arr) {
                            echo "<a href='mailto:$arr' >$arr</a><br>";
                          }
                        }
                        else{
                           $arr = $companyData->com_email;
                           echo "<a href='mailto:$arr' >$arr</a>";
                        }
                        
                        ?>
                        LINE ID : <?
                            if(strstr($companyData->line_id,',')){
                              $arrs = explode(',', $companyData->line_id);
                              foreach ($arrs as $arr) {
                                echo "<a href='mailto:$arr' >$arr</a><br>";
                              }
                            }
                            else{
                               $arr = $companyData->line_id;
                               echo "<a href='mailto:$arr' >$arr</a>";
                            }
                            
                            ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12"style="padding-top: 10px;">
              <div class="contact-information">
                  <h4 style="font-weight: bold; padding-bottom: 10px;"><?=$lang=='EN'?'Website':'เว็บไซต์เพิ่มเติม' ?></h4>
                  <p><?
                      if(strstr($companyData->url1,',')){
                        $arrs = explode(',', $companyData->url1);
                        foreach ($arrs as $arr) {
                          echo "<a target='_blank' href='$arr' >$arr</a><br>";
                        }
                      }
                      else{
                         $arr = $companyData->url1;
                         echo "<a target='_blank' href='$arr' >$arr</a>";
                      }
                      
                      ?>
                          <?
                      if(strstr($companyData->url2,',')){
                        $arrs = explode(',', $companyData->url2);
                        foreach ($arrs as $arr) {
                          echo "<a target='_blank' href='$arr' >$arr</a><br>";
                        }
                      }
                      else{
                         $arr = $companyData->url2;
                         echo "<a target='_blank' href='$arr' >$arr</a>";
                      }
                      
                      ?></p>
              </div>
          </div>
        </div>
       
                    
                    
                    
                    
  

  </div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>