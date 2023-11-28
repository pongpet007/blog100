<?php 
    $json = json_decode($companyData->header_footer_json);    
    // print_r($json);
    // exit();
   
   
?>
<header class="header-area header-position">
    <div class="header-top pt-10 pb-13" style="<?=$json->header_top_bg_color?'background-color: '.$json->header_top_bg_color.' ;':''?>;">
        <div class="container">
            <div class="row" style="align-items:center;">
                <div class="col-xl-7 col-lg-4 col-md-7 col-sm-12 col-12">
                    <div class="header-top-left">
                        <div class="ct-topbar language-currency">
                            <ul class="list-unstyled list-inline ct-topbar__list">
                                <li class="ct-language">
                                    <?=lang('Translate Google') ?> <i class="fab fa-google"></i> <i class="fas fa-caret-down"></i> 
                                    <ul class="list-unstyled ct-language__dropdown">
                                        <li><a href="#googtrans(en|th)" class="lang-en lang-select" data-lang="th"><img src="<?php echo base_url() ?>images/country_flags/TH.png" alt="Thai"><span> TH</span></a></li>
                                            <li><a href="#googtrans(th|en)" class="lang-en lang-select" data-lang="en"><img src="<?php echo base_url() ?>images/country_flags/US.png" alt="USA"></a><span> EN</span></li>
                                            
                                            <li><a href="#googtrans(en|ja)" class="lang-en lang-select" data-lang="ja"><img src="<?php echo base_url() ?>images/country_flags/JP.png" alt="USA"></a><span> JP</span></li>
                                            <li><a href="#googtrans(en|zh-CN)" class="lang-en lang-select" data-lang="zh-CN"><img src="<?php echo base_url() ?>images/country_flags/CN.png" alt="USA"></a><span> CN</span></li>
                                        <!-- <li><a href="#googtrans(en|es)" class="lang-es lang-select" data-lang="es"><img src="https://www.solodev.com/assets/google-translate/flag-mexico.png" alt="MEXICO"></a></li>
                                            <li><a href="#googtrans(en|fr)" class="lang-es lang-select" data-lang="fr"><img src="https://www.solodev.com/assets/google-translate/flag-france.png" alt="FRANCE"></a></li>
                                            <li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select" data-lang="zh-CN"><img src="https://www.solodev.com/assets/google-translate/flag-china.png" alt="CHINA"></a></li>
                                            <li><a href="#googtrans(en|ja)" class="lang-es lang-select" data-lang="ja"><img src="https://www.solodev.com/assets/google-translate/flag-japan.png" alt="JAPAN"></a></li> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="language-currency ">
                            <div class="lang-curr-dropdown">
                                <ul style="top: 35px;">
                                    <li><a class="language-click" href="#"><span style="">
                                        <?=lang('Language') ?> <i class="fas fa-caret-down"></i></span></a>
                                        <ul class="language-dropdown" style="top: 35px;">
                                            
                                            <?php foreach ($countrys as $country) { ?>
                                                <? $uri =  uri_string(); ?>
                                                <? $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>

                                            <li><a style="color: #000;" href="<?=base_url(strtolower($uri))?>"><?=$country->iso2?>-<?=$country->short_name ?> </a></li>
                                           <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="language-currency ">
                            <a class="total-visitor" href="<?php echo base_url($this->session->userdata('site_lang_name')."/home/stat") ?>">
                        <?=lang('Number of website visitors') ?> <? echo $counter; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 col-md-5 col-sm-12 col-12" style="text-align: center;">
                    <div class="header-top-right">
                        <ul>
                            <?php if ($companyData->line_id) { ?>
                                <li>
                                    <a href="http://line.me/ti/p/~<?=$companyData->line_id?>"><img alt="line" src="<?php echo base_url() ?>images/line.png" style="padding-right: 5px;"><?=$companyData->line_id ?></a>
                                </li>
                            <? } ?>
                            <?php if ($companyData->facebook) { ?>
                                <li>
                                    <a href="<?=$companyData->facebook?>"><img alt="facebook" src="<?php echo base_url() ?>images/facebook.png"style="padding-right: 5px;">FACEBOOK</a>
                                </li>
                            <? } ?>
                                
                                
                            <?php /*if ($this->session->userdata('ssid') != "") { ?>
                            <li>
                                <a href="<?php echo base_url()?><?=$this->session->userdata('site_lang_name')?>/customeradmin/User/logout"><?=lang('Logout') ?></a>
                            </li>
                            <?php }else{ ?>
                            <li>
                                <a href="<?php echo base_url()?><?=$this->session->userdata('site_lang_name')?>/customeradmin/User/login"><?=lang('Sign in') ?>  </a>
                            </li>
                            <?php }*/ ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle" style="<?=$json->header_middle_bg_color?'background-color: '.$json->header_middle_bg_color.' ;':''?> ">
        <div class="container">
            <div class="header-middle-bg-img">
                <div class="row" style="align-items: center;">   
                    <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12" >
                        <div class="logo logo-mrg">
                            <a href="<?php echo base_url()?>">
                            <img src="<?php echo base_url() ?>images/logo/logo.webp" alt="<?=$companyData->com_name?>" style="max-width: 100%;">
                            </a>
                        </div>
                    </div>                
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="header-contact middle-same" style="">
                            <div class="header-contact-icon">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="header-contact-content">

                                <p><span style="color: #383838;"><?=lang('Call us') ?> </span><br><span style="color: #383838;"><?=lang('Free Support') ?> : <?
                                    if(strstr($companyData->com_phone,',')){
                                      $arrs = explode(',', $companyData->com_phone);
                                      $phones = 1;
                                      foreach ($arrs as $arr) {
                                        if ($phones == 1) {
                                            echo "<a style='color: #383838;' href='tel:$arr' >$arr</a>";
                                        }
                                        $phones = $phones + 1;
                                        
                                      }
                                    }
                                    else{
                                       $arr = $companyData->com_phone;
                                       echo "<a style='color: #383838; font-weight: bold;' href='tel:$arr' >$arr</a><br>";
                                    }
                                    
                                    ?></span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="header-search middle-same header-search-coffee" style="width: 100%;">
                            <form method="GET" class="header-search-form" id="frmSearch" name="frmSearch" action="<?=base_url($this->session->userdata('site_lang_name')."/products/");?>" style="">
                                <input id="keyword" name="keyword" type="text" placeholder="<?=lang('Search product...') ?>">
                                <button type="submit">
                                <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                    <?/*?>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12 cartcss">
                        <div class="header-cart middle-same ">
                                <button class="icon-cart">

                                    <i class="fas fa-file-alt cart-bag"></i> 
                                    <span class="count-amount d-xl-none d-lg-none d-md-none"><?=lang('Favorite') ?></span>                        
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
                                <div class="shopping-cart-content">
                                    <ul>
                                        <?php foreach ($cartarr as $productss) {  ?>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a target="_blank" href="<?=base_url($this->session->userdata('site_lang_name')."/Products/detail/")?><?php echo $productss[0]->pro_id ?>"><img alt="<?php echo $productss[0]->pro_name ?>" style="max-width: 100px;" src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productss[0]->pro_id ?>01.jpg"></a>
                                                </div>
                                                
                                                <div class="shopping-cart-title" style="max-width: 125px;">
                                                    <h4><a target="_blank" href="<?=base_url($this->session->userdata('site_lang_name')."/products/detail/")?><?php echo $productss[0]->pro_id ?>">
                                                        <?php echo $productss[0]->pro_name ?>
                                                        </a></h4>
                                                    <h6><?=lang('amount') ?> : <?php echo $productss[1] ?></h6>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="<?=base_url($this->session->userdata('site_lang_name')."/Favorite/remove/")?><?php echo $productss[2] ?>"><i class="ion-android-close"></i></a>
                                                </div>
                                                
                                            </li>
                                        <? } ?>
                                    </ul>
                                    
                                    <div class="shopping-cart-btn">
                                        <a class="btn-style btn-hover" href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/Favorite"><?=lang('request quotation') ?></a>
                                    </div>
                                </div>                                 
                            </div>
                    </div>
                    <?*/?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-btm-coffee-res" style="<?=$json->header_bottom_bg_color?'background-color: '.$json->header_bottom_bg_color.' ;':''?>">
        <div class="container">
            <div class="white-bgx header-btm-res-pd">
                <div class="row">
                    <div class="col-12 mobilecss">
                        <div class="logo mobile-logo">
                            
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
                                                        $url =base_url($this->session->userdata('site_lang_name')."/Content/index/$menu->content_id"); 
                                                    }
                                                    elseif ($menu->menu_type_id==2) {// Feature
                                                        $url= base_url($this->session->userdata('site_lang_name')."/$menu->feature_url");
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
                                                        $url = base_url($this->session->userdata('site_lang_name')."/home");
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
                                                            $url =base_url($this->session->userdata('site_lang_name')."/Content/index/$menu2->content_id"); 
                                                        }
                                                        elseif ($menu2->menu_type_id==2) {// Feature
                                                            $url= base_url($this->session->userdata('site_lang_name')."/$menu2->feature_url");
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
                                                            $url = base_url($this->session->userdata('site_lang_name')."/home");
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
            <div class="white-bgx menu-coffee-color">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu main-none">
                            <nav>
                                <ul>
                                    <?php 
                                            foreach ($menus as $menu) { 

                                                if($menu->is_header==1){

                                                    if($menu->menu_type_id==1){ // Content
                                                        $url =base_url($this->session->userdata('site_lang_name')."/Content/index/$menu->content_id"); 
                                                    }
                                                    elseif ($menu->menu_type_id==2) {// Feature
                                                        $url= base_url($this->session->userdata('site_lang_name')."/$menu->feature_url");
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
                                                        $url = base_url($this->session->userdata('site_lang_name')."/home");
                                                    }
                                                   
                                        ?>
                                        <li>
                                            <a href="<?=$url ?> ">
                                                <?=$menu->menu_name ?> 
                                                <?=sizeof($menu->submenu)>0?'<i class="fas fa-caret-down" style="color:#FFF;"></i>':''?>
                                            </a>
                                            <?php if(sizeof($menu->submenu)>0){ ?>
                                            <ul class="submenu">
                                                <?php foreach ($menu->submenu as $menu2) { 

                                                        if($menu2->menu_type_id==1){ // Content
                                                            $url =base_url($this->session->userdata('site_lang_name')."/Content/index/$menu2->content_id"); 
                                                        }
                                                        elseif ($menu2->menu_type_id==2) {// Feature
                                                            $url= base_url($this->session->userdata('site_lang_name')."/$menu2->feature_name");
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
                                                            $url = base_url($this->session->userdata('site_lang_name')."/home");
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
<style type="text/css">
            .dropsshover {
            position: relative;
            display: inline-block;
            }
            .dropdown-content {
            display: none;
            position: absolute;
            }
            .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }
            .dropsshover:hover .dropdown-menu {display: block;}
          <style type="text/css">
            ul li .colorli a{
            color: #131212;
            font-size: 14px;
            }
          </style>

<style type="text/css">
  .ct-topbar {
    text-align: right;
  
    }
    .ct-topbar__list {
      margin-bottom: 0px;
    }
    .ct-language__dropdown{
      padding-top: 8px;
      max-height: 0;
      overflow: hidden;
      position: absolute;
      top: 110%;
      left: -3px;
      -webkit-transition: all 0.25s ease-in-out;
      transition: all 0.25s ease-in-out;
      width: 140px;
      text-align: center;
      padding-top: 0;
      z-index:200;
    }
    .ct-language__dropdown li{
      background: #fff;
      padding: 5px;
      width: 70px;
      height: 39px;
      text-align: left;
      float: left;
    }
    .ct-language__dropdown li a{
        /*display: inline;*/
    }
    .ct-language__dropdown li:first-child{
        /*  padding-top: 10px;*/
        /*border-radius: 3px 3px 0 0;*/
    }
    .ct-language__dropdown li:last-child{
        /*padding-bottom: 10px;*/
        /*border-radius: 0 0 3px 3px;*/
    }
    .ct-language__dropdown li:hover{
      background: #444;
      color: #fff
    }
    .ct-language__dropdown li:hover span{
      color: #fff
    }
    .ct-language__dropdown:before{
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      margin: auto;
      width: 8px;
      height: 0;
      border: 0 solid transparent;
      border-right-width: 8px;
      border-left-width: 8px;
      border-bottom: 8px solid #fff;
    }
    .ct-language{
      position: relative;color: #fff;font-size: 16px;line-height: 25px;font-weight: 400;
    }
    .ct-language:hover .ct-language__dropdown{
      max-height: 270px;
      padding-top: 8px;
    }
    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    .navbar-brand>img {
      padding-top: 11px;
      width: 130px;
      margin-left: 15px;
    }
    .navbar-brand {
        height: auto;
        margin: 0;
        padding: 0;
        margin-right: 20px;
    }
    .navbar {
      background-color: #000000;
    }
    .navbar-default .navbar-nav > .active > a {
      padding: 8px 19px 9px !important;
    }
    .navbar-nav > li.active {
      padding: 8px 0px 9px 0;
    }
    .navbar-right {
      padding-top: 0;
    }
    .navbar-default .navbar-nav > li > a::after {
      background-color: transparent;
      border-bottom: 3px solid #d2282e;
    }
    .navbar-default .navbar-nav>li {
      display: inline-block;
      text-align: center;
      float: none;
    }
    .navbar-default .navbar-nav>li>a {
        color: #fff;
    }
    .navbar-default .navbar-nav>li>a:hover {
        color: #fff;
        background-color: #0392CC;
    }
    @media (max-width: 575px) and (min-width: 300px) {
        .header-top-left {
            flex-wrap: wrap;
        }
        .language-currency:nth-child(2)::before {
            width: 0px;
        }
        .lang-curr-dropdown ul li ul {
            width: 130px;
        }

    }
    @media (max-width: 768px) and (min-width: 575px) {
        .header-top-left {
            flex-wrap: wrap;
        }
        .language-currency:nth-child(2)::before {
            width: 0px;
        }
        .lang-curr-dropdown ul li ul {
            width: 130px;
        }

    }
</style>