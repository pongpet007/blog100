<!doctype html>
<html class="no-js" lang="th">
<?php $this->load->view('theme_blog_2023/inc/header_meta') ?>
<body class="parallax webp">
    <?php $this->load->view('theme_blog_2023/inc/header') ?>
    
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo base_url() ?>"><?=lang('Home') ?></a></li>
                    <?php if ($breadcrumb == 1) { ?>
                        <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/products"><?=lang('Products') ?></a></li>
                        <li class="active"> <?=$breadcrumb_name?> </li>
                    <?php }elseif ($breadcrumb == 2) { ?>
                        <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/products"><?=lang('Products') ?></a></li>
                        <li class="active"> <?=$breadcrumb_name?> </li>
                    <?php }elseif ($breadcrumb == 3) { ?>
                        <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/products"><?=lang('Products') ?></a></li>
                        <li class="active"> <?=$breadcrumb_name?> </li>
                    <?php }else { ?>
                        <li class="active"><?=lang('Products') ?> </li>
                    <?php } ?>


                </ul>
            </div>
        </div>
    </div>

    <style type="text/css">
        .breadcrumb-area {
            padding: 20px 0 20px;
        }
        .breadcrumb-area ul {
            padding: 0;margin-bottom: 0;
        }
        .breadcrumb-content li {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
            display: inline-block;
            font-size: 16px;
            margin-right: 28px;
            position: relative;
        }
        .breadcrumb-content li::before {
            background-color: #aaaaaa;
            content: "";
            height: 2px;
            position: absolute;
            right: -22px;
            top: 10px;
            transform: rotate(-67deg);
            transition: all 0.4s ease 0s;
            width: 12px;
        }
        .breadcrumb-content li:last-child:before {
            background-color: #aaaaaa;
            content: "";
            height: 0px;
            position: absolute;
            right: -22px;
            top: 10px;
            transform: rotate(-67deg);
            transition: all 0.4s ease 0s;
            width: 0px;
        }
        .breadcrumb-content li a {
            color: #000;text-decoration: none;
        }
        .breadcrumb-content li a:hover {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
        }
    </style>

    <div id="section1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-wrapper">
                        <?php if(sizeof($categorysproduct)>0){ ?>
                            <div class="sidebar-widget">
                                <h1 class="sidebar-sidebar-title"><?=lang('All Category') ?></h1>
                                <div class="sidebar-catigory">
                                    <ul id="faq" style="font-size: 16px;">
                                        <?php foreach ($categorysproduct as $key => $categorysproducts) { 
                                            $cat_url = $categorysproducts[0]->cat_url;
                                            $cname = $categorysproducts[0]->cat_name;
                                            $cname = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname);

                                            $cat_id = $categorysproducts[0]->cat_id;
                                            ?>
                                            <?php if ($cname != "") { ?>
                                                <li>
                                                    <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-category/$cat_url");?>"><?=$cname ?></a>
                                                    <?php   if(isset($categorysproducts['sub1'])){
                                                        $categorys2 = $categorysproducts['sub1'];
                                                        ?>
                                                        <a data-toggle="collapse" data-parent="#faq" href="#product-catigory-<?php echo $categorysproducts[0]->cat_id; ?>"><i style="margin-top: -15px;" class="ion-ios-arrow-down"></i></a>    
                                                        <ul id="product-catigory-<?php echo $categorysproducts[0]->cat_id; ?>" class="panel-collapse collapse show">
                                                            <?php foreach ($categorys2 as $key2 => $category2) { 
                                                                $cat_url = $category2[0]->cat_url;
                                                                $cname2 = $category2[0]->cat_name;
                                                                $cname2 = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname2);
                                                                $cat_id2 = $category2[0]->cat_id;
                                                                ?> 
                                                                <li><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-category/$cat_url");?>"><?=$cname2 ?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>

                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="sidebar-widget sidebar-sidebar-border pt-35">
                            <h4 class="sidebar-sidebar-title" style=""><?=lang('Product TAGS') ?></h4>
                            <div class="sidebar-tags mt-25 scrollbar" id="tags">
                                <div class="force-overflow">
                                    <ul>
                                        <?php foreach ($tags as $key => $tag) { ?> 
                                            <li class="tag-item">
                                                <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-tags/$key"); ?>" class="tag-link">
                                                    <?php echo $tag ?>                                    
                                                </a>
                                            </li>
                                        <?php } ?>  
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="product-topbar-wrapper">
                        <div class="product-topbar-left">
                            <p><?=lang('display') ?> <? echo $starts ?> <?=lang('to') ?> <? echo $ends ?> <?=lang('from') ?> <? echo $total_rows ?>   </p>
                        </div>
                    </div>
                    <div class="tab-content jump" style="padding: 15px 0;">
                        <div class="tab-pane active pb-20" id="product-grid">
                            <div class="row">
                                <?php 
                                foreach ($product as $key => $productall) {
                                    $images = $productall->pictures; 
                                    ?>
                                    <?php if ($productall->pro_name != "") { ?>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6" style="margin-bottom: 15px;">
                                            <div class="devita-product-2 mrg-inherit">
                                                <div class="product-img">
                                                    <div class="product-img-slider">

                                                        <?php   
                                                        $filepath  = "images/product_new/detail_".$images[0]->pro_pic_id.'_300.webp';
                                                        $filepath2 = "images/product_new/detail_".$images[1]->pro_pic_id.'_300.webp';
                                                        $filepath3 = "images/product_new/detail_".$images[2]->pro_pic_id.'_300.webp'; 
                                                        ?>
                                                        <? if(is_file($filepath)) { ?>
                                                            <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>">
                                                                <img src="<?php echo base_url($filepath); ?>" style="width: 100%;" alt="">
                                                            </a>
                                                        <? } ?>
                                                        <? if(is_file($filepath2)) { ?>
                                                            <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>">
                                                                <img src="<?php echo base_url($filepath2); ?>" alt="">
                                                            </a>
                                                        <? } ?>
                                                        <? if(is_file($filepath3)) { ?>
                                                            <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>">
                                                                <img src="<?php echo base_url($filepath3); ?>" alt="">
                                                            </a>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                                <div class="list-col">
                                                    <div class="gridview gridviewnew">
                                                        <div class="product-content product-contentnew text-center" style="padding-top: 11px;">
                                                            <h1><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>"><?=$productall->pro_name ?></a></h1>
                                                        </div>
                                                        <div class="product-action-wrapper-2">

                                                            <div class="product-action">
                                                                <a class="action-cart" title="<?=lang('ProductDetail')?>" href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>">
                                                                    <?=lang('Read more')?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                <?php }  ?>
                            </div>
                        </div>
                        <div class="pagination-total-pages">
                            <div class="pagination-style">
                                <?=$links?> 
                            </div>
                            <div class="total-pages">
                                <p style="margin-bottom: 0px;"><?=lang('display') ?> <? echo $starts ?> <?=lang('to') ?> <? echo $ends ?> <?=lang('from') ?> <? echo $total_rows ?>  </p>
                            </div>
                        </div>
                    </div>

                    <style type="text/css">
                        .pagination-total-pages {
                            border: 1px solid #e9e9e9;
                            padding: 15px 24px 13px;
                        }
                        .pagination-total-pages {
                            display: flex;
                            justify-content: space-between;align-items: center;
                        }
                        .pagination-style ul {
                            padding: 0px;margin-bottom: 0px;
                        }
                        .pagination-style li {
                            display: inline-block;
                            list-style: outside none none;
                            margin: 0 8px 0 0;
                        }
                        .pagination-style li a:hover, .pagination-style li a.active, .pagination-style li a.next:hover {
                            background-color: <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
                            color: #FFFFFF;
                            border: 1px solid <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
                        }
                        .pagination-style li a {
                            background-color: #FFFFFF;
                            border: 1px solid <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
                            border-radius: 3px;
                            color: #000;
                            display: inline-block;
                            line-height: 1;
                            padding: 11px 13px;text-decoration: none;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .product-topbar-left {
            border: 1px solid #efefef;
            padding: 20px 20px 20px;
        }
        .product-topbar-left p {
            margin-bottom: 0px;
        }
        .devita-product-2 {
            padding: 15px;
            border: 1px solid #eeeeee;
        }
        .devita-product-2:hover {
            box-shadow: 0px 5px 5px <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>29;
        }
        .product-content h1 {
            font-size: 16px;font-weight: 500;line-height: 30px;text-align: left;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;
        }
        .product-content h1 a {
            color: #000000;text-decoration: none;
        }
        .product-content h1 a:hover {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
        }
        .action-cart {
            font-size: 16px;color: #000000;text-decoration: none;
        }
        .action-cart:hover {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
        }
    </style>
    <style type="text/css">
        .sidebar-wrapper {
            border: 1px solid #efefef;
            padding: 17px 18px 29px;
        }
        .sidebar-sidebar-title {
            font-size: 24px;font-weight: 500;<?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;padding: 15px 0;
        }
        .sidebar-catigory > ul {
            border-top: 1px solid #ebebeb;
            margin: 18px 0 0;
            padding: 27px 0 0;
        }
        .sidebar-catigory ul > li {
            display: block;
            list-style: outside none none;
            padding: 0 0 13px;
        }
        .sidebar-catigory ul > li a {
            color: #000;
            display: block;
            text-decoration: none;
        }
        .sidebar-catigory ul > li a:hover {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>
        }
        .scrollbar {
            max-height: 250px;
            overflow-y: auto;
            margin-bottom: 25px;
            margin-right: -18px;
        }
        .force-overflow {
            min-height: 250px;
        }
        .sidebar-tags ul {
            padding: 0;
        }
        .sidebar-tags li {
            display: inline-block;
            list-style: outside none none;
            margin: 0 4px 11px 0;
        }
        .sidebar-tags a {
            border: 1px solid #ebebeb;
            color: #000;
            display: inline-block;
            line-height: 1;
            padding: 8px 12px;text-decoration: none;
        }
        .sidebar-tags a:hover {
            border: 1px solid <?=$companyData->packageBG?''.$companyData->packageBG.' ;':''?>;
            background-color: <?=$companyData->packageBG?''.$companyData->packageBG.' ;':''?>;;
            color: #FFF;
        }
        #tags::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #292928;
        }
        #tags::-webkit-scrollbar
        {
            width: 6px;
            background-color: #F5F5F5;
        }
        #tags::-webkit-scrollbar-thumb
        {
            background-color: <?=$companyData->packageBG?''.$companyData->packageBG.' ;':''?>;
        }
    </style>

    <?php $this->load->view('theme_blog_2023/inc/footer') ?>
    <?php $this->load->view('theme_blog_2023/inc/footer_js') ?>

    <style type="text/css">

        @media (max-width: 767px) and (min-width: 300px) {

        }
        @media (max-width: 991px) and (min-width: 768px) {

        }
        @media (max-width: 1199px) and (min-width: 992px) {

        }
        @media (max-width: 1365px) and (min-width: 1200px) {

        }
        @media (max-width: 1599px) and (min-width: 1366px) {

        }
        @media (min-width: 1600px) {}

    </style>


    <style type="text/css">
        .fb-page,
        .fb-page span,
        .fb-page span iframe[style] {
            max-width: 100% !important;
        }
    </style>




</body>

</html>

