<?php 
    $json = json_decode($companyData->header_footer_json); 
    ?>
<footer class="footer-area pt-65" style="padding-top: 47px; <?=$json->footer_type==1?'background-image: url('.base_url("images/bgfooter.png").');':'' ?> <?=$json->footer_type==2?'background-color: '.$json->footer_top_bg_color.';':'' ?> background-size: 100% 100%; background-repeat: no-repeat;border-top: 0px solid #ffdd00;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 30px;">
                        <h4><?=$companyData->com_name ?></h4>
                    </div>
                    <div class="footer-about">
                        <?=$companyData->com_desc ; ?>
                        <div class="footer-map d-none">
                            <a href="#" target="_blank">
                                <p id="myBtn" style="color: #fff" class=""><i class="ion-ios-location-outline"></i><?=lang('View map') ?> </p>
                            </a>
                        </div>
                        <?php  if ($companyData->facebook_fanpage!="") { ?>
                        <div class="social-icon mr-40">
                            <div class="fb-page" data-href="<?php echo $companyData->facebook_fanpage ?>" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="<?php echo $companyData->facebook_fanpage ?>" class="fb-xfbml-parse-ignore">
                                    <a href="<?php echo $companyData->facebook_fanpage ?>">
                                    <?php echo $companyData->facebook_fanpage ?>                                           
                                    </a>
                                </blockquote>
                            </div>
                        </div>
                        <? } ?>
                    </div>
                    <!-- <div class="social-icon mr-40">
                        <ul>
                            <li><a class="facebook" href="https://www.facebook.com/IntiponCheme"><i class="ion-social-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a class="instagram" href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                        </div> -->
                </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-3">
                        <div class="footer-widget23 mb-40" style="text-align: left;">
                            <div class="footer-title mb-30" style="margin-bottom: 30px;">
                                <h4><?=lang('MENU') ?></h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <?php 
                                        foreach ($menus as $menu) { 
                                        
                                            if($menu->is_footer==1){
                                        
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
                                                                    $url = base_url($this->session->userdata('site_lang_name')."/Home");
                                                                }
                                        
                                                                ?>
                                    <li>
                                        <a href="<?=$url ?>" >
                                        <?=$menu->menu_name ?> 
                                        <?=sizeof($menu->submenu)>0?'<i class="ion-chevron-down" style="color:black;"></i>':''?>
                                        </a>                                            
                                    </li>
                                    <?php 
                                        }
                                        }
                                        
                                        ?>
                                    
                                    <li>
                                        <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/pdpa">
                                            <?=lang('PDPA') ?>
                                        </a>                               
                                    </li>  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    

            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="footer-widget mb-40" style="text-align: left;">
                    <div class="footer-title mb-30" style="margin-bottom: 30px;">
                        <h4><?=lang('Contact us')  ?></h4>
                    </div>
                    <div class="footer-contact">
                        <ul>
                            <? if ($companyData->com_phone) { ?>
                            <li>
                                <p style="float: left;color: #fff;"><i class="fas fa-phone-alt"></i></p>
                                <p style="margin-left: 30px;color: #fff;"><?=lang('Telephone')?> :
                                    <?php 
                                        $str = $companyData->com_phone;
                                        $com_phone = array();
                                        if(strstr($str,',')){
                                            $com_phone = explode(',', $str);
                                        }else{
                                            if($str){
                                                $com_phone[] = $str;
                                            }
                                        }              
                                        $arr = array();
                                        foreach ($com_phone as $com_phones) { 
                                            $arr[] ='<a href=tel:'.$com_phones.' >'.$com_phones.'</a>';
                                        } 
                                        if(sizeof($arr)>0)
                                            echo implode(' , ', $arr);
                                        ?> 
                                </p>
                            </li>
                            <? } ?>
                            <? if ($companyData->com_fax) { ?>
                            <li>
                                <p style="float: left;color: #fff;"><i class="fas fa-fax"></i></p>
                                <p style="margin-left: 30px;color: #fff;"><?=lang('Fax')?> :
                                    <?php 
                                        $str = $companyData->com_fax;
                                        $com_fax = array();
                                        if(strstr($str,',')){
                                            $com_fax = explode(',', $str);
                                        }else{
                                            if($str){
                                                $com_fax[] = $str;
                                            }
                                        }              
                                        $arr = array();
                                        foreach ($com_fax as $com_faxs) { 
                                            $arr[] =''.$com_faxs.'';
                                        } 
                                        if(sizeof($arr)>0)
                                            echo implode(' , ', $arr);
                                        ?> 
                                </p>
                            </li>
                            <? } ?>
                            <? if ($companyData->com_email) { ?>
                            <li>
                                <p style="float: left;color: #fff;"><i class="fas fa-envelope"></i></p>
                                <p style="margin-left: 30px;color: #fff;"><?=lang('E-mail')?> :
                                    <?php 
                                        $str = $companyData->com_email;
                                        $com_email = array();
                                        if(strstr($str,',')){
                                            $com_email = explode(',', $str);
                                        }else{
                                            if($str){
                                                $com_email[] = $str;
                                            }
                                        }              
                                        $arr = array();
                                        foreach ($com_email as $com_emails) { 
                                            $arr[] ='<a href=mailto:'.$com_emails.' >'.$com_emails.'</a>';
                                        } 
                                        if(sizeof($arr)>0)
                                            echo implode(' , ', $arr);
                                        ?>
                                </p>
                            </li>
                            <? } ?>
                            <? if ($companyData->url1) { ?>
                            <li>
                                <p style="float: left;color: #fff;"><i class="fas fa-globe-asia"></i></p>
                                <p style="margin-left: 30px;color: #fff;"><?=lang('website')?> :
                                    <?php 
                                        $str = $companyData->url1;
                                        $url1 = array();
                                        if(strstr($str,',')){
                                            $url1 = explode(',', $str);
                                        }else{
                                            if($str){
                                                $url1[] = $str;
                                            }
                                        }   
                                        // print_r($url1);exit();         
                                        // $arr = array();
                                        foreach ($url1 as $key => $url1s) {
                                            if ($key != array_key_last($url1)) {
                                                echo '<a href='.$url1s.' >'.$url1s.'</a><br>';
                                            }else {
                                                echo '<a href='.$url1s.' >'.$url1s.'</a>';
                                            }
                                        }
                                        ?> 
                                </p>
                            </li>
                            <? } ?>
                            <?/*?>
                            <li><?=lang('Line id') ?> : <a target="_blank" href="http://line.me/ti/p/~<?php echo $companyData->line_id ?>"> <?php echo $companyData->line_id ?>  </a></li>
                            <?*/?>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-bottom pb-10 pt-10" style="text-align: center; background-color:<?=$json->footer_bottom_bg_color?$json->footer_bottom_bg_color:'white' ?>; ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright" style="">
                        <p style="color: #FFF">Copyright © <? echo date('Y');?> <a href="https://www.brandexdirectory.com/" style="color: #FFF;">Brandex Directory Co., Ltd.</a> All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<style type="text/css">
    #mc_embed_signup_scroll button.btn {
    background-color: #FFC301;    
    border-color: #FFC301;
    color: #000;
    }
    .footer-contact li a:hover {
        color: #ee8b1d;
    }
    .footer-content ul li:hover a {
        color: #ee8b1d;
    }
</style>