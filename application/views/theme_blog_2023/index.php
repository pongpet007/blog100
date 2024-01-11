<!doctype html>
<html class="no-js" lang="th">
<?php $this->load->view('theme_blog_2023/inc/header_meta') ?>
<style type="text/css">
    .container2 {
        max-width: 100%;
    }
    .container3 {
        max-width: 100%;
    }
    .container4 {
        max-width: 100%;
    }
</style>

<body class="parallax webp">
    <?php $this->load->view('theme_blog_2023/inc/header') ?>
    <?/*php
    require_once("slide/slider.php");
    */?>
    <div id="banner-ex">
        <div class="swiper mySwiperssBanner">
            <div class="swiper-wrapper">
                <?php foreach ($bannermain as $key => $bannermains) { ?>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="<?=base_url()?>images/banner/<?=$bannermains->banner_id?>_mobile.webp" style="width: 100%;">
                        </a>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
            var swiper = new Swiper(".mySwiperssBanner", {
                loop: true,
                speed: 3000,
                autoHeight: true,
                spaceBetween: 30,
                slidesPerView: 1,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
            });
        </script>
    <div id="section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h1>หมวดหมู่ประกาศ</h1>
                    </div>
                </div>
            </div>

            <div class="row row-cols-lg-5 row-cols-sm-2 row-cols-2 g-3 g-xl-4">
                <?php  foreach ($categorys as $key => $categoryss) { ?>
                    <?php  
                    $filepathsvg  = "images/category/".$categoryss->cat_id.'.svg';
                    $filepath  = "images/category/".$categoryss->cat_id.'_mobile.webp';
                    $filepath2  = "images/category/".$categoryss->cat_id.'_2_mobile.webp';
                    ?>
                    <div class="col">
                        <div class="category-main">
                            <a href="#">
                            <?/*?>
                            <a href="<?php echo base_url(); ?><?=$this->session->userdata('site_lang_name');?>/products-category/<?php echo $categoryss->cat_url ?>">
                                <?*/?>
                                <?/*?><div class="category-icon">
                                    
                                </div><?*/?>
                                <img src="<?=base_url()?><?=$filepathsvg?>" style="width: 40%;margin-bottom: 15px;">
                                <div class="category-name">

                                    <h1>
                                        <?=$categoryss->cat_name ?>
                                    </h1>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <style type="text/css">
        #section1 .title h1 {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
            margin-bottom: 30px;
        }
        #section1 .category-main {
            box-shadow: 0 0.125rem 0.125rem -0.125rem rgba(31,27,45,.08), 0 0.25rem 0.75rem rgba(31,27,45,.08);transition: border-color .2s ease-in-out,background-color .2s ease-in-out,box-shadow .2s ease-in-out !important;text-align: center;padding: 30px;
        }
        #section1 .category-main:hover {
            box-shadow: 0 0.125rem 0.5rem -0.25rem rgba(31,27,45,.12), 0 0.25rem 1rem rgba(31,27,45,.12) !important;
        }
        #section1 .category-main .category-icon {
            display: block;width: 3rem;min-width: 3rem;height: 3rem;transition: background-color .22s ease-in-out,color .22s ease-in-out;border-radius: .5rem;background-position: center;background-size: cover;font-size: 1.5rem;line-height: 2.75rem;text-align: center;border-radius: 50% !important;background-color: rgba(253,86,49,.1) !important;color: #1153c5 !important;margin-right: auto !important;margin-left: auto !important;margin-bottom: 1rem;
        }
        #section1 .category-main:hover .category-icon {
            background-color: #1153c5 !important;color: #fff !important;
        }
        #section1 .category-main a {
            text-decoration: unset;
        }
        #section1 .category-main .category-name h1 {
            color: #1f1b2d !important;font-size: 16px!important;text-decoration: unset;line-height: 30px;height: 60px;font-weight: 500;
        }
        #section1 .category-main:hover .category-name h1 {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;
        }



    </style>

    <div id="section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h1>ประกาศล่าสุด</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pd-mySwiper">
                    <div class="swiper mySwiperss">
                        <div class="swiper-wrapper">
                            <?php foreach ($productsallnew as $key => $productsallnews) { ?>
                                <? $product_image = $productsallnews->pictures; ?>
                                <div class="swiper-slide swiper-product">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php   
                                            $filepath  = "images/product_new/detail_".$product_image[0]->pro_pic_id.'_300.webp'; 
                                            ?>
                                            <? if(is_file($filepath)) { ?>
                                                <div class="image-product">
                                                    <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $productsallnews->pro_url ?>">
                                                        <img src="<?php echo base_url($filepath); ?>" style="width: 100%;" alt="<?=$companyData->com_name?>">
                                                    </a>
                                                </div>
                                            <? } ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="product-detail" style="text-align: left;">
                                                <h1 style="">
                                                    <a style="overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    display: -webkit-box;
                                                    -webkit-line-clamp: 2;height: 60px;
                                                    -webkit-box-orient: vertical;" href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $productsallnews->pro_url ?>">
                                                    <?=$productsallnews->pro_name ?>
                                                </a>
                                            </h1>
                                                <?/*?>
                                                <div class="detail"><?=$productsallnews->pro_desc_short ?></div>
                                                <?*/?>
                                                <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $productsallnews->pro_url ?>">
                                                    <h2 style="text-align: right;font-size: 16px;line-height: 30px;font-weight: 400;text-align: left;">ดูเพิ่มเติม</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            <? } ?>
                        </div>
                        
                        <?/*?><div class="swiper-pagination"></div><?*/?>
                    </div>
                    <div class="swiper-button-next swiper-button-next-1"></div>
                    <div class="swiper-button-prev swiper-button-prev-1"></div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .swiper-button-prev-1 {
                left: var(--swiper-navigation-sides-offset,-25px);
            }
            .swiper-button-next-1 {
                right: var(--swiper-navigation-sides-offset,-25px);
            }
            #section2 {
                padding: 30px 0;
            }
            #section2 .title h1 {
                text-align: left;font-style: 32px;font-weight: bold;<?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;margin-bottom: 30px;
            }
            .autoplay-progress {
                position: absolute;right: 16px;bottom: 16px;z-index: 10;width: 48px;height: 48px;display: flex;align-items: center;justify-content: center;font-weight: bold;color: var(--swiper-theme-color);
            }
            .autoplay-progress svg {
                --progress: 0;position: absolute;left: 0;top: 0px;z-index: 10;width: 100%;height: 100%;stroke-width: 4px;stroke: var(--swiper-theme-color);fill: none;stroke-dashoffset: calc(125.6 * (1 - var(--progress)));stroke-dasharray: 125.6;transform: rotate(-90deg);
            }
            #section2 .swiper-product {
                box-shadow: 0 0.125rem 0.125rem -0.125rem rgba(31,27,45,.08), 0 0.25rem 0.75rem rgba(31,27,45,.08);transition: border-color .2s ease-in-out,background-color .2s ease-in-out,box-shadow .2s ease-in-out !important;border: 1px solid #EEE;
            }
            #section2 .swiper-product .image-product {
                padding: 10px;
            }
            #section2 .swiper-product .product-detail {
                padding: 10px;
            }
            #section2 .swiper-product .product-detail h1 {
                margin: 15px 0;font-size: 20px;line-height: 30px;font-weight: 500;text-align: left;color: #000;
            }
            #section2 .swiper-product .product-detail h1 a {
                text-decoration: unset;color: unset;
            }
            #section2 .swiper-product .product-detail .detail {
                height: 90px;overflow: hidden;
            }
            #section2 .swiper-product .product-detail p {
                font-size: 16px;line-height: 30px;font-weight: 400;text-align: left;color: #000;
            }
            #section2 .swiper-product .product-detail a {
                text-decoration: unset;color: unset;
            }
            #section2 .swiper-product .product-detail a h2 {
                margin: 15px 0;font-size: 16px;line-height: 30px;font-weight: 500;text-align: left;color: #000;
            }
            #section2 .swiper-product:hover {
                box-shadow: 0 0.125rem 0.5rem -0.25rem rgba(31,27,45,.12), 0 0.25rem 1rem rgba(31,27,45,.12) !important;
            }
            #section2 .swiper-product:hover h1 a:hover {
                <?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;
            }
            #section2 .swiper-product:hover a:hover h2 {
                <?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;
            }
            .pd-mySwiper {
                position: relative;
            }
        </style>
        <script type="text/javascript">
            var swiper = new Swiper(".mySwiperss", {
                loop: true,
                speed: 3000,
                spaceBetween: 30,
                slidesPerView: 5,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                navigation: {
                    nextEl: ".swiper-button-next-1",
                    prevEl: ".swiper-button-prev-1"
                },
            });
        </script>
    </div>


    <div id="section3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper mySwiperbaner">
                        <div class="swiper-wrapper">
                            <? $countbannerads = count($bannerads); ?>
                            <?php for ($i=0; $i < $countbannerads ; $i++) { ?>
                                <div class="swiper-slide swiper-slide22">
                                    <div class="row">

                                        <?php   
                                            $filepath  = "images/banner/".$bannerads[$i]->banner_id.'_mobile.webp'; 
                                        ?>
                                        <? if(is_file($filepath)) { ?>
                                            <div class="col-lg-6">
                                                <a href="#">
                                                    <img src="<?php echo base_url($filepath); ?>" style="width: 100%;" alt="">
                                                </a>
                                            </div>
                                        <? } $i++; ?>

                                        <?php   
                                            $filepath2  = "images/banner/".$bannerads[$i]->banner_id.'_mobile.webp'; 
                                        ?>
                                        <? if(is_file($filepath2)) { ?>
                                            <div class="col-lg-6">
                                                <a href="#">
                                                    <img src="<?php echo base_url($filepath2); ?>" style="width: 100%;" alt="">
                                                </a>
                                            </div>
                                        <? } ?>
                                        
                                    </div>
                                </div>
                            <? } ?>                            
                        </div>
                        <div class="swiper-pagination swiper-pagination2"></div>
                    </div>

                </div>
            </div>
        </div>
        <style type="text/css">
            .mySwiperbaner {
                max-height: 270px!important;
            }
            .swiper-slide22 {
                text-align: center;
                font-size: 18px;
                background: #fff;
            }

            .swiper-slide22 img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>
        <script>
            var swiper2 = new Swiper(".mySwiperbaner", {
                direction: "vertical",
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
            });
        </script>
    </div>
    <?/*?>
    <div id="section4">
        <div class="container">
            <div class="row row-cols-lg-12 row-cols-sm-12 row-cols-12 g-3 g-xl-4">
                <div class="col">
                    <div class="title">
                        <h1>ประกาศขายสินค้า B2B หลากหลายหมวดหมู่</h1>
                    </div>
                </div>
                <div class="col">
                    <div class="title-2">
                        <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products">
                            <h1>ดูประกาศทั้งหมด ....</h1>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="row row-cols-lg-6 row-cols-sm-2 row-cols-2 g-3 g-xl-4">
                <?php foreach ($productsallnewCat as $key => $productsallnewCats) { ?>
                    <? foreach ($productsallnewCats as $key => $new_productsallnewCats) { ?>
                        <? $product_image = $new_productsallnewCats->pictures; ?>
                        <div class="col">
                            <div class="">
                                <div class="col-lg-12 products-one">
                                    <div class="product-img">
                                        <?php   
                                        $filepath  = "images/product_new/detail_".$product_image[0]->pro_pic_id.'_300.webp'; 
                                        ?>
                                        <? if(is_file($filepath)) { ?>
                                            <div class="image-product">
                                                <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $new_productsallnewCats->pro_url ?>">
                                                    <img src="<?php echo base_url($filepath); ?>" style="width: 100%;" alt="<?=$companyData->com_name?>">
                                                </a>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <div class="product-detail">
                                        <h1 style="">
                                            <a style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            display: -webkit-box;
                                            -webkit-line-clamp: 2;height: 60px;
                                            -webkit-box-orient: vertical;" href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $new_productsallnewCats->pro_url ?>">
                                            <?=$new_productsallnewCats->pro_name ?>
                                        </a>
                                    </h1>
                                        <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $new_productsallnewCats->pro_url ?>">
                                            <h2 style="text-align: right;font-size: 16px;line-height: 30px;font-weight: 400;text-align: left;">ดูเพิ่มเติม</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                        
                <? } ?>
            </div>
        </div>
        <style type="text/css">
            #section4 .title h1 {
                text-align: left;
                font-size: 32px;
                font-weight: bold;
                <?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;
                margin-bottom: 30px;
            }
            #section4 .title-2 a h1 {
                text-align: right;
                font-size: 20px;
                font-weight: bold;
                color: #000000;
                margin-bottom: 30px;
            }
            #section4 .title-2 a {
                text-decoration: unset;
                color: unset;
            }
            #section4 .title-2 a:hover {
                text-decoration: unset;
                color: unset;
            }
            #section4 .products-one {
                box-shadow: 0 0.125rem 0.125rem -0.125rem rgba(31,27,45,.08), 0 0.25rem 0.75rem rgba(31,27,45,.08);transition: border-color .2s ease-in-out,background-color .2s ease-in-out,box-shadow .2s ease-in-out !important;border: 1px solid #EEE;padding: 10px;margin-bottom: 30px;
            }
            #section4 .products-one:hover {
                box-shadow: 0 0.125rem 0.5rem -0.25rem rgba(31,27,45,.12), 0 0.25rem 1rem rgba(31,27,45,.12) !important;
            }
            #section4 .products-one .product-detail h1 a {
                text-decoration: unset;
                color: unset;
            }
            #section4 .products-one .product-detail h1 {
                margin: 15px 0;
                font-size: 20px;
                line-height: 30px;
                font-weight: 500;
                text-align: left;
                color: #000;

            }
            #section4 .products-one .product-detail h1:hover {
                <?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;

            }
            #section4 .products-one .product-detail .detail p {
                font-size: 16px;
                line-height: 30px;
                font-weight: 400;
                text-align: left;
                color: #000;
            }
            #section4 .products-one .product-detail .detail {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                height: 60px;
            }
            #section4 .products-one .product-detail a {
                text-decoration: unset;
                color: unset;
            }
            #section4 .products-one .product-detail a h2 {
                margin: 15px 0;
                font-size: 16px;
                line-height: 30px;
                font-weight: 500;
                text-align: left;
                color: #000;
            }
            #section4 .products-one .product-detail a:hover h2 {
                <?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;
            }
        </style>
    </div>
    <?*/?>

    <div id="section5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 title">
                    <h1>ร้านค้าแนะนำ</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper swiperbrand">
                        <div class="swiper-wrapper">
                            <?php foreach ($brand as $new_brand) { ?>
                                <div class="swiper-slide">
                                    <div class="" style="">
                                        <a href="<?=$new_brand->brand_url?>">
                                            <img src="<?php echo base_url() ?>images/brand/<?php echo $new_brand->brand_id ?>.jpg?<?=rand()?>" alt="<?=$new_brand->brand_name ?>" style="width: 100%;">
                                        </a>

                                    </div>
                                </div>
                            <?php } ?>  
                        </div>
                        <div class="swiper-button-next swiper-button-next-2"></div>
                        <div class="swiper-button-prev swiper-button-prev-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            #section5 {
                padding: 30px 0 60px;
            }
            #section5 .title h1 {
                text-align: center;
                font-size: 32px;
                font-weight: bold;
                <?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;
                margin-bottom: 30px;
            }
        </style>
        <script>

            var swiper5 = new Swiper(".swiperbrand", {
                loop: true,
                speed: 3000,
                spaceBetween: 30,
                slidesPerView: 5,
                navigation: {
                    nextEl: ".swiper-button-next-2",
                    prevEl: ".swiper-button-prev-2"
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
            });
        </script>
    </div>

    <div id="section6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 title">
                    <h1>คำค้นหาที่ได้รับความนิยม</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 scrollbar" id="tags">
                    <div class="force-overflow">
                        <ul style="text-align: left;padding-left: 0;">
                            <?php foreach ($tags as $key => $tag) { ?> 
                                <li class="tag-item" style="">
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
        <style type="text/css">
            #section6 {
                padding: 30px 0 60px;
            }
            #section6 .title h1 {
                text-align: left;
                font-size: 32px;
                font-weight: bold;
                <?=$companyData->packageBG?'color: '.$companyData->packageBG.' !important;':''?>;
                margin-bottom: 30px;
            }
            .tag-item {
                list-style: none;display: inline-block;border: 1px solid <?=$companyData->packageBG?''.$companyData->packageBG.' ':''?>;;padding: 5px;border-radius: 5px;font-size: 16px;line-height: 30px;font-weight: 400;margin-bottom: 5px;
            }
            .tag-item:hover  {
                border: 1px solid <?=$companyData->packageBG?''.$companyData->packageBG.' !important;':''?>;<?=$companyData->packageBG?'background: '.$companyData->packageBG.' !important;':''?>;
            }
            .tag-item a {
                text-decoration: unset;<?=$companyData->packageBG?'color: '.$companyData->packageBG.';':''?>;
            }
            .tag-item:hover a {
                text-decoration: unset;color: #FFFFFF;
            }
            .scrollbar
            {
                max-height: 280px;
                overflow-y: auto;
                margin-bottom: 25px;
                margin-right: -18px;
            }
            .highlight {
                height: 385px;
                overflow: hidden;
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
                <?=$companyData->packageBG?'background-color: '.$companyData->packageBG.';':''?>
            }
            .force-overflow
            {
                min-height: 450px;
            }
        </style>
    </div>
    <?php $this->load->view('theme_blog_2023/inc/footer') ?>
    <?php $this->load->view('theme_blog_2023/inc/footer_js') ?>

    <style type="text/css">
        #section1 {
            padding: 60px 0;
        }
        #section3 {
            padding: 60px 0;
        }
        #section6 {
            padding: 60px 0;
        }
        .container7 {
            max-width: 100%;
        }

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

