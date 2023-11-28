<?php 
$json = json_decode($companyData->header_footer_json);    
    // print_r($json);
    // exit();


?>
<header class="header-area header-position">
    <div class="header-top pt-10 pb-13" style="<?=$json->header_top_bg_color?'background-color: '.$json->header_top_bg_color.' ;':''?>;">
        <div class="container">
            <div class="row" style="align-items:center;">
                <div class="col-xl-7 col-lg-8 col-md-9 col-sm-12 col-12">
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
                        <div class="col-xl-5 col-lg-4 col-md-3 col-sm-12 col-12" style="text-align: center;">
                            <div class="header-top-right">
                                <ul>
                                    <?php if ($companyData->line_id) { ?>
                                        <li>
                                            <a href="http://line.me/ti/p/~<?=$companyData->line_id?>"><img alt="line" src="<?php echo base_url() ?>images/cover/line.webp" style="padding-right: 5px;"></a>
                                        </li>
                                    <? } ?>
                                    <?php if ($companyData->facebook) { ?>
                                        <li>
                                            <a href="<?=$companyData->facebook?>"><img alt="facebook" src="<?php echo base_url() ?>images/cover/fb.webp"style="padding-right: 5px;"></a>
                                        </li>
                                    <? } ?>
                                    <?php if ($companyData->youtube) { ?>
                                        <li>
                                            <a href="<?=$companyData->youtube?>"><img alt="youtube" src="<?php echo base_url() ?>images/cover/youtube.webp"style="padding-right: 5px;"></a>
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
<div class="header-bottom header-btm-coffee-res" style="padding: 10px 0;<?=$json->header_bottom_bg_color?'background-color: '.$json->header_bottom_bg_color.' ;':''?>">
    <div class="container">
        <div class="white-bgx header-btm-res-pd">
            <div class="row">
                <div class="col-12 mobilecss">
                    <div class="logo mobile-logo">
                        
                    </div>
                </div>
                <div class="col-12 d-none">
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
        <div class="row" style="align-items: center;">
            <div class="col-lg-2">
                <div class="logo logo-mrg">
                    <a href="https://www.allsiteb2b.com/th/home">
                        <img src="<?php echo base_url() ?>images/logo/logo.webp" alt="<?=$companyData->com_name?>" style="max-width: 100%;">
                    </a>
                </div>
            </div>
            <div class="d-none ">
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
                                <li>

                                    <a class="mk-search-trigger mk-fullscreen-trigger" href="#" style="display: table-cell; padding: 0px; vertical-align: middle;" id="search-button-listener">
                                        <div id="search-button"><i class="fa fa-search"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
    <div id="mk-fullscreen-search-wrapper">


      <form method="get" id="mk-fullscreen-searchform" action="<?=base_url($this->session->userdata('site_lang_name')."/products/");?>">
        <input type="text" value="" placeholder="<?=lang('Search product...') ?>" id="mk-fullscreen-search-input" name="keyword">
        <i class="fa fa-search fullscreen-search-icon"><input value="" type="submit"></i>
    </form>
</div>
</div>
</header>
<script type="text/javascript">
    jQuery(document).ready(function($) {
      var wHeight = window.innerHeight;
  //search bar middle alignment
      $('#mk-fullscreen-searchform').css('top', wHeight / 2);
  //reform search bar
      jQuery(window).resize(function() {
        wHeight = window.innerHeight;
        $('#mk-fullscreen-searchform').css('top', wHeight / 2);
    });
  // Search
      $('#search-button').click(function() {
        console.log("Open Search, Search Centered");
        $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
    });
      $("a.mk-fullscreen-close").click(function() {
        console.log("Closed Search");
        $("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
    });
  });
</script>
<style type="text/css">

    .mk-search-trigger {
      position: absolute;
      top: 45%;
      left: 45%;
  }


/* Search Overlay */

.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper #mk-fullscreen-searchform input[type=submit] {
  position: absolute;
  width: 100px;
  height: 100%;
  background-color: transparent;
  border: 0;
  right: 0;
  top: 0;
}
#mk-fullscreen-searchform:focus{
  outline: none;
  border: none;
}

.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper #mk-fullscreen-searchform .fullscreen-search-icon {
  font-size: 25px;
  position: absolute;
  right: 15px;
  width: 25px;
  top: 15px;
  color: #fff;
  color: rgba(255, 255, 255, .2);
  -webkit-transition: all .2s ease-out;
  -moz-transition: all .2s ease-out;
  -ms-transition: all .2s ease-out;
  -o-transition: all .2s ease-out;
  transition: all .2s ease-out;
}
.fullscreen-search-icon:hover,
.fullscreen-search-icon:focus{
  border: none;
  outline: none;
  color: #fff !important;
  -webkit-transition: transform ease-out .2s;
  -moz-transition: transform ease-out .2s;
  -ms-transition: transform ease-out .2s;
  -o-transition: transform ease-out .2s;
  transition: transform ease-out .2s;
  transform: rotate(180deg);
}

#mk-fullscreen-searchform {
  position: relative;
  verticle-align: middle;
}

.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper #mk-fullscreen-searchform #mk-fullscreen-search-input {
  width: 800px;
  background-color: transparent;
  -webkit-box-shadow: 0 3px 0 0 rgba(255, 255, 255, .1);
  -moz-box-shadow: 0 3px 0 0 rgba(255, 255, 255, .1);
  box-shadow: 0 3px 0 0 rgba(255, 255, 255, .1);
  border: 0;
  text-align: center;
  font-size: 30px;
  padding: 20px;
  color: #fff;
  -webkit-transition: all .3s ease-out;
  -moz-transition: all .3s ease-out;
  -ms-transition: all .3s ease-out;
  -o-transition: all .3s ease-out;
  transition: all .3s ease-out;
}
.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper #mk-fullscreen-searchform #mk-fullscreen-search-input:focus{
  boder: none;
  outline: none;
}

.mk-fullscreen-search-overlay.mk-fullscreen-search-overlay-show {
  visibility: visible;
  opacity: 1;
}

.mk-fullscreen-search-overlay {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  opacity: 0;
  visibility: hidden;
  background-color: rgba(0, 0, 0, .94);
  text-align: center;
  -webkit-transition: all ease-in-out .25s;
  -moz-transition: all ease-in-out .25s;
  -ms-transition: all ease-in-out .25s;
  -o-transition: all ease-in-out .25s;
  transition: all ease-in-out .25s;
}

.mk-animate-element,
.mk-effect-bg-layer,
.mk-fullscreen-search-overlay {
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}

.mk-fullscreen-search-overlay {
  z-index: 999;
}

.mk-fullscreen-search-overlay .mk-fullscreen-close:link,
.mk-fullscreen-search-overlay .mk-fullscreen-close:visited {
  color: #fff;
}

.mk-fullscreen-search-overlay .mk-fullscreen-close {
  position: absolute;
  right: 50px;
  top: 70px;
  font-size: 26px;
  -webkit-transition: transform ease-out .2s;
  -moz-transition: transform ease-out .2s;
  -ms-transition: transform ease-out .2s;
  -o-transition: transform ease-out .2s;
  transition: transform ease-out .2s;
  transform: rotate(0deg);
}

.mk-fullscreen-search-overlay.mk-fullscreen-search-overlay-show #mk-fullscreen-search-wrapper {
  opacity: 1;
  visibility: visible;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  ms-transform: scale(1);
}

.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper {
  display: inline-block;
  max-width: 1000px;
  vertical-align: middle;
  text-align: center;
  font-size: 18px;
  -webkit-transform: scale(0.9);
  -moz-transform: scale(0.9);
  -ms-transform: scale(0.9);
  -o-transform: scale(0.9);
  transform: scale(0.9);
  ms-transform: scale(0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all ease-in-out .3s;
  -moz-transition: all ease-in-out .3s;
  -ms-transition: all ease-in-out .3s;
  -o-transition: all ease-in-out .3s;
  transition: all ease-in-out .3s;
}

.mk-search-trigger {
  -webkit-transition: color .2s ease-in-out;
  -moz-transition: color .2s ease-in-out;
  -ms-transition: color .2s ease-in-out;
  -o-transition: color .2s ease-in-out;
  transition: color .2s ease-in-out
}
/* Search Button */
#search-button {
  display: relative;
  vertical-align: middle;
  height: 50px;
  width: 40px;
  border-radius: 50%;
  cursor: pointer;
  opacity: 1;
  padding-right: 10px;
  -webkit-transition: all 400ms;
  -moz-transition: all 400ms;
  -ms-transition: all 400ms;
  -o-transition: all 400ms;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
#search-button i{
  color: #000000!important;
  font-size: 20px;
  position: absolute;
  left: 15px;
  top: -15px;
}
#search-button:hover i{
  color: #C49F06!important;
}

#search-button:hover,
.mk-fullscreen-close:hover {

}
#mk-fullscreen-search-input:focus{
  box-shadow: 0px 3px 0px 0px rgba(255,255,255,0.54) !important;
}
</style>
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
<? if ($this->session->userdata('site_lang_name') == "th") { ?>
    .main-menu ul li {
    margin-right: 35px;
}
<? }else { ?>
    .main-menu ul li {
    margin-right: 30px;
}
<? } ?>


.menu-coffee-color .main-menu ul li a, .menu-red-color .main-menu ul li a {
    color: #000000;
}
.menu-coffee-color .main-menu ul li:hover > a {
    color: #C49F06;
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
    .header-btm-coffee-res .mean-container a.meanmenu-reveal, .header-bottom-jewelry .mean-container a.meanmenu-reveal {
        border: 1px solid #007434;
        color: #007434;
    }
    .header-btm-coffee-res .mean-container a.meanmenu-reveal span, .header-bottom-jewelry .mean-container a.meanmenu-reveal span {
        background: #007434 none repeat scroll 0 0;
    }

}
@media (max-width: 991px) and (min-width: 575px) {
    .header-top-left {
        flex-wrap: wrap;
    }
    .language-currency:nth-child(2)::before {
        width: 0px;
    }
    .lang-curr-dropdown ul li ul {
        width: 130px;
    }
    .logo.mobile-logo {
        display: inline-block;height: 35px;
    }
    .header-btm-coffee-res .mean-container a.meanmenu-reveal, .header-bottom-jewelry .mean-container a.meanmenu-reveal {
        border: 1px solid #007434;color: #007434;
    }
    .header-btm-coffee-res .mean-container a.meanmenu-reveal span, .header-bottom-jewelry .mean-container a.meanmenu-reveal span {
        background: #007434 none repeat scroll 0 0;
    }
    .header-top-right ul li {
    margin-left: 0px;
}
}
    @media (max-width: 1199px) and (min-width: 992px) {
        .main-menu ul li {
            margin-right: 30px!important;
        }
    }
    @media (max-width: 1365px) and (min-width: 1200px) {

    }
    @media (max-width: 1599px) and (min-width: 1366px) {

    }
    @media (min-width: 1600px) {}

</style>
