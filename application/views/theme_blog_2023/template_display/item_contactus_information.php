<? 
  $json = json_decode($companyData->header_footer_json);
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
<style>
  .d,.e{fill:#007434}
  .f{isolation:isolate;}
  .g{clip-path:url(#b);}
  .h{fill:none;}
  .i{clip-path:url(#c);}
  .j{opacity:.25;}
  .contact-con {
  text-align: right;
  }
  .contact-con svg {
  width: 100px;height: 100px;
  }
  .contact-condetail h1 {
    font-size: 24px;color: #007434;
  }
  .contact-condetail p {
    margin-bottom: 0px;
    font-size: 16px;
  }
  .contact-condetail p a:hover {
    color: #007434;
  }
  .item29 .wrap {
    border-left: 5px solid #007434;border-top: 1px solid #eee;border-right: 1px solid #eee;border-bottom: 1px solid #eee;border-bottom-right-radius: 38px;padding: 30px 0!important;margin-bottom: 30px;background: #fff;height: 660px;
  }
  @media (max-width: 767px) and (min-width: 300px) {
    .contact-con svg {
      width: 70px;height: auto;
    }
    .contact-con {
      flex: 0 0 100%;
      max-width: 100%;
      text-align: center;
      margin-bottom: 20px;
    }
    .contact-condetail {
      flex: 0 0 100%;
      max-width: 100%;
      text-align: center;
    }
    .item29 .wrap {
      border-left: 5px solid #007434;border-top: 1px solid #eee;border-right: 1px solid #eee;border-bottom: 1px solid #eee;border-bottom-right-radius: 38px;padding: 30px 0!important;margin-bottom: 30px;background: #fff;height: 100%;
    }
    .item29 {
      padding-bottom: 30px;
    }
    .contact-condetail p {
      font-size: 14px;
    }
  }
  @media (max-width: 991px) and (min-width: 768px) {}
  @media (max-width: 1100px) and (min-width: 992px) {
    .contact-con svg {
      width: 70px;height: auto;
    }
    .contact-con {
      flex: 0 0 100%;
      max-width: 100%;
      text-align: center;
      margin-bottom: 20px;
    }
    .contact-condetail {
      flex: 0 0 100%;
      max-width: 100%;
      text-align: center;
    }
    .item29 .wrap {
      border-left: 5px solid #007434;border-top: 1px solid #eee;border-right: 1px solid #eee;border-bottom: 1px solid #eee;border-bottom-right-radius: 38px;padding: 30px 0!important;margin-bottom: 30px;background: #fff;height: 100%;
    }
    .item29 {
      padding-bottom: 30px;
    }

  }
</style>
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>">
  <div class="wrap">

    <div class="row">
      <div class="col-md-12">
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-lg-3 col-md-3 contact-con">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 210.63 210.63">
              <defs>
                <clipPath id="b">
                  <rect class="h" x="-196.85" y="576" width="1920" height="528.83"/>
                </clipPath>
                <clipPath id="c">
                  <rect class="h" x="-195.2" y="157.65" width="1917.69" height="1917.69"/>
                </clipPath>
              </defs>
              <g class="f">
                <g id="a">
                  <g class="g">
                    <g class="j">
                      <g class="i">
                        <image width="4000" height="3975" transform="translate(-249.77 109.41) scale(.51)" xlink:href="Contact1.png"/>
                      </g>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="e" d="M105.78,80.17c-6.13,0-11.11,4.98-11.11,11.11s4.98,11.11,11.11,11.11,11.11-4.98,11.11-11.11-4.98-11.11-11.11-11.11Z"/>
                      <path class="e" d="M105.32,0C47.15,0,0,47.15,0,105.32s47.15,105.32,105.32,105.32,105.32-47.15,105.32-105.32S163.48,0,105.32,0Zm8.8,159.74c-4.36,5.14-12.31,5.14-16.68,0-13.38-15.77-38.15-47.49-38.15-66.23,0-25.67,20.81-46.49,46.49-46.49s46.49,20.81,46.49,46.49c0,18.74-24.77,50.46-38.15,66.23Z"/>
                    </g>
                    <path class="d" d="M116.89,91.28c0,6.13-4.99,11.11-11.11,11.11s-11.12-4.98-11.12-11.11,4.99-11.11,11.12-11.11,11.11,4.99,11.11,11.11Z"/>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="col-md-9 contact-condetail">
            <h1><?= $this->session->userdata('site_lang_name') == 'US' ? 'ADDRESS LOCATION' : 'สถานที่ตั้ง' ?></h1>
            <p>
              <?
                if(strstr($companyData->com_address,',')){
                  $arrs = explode(',', $companyData->com_address);
                  foreach ($arrs as $arr) {
                    echo "$arr<br>";
                  }
                }
                else{
                   $arr = $companyData->com_address;
                   echo "$arr";
                }
              ?>
            </p>
          </div>
        </div>
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-3 contact-con">
            <svg id="a" xmlns="http://www.w3.org/2000/svg" width="150" height="150" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 210.63 210.63">
              <defs>
                <clipPath id="b">
                  <rect class="f" x="-635.66" y="576" width="1920" height="528.83"/>
                </clipPath>
                <clipPath id="c">
                  <rect class="f" x="-634.01" y="157.65" width="1917.69" height="1917.69"/>
                </clipPath>
              </defs>
              <g class="d">
                <g class="h">
                  <g class="g">
                    <image width="4000" height="3975" transform="translate(-688.58 109.41) scale(.51)" xlink:href="Contact1.png"/>
                  </g>
                </g>
              </g>
              <g>
                <path class="e" d="M112.18,141.04h-13.27c-4.03,0-7.31,3.27-7.31,7.31s3.27,7.31,7.31,7.31h13.27c4.04,0,7.31-3.27,7.31-7.31s-3.27-7.31-7.31-7.31Z"/>
                <path class="e" d="M105.32,0C47.15,0,0,47.15,0,105.32s47.15,105.32,105.32,105.32,105.32-47.15,105.32-105.32S163.48,0,105.32,0Zm42.45,132.13v20.25c0,8.41-6.82,15.23-15.23,15.23h-53.98c-8.41,0-15.23-6.82-15.23-15.23V58.25c0-8.41,6.82-15.23,15.23-15.23h53.98c8.41,0,15.23,6.82,15.23,15.23v73.88Z"/>
              </g>
            </svg>
          </div>
          <div class="col-md-9 contact-condetail">
            <h1><?= $this->session->userdata('site_lang_name') == 'US' ? 'PHONE' : 'โทร' ?></h1>
            <? if ($companyData->com_phone) {
              $txt = $companyData->com_phone;
              if (strstr($txt, ',')) {
                $arr = explode(',', $txt);
                foreach ($arr as $k => $v) {
                  $v = trim($v);
                  if ($v) {
                    echo '<p><a href="tel:' . $v . '" target="_blank">' . $v . '</a></p>';
                  }
                }
              } else {
                $txt = trim($txt);
                if ($txt) {
                  echo '<p><a href="tel:' . $txt . '" target="_blank">' . $txt . '</a></p>';
                }
              }
              } ?>
          </div>
        </div>
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-3 contact-con">
            <svg id="a" xmlns="http://www.w3.org/2000/svg" width="150" height="150" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 210.63 210.63">
              <defs>
                <clipPath id="b">
                  <rect class="f" x="-1074.71" y="576" width="1920" height="528.83"/>
                </clipPath>
                <clipPath id="c">
                  <rect class="f" x="-1073.05" y="157.65" width="1917.69" height="1917.69"/>
                </clipPath>
              </defs>
              <g class="d">
                <g class="h">
                  <g class="g">
                    <image width="4000" height="3975" transform="translate(-1127.63 109.41) scale(.51)" xlink:href="Contact1.png"/>
                  </g>
                </g>
              </g>
              <path class="e" d="M105.32,0C47.15,0,0,47.15,0,105.32s47.15,105.32,105.32,105.32,105.32-47.15,105.32-105.32S163.48,0,105.32,0ZM58.22,57.91h94.12c1.3,0,2.55,.19,3.74,.5-.16,.15-.34,.28-.49,.45l-42.07,47.73c-2.12,2.4-5.05,3.73-8.25,3.73s-6.13-1.32-8.25-3.73L54.55,58.39c1.18-.31,2.4-.49,3.67-.49Zm108.69,69.25c0,14.12-11.45,25.57-25.57,25.57H69.29c-14.12,0-25.57-11.45-25.57-25.57v-54.71c0-2.03,.42-3.96,1.17-5.72l42.58,48.32c4.51,5.12,11.02,8.06,17.84,8.06,6.83,0,13.33-2.94,17.84-8.06l42.07-47.73c.19-.21,.33-.44,.48-.67,.77,1.78,1.21,3.74,1.21,5.8v54.71Z"/>
            </svg>
          </div>
          <div class="col-md-9 contact-condetail">
            <h1><?= $this->session->userdata('site_lang_name') == 'US' ? 'E-MAIL' : 'อีเมล' ?></h1>
              <? if ($companyData->com_email) {
              $txt = $companyData->com_email;
              if (strstr($txt, ',')) {
                $arr = explode(',', $txt);
                foreach ($arr as $k => $v) {
                  $v = trim($v);
                  if ($v) {
                    echo '<p><a href="mailto:' . $v . '" target="_blank">' . $v . '</a></p>';
                  }
                }
              } else {
                $txt = trim($txt);
                if ($txt) {
                  echo '<p><a href="mailto:' . $txt . '" target="_blank">' . $txt . '</a></p>';
                }
              }
              } ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 contact-con">
            <svg id="a" xmlns="http://www.w3.org/2000/svg" width="150" height="150" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 210.63 210.63">
              <defs>
                <clipPath id="b">
                  <rect class="f" x="-1513.75" y="576" width="1920" height="528.83"/>
                </clipPath>
                <clipPath id="c">
                  <rect class="f" x="-1512.1" y="157.65" width="1917.69" height="1917.69"/>
                </clipPath>
              </defs>
              <g class="d">
                <g class="h">
                  <g class="g">
                    <image width="4000" height="3975" transform="translate(-1566.67 109.41) scale(.51)" xlink:href="Contact1.png"/>
                  </g>
                </g>
              </g>
              <path class="e" d="M105.32,0C47.15,0,0,47.15,0,105.32s47.15,105.32,105.32,105.32,105.32-47.15,105.32-105.32S163.48,0,105.32,0Zm.69,51.02c7.59,0,18.35,18.08,19.94,46.99h-39.88c1.59-28.91,12.35-46.99,19.94-46.99Zm-18.72-4.4c-8.83,10.76-14.79,29.21-15.87,51.39h-26.57c2.87-24.25,19.81-44.18,42.43-51.39ZM44.86,112.62h26.57c1.08,22.18,7.04,40.63,15.87,51.39-22.63-7.21-39.57-27.14-42.43-51.39Zm61.15,46.98c-7.59,0-18.36-18.08-19.94-46.98h39.88c-1.59,28.91-12.35,46.98-19.94,46.98Zm18.72,4.4c8.83-10.76,14.79-29.21,15.87-51.39h26.57c-2.87,24.25-19.81,44.18-42.43,51.39Zm15.87-66c-1.08-22.18-7.04-40.63-15.87-51.39,22.63,7.21,39.57,27.14,42.43,51.39h-26.57Z"/>
            </svg>
          </div>
          <div class="col-md-9 contact-condetail">
            <h1><?= $this->session->userdata('site_lang_name') == 'US' ? 'WEBSITE' : 'เว็บไซต์' ?></h1>
            <?php
              $protocal = '';
              if ($companyData->url1) {
                $txt = $companyData->url1;
                if (strstr($txt, ',')) {
                  $arr = explode(',', $txt);
                  foreach ($arr as $k => $v) {
                    $v = trim($v);
                    $protocal = strstr($v, 'http') ? '' : 'https://';
                    if ($v) {
                      echo '<p><a href="' . $protocal . $v . '" target="_blank">' . $protocal . $v . '</a></p>';
                    }
                  }
                } else {
                  $v = trim($txt);
                  if ($v) {
                    echo '<p><a href="' . $protocal . $v . '" target="_blank">' . $protocal . $v . '</a></p>';
                  }
                }
              }
              
              if ($companyData->url2) {
                $txt = $companyData->url2;
                if (strstr($txt, ',')) {
                  $arr = explode(',', $txt);
                  foreach ($arr as $k => $v) {
                    $v = trim($v);
                    $protocal = strstr($v, 'http') ? '' : 'https://';
                    if ($v) {
                      echo '<p><a href="' . $protocal . $v . '" target="_blank">' . $protocal . $v . '</a></p>';
                    }
                  }
                } else {
                  $v = trim($txt);
                  if ($v) {
                    echo '<p><a href="' . $protocal . $v . '" target="_blank">' . $protocal . $v . '</a></p>';
                  }
                }
              }
              
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
  <?=$style?>
  }
  .contact-form-style > button {
  background-color: #007434;
  }
</style>