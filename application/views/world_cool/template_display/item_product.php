<? 

$i = json_decode($jsondata);

$style = "margin-left:{$i->ml}px;";
$style .= "margin-right:{$i->mr}px;";
$style .= "margin-bottom:{$i->mb}px;";
$style .= "margin-top:{$i->mt}px;";

$style .= "padding-left:{$i->pl}px;";
$style .= "padding-right:{$i->pr}px;";
$style .= "padding-bottom:{$i->pb}px;";
$style .= "padding-top:{$i->pt}px;";

if(!isset($i->pro_type)){
    $i->pro_type=1;
}

?>
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>">
    <div class="wrap">
        <?php if ($i->pro_type == 1) { ?>
            <div class="product-area pb-30" >
                <div class="pro_type1">
                    <div class="product-tab-list mb-30 nav" role="tablist">
                        <a class="active" href="#homeall" data-toggle="tab">
                            <h4><?=lang('All Products') ?></h4>
                        </a>
                        <?php foreach ($categorys as $key => $category) { ?>
                            <a class="" href="#home<?php echo $category->cat_id ?>" data-toggle="tab">
                                <h4><?=$category->cat_name ?></h4>
                            </a>
                        <? } ?>
                    </div>
                    <div class="tab-content jump">
                        <? foreach ($categorys as $category) { ?>
                            <div class="tab-pane " id="home<? echo $category->cat_id ?>">
                                <div class="custom-row">
                                    <? foreach ($category->products as $key => $product) {                           
                                        ?>
                                        <div class="custom-col-4 mb-30">
                                            <div class="devita-product-2 mrg-inherit">
                                                <div class="product-img">
                                                    <div class="product-img-slider">
                                                        <?php   $filepath  = "images/product_new/pro_".$product->pro_id.'01.jpg';
                                                        $filepath2 = "images/product_new/pro_".$product->pro_id.'02.jpg';
                                                        $filepath3 = "images/product_new/pro_".$product->pro_id.'03.jpg'; ?>
                                                        <? if(is_file($filepath)) { ?>
                                                            <a href="<? echo base_url(); ?><?=$this->session->userdata('site_lang_name')?>/Products/detail/<? echo $product->pro_id ?>">
                                                                <img src="<?php echo base_url(); ?>images/product_new/pro_<?php echo $product->pro_id; ?>01.jpg" alt="">
                                                            </a>
                                                        <? } ?>
                                                        <? if(is_file($filepath2)) { ?>
                                                            <a href="<? echo base_url(); ?><?=$this->session->userdata('site_lang_name')?>/Products/detail/<? echo $product->pro_id ?>">
                                                                <img src="<?php echo base_url(); ?>images/product_new/pro_<?php echo $product->pro_id; ?>02.jpg" alt="">
                                                            </a>
                                                        <? } ?>
                                                        <? if(is_file($filepath3)) { ?>
                                                            <a href="<? echo base_url(); ?><?=$this->session->userdata('site_lang_name')?>/Products/detail/<? echo $product->pro_id ?>">
                                                                <img src="<?php echo base_url(); ?>images/product_new/pro_<?php echo $product->pro_id; ?>03.jpg" alt="<?=$product->pro_name ?>">
                                                            </a>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                                <div class="list-col">
                                                    <div class="gridview">
                                                        <div class="product-content text-center">
                                                            <?php if ($companyData->cat_type == 1) { ?>
                                                                <span><?=$product->cat_name ?></span>
                                                            <?php } ?>
                                                            <h4><a href="<? echo base_url($this->session->userdata('site_lang_name')."/Products/detail/{$product->pro_id}"); ?>"><?=$product->pro_name ?></a></h4>
                                                        </div>
                                                        <div class="product-action-wrapper-2 text-center">
                                                            <div class="product-action">
                                                                <a class="same-action" title="<?=lang('request quotation') ?> " href="javascript:addquatation(<?=$product->pro_id ?>)">
                                                                    <i class="fas fa-file-alt"></i>
                                                                </a>
                                                                <a class="action-cart" title="<?=lang('request quotation') ?>  " href="<? echo base_url($this->session->userdata('site_lang_name')."/Favorite/add?pro_id={$product->pro_id}"); ?>">
                                                                    <?=lang('request quotation') ?>  
                                                                </a>                                   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        <? } ?>             
                        <div class="tab-pane active" id="homeall">
                            <div class="custom-row">
                                <?php foreach ($productsall as $key => $productsalls) { ?>
                                    <div class="custom-col-5" style="padding:5px;">
                                        <div class="devita-product-2 mrg-inherit">
                                            <div class="product-img">
                                                <div class="product-img-slider">
                                                    <?php   $filepath  = "images/product_new/pro_".$productsalls->pro_id.'01.jpg';
                                                    $filepath2 = "images/product_new/pro_".$productsalls->pro_id.'02.jpg';
                                                    $filepath3 = "images/product_new/pro_".$productsalls->pro_id.'03.jpg'; ?>
                                                    <? if(is_file($filepath)) { ?>
                                                        <a href="<? echo base_url(); ?><?=$this->session->userdata('site_lang_name')?>/Products/detail/<? echo $productsalls->pro_id ?>">
                                                            <img src="<?php echo base_url(); ?>images/product_new/pro_<?php echo $productsalls->pro_id; ?>01.jpg" alt="">
                                                        </a>
                                                    <? } ?>
                                                    <? if(is_file($filepath2)) { ?>
                                                        <a href="<? echo base_url(); ?><?=$this->session->userdata('site_lang_name')?>/Products/detail/<? echo $productsalls->pro_id ?>">
                                                            <img src="<?php echo base_url(); ?>images/product_new/pro_<?php echo $productsalls->pro_id; ?>02.jpg" alt="">
                                                        </a>
                                                    <? } ?>
                                                    <? if(is_file($filepath3)) { ?>
                                                        <a href="<? echo base_url(); ?><?=$this->session->userdata('site_lang_name')?>/Products/detail/<? echo $productsalls->pro_id ?>">
                                                            <img src="<?php echo base_url(); ?>images/product_new/pro_<?php echo $productsalls->pro_id; ?>03.jpg" alt="<?=$product->pro_name ?>">
                                                        </a>
                                                    <? } ?>
                                                </div>
                                            </div>
                                            <div class="list-col">
                                                <div class="gridview">
                                                    <div class="product-content text-center">
                                                        <?php if ($companyData->cat_type == 1) { ?>
                                                            <span><?=$productsalls->cat_name ?></span>
                                                        <?php } ?>
                                                        <h4><a href="<? echo base_url(); ?><?=$this->session->userdata('site_lang_name')?>/Products/detail/<? echo $productsalls->pro_id ?>"><?=$productsalls->pro_name ?></a></h4>
                                                    </div>
                                                    <div class="product-action-wrapper-2 text-center">
                                                        <div class="product-action">
                                                            <a class="same-action" title="<?=lang('request quotation') ?> " href="javascript:addquatation(<?=$productsalls->pro_id ?>)">
                                                                <i class="fas fa-file-alt"></i>
                                                            </a>
                                                            <a class="action-cart" title="<?=lang('request quotation') ?> " href="<? echo base_url($this->session->userdata('site_lang_name')."/Favorite/add?pro_id={$productsalls->pro_id}"); ?>">
                                                                <?=lang('request quotation') ?>  
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($i->pro_type == 2) { ?>

            <div class="row">
                <div class="col-md-12 category-title" style="text-align:center;">
                    <h1 class="">หมวดหมู่ประกาศ</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <?php foreach ($categorys as $key => $categoryss) { ?>
                    <?php   $filepath  = "images/category/".$categoryss->cat_id.'_mobile.webp';
                    $filepath2  = "images/category/".$categoryss->cat_id.'_2_mobile.webp';
                    ?>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 category-products category-products-<?=$key?>">
                        <div class="category-main">
                            <?/*php if (is_file($filepath)) { ?>
                                <img alt="<?=$categoryss->cat_name ?>" src="<?=base_url($filepath)?>" style="width: 100%;">
                            <?php } ?>
                            <div class="category-image">
                                <?=$categoryss->cat_short_name?>
                            </div>
                            <?*/?>
                            <div class="category-name">
                                <h1>
                                    <a href="<? echo base_url(); ?><?=$this->session->userdata('site_lang_name');?>/products-category/<? echo $categoryss->cat_url ?>">
                                        <?=$categoryss->cat_name ?>

                                    </a>
                                </h1>

                            </div>
                        </div>

                    </div>
                    <?/*?>
                    <style type="text/css">
                        .category-products-<?=$key?>:hover img {
                            content: url("<?=base_url($filepath2)?>");
                        }
                    </style>
                    <?*/?>
                <?php } ?>
                <?/*?>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 products-category-more">
                    <a href="">
                        <?=lang('See All')?> <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <?*/?>
            </div>
            <style type="text/css">
                .category-title h1 {
                    color: #007437;font-size: 32px;line-height: 50px;font-weight: 500;
                }
                .category-title hr {
                    border: 2px solid #C49F06;width: 120px;margin: 30px auto;
                }
                .products-category-more {
                    text-align: center;align-items: center;justify-content: center;display: flex;margin-bottom: 30px;
                }
                .products-category-more a {
                    font-size: 15px;line-height: 20px;font-weight: 500;color: #D90000;
                }
                .products-category-more a:hover {
                    color: #0157a3;
                }
                .category-products {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                .category-main {
                    box-shadow: 0px 3px 6px #00000029;
                }
                /*.category-name {
                    background: #C49F06 0% 0% no-repeat padding-box;transition: 1s;
                }*/
                .category-name h1 {
                    font-size: 18px;font-weight: 400;color: #000000;text-align: center;margin-bottom: 30px;height: 70px;padding: 15px 10px;
                }
                .category-name h1 a {
                    color: #000000;
                }
                /*.category-name:hover {
                    background: #007436 0% 0% no-repeat padding-box;
                }*/

                @media (max-width: 767px) and (min-width: 300px) {
                    .category-products {
                        -ms-flex: 0 0 50%;
                        flex: 0 0 50%;
                        max-width: 50%;
                    }
                    .category-name h1 {
                        font-size: 14px;height: 50px;margin-bottom: 15px;
                    }
                }
                @media (max-width: 991px) and (min-width: 768px) {
                    .category-products {
                        -ms-flex: 0 0 50%;
                        flex: 0 0 50%;
                        max-width: 50%;
                    }
                }
                @media (max-width: 1199px) and (min-width: 992px) {
                    .category-name h1 {
                        font-size: 14px;
                    }
                }
                @media (max-width: 1365px) and (min-width: 1200px) {

                }
                @media (max-width: 1599px) and (min-width: 1366px) {

                }
                @media (min-width: 1600px) {}
            </style>
        <?php } ?>

        <?php if ($i->pro_type == 3) { ?>

            <div class="row">
                <div class="col-md-12">
                    <h1 class="product-title" style="text-align: left;">
                        ประกาศขายสินค้า B2B หลากหลายหมวดหมู่ 
                    </h1>
                </div>
            </div>
            <style type="text/css">
                h1.product-title {
                    color: #007437;font-size: 32px;line-height: 40px;font-weight: 500;margin-bottom: 30px;text-align: center;
                }
                hr.product-hr {
                    border: 2px solid #C49F06;width: 127px;margin: auto;
                }
                .image-product {
                    box-shadow: -1px 3px 6px #00000029;
                }
                .product-detail h1 {
                    margin: 15px 0;color: #414042;font-size: 22px;line-height: 30px;font-weight: 400;text-align: center;height: 60px;
                }
                .product-detail h1:hover a {
                    color: #C49F06;
                }
                .productmores {
                    border: 2px solid #2B7C52;width: 158px;text-align: center;margin: auto;color: #2B7C52;font-size: 16px;line-height: 40px;font-weight: 500;
                }
                .productmores:hover {
                    border: 2px solid #C49F06;
                }
                .productmores a {
                    color: #2B7C52;
                }
                .productmores:hover a {
                    color: #C49F06; 
                }
                .product-names h1 {
                    color: #000000;font-size: 18px;line-height: 18px;font-weight: 400;text-align: center;
                }
                .product-names h1 a:hover {
                    color: #0157a3;
                }
                .product-indexs {
                    margin-bottom: 30px;padding-top: 15px;padding-bottom: 15px;transition: all .3s ease-out;
                }
                .product-indexs:hover {
                    box-shadow: 0 0 15px #3140618a;
                }
                @media (max-width: 767px) and (min-width: 300px) {
                    .product-detail h1 {
                        margin: 15px 0 0!important;font-size: 16px;line-height: 30px;height: 54px;
                    }
                    .product-indexs {
                        margin-bottom: 15px;
                    }
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
            <div class="row" style="align-items: center;margin-top: 30px;">
                <?php foreach ($productsall as $key => $productsalls) { ?>
                    <? $product_image = $productsalls->pictures; ?>
                    <div class="col-lg-2 col-md-6 col-6 product-indexs">
                        <?php   
                        $filepath  = "images/product_new/detail_".$product_image[0]->pro_pic_id.'_300.webp'; 
                        ?>
                        <? if(is_file($filepath)) { ?>
                            <div class="image-product">
                                <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $productsalls->pro_url ?>">
                                    <img src="<?php echo base_url($filepath); ?>" style="width: 100%;" alt="<?=$companyData->com_name?>">
                                </a>
                            </div>
                        <? } ?>

                        <div class="product-detail">
                            <h1 style="margin: 15px 0;font-size: 20px;line-height: 30px;font-weight: 400;">
                                <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $productsalls->pro_url ?>">
                                    <?=$productsalls->pro_name ?>
                                </a>
                            </h1>
                            <div style="text-align: center;font-size: 16px;line-height: 30px;font-weight: 300;"><?=$productsalls->pro_desc_short ?></div>
                        </div>

                    </div>
                <? } ?>


            </div>

            <div class="row">
                <div class="col-md-12" style="text-align:center;">
                    <h1 class="productmores">
                        <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/products">
                            <?=lang('See More')?> <i style="padding-left: 5px;" class="fas fa-chevron-right"></i>
                        </a>
                    </h1>
                </div>
            </div>
        <?php } ?>
        <style type="text/css">


        </style>
        <?php if ($i->pro_type == 4) { ?>
            <div class="product-area">
                    <div class="mb-30">
                        <h1 class="product-title" style="text-align: left;">
                            ประกาศล่าสุด 
                        </h1>
                    </div>
                    <?/*?>
                    <div class="product-slider-nav nav-style"></div>
                    <?*/?>
                    <div class="headphone-slider-active owl-carousel product-slider">
                        <?php foreach ($productsall as $key => $productsalls) { ?>
                            <? $product_image = $productsalls->pictures; ?>
                            <div class="item product-indexs">
                                <?php   
                                $filepath  = "images/product_new/detail_".$product_image[0]->pro_pic_id.'_300.webp'; 
                                ?>
                                <? if(is_file($filepath)) { ?>
                                    <div class="image-product">
                                        <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $productsalls->pro_url ?>">
                                            <img src="<?php echo base_url($filepath); ?>" style="width: 100%;" alt="<?=$companyData->com_name?>">
                                        </a>
                                    </div>
                                <? } ?>

                                <div class="product-detail" style="text-align: left;">
                                    <h1 style="margin: 15px 0;font-size: 20px;line-height: 30px;font-weight: 500;text-align: left;">
                                        <a href="<? echo base_url($this->session->userdata('site_lang_name')); ?>/products-detail/<? echo $productsalls->pro_url ?>">
                                            <?=$productsalls->pro_name ?>
                                        </a>
                                    </h1>
                                    <p><?=$productsalls->pro_desc_short ?></p>
                                    <a href="">
                                        <h2 style="text-align: right;font-size: 16px;line-height: 30px;font-weight: 400;text-align: left;">ดูเพิ่มเติม</h2>
                                    </a>
                                </div>

                            </div>
                        <? } ?>
                    </div>
            </div>
            <style type="text/css">
                .product-indexs {
                    padding: 15px;border: 1px solid #EEE;
                }
                .product-detail h1 a {

                }
            </style>
        <?php } ?>

        <?php if ($i->pro_type == 5) { ?>
            <div class="product-area" style="">
                <div>
                    <h1 style="color: #007437;font-size: 32px;line-height: 40px;font-weight: 500;margin-bottom: 30px;text-align: center;">ร้านค้าแนะนำ</h1>
                </div>
                <div class="swiper swiperbrand" style="">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper" style="">
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
                </div>
                <div class="swiper-button-prev swiper-button-prev-brand" ></div>
                <div class="swiper-button-next swiper-button-next-brand"></div>
                <script type="text/javascript">
                    const swiperbrand = new Swiper('.swiperbrand', {
                        loop: true,
                        slidesPerView: 4,
                        spaceBetween: 10,
                        navigation: {
                            nextEl: '.swiper-button-next-brand',
                            prevEl: '.swiper-button-prev-brand',
                        },
                        autoplay: {
                            delay: 5000,
                        },

                    });
                </script>
            </div>
        <?php } ?>
    </div>
</div>

<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>



<style type="text/css">
  .swiper-button-prev-brand {
    --swiper-navigation-size: 20px;
    --swiper-navigation-color: #8A8A8A;
    --swiper-navigation-sides-offset: 30px;
}
.swiper-button-next-brand {
    --swiper-navigation-size: 20px;
    --swiper-navigation-color: #8A8A8A;
    --swiper-navigation-sides-offset: 30px;
}
</style>
<style type="text/css">
    .product-content > h4 {
        font-size: 16px;
        line-height: 20px;
        margin: 8px 0 13px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        max-height: 45px;
        min-height: 45px;
    }
    .product-action-wrapper-2 > p{
        font-size: 12px;
        line-height: 18px;
        margin: 8px 0 13px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        max-height: 36px;
        min-height: 36px;
    }
</style>
