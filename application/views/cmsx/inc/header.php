<header class="header-area header-position" >
    <div class="header-top header-top-color-2 header-top-coffee pt-10 pb-13">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-top-left pl-30">
                        <div class="language-currency">
                            <span><?=$lang=='EN'?'Change language':'เปลี่ยนภาษา'?> <i class="fa fa-google" aria-hidden="true"></i> : </span>
                            <div class="lang-curr-dropdown">
                                <ul>
                                    <li>
                                        <a class="language-click" href="#"><?=$lang=='EN'?'English':'ไทย'?> <i class="ion-chevron-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en">English </a></li>
                                            <li><a href="#googtrans(en|th)" class="lang-en lang-select" data-lang="th">ไทย </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="language-currency ">
                            <div class="lang-curr-dropdown">
                                <ul style="top: 35px;">
                                    <li><a class="language-click" href="#"><span style="color: #fff;width: 75px;" ><?=$lang=='EN'?'Language':'เปลี่ยนภาษา' ?> <i class="ion-chevron-down"></i></a>
                                        <ul class="language-dropdown" style="top: 35px;">
                                            <li><a style="color: #fff;" href="javascript:changelang('<?php echo base_url("LangSwitch/switchLanguage/TH") ?>');"><?=$lang=='EN'?'TH':'TH' ?> </a></li>
                                            <li><a style="color: #fff;" href="javascript:changelang('<?php echo base_url("LangSwitch/switchLanguage/EN") ?>');"><?=$lang=='EN'?'EN':'EN' ?> </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <style type="text/css">
                            .lang-curr-dropdown ul li ul li > a{
                                color: #000;
                            }
                        </style>
                        <a href="<?php echo base_url("Home/stat") ?>" style="font-size: 11px;">
                        <?=$lang=='EN'?'Number of website visitors':'จำนวนผู้เข้าชมเว็บไซต์'?> <? echo $counter; ?></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12" style="text-align: center;">
                    <div class="header-top-right pr-30">
                        <ul>
                            <li>
                                <a href="http://line.me/ti/p/~<?=$companyData->line_id?>"><img src="<?php echo base_url("images/line.png") ?>" style="padding-right: 5px;"><?=$companyData->line_id?></a>
                            </li>
                            <li>
                                <a href="<?=$companyData->facebook?>"><img src="<?php echo base_url("images/facebook.png") ?>"style="padding-right: 5px;">Facebook</a>
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
                    <div class="col-xl-1 col-lg-2 col-md-4 col-sm-3  qrcode">
                        <img src="<?php echo base_url() ?>images/qrcode.png" alt="">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6  ">
                        <div class="header-contact middle-same" style="    padding-left: 19px;">
                            <div class="header-contact-icon">
                                <i class="pe-7s-headphones" style="color: #FFF;"></i>
                            </div>
                            <div class="header-contact-content">

                                <p><span style="color: #FFF;"><?=$lang=='EN'?'Call us:':'ติดต่อเรา:' ?></span><br><span style="color: #f2d201; font-weight: bold;"><?=$lang=='EN'?'Free Support':'
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
                    <div class="col-xl-3 col-lg-6 col-md-6 block-logo" style="text-align: center;">
                        <div class="logo logo-mrg">
                            <a href="index.html">
                            <img src="<?php echo base_url() ?>images/logo.png" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        
                        <div class="header-contact-search-wrapper f-right">
                            <div class="header-search middle-same header-search-coffee">
                                <form method="GET" class="header-search-form" id="frmSearch" name="frmSearch" action="<?=base_url("Products/");?>">
                                    <input id="keyword" name="keyword" type="text" placeholder="<?=$lang=='EN'?'Search product...':'ค้นหาสินค้า...'?>">
                                    <button type="submit">
                                    <i class="ion-ios-search-strong"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="header-cart middle-same favorite">
                                <button class="icon-cart" onclick="window.location='<?=base_url("Favorite")?>';">
                                    <i class="pe-7s-star cart-bag"></i>  
                                    <span class="count-amount d-xl-none d-lg-none d-md-none">Favorite</span>
                                    <span class="count-style">
                                        <?
                                            $sum = 0;
                                            foreach ($this->cart->contents() as $product) {
                                                $sum += $product['qty'];   
                                            };
                                            echo $sum;
                                        ?>
                                    </span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-btm-coffee-res">
        <div class="container">
            <div class="white-bg header-btm-res-pd">
                <div class="row">
                    <div class="col-12">
                        <div class="logo mobile-logo">
                            <a href="index.html">
                            <img alt="" src="<?php echo base_url() ?>images/logo.png" style="max-width: 150px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">                                       
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
                                            </a>
                                            <?php if(sizeof($menu->submenu)>0){ ?>
                                            <ul class="">
                                                <?php foreach ($menu->submenu as $menu2) { 

                                                        if($menu2->menu_type_id==1){ // Content
                                                            $url =base_url("Content/index/$menu2->content_id"); 
                                                        }
                                                        elseif ($menu2->menu_type_id==2) {// Feature
                                                            $url= base_url("$menu2->feature_name");
                                                        }
                                                        elseif ($menu2->menu_type_id==3) {// External link
                                                            $str = $menu2->url;
                                                            if(!strstr($str, 'http'))
                                                            {
                                                                $str = 'http://'.$str;
                                                            }

                                                            $url = $str;
                                                        }
                                                       
                                                        if($menu2->menu_id == 1){                                                       
                                                            $url = base_url("Home");
                                                        }
                                                ?>
                                                <li>
                                                    <a href="<?=$url ?>"><?=$menu2->menu_name ?> </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <?php } ?>
                                        </li>
                                        <?php 
                                                }
                                            }

                                         ?>

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
                                            <?php if(sizeof($menu->submenu)>0){ ?>
                                            <ul class="submenu">
                                                <?php foreach ($menu->submenu as $menu2) { 

                                                        if($menu2->menu_type_id==1){ // Content
                                                            $url =base_url("Content/index/$menu2->content_id"); 
                                                        }
                                                        elseif ($menu2->menu_type_id==2) {// Feature
                                                            $url= base_url("$menu2->feature_name");
                                                        }
                                                        elseif ($menu2->menu_type_id==3) {// External link
                                                            $str = $menu2->url;
                                                            if(!strstr($str, 'http'))
                                                            {
                                                                $str = 'http://'.$str;
                                                            }

                                                            $url = $str;
                                                        }
                                                       
                                                        if($menu2->menu_id == 1){                                                       
                                                            $url = base_url("Home");
                                                        }
                                                ?>
                                                <li>
                                                    <a href="<?=$url ?>"><?=$menu2->menu_name ?> </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <?php } ?>
                                        </li>
                                        <?php 
                                                }
                                            }

                                         ?>
                                   
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