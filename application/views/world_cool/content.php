<!doctype html>
<html class="no-js" lang="zxx">
<?php $this->load->view($theme_path.'/inc/header-meta') ?>
<body>

    <?php $this->load->view($theme_path.'/inc/header') ?>

    <div class="breadcrumb-area gray-bg-7">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/home"><?= lang('Home') ?></a></li>
                    <? if ($menu_id == "15") { ?>
                        <li><a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/pdpa"><?= lang('PDPA') ?></a></li>
                    <? } ?>

                    <li class="active"><?= $breadcrumb ?></li>
                </ul>
            </div>
        </div>
    </div>

    <?php foreach ($homepage->rows as $row) {
        $str = $row->checkboxlang;

        $checkboxlangs = array();
        if(strstr($str,',')){
            $checkboxlangs = explode(',',$str);
        }else{
            if($str){
                $checkboxlangs[] = $str;
            }
        }  
        foreach ($checkboxlangs as $checkboxlangsnew) {
            $checknums[$checkboxlangsnew] = $checkboxlangsnew;
        } 
        ?>
        <?php if (array_key_exists($this->session->userdata('site_lang'), $checknums)) { ?>
            <div id="section<?=$row->row_id ?>" style="display: block;" >
                <div class="<?=$row->is_fullwidth==1?'container-fluid':'container'?> " >
                    <div class="rowwrap<?=$row->row_id ?>">
                        <div class="container container<?=$row->row_id ?>">
                            <div class="row">
                                <?php 
                                foreach ($row->items as $item) {


                                    if($item->template_id==1){
                                        $this->load->view($theme_path."/template_display/item_text",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==2){ // Images
                                        $this->load->view($theme_path."/template_display/item_image",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==3){ // Google Map
                                        $this->load->view($theme_path."/template_display/item_google_map",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==4){ // Youtube
                                        $this->load->view($theme_path."/template_display/item_youtube",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==5){ // VDO
                                        $this->load->view($theme_path."/template_display/item_vdo",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==6){ // Contactus
                                        $this->load->view($theme_path."/template_display/item_contactus",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==7){ // Product
                                        $this->load->view($theme_path."/template_display/item_product",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==8){ // Blog
                                        $this->load->view($theme_path."/template_display/item_blog",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==9){ // Blog
                                        $this->load->view($theme_path."/template_display/item_contactus_information",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==10){ // News letter
                                        $this->load->view($theme_path."/template_display/item_newsletter",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==11){ // slide
                                        $this->load->view($theme_path."/template_display/item_slide",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==12){ // news
                                        $this->load->view($theme_path."/template_display/item_news",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==13){ // item_image_responsive_full
                                        $this->load->view($theme_path."/template_display/item_image_responsive_full",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                } 
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? }else { ?>
            <div id="section<?=$row->row_id ?>" style="display: none;" >
                <div class="<?=$row->is_fullwidth==1?'container-fluid':'container'?> " >
                    <div class="rowwrap<?=$row->row_id ?>">
                        <div class="container container<?=$row->row_id ?>">
                            <div class="row">
                                <?php 
                                foreach ($row->items as $item) {


                                    if($item->template_id==1){
                                        $this->load->view($theme_path."/template_display/item_text",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==2){ // Images
                                        $this->load->view($theme_path."/template_display/item_image",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==3){ // Google Map
                                        $this->load->view($theme_path."/template_display/item_google_map",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==4){ // Youtube
                                        $this->load->view($theme_path."/template_display/item_youtube",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==5){ // VDO
                                        $this->load->view($theme_path."/template_display/item_vdo",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==6){ // Contactus
                                        $this->load->view($theme_path."/template_display/item_contactus",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==7){ // Product
                                        $this->load->view($theme_path."/template_display/item_product",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==8){ // Blog
                                        $this->load->view($theme_path."/template_display/item_blog",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==9){ // Blog
                                        $this->load->view($theme_path."/template_display/item_contactus_information",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==10){ // News letter
                                        $this->load->view($theme_path."/template_display/item_newsletter",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==11){ // slide
                                        $this->load->view($theme_path."/template_display/item_slide",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==12){ // news
                                        $this->load->view($theme_path."/template_display/item_news",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                    elseif($item->template_id==13){ // item_image_responsive_full
                                        $this->load->view($theme_path."/template_display/item_image_responsive_full",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                                    }
                                } 
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
        <?php   
        $checknums=null;
        $checkboxlangs=null;
        ?>
    <?php } ?>

    

    <?php $this->load->view($theme_path.'/inc/footer') ?>

    <?php $this->load->view($theme_path.'/inc/footer-js') ?>
    <style type="text/css">
        <?php foreach ($homepage->rows as $row) { ?>
            #section<?=$row->row_id ?>{
                <?
                if($row->bg_filename){
                    echo "
                    background-image: url(".base_url("images/bg/$row->bg_filename").");
                        background-size: cover;
                        background-repeat: no-repeat;
                        ";
                    } 

                    if($row->bg_color){
                        echo "background-color: {$row->bg_color};";
                    }
                    ?>  
                    margin-top: <?=$row->margin_top ?>px;
                    margin-right: <?=$row->margin_right ?>px;
                    margin-bottom: <?=$row->margin_bottom ?>px;
                    margin-left: <?=$row->margin_left ?>px;
                    padding-top: <?=$row->padding_top ?>px;
                    padding-right: <?=$row->padding_right ?>px;
                    padding-bottom: <?=$row->padding_bottom ?>px;
                    padding-left: <?=$row->padding_left ?>px;
                }


            <?php } ?>
        </style>

        <?php if ($content_id == 2) { ?>
            <style type="text/css">
                #section8 {
                    background-image: url(http://www.spi-plastic.com/images/upload/2023Aug25_1692933499.webp);padding: 60px 0;
                }
                #section8 .rowwrap8 {
                    display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;
                }
                #section8 .rowwrap8 .container8 {
                    max-width: 100%;
                }
                .item13 {
                    padding: 60px 0;z-index: 1;
                }
                .item14 {
                    background-image: url(http://www.spi-plastic.com/images/upload/2023Aug25_1692933179.webp);box-shadow: 0px 3px 6px #00000029;z-index: 1;
                }
                .item14 .imagesec {
                    text-align: center;padding: 0 370px 0 120px;margin-bottom: 30px;
                }
                .item14 .textsec {
                    padding: 0 370px 0 120px;
                }
                .item14 .textsec h1 {
                    color: #007437;font-size: 32px;line-height: 35px;font-weight: 500;
                }
                .item14 .textsec p {
                    color: #414042;font-size: 18px;line-height: 35px;font-weight: 300;text-indent: 30px;
                }
                .item15 {
                    margin-top: -90px;
                    padding: 0 350px;
                }
                .item15 p {
                    color: #414042;font-size: 18px;line-height: 30px;font-weight: 300;text-indent: 30px;
                }
                .item15 p span {
                    font-weight: 500;
                }
                .item15 .divsec {
                    border: 10px solid #007437;padding: 140px 30px 30px;
                }
                .item15 .divsec img {
                    display: block;margin: auto 0 auto auto;
                }
                .container9 {
                    max-width: 100%;
                }
                .container9 .row, .container10 .row, .container11 .row {
                    align-items: center;
                }
                .item16 {
                    padding-left: 350px;
                }
                .item16 h1, .item19 h1, .item20 h1 {
                    color: #007437;font-size: 32px;font-weight: 500;line-height: 40px;
                }
                .item16 hr, .item19 hr {
                    border: 2px solid #C49F06;width: 125px;margin: 0px 0 60px;
                }
                .item17 {
                    padding-right: 220px;
                }
                .item20 hr {
                    border: 2px solid #C49F06;width: 125px;margin: 0px 0 15px;
                }
                .item16 p, .item19 p, .item20 p {
                    color: #414042;font-size: 18px;line-height: 30px;font-weight: 300;text-indent: 30px;
                }
                .container10 {
                    max-width: 100%;
                }
                .item18 {
                    padding-left: 220px;
                }
                .item19 {
                    padding-right: 350px;
                }
                #section12 {
                    padding: 60px 0;
                }
                .item22 .text-desc, .item23 .text-desc, .item24 .text-desc, .item25 .text-desc {
                    text-align: center;background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 3px 6px #00000029;padding: 60px;margin-bottom: 30px;height: 360px;display: block;align-items: center;align-content: center;
                }
                .item22 h1, .item23 h1, .item24 h1, .item25 h1 {
                    color: #007437;font-size: 32px;font-weight: 500;line-height: 60px;
                }
                .item22 p, .item23 p, .item24 p, .item25 p {
                    color: #414042;font-size: 18px;line-height: 30px;font-weight: 300;
                }
                #section13 {
                    padding: 60px 0;
                }
                .item26 h1 {
                    font-weight: 500;color: #007437;font-size: 32px;line-height: 50px;
                }
                .item26 hr {
                    border: 2px solid #C49F06;width: 125px;margin: auto 0 60px;
                }
                .item26 h2 {
                    color: #000000;font-size: 24px;line-height: 39px;font-weight: 400;
                }
                .item26 ul {
                    list-style: auto;color: #000000;font-size: 20px;line-height: 40px;font-weight: 300;padding-left: 15px;
                }
                .container11 {
                    max-width: 100%;
                }
                .item20 {
                    padding-left: 350px;
                }


                @media (max-width: 767px) and (min-width: 300px) {
                    #section8 {
                        padding: 0px 0;
                    }
                    .item13 {
                        padding: 0px;
                    }
                    .item14 {
                        padding-top: 30px;
                    }
                    .item14 .text-desc>img {
                        display: none;
                    }
                    .item14 .textsec {
                        padding: 15px;
                    }
                    .item14 .textsec h1 {
                        font-size: 26px;
                    }
                    .item15 {
                        margin-top: -90px;
                        padding: 0 0px;
                    }
                    .item15 .divsec {
                        padding: 110px 15px 30px;
                    }
                    .item16 {
                        padding-left: 15px;
                    }
                    .item17 {
                        padding-right: 15px;
                    }
                    .item18 {
                        padding-left: 15px;order: 2;
                    }
                    .item19 {
                        padding-right: 15px;
                    }
                    .item20 {
                        padding-left: 15px;
                    }
                    .item21 img {
                        margin-bottom: 30px;
                    }
                    #section9 {
                        padding-top: 30px;
                    }
                    .item16 hr, .item19 hr {
                        margin: 0px 0 15px;
                    }
                    .item17 img {
                        margin-bottom: 30px;
                    }
                    .item22 .text-desc, .item23 .text-desc, .item24 .text-desc, .item25 .text-desc {
                        height: unset;padding: 30px 15px 15px;
                    }
                    #section12 {
                        padding: 30px 0;
                    }
                    #section13 {
                        padding: 30px 0;
                    }
                    .item26 hr {
                        margin: auto 0 15px;
                    }
                    .item26 h2 {
                        font-size: 20px;line-height: 40px;
                    }
                    .item26 ul {
                        font-size: 18px;
                    }
                    .item14 .imagesec {
                        padding: 15px;margin-bottom: 30px;
                    }
                }


                @media (max-width: 991px) and (min-width: 768px) {
                    #section8 {
                        padding: 0px 0;
                    }
                    .item13 {
                        padding: 0px 0; 
                    }
                    .item14 .imagesec {
                        padding: 15px;margin-bottom: 30px;
                    }
                    .item14 .textsec {
                        padding: 0 15px;
                    }
                    .item15 {
                        padding: 0;
                    }
                    .item15 .divsec {
                        padding: 110px 15px 30px;
                    }
                    .item16 {
                        padding-left: 15px;padding-top: 30px;
                    }
                    .item16 hr, .item19 hr {
                        margin: 0px 0 15px;
                    }
                    .item17 {
                        padding-right: 15px;margin-bottom: 30px;
                    }
                    .item18 {
                        padding-left: 15px;order: 2;
                    }
                    .item19 {
                        padding-right: 15px;
                    }
                    .item20 {
                        padding-left: 15px;
                    }
                    .item21 {
                        padding-bottom: 30px;
                    }
                    #section12 {
                        padding: 30px 0;
                    }
                    .item22 .text-desc, .item23 .text-desc, .item24 .text-desc, .item25 .text-desc {
                        height: unset;padding: 30px 15px 15px;
                    }
                    #section13 {
                        padding: 30px 0;
                    }
                    .item26 hr {
                        margin: auto 0 15px;
                    }
                    .item26 h2 {
                        font-size: 20px;
                    }
                    .item26 ul {
                        font-size: 16px;
                    }

                }

                @media (max-width: 1199px) and (min-width: 992px) {
                    #section8 {
                        padding: 30px 0;
                    }
                    .item14 .text-desc>img {
                        height: 60px!important;width: auto!important;
                    }
                    .item14 .imagesec {
                        padding: 0;margin-bottom: 15px;
                    }
                    .item14 .textsec {
                        padding: 0;
                    }
                    .item14 .imagesec>img {
                        height: 100px!important;width: auto!important;
                    }
                    .item14 .textsec h1 {
                        font-size: 30px;
                    }
                    .item14 .textsec p {
                        font-size: 16px;
                    }
                    .item15 .divsec {
                        padding: 100px 30px 30px;
                    }
                    .item15 {
                        padding: 0 100px;
                    }
                    .item15 img {
                        height: 60px!important;width: auto!important;
                    }
                    .item16 {
                        padding-left: 15px; 
                    }
                    .item17 {
                        padding-right: 15px;
                    }
                    .item18 {
                        padding-left: 15px;
                    }
                    .item16 hr, .item19 hr {
                        margin: 0px 0 15px;
                    }
                    .item17 img {
                        margin-bottom: 30px;
                    }
                    .item19 {
                        padding-right: 15px;
                    }
                    .item20 {
                        padding-left: 15px;
                    }
                    .item22 .text-desc, .item23 .text-desc, .item24 .text-desc, .item25 .text-desc {
                        display: block;height: 260px;padding: 15px;
                    }
                    .item26 hr {
                        margin: auto 0 30px;
                    }
                }

                @media (max-width: 1399px) and (min-width: 1200px) {
                    #section8 {
                        padding: 30px 0;
                    }
                    .item14 .imagesec {
                        padding: 0;
                    }
                    .item14 .textsec {
                        padding: 0;
                    }
                    .item15 {
                        padding: 0 100px;
                    }
                    .item15 .divsec {
                        padding: 115px 30px 30px;
                    }
                    .item16 {
                        padding-left: 15px;
                    }
                    .item17 {
                        padding-right: 15px;
                    }
                    .item18 {
                        padding-left: 15px;
                    }
                    .item19 {
                        padding-right: 15px;
                    }
                    .item20 {
                        padding-left: 15px;
                    }
                    #section9 {
                        padding-bottom: 30px;
                    }
                    .item26 hr {
                        margin: auto 0 30px;
                    }
                }

                @media (max-width: 1599px) and (min-width: 1400px) {}

                @media (min-width: 1600px) {}
                



                
                @media (min-width: 1000px) {
                    #timeline .demo-card:nth-child(even) .head::after, #timeline .demo-card:nth-child(odd) .head::after {
                        position: absolute;
                        content: "";
                        width: 0;
                        height: 0;
                        border-top: 15px solid transparent;
                        border-bottom: 15px solid transparent;
                    }

                    #timeline .demo-card:nth-child(even) .head::before, #timeline .demo-card:nth-child(odd) .head::before {
                        position: absolute;
                        content: "";
                        width: 9px;
                        height: 9px;
                        background-color: #d9a243;
                        border-radius: 9px;
                        box-shadow: 0px 0px 2px 8px #f7f7f7;
                    }
                }

                .demo-card:nth-child(1) {
                    order: 1;
                }

                .demo-card:nth-child(2) {
                    order: 4;
                }

                .demo-card:nth-child(3) {
                    order: 2;
                }

                .demo-card:nth-child(4) {
                    order: 5;
                }

                .demo-card:nth-child(5) {
                    order: 3;
                }

                .demo-card:nth-child(6) {
                    order: 6;
                }

                #timeline h1 {
                    text-align: center;
                    font-size: 3rem;
                    font-weight: 200;
                    margin-bottom: 20px;
                }
                #timeline p.leader {
                    text-align: center;
                    max-width: 90%;
                    margin: auto;
                    margin-bottom: 45px;
                }
                #timeline .demo-card-wrapper {
                    position: relative;
                    margin: auto;
                }
                @media (min-width: 1000px) {
                    #timeline .demo-card-wrapper {
                        display: flex;
                        flex-flow: column wrap;
                        width: 100%;
                        height: 2270px;
                        margin: 0 auto;
                    }
                }
                #timeline .demo-card-wrapper::after {
                    z-index: 1;
                    content: "";
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 50%;
                    border-left: 1px solid #d9a243;
                }
                @media (min-width: 1000px) {
                    #timeline .demo-card-wrapper::after {
                        border-left: 1px solid #d9a243;
                    }
                }
                #timeline .demo-card {
                    position: relative;
                    display: block;
                    margin: 10px auto 80px;
                    max-width: 94%;
                    z-index: 2;
                }
                @media (min-width: 480px) {
                    #timeline .demo-card {
                        max-width: 60%;
                        box-shadow: 0px 1px 22px 4px rgba(0, 0, 0, 0.07);
                    }
                }
                @media (min-width: 720px) {
                    #timeline .demo-card {
                        max-width: 40%;
                    }
                }
                @media (min-width: 1000px) {
                    #timeline .demo-card {
                        max-width: 510px;
                        margin: 90px;
                        margin-top: 45px;
                        margin-bottom: 45px;
                    }
                    #timeline .demo-card:nth-child(odd) {
                        margin-right: 45px;
                        margin-left: 0px;
                    }
                    #timeline .demo-card:nth-child(odd) .head::after {
                        border-left-width: 15px;
                        border-left-style: solid;
                        left: 100%;
                    }
                    #timeline .demo-card:nth-child(odd) .head::before {
                        left: 535.5px;
                    }
                    #timeline .demo-card:nth-child(even) {
                        margin-left: 45px;
                    }
                    #timeline .demo-card:nth-child(even) .head::after {
                        border-right-width: 15px;
                        border-right-style: solid;
                        right: 100%;
                    }
                    #timeline .demo-card:nth-child(even) .head::before {
                        right: 535.5px;
                    }
                    #timeline .demo-card:nth-child(2) {
                        margin-top: 400px;
                    }
                }
                #timeline .demo-card .head {
                    position: relative;
                    display: flex;
                    align-items: center;
                    color: #fff;
                    font-weight: 400;
                }
                #timeline .demo-card .head .number-box {
                    display: inline;
                    float: left;
                    margin: 15px;
                    padding: 10px;
                    font-size: 35px;
                    line-height: 35px;
                    font-weight: 600;
                    background: rgba(0, 0, 0, 0.17);
                }
                #timeline .demo-card .head h2 {
                    text-transform: uppercase;
                    font-size: 1.3rem;
                    font-weight: inherit;
                    letter-spacing: 2px;
                    margin: 0;
                    padding-bottom: 6px;
                    line-height: 1rem;
                }
                @media (min-width: 480px) {
                    #timeline .demo-card .head h2 {
                        font-size: 24px;
                        line-height: 32px;
                        font-weight: 500;
                    }
                }
                #timeline .demo-card .head h2 span {
                    display: block;
                    font-size: 16px;
                    margin: 0;
                }
                @media (min-width: 480px) {
                    #timeline .demo-card .head h2 span {
                        font-size: 16px;
                    }
                }
                #timeline .demo-card .body {
                    background: #fff;
                    border: 1px solid rgba(191, 191, 191, 0.4);
                    border-top: 0;
                    padding: 15px;
                }
                @media (min-width: 1000px) {
                }
                #timeline .demo-card .body p {
                    font-size: 16px;
                    line-height: 30px;
                    margin-bottom: 15px;text-indent: 30px;
                }
                #timeline .demo-card .body img {
                    display: block;
                    width: 100%;
                }
                #timeline .demo-card--step1 {
                    background-color: #201879;
                }
                #timeline .demo-card--step1 .head::after {
                    border-color: #201879;
                }
                #timeline .demo-card--step2 {
                    background-color: #e59f25;
                }
                #timeline .demo-card--step2 .head::after {
                    border-color: #e59f25;
                }
                #timeline .demo-card--step3 {
                    background-color: #e59f25;
                }
                #timeline .demo-card--step3 .head::after {
                    border-color: #e59f25;
                }
                #timeline .demo-card--step4 {
                    background-color: #201879;
                }
                #timeline .demo-card--step4 .head::after {
                    border-color: #201879;
                }

                @media (max-width: 1199px) and (min-width: 992px) {
                    #timeline .demo-card {
                        max-width: 420px;
                    }
                    #timeline .demo-card:nth-child(odd) .head::before {
                        left: 445.5px;
                    }
                    #timeline .demo-card:nth-child(even) .head::before {
                        right: 445.5px;
                    }
                }
                @media (max-width: 991px) and (min-width: 300px) {
                    #timeline .demo-card {
                        max-width: 100%;
                    }
                    #timeline .demo-card .head h2 {
                        font-size: 22px;
                        line-height: 30px;
                    }
                    #timeline .demo-card {
                        margin: 10px auto 60px;
                    }
                }
            </style>
        <?php } ?>
        
        <?php if ($content_id == 3) { ?>
            <style type="text/css">
                #section14 {
                    padding-bottom: 30px;
                }
                .container14 {
                    max-width: 100%;
                }
                .item28 h1 {
                    font-size: 28px;font-weight: 500;line-height: 50px;color: #007434;
                }
                .item28 p {
                    font-size: 18px;line-height: 30px;text-indent: 30px;font-weight: 300;margin-bottom: 30px;
                }
                .item28 img {
                    margin-bottom: 30px;
                }

                @media (max-width: 575px) and (min-width: 300px) {}

                @media (max-width: 767px) and (min-width: 576px) {}

                @media (max-width: 991px) and (min-width: 768px) {}

                @media (max-width: 1199px) and (min-width: 992px) {}

                @media (max-width: 1365px) and (min-width: 1200px) {}

                @media (max-width: 1599px) and (min-width: 1366px) {}

                @media (min-width: 1600px) {}

            </style>
        <?php } ?>

        <?php if ($content_id == 10) { ?>
            <style type="text/css">
                .item30 h1 {
                    font-size: 36px;
                }
                .item30 h2 {
                    font-size: 26px;
                }
                .item30 p {
                    font-size: 18px;line-height: 30px;
                }
                @media (max-width: 575px) and (min-width: 300px) {}

                @media (max-width: 767px) and (min-width: 576px) {}

                @media (max-width: 991px) and (min-width: 768px) {}

                @media (max-width: 1199px) and (min-width: 992px) {}

                @media (max-width: 1365px) and (min-width: 1200px) {}

                @media (max-width: 1599px) and (min-width: 1366px) {}

                @media (min-width: 1600px) {}

            </style>
        <?php } ?>


    </body>
    </html>
