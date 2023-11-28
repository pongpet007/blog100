
<header id="header" class="header-area style-01 layout-03">
  <div class="header-top bg-main hidden-xs">
    <div class="container">
      <div class="top-bar left">
        <ul class="horizontal-menu">
          <li><a href="https://www.brand.co.th"><i class="fa fa-angle-left" aria-hidden="true"></i></i><?=$lang=='EN'?'BACK TO HOME':'BACK TO HOME'?></a></li>
          <li>
            <?php /*
              $txt = $company->com_email;                          
              if(strstr($txt,',')){ 
                  $arr = explode(',', $txt) ;
                  $x = array();
                  foreach ($arr as $k => $v) {
                      if($k == 0)
                          $x[] = ' <a href="mailto:'.$v.'"><i class="fa fa-envelope" aria-hidden="true"></i>'. trim($v) .'</a>';
                  }
                  $str = implode(' , ', $x);
                  echo $str;
              }else{
                  if($txt)
                      echo '<a href="mailto:'.$txt.'"><i class="fa fa-envelope" aria-hidden="true"></i>'.trim($txt).'</a>';
              } */
              ?>
          </li>
        </ul>
      </div>
     
      <div class="top-bar right">
        <ul class="social-list">
          <li style="margin: 0 5px;"><a href="<? echo base_url("Store/viewStat/$com_id") ?>"><?=$lang=='EN'?'Number of website visitors':'จำนวนผู้เข้าชมเว็บไซต์'?> <? echo $counter; ?></a></li>
          <? /* if ($company->twitter) { ?>
          <li><a target="_blank" href="<? echo $company->twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <? } ?>
          <? if ($company->facebook) { ?>
          <li><a target="_blank" href="<? echo $company->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <? } ?>
          <? if ($company->line_id) { ?>
          <li><a target="_blank" href="http://line.me/ti/p/~<? echo $company->line_id ?>"><img class="icon-socail"src="<?=base_url('assets_theme_2020/');?>images/connal/line-icon.png" ></a></li>
          <? }*/ ?>
        </ul>          
        <div style="
        display: inline-block;
        float: left;
        border-left: 1px solid rgba(255,255,255,.33);
        padding: 9px 20px;
    ">
   <ul class="list-unstyled list-inline ct-topbar__list">
                                <li class="ct-language">
                                    <?=$lang=='EN'?'Language':'เปลี่ยนภาษา' ?> <i class="fa fa-google"></i>
                                    
                                    <ul class="list-unstyled ct-language__dropdown">
                                        <li><a href="#googtrans(en|th)" class="lang-en lang-select" data-lang="th"><img src="<?php echo base_url() ?>assets_theme_2020/flag-th.png" alt="Thai"></a><span> TH</span></li>
                                        <li><a href="#googtrans(th|en)" class="lang-en lang-select" data-lang="en"><img src="<?php echo base_url() ?>assets_theme_2020/flag-usa.png" alt="USA"></a><span> EN</span></li>
                                        <li><a href="#googtrans(en|km)" class="lang-en lang-select" data-lang="km"><img src="<?php echo base_url() ?>assets_theme_2020/KH.png" alt="USA"></a><span> KH</span></li>
                                        <li><a href="#googtrans(en|lo)" class="lang-en lang-select" data-lang="lo"><img src="<?php echo base_url() ?>assets_theme_2020/LA.png" alt="USA"></a><span> LA</span></li>
                                        <li><a href="#googtrans(en|my)" class="lang-en lang-select" data-lang="my"><img src="<?php echo base_url() ?>assets_theme_2020/MM.png" alt="USA"></a><span> MM</span></li>
                                        <li><a href="#googtrans(en|vi)" class="lang-en lang-select" data-lang="vi"><img src="<?php echo base_url() ?>assets_theme_2020/VN.png" alt="USA"></a><span> VN</span></li>
                                        <li><a href="#googtrans(en|ja)" class="lang-en lang-select" data-lang="ja"><img src="<?php echo base_url() ?>assets_theme_2020/JP.png" alt="USA"></a><span> JP</span></li>
                                        <li><a href="#googtrans(en|zh-CN)" class="lang-en lang-select" data-lang="zh-CN"><img src="<?php echo base_url() ?>assets_theme_2020/CN.png" alt="USA"></a><span> CN</span></li>
                                    </ul>                                   
                                   
                                </li>
                            </ul>
  </div>
        <ul class="horizontal-menu">
         
          <li class="horz-menu-item lang">
            <select name="language" onchange="setlang(this.value)">
              <? if ($lang=='EN') { ?>
              <option value="TH">Thai (TH)</option>
              <option value="EN" selected>อังกฤษ (EN)</option>
              <? }else{ ?>
              <option value="TH" selected>ไทย (TH)</option>
              <option value="EN" >English (EN)</option>
              <? } ?>
            </select>

          </li>
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
          <?php if($this->session->userdata("company_login_com_id") >0){ 
            $ss_com_id = $this->session->userdata("company_login_com_id");
            $ss_com_website = $this->session->userdata("company_login_com_website");
            // print_r($_SESSION);
            $prefix = "https://{$ss_com_website}.brand.co.th/";   
            // echo $prefix;       
            ?>
          <div class="dropdown dropsshover" style="vertical-align: middle;min-width: 140px;padding: 10px 20px;border-right: 1px solid rgba(255,255,255,0.33);    list-style: none;display: inline-block;">
            <a class="" type="button" data-toggle="dropdown">Admin
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="colorli" ><a style="color: #000" class="colorli" href="<?=$prefix."customeradmin/Company/edit/$ss_com_id"?>"><?=$lang=='EN'?'Edit Company Information':'แก้ไขข้อมูลบริษัท'?> </a></li>
              <li class="colorli" ><a style="color: #000" class="colorli" href="<?=$prefix."customeradmin/CompanyProduct/view/$ss_com_id"?>"><?=$lang=='EN'?'Products All':'สินค้าทั้งหมด'?> </a></li>
              <li class="colorli" ><a style="color: #000" class="colorli" href="<?=$prefix."customeradmin/CompanySubscription/index/$ss_com_id"?>"><?=$lang=='EN'?'Email subscription':'อีเมลล์สมัครรับข่าวสาร'?> </a></li>
              <li class="colorli" ><a style="color: #000" class="colorli" href="<?=$prefix."customeradmin/CompanyQuotation/index/$ss_com_id"?>"><?=$lang=='EN'?'Data Quotation':'ผู้ร้องขอใบเสนอราคา'?>  </a></li>
              <li class="colorli" ><a style="color: #000" class="colorli" href="<?=$prefix."customeradmin/Namecard/index/$ss_com_id"?>"><?=$lang=='EN'?'Namecard':'ข้อมูลนามบัตร'?> </a></li>
              <li><a style="color: #000" href="<?=base_url("Storeadmin/logout")?>"> Log out</a></li>
            </ul>
          </div>
          <?php }else{ ?>
          <div class="dropdown dropsshover" style="vertical-align: middle;min-width: 140px;padding: 10px 20px;border-right: 1px solid rgba(255,255,255,0.33);    list-style: none;display: inline-block;">
            <a href="#" class="" type="button" data-toggle="dropdown"><i class="brandex-icon icon-login"></i> <?=$lang=='EN'?'Login':'เข้าสู่ระบบ'?>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="colorli" ><a style="color: #000" class="link-lg login-link" href="#" data-toggle="modal" data-target="#myModal"><?=$lang=='EN'?'Edit Company Information':'แก้ไขข้อมูลบริษัท'?> </a></li>
              <li class="colorli" ><a style="color: #000" class="link-lg login-link" href="#" data-toggle="modal" data-target="#myModal"><?=$lang=='EN'?'Products All':'สินค้าทั้งหมด'?> </a></li>
              <li class="colorli" ><a style="color: #000" class="link-lg login-link" href="#" data-toggle="modal" data-target="#myModal"><?=$lang=='EN'?'Email subscription':'อีเมลล์สมัครรับข่าวสาร'?> </a></li>
              <li class="colorli" ><a style="color: #000" class="link-lg login-link" href="#" data-toggle="modal" data-target="#myModal"><?=$lang=='EN'?'Data Quotation':'ผู้ร้องขอใบเสนอราคา'?>  </a></li>
              <li class="colorli" ><a style="color: #000" class="link-lg login-link" href="#" data-toggle="modal" data-target="#myModal"><?=$lang=='EN'?'Namecard':'ข้อมูลนามบัตร'?> </a></li>
            </ul>
          </div>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  <form method="post" id="frmuserlogin" name="frmuserlogin" action="<?php echo base_url("Stroe/checkLogin") ?>">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Member login</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button id="btnLogin" type="button" class="btn btn-primary">Login</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="header-middle brandex-sticky-object ">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
          <a href="<?=base_url("Store/index/$com_id") ?>" class="brandex-logo"><img class="icon-socail" src="<?=base_url();?>images/logo/logo<? echo $com_id ?>long.jpg"  alt="brandex logo" width="135" height="36" ></a>
        </div>
        <div class="col-lg-7 col-md-9 hidden-sm hidden-xs">
          <div class="primary-menu">
            <ul class="menu brandex-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
              <li class="menu-item"><a href="<?=base_url("Store/index/$com_id") ?>"><?=$lang=='EN'?'Home':'หน้าแรก'?></a></li>
              <li class="menu-item">
                <a href="<?=base_url("Store/ProductList/$com_id")?>" class="menu-name" data-title="Product"><?=$lang=='EN'?'Products':'สินค้า'?></a>
              </li>
              <li class="menu-item menu-item-has-children has-megamenu">
                <a href="<?=base_url("Store/News/$com_id")?>" class="menu-name" data-title="<?=$lang=='EN'?'Recent News':'ข่าวสารล่าสุด'?>"><?=$lang=='EN'?'News':'ข่าวสาร'?></a>
                <? if ($countnewss > 0) { ?>
                <div class="wrap-megamenu lg-width-400 md-width-500">
                  <div class="mega-content">
                    <div class="col-lg-12 col-md-12 col-xs-12 md-margin-top-0 xs-margin-top-25px">
                      <div class="block-posts">
                        <h4 class="menu-title"><?=$lang=='EN'?'Recent News':'ข่าวสารล่าสุด'?></h4>
                        <ul class="posts">
                          <? foreach ($selectnewss as $key => $selectnewsss) { ?>
                          <li>
                            <div class="block-post-item">
                              <div class="thumb"><a href="<?=base_url("Store/NewsDetail/$com_id/$selectnewsss->news_id")?>"><img src="<?=base_url();?>images/news/<? echo $selectnewsss->news_id ?>.jpg" width="100" height="73" alt=""></a></div>
                              <div class="left-info">
                                <h4 class="post-name"><a href="<?=base_url("Store/NewsDetail/$com_id/$selectnewsss->news_id")?>"><?=$lang=='EN'?$selectnewsss->news_title:$selectnewsss->news_title_th?></a></h4>
                                <span class="p-date"><? echo $selectnewsss->cdate ?></span>
                              </div>
                            </div>
                          </li>
                          <? } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <? } ?>
              </li>
              <li class="menu-item menu-item-has-children has-megamenu">
                <a href="<?=base_url("Store/Blog/$com_id")?>" class="menu-name" data-title="<?=$lang=='EN'?'Recent Blogs':'บทความล่าสุด'?>"><?=$lang=='EN'?'Blog':'บทความ'?></a>
                <? if ($countblog > 0) { ?>
                <div class="wrap-megamenu lg-width-400 md-width-500">
                  <div class="mega-content">
                    <div class="col-lg-12 col-md-12 col-xs-12 md-margin-top-0 xs-margin-top-25px">
                      <div class="block-posts">
                        <h4 class="menu-title"><?=$lang=='EN'?'Recent Blogs':'บทความล่าสุด'?></h4>
                        <ul class="posts">
                          <? foreach ($selectblog as $key => $selectblogs) { ?>
                          <li>
                            <div class="block-post-item">
                              <div class="thumb"><a href="<?=base_url("Store/blogDetail/$com_id/$selectblogs->blog_id")?>"><img src="<?=base_url();?>images/blog/blog<? echo $selectblogs->blog_id ?>_s.jpg" width="100" height="73" alt=""></a></div>
                              <div class="left-info">
                                <h4 class="post-name"><a href="<?=base_url("Store/blogDetail/$com_id/$selectblogs->blog_id")?>"><?=$lang=='EN'?$selectblogs->title_en:$selectblogs->title_th?></a></h4>
                                <span class="p-date"><? echo $selectblogs->cdate ?></span>
                              </div>
                            </div>
                          </li>
                          <? } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <? } ?>
              </li>
              <li class="menu-item menu-item-has-children has-megamenu">
                <a href="<?=base_url("Store/ebooks/$com_id")?>" class="menu-name" data-title="<?=$lang=='EN'?'Recent E-book':'อีบุ๊คล่าสุด'?>"><?=$lang=='EN'?'E-book':'อีบุ๊ค'?></a>
                <? if ($countebook > 0) { ?>
                <div class="wrap-megamenu lg-width-400 md-width-500">
                  <div class="mega-content">
                    <div class="col-lg-12 col-md-12 col-xs-12 md-margin-top-0 xs-margin-top-25px">
                      <div class="block-posts">
                        <h4 class="menu-title"><?=$lang=='EN'?'Recent E-book':'อีบุ๊คล่าสุด'?></h4>
                        <ul class="posts">
                          <? foreach ($selectebook as $key => $selectebooks) { ?>
                          <li>
                            <div class="block-post-item">
                              <div class="thumb"><a href="#"><img src="<?=base_url();?>images/ebook/<? echo $selectebooks->ebook_id ?>.jpg" width="100%"  alt=""></a></div>
                              <div class="left-info">
                                <h4 class="post-name"><a href="#"><?=$lang=='EN'?$selectebooks->name_en:$selectebooks->name_th?></a></h4>
                                <span class="p-date"><?=$lang=='EN'?$selectebooks->detail_en:$selectebooks->detail_th?></span>

                              </div>
                              <a href="<? echo $selectebooks->link2 ?>" class="btn btn-go" style="margin-top: 75px; margin-left: 10px">
                              <?=$lang=='EN'?'View':'อ่าน'?>
                              </a>
                              <a href="<? echo $selectebooks->link ?>" class="btn btn-go" style="margin-top: 75px; margin-left: 10px;background-color: #0aa90a">
                              <?=$lang=='EN'?'Download':'ดาวน์โหลด'?> 
                              </a>
                            </div>
                          </li>
                          <? } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <? } ?>
              </li>
              <li class="menu-item"><a href="<?=base_url("Store/Aboutus/$com_id")?>"><?=$lang=='EN'?'About us':'เกี่ยวกับเรา'?></a></li>
               <li class="menu-item"><a href="<?=base_url("Store/Presentation/$com_id")?>"><?=$lang=='EN'?'Presentation':'พรีเซ็นเทชั่น'?></a></li>
              <li class="menu-item">
                <a href="<?=base_url("Store/Contactus/$com_id")?>" class="menu-name" data-title="<?=$lang=='EN'?'Contact us':'ติดต่อเรา'?>"><?=$lang=='EN'?'Contact us':'ติดต่อเรา'?></a>
                <!-- <ul class="sub-menu">
                  <li class="menu-item"><a href="<?=base_url("Store/Contactus/$com_id")?>"><?=$lang=='EN'?'Contact us':'ติดต่อเรา'?></a></li>
                  <li class="menu-item"><a href="<?=base_url("Store/Payment/$com_id")?>"><?=$lang=='EN'?'Payment':'ชำระเงิน'?></a></li>
                </ul> -->
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-1 col-md-6 col-xs-6">
          <div class="brandex-cart-info">
            <div class="mobile-search">
              <!-- <a href="#" class="open-searchbox"><i class="brandex-icon icon-search"></i></a> -->
              <div class="mobile-search-content">
                <form method="GET" class="form-search" id="frmSearch" name="frmSearch" action="<?=base_url("Store/ProductList/$com_id");?>">
                  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                  <input  name="tags" id="tags2" class="typeahead input-text" placeholder="<?=$lang=='EN'?'Search':'ค้นหา'?>..." type="text" value="<?=isset($search['keyword'])?$search['keyword']:''?>" autocomplete="off">
                  <input  name="com_id" id="com_id" class="typeahead input-text" type="hidden" value="<? echo $com_id ?>">
                  <select name="category" id="category2" onchange="myFunction2()">
                    <option value="-1" selected><?=$lang=='EN'?'All Categories':'หมวดหมู่ทั้งหมด' ?></option>
                    <?php
                      foreach ($categorys as $categoryss) { ?>
                    <option value="<? echo $categoryss[0]->cat_id; ?>"><?=$lang=='EN'?$categoryss[0]->cat_name:$categoryss[0]->cat_name_th ?></option>
                    <? } ?>
                  </select>
                  <button type="submit" class="btn-submit"><i class="brandex-icon icon-search"></i></button>
                </form>
              </div>
            </div>
            <? if ($company->url2) { ?>
            <div class="wishlist-block hidden-sm hidden-xs">
              <a href="<? echo $company->url2 ?>" target="_blank" >
              <button class="btn btn-go"><?=$lang=='EN'?'Go to site':'ไปที่เว็บไซต์' ?></button>
              </a>
            </div>
            <? } ?>
            <div class="mobile-menu-toggle">
              <a class="btn-toggle" data-object="open-mobile-menu" href="<?=base_url()?>">
              <span></span>
              <span></span>
              <span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bottom hidden-sm hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="vertical-menu vertical-category-block">
            <div class="block-title">
              <span class="menu-icon">
              <span class="line-1"></span>
              <span class="line-2"></span>
              <span class="line-3"></span>
              </span>
              <span class="menu-title"><?=$lang=='EN'?'All Categories':'หมวดหมู่ทั้งหมด' ?></span>
              <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
            </div>
            <div class="wrap-menu">
              <ul class="menu clone-main-menu">
                <?php
                  foreach ($categorys as $categoryss) { ?>
                <li class="menu-item menu-item-has-children has-megamenu">
                  <a style="line-height: 2; padding-top:9px " href="<?=base_url("Store/ProductList/$com_id")?>?cat_id=<?=$categoryss[0]->cat_id?>" class="menu-name" data-title="<?=$lang=='EN'?$categoryss[0]->cat_name:$categoryss[0]->cat_name_th ?>">
                  <?php 
                    $filepath = "images/category/". $categoryss[0]->cat_id .'.jpg';
                    $newlang=='EN'?$company->com_name_en:$company->com_name_th;
                    if(is_file($filepath)){
                    echo '<img alt="'.$newlang.'" src="'.base_url($filepath).'?'.rand().'" class="img-icon">';                
                    }else{ ?>
                  <img class="img-icon"src="<?=base_url('assets_theme_2020/');?>images/connal/category-4.png">
                  <? }
                    ?>
                  <?=$lang=='EN'?$categoryss[0]->cat_name:$categoryss[0]->cat_name_th ?></a>
                  <?php if(isset($categoryss['sub1'])){
                    $categorys2 = $categoryss['sub1'];
                    ?> 
                  <div class="wrap-megamenu lg-width-900 md-width-640">
                    <div class="mega-content">
                      <div class="row">
                        <?php foreach ($categorys2 as $key2 => $category2) { ?> 
                        <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                          <div class="wrap-custom-menu vertical-menu">
                            <a href="<?=base_url("Store/ProductList/$com_id")?>?cat_id=<?=$category2[0]->cat_id?>">
                              <h4 class="menu-title"><?=$lang=='EN'?$category2[0]->cat_name:$category2[0]->cat_name_th ?></h4>
                            </a>
                            <?php if(isset($category2['sub2'])){
                              $categorys3 = $category2['sub2'];
                              ?> 
                            <ul class="menu">
                              <?php foreach ($categorys3 as $key3 => $categorys3s){ ?>  
                              <li><a href="<?=base_url("Store/ProductList/$com_id")?>?cat_id=<?=$categorys3s->cat_id?>"><?=$lang=='EN'?$categorys3s->cat_name:$categorys3s->cat_name_th ?></a></li>
                              <? } ?>
                            </ul>
                            <? } ?>
                          </div>
                        </div>
                        <? } ?>
                      </div>
                    </div>
                  </div>
                  <? } ?>
                </li>
                <? } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 padding-top-2px">
          <div class="header-search-bar layout-01">
            <form method="GET" class="form-search" id="frmSearch2" name="frmSearch" action="<?=base_url("Store/ProductList/$com_id");?>">
              <input  name="tags" id="tags" class="typeahead input-text" placeholder="<?=$lang=='EN'?'Search':'ค้นหา'?>..." type="text" value="<?=isset($search['keyword'])?$search['keyword']:''?>" autocomplete="off">
              <select name="category" id="category" onchange="myFunction()">
                <option value="-1" selected><?=$lang=='EN'?'All Categories':'หมวดหมู่ทั้งหมด' ?></option>
                <?php
                  foreach ($categorys as $categoryss) { ?>
                <option value="<? echo $categoryss[0]->cat_id; ?>"><?=$lang=='EN'?$categoryss[0]->cat_name:$categoryss[0]->cat_name_th ?></option>
                <? } ?>
              </select>
              <button type="submit" class="btn-submit"><i class="brandex-icon icon-search"></i></button>
            </form>
          </div>
          <script></script>
          <div class="live-info">
            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">
              <?php 
                $txt = strip_tags($company->hotline);
                if(strstr($txt,',')){
                    $arr = explode(',', $txt) ;
                    $x = array();
                    foreach ($arr as $k => $v) {
                        if($k == 0)
                            $x[] ='<a href="tel:'.$v.'">'. trim($v) .'</a>' ;
                    }
                    $str = implode('  </br>', $x);
                    echo $str;
                }else{
                    if($txt)
                        echo '<a href="tel:'.$txt.'">'.trim($txt).'</a>';
                }
                ?>
              </b>
            </p>
            <p class="working-time"><?=$lang=='EN'?$company->company_open_en:$company->company_open_th ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<script type="text/javascript">
  
  // function googleTranslateElementInit() {
  //     new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
  //   }
    
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
             pageLanguage: 'th',
             includedLanguages: 'en,km,lo,my,vi,ja,zh-CN',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            multilanguagePage: true
        }, 'google_translate_element');
    }
</script>
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
  background: #222;
  padding: 5px;
  width: 70px;
  height: 39px;
  text-align: left;
  float: left;
}
.ct-language__dropdown li a{
  display: inline;
}
.ct-language__dropdown li:first-child{
  padding-top: 10px;
  /*border-radius: 3px 3px 0 0;*/
}
.ct-language__dropdown li:last-child{
  padding-bottom: 10px;
  /*border-radius: 0 0 3px 3px;*/
}
.ct-language__dropdown li:hover{
  background: #444;
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
  border-bottom: 8px solid #222;
}
.ct-language{
  position: relative;
  /*background: #00aced;*/
  color: #fff;
  
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
</style>