<div class="preloader" >
    <div class="status">
        <div class="status-message">
        </div>
    </div>
</div>
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="info-bar">
                    <div class="ct-topbar">
                        <div class="container">
                            <ul class="list-unstyled list-inline ct-topbar__list">
                                <li class="ct-language">
                                        <?=$lang=='EN'?'Change language':'เปลี่ยนภาษา'?> <i class="fab fa-google" style="font-size: 16px;"></i> : <i class="fa fa-arrow-down"></i>
                                    <ul class="list-unstyled ct-language__dropdown">
                                        <li><a href="#googtrans(th|th)" class="lang-en lang-select" data-lang="en"><img src="<?php echo base_url() ?>assets_theme_2020_v2/img/lang/flag-th.png" alt="Thai"></a></li>
                                        <li><a href="#googtrans(th|en)" class="lang-en lang-select" data-lang="en"><img src="<?php echo base_url() ?>assets_theme_2020_v2/img/lang/flag-usa.png" alt="USA"></a></li>
                                    </ul>
                                </li>
                                <li class="ct-language">                                    
                                        <?=$lang=='EN'?'Language':'เปลี่ยนภาษา' ?> <i class="ion-chevron-down"></i>
                                        <ul class="list-unstyled ct-language__dropdown" >
                                            <li><a style="" href="javascript:changelang('<?php echo base_url("LangSwitch/switchLanguage/TH") ?>');"><?=$lang=='EN'?'TH':'TH' ?> </a></li>
                                            <li><a style="" href="javascript:changelang('<?php echo base_url("LangSwitch/switchLanguage/EN") ?>');"><?=$lang=='EN'?'EN':'EN' ?> </a></li>
                                        </ul>
                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 hidden-xs">
                <div class="social">
                    <ul>
                        <li>
                            <a target="_blank" href="<?= $companyData->facebook ?>" class="pull-right"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="<?= $companyData->line_id ?>" class="pull-right"><i class="fab fa-line"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="<?= $companyData->youtube ?>" class="pull-right"><i class="fab fa-youtube-square"></i></a>
                        </li>
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="nav-bar">
    <div class="container" style="margin-bottom: 37px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo">
                     <a href="<?=base_url()?>"><img src="<?php echo base_url() ?>images/logo.png" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    
                    <div class="col-sm-4">
                        <div class="info-nav">
                            <div class="info-nav-heading"><?=$lang=='EN'?'Contact':'ติดต่อ' ?> : </div>
                            <div class="info-nav-dtl">
                                <?
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
                                    
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="info-nav">
                            <div class="info-nav-heading">อีเมล:</div>
                            <div class="info-nav-dtl">
                                <?
                                    if(strstr($companyData->com_email,',')){
                                      $arrs = explode(',', $companyData->com_email);
                                      $phones = 1;
                                      foreach ($arrs as $arr) {
                                        if ($phones == 1) {
                                            echo "<a href='mailto:$arr' >$arr</a>";
                                        }
                                        $phones = $phones + 1;
                                        
                                      }
                                    }
                                    else{
                                       $arr = $companyData->com_email;
                                       echo "<a href='mailto:$arr' >$arr</a>";
                                    }
                                    
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-8 text-right">
                        <a href="<?=base_url("Content/index/7")?>" class="btn btn-danger" target="_blank"><?=$lang=='EN'?'Contact us':'ติดต่อผู้ขาย'?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fulid" style="background-color: #012043;">
        <div class="container" >
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-9 pad-0">
                    <div class="navigation" style="margin: 0px 0 0;">
                        <div id="cssmenu">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 pad-0">
                    <div class="nav-right" style="margin: 0px 0 0;">
                        <ul>
                            <li class="download-btn">
                                <a href="<?php echo base_url() ?>Ebook"><i class="ti-download"></i><?=$lang=='EN'?'Download E-book':'ดาวน์โหลด อีบุ๊ค'?> </a>
                            </li>
                            <li class="search-btn search-icon text-center">
                                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="search">
                <div class="container">
                    <form method="GET" class="header-search-form" id="frmSearch" name="frmSearch" action="<?=base_url("Products/showtag/");?>">
                        <input type="search" name="search" class="search-box" placeholder="Search"/>
                        <a href="#" class="fa fa-times search-close"onclick="this.form.submit()"></a>
                    </form>
                </div>
            </div>
            <!-- <div class="modal fade request-model" id="request-model" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h5 class="modal-title text-center">Request A Quote</h5>
                        </div>
                        <div class="modal-body request-model-body text-center">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Enter Subject">
                                </div>
                                <div class="form-group">
                                    <textarea id="message" name="message" rows="6" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Request</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div> -->
        </div>
    </div>
</div>