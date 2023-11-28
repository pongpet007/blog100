<header class="header-area header-position" style="position: unset; background-image: url(<? echo base_url() ?>assets_theme_2020_v1/img/intiporn/bg-pr.jpg);">
    <div class="header-top header-top-color-2 header-top-coffee pt-10 pb-13">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="header-top-left pl-30">
                        <div class="language-currency">
                            <span>เปลี่ยนภาษา:</span>
                            <div class="lang-curr-dropdown">
                                <ul>
                                    <li>
                                        <a class="language-click" href="#">ไทย <i class="ion-chevron-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en">English </a></li>
                                            <li><a href="#googtrans(en|th)" class="lang-en lang-select" data-lang="th">ไทย </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="<?php echo base_url("Home/stat") ?>" style="font-size: 11px;">
                        <?=$lang=='EN'?'Number of website visitors':'จำนวนผู้เข้าชมเว็บไซต์'?> <? echo $counter; ?></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-12" style="text-align: center;">
                    <div class="header-top-right pr-30">
                        <ul>
                            <li>
                                <a href="http://line.me/ti/p/~intipon"><img src="<?php echo base_url() ?>assets_theme_2020_v1/img/intiporn/line.png" style="padding-right: 5px;">intiponcheme</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/IntiponCheme"><img src="<?php echo base_url() ?>assets_theme_2020_v1/img/intiporn/facebook.png"style="padding-right: 5px;">Intipon Cheme</a>
                            </li>
                            <?php if ($this->session->userdata('ssid') != "") { ?>
                            <li>
                                <a href="<?php echo base_url() ?>customeradmin/Company/edit/1"><?=$lang=='EN'?'My Account':'บัญชีของฉัน' ?></a>
                            </li>
                            <?php }else{ ?>
                            <li>
                                <a href="<?php echo base_url()?>customeradmin/User/login"><?=$lang=='EN'?'Sign in':'เข้าสู่ระบบ' ?>  </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-middle-bg-img">
                <div class="row">
                    <div class="col-lg-1 col-md-2" style="text-align: center;">
                        <img src="<?php echo base_url() ?>assets_theme_2020_v1/img/intiporn/qrcode.png" alt="">
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="header-contact middle-same" style="    padding-left: 19px;">
                            <div class="header-contact-icon">
                                <i class="pe-7s-headphones" style="color: #000"></i>
                            </div>
                            <div class="header-contact-content">
                                <p><span style="color: #000">ติดต่อเรา</span><br><span style="color: #19BE0E; font-weight: bold;"><?=$lang=='EN'?'Free Support':'
                                    สายด่วนได้ที่' ?>: <?
                                    if(strstr($companyData->com_phone,',')){
                                      $arrs = explode(',', $companyData->com_phone);
                                      $phones = 1;
                                      foreach ($arrs as $arr) {
                                        if ($phones == 1) {
                                            echo "<a href='tel:$arr' >$arr</a>";
                                        }
                                        $phones = $phones + 1;
                                        
                                      }
                                    }
                                    else{
                                       $arr = $companyData->com_phone;
                                       echo "<a href='tel:$arr' >$arr</a><br>";
                                    }
                                    
                                    ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-1" style="text-align: center;">
                        <div class="logo logo-mrg">
                            <a href="index.html">
                            <img src="<?php echo base_url() ?>assets_theme_2020_v1/img/intiporn/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="header-search middle-same header-search-coffee">
                            <form method="GET" class="header-search-form" id="frmSearch" name="frmSearch" action="<?=base_url("Products/");?>" style="margin-top: 25px;">
                                <input id="keyword" name="keyword" type="text" placeholder="ค้นหาสินค้า...">
                                <button type="submit">
                                <i class="ion-ios-search-strong"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-btm-coffee-res" style="background-color:#19BE0E ">
        <div class="container">
            <div class="white-bg header-btm-res-pd">
                <div class="row">
                    <div class="col-12">
                        <div class="logo mobile-logo">
                            <a href="index.html">
                            <img alt="" src="<?php echo base_url() ?>assets_theme_2020_v1/img/intiporn/logo-mobile.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="<?php echo base_url();?>Home ">หน้าแรก</a></li>
                                        <li><a href="<?php echo base_url();?>Products ">สินค้า </a></li>
                                        <li><a href="<?php echo base_url();?>Portforio">ผลงานของเรา</a></li>
                                        <li><a href="<?php echo base_url();?>Video">วีดีโอสื่อการสอน</a></li>
                                        <li><a href="<?php echo base_url();?>News">บล็อก</a></li>
                                        <li><a href="<?php echo base_url();?>Aboutus">เกี่ยวกับเรา</a></li>
                                        <li><a href="<?php echo base_url();?>Contactus"> ติดต่อเรา </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white-bg menu-coffee-color pl-30 pr-30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu main-none">
                            <nav>
                                <ul>
                                    <li class="mega-menu-position"><a href="<?php echo base_url();?>Home ">หน้าแรก</a></li>
                                    <li class="mega-menu-position"><a href="<?php echo base_url();?>Products ">สินค้า</a>
                                    <li><a href="<?php echo base_url();?>Portforio">ผลงานของเรา</a></li>
                                    <li><a href="<?php echo base_url();?>Video">วีดีโอสื่อการสอน</a></li>
                                    <li><a href="<?php echo base_url();?>News">บล็อก</a></li>
                                    <li><a href="<?php echo base_url();?>Aboutus">เกี่ยวกับเรา</a></li>
                                    <li><a href="<?php echo base_url();?>Contactus"> ติดต่อเรา </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }
    
    function triggerHtmlEvent(element, eventName) {
      var event;
      if (document.createEvent) {
        event = document.createEvent('HTMLEvents');
        event.initEvent(eventName, true, true);
        element.dispatchEvent(event);
      } else {
        event = document.createEventObject();
        event.eventType = eventName;
        element.fireEvent('on' + event.eventType, event);
      }
    }
    
    jQuery('.lang-select').click(function() {
      var theLang = jQuery(this).attr('data-lang');
      jQuery('.goog-te-combo').val(theLang);
    
      window.location = jQuery(this).attr('href');
      location.reload();
    });
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,id,ja,lo,ms,th,vi,zh-CN,zh-TW',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            multilanguagePage: true
        }, 'google_translate_element');
    }
</script>