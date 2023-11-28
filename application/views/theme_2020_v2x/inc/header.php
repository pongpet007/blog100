<div class="preloader" >
    <div class="status">
        <div class="status-message">
        </div>
    </div>
</div>
<div class="top-bar" style="background-image: url('<? echo base_url() ?>assets_theme_2020_v2/images/bg/top-bar.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="info-bar">
                    <div class="ct-topbar">
                        <div class="container">
                            <ul class="list-unstyled list-inline ct-topbar__list">
                                <li class="ct-language">
                                    เลือกภาษา <i class="fa fa-arrow-down"></i>
                                    <ul class="list-unstyled ct-language__dropdown">
                                        <li><a href="#googtrans(th|th)" class="lang-en lang-select" data-lang="en"><img src="<?php echo base_url() ?>assets_theme_2020_v2/img/lang/flag-th.png" alt="Thai"></a></li>
                                        <li><a href="#googtrans(th|en)" class="lang-en lang-select" data-lang="en"><img src="<?php echo base_url() ?>assets_theme_2020_v2/img/lang/flag-usa.png" alt="USA"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 hidden-xs">
            </div>
        </div>
    </div>
</div>
<div class="nav-bar">
    <div class="container" style="margin-bottom: 37px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo">
                    <a href="<?php echo base_url() ?>"><img class="img-responsive" src="<?php echo base_url() ?>assets_theme_2020_v2/img/home/5.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-3">
                        <div class="info-nav">
                            <div class="info-nav-heading">เบอร์ติดต่อ:</div>
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
                                       echo "<a href='tel:$arr' >$arr</a>";
                                    }
                                    
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
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
                    <div class="col-sm-4 col-xs-8">
                        <div class="col-sm-4 col-xs-4" style="padding-right: 10px;padding-left: 10px;">
                            <a target="_blank" href="<?php echo $companyData->facebook ?>" class="pull-right"><img class="img-responsive" src="<?php echo base_url() ?>assets_theme_2020_v2/img/home/2.png"></a>
                        </div>
                        <div class="col-sm-4 col-xs-4" style="padding-right: 10px;padding-left: 10px;">
                            <a target="_blank" href="<?php echo $companyData->line_id ?>" class="pull-right"><img class="img-responsive" src="<?php echo base_url() ?>assets_theme_2020_v2/img/home/3.png"></a>
                        </div>
                        <div class="col-sm-4 col-xs-4" style="padding-right: 10px;padding-left: 10px;">
                            <a target="_blank" href="<?php echo $companyData->youtube ?>" class="pull-right"><img class="img-responsive" src="<?php echo base_url() ?>assets_theme_2020_v2/img/home/4.png"></a>
                        </div>
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
                                <li class="<?php if($menuactive == 1){ echo "active";} ?>"><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
                                <li class="<?php if($menuactive == 2){ echo "active";} ?>"><a href="<?php echo base_url() ?>Aboutus">เกี่ยวกับเรา</a></li>
                                <li class="<?php if($menuactive == 3){ echo "active";} ?>"><a href="<?php echo base_url() ?>Products">สินค้า</a></li>
                                <li class="<?php if($menuactive == 4){ echo "active";} ?>"><a href="<?php echo base_url() ?>News">ข่าวสาร</a></li>
                                <li class="<?php if($menuactive == 5){ echo "active";} ?>"><a href="<?php echo base_url() ?>Contactus">ติดต่อเรา</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 pad-0">
                    <div class="nav-right" style="margin: 0px 0 0;">
                        <ul>
                            <li class="download-btn">
                                <a href="<?php echo base_url() ?>Ebook"><i class="ti-download"></i> ดาวน์โหลด อีบุ๊ค</a>
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