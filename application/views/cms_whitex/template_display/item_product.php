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
      
            <div class="product-tab-list tab-list-bouquet mb-30 nav" role="tablist">
                <?php foreach ($categorys as $key => $categoryss) { ?>
                <a class="" href="#home<?php echo $categoryss->cat_id ?>" data-toggle="tab">
                    <h4><?=$lang=='EN'?$categoryss->short_cat_name:$categoryss->short_cat_name_th ?></h4>
                </a>
                <? } ?>
                <a class="active" href="#home2" data-toggle="tab">
                    <h4> All Products </h4>
                </a>
            </div>
            <div class="tab-content jump">
                <? foreach ($products as $newproducts) { ?>
                <div class="tab-pane " id="home<? echo $newproducts[0]->cat_id ?>">
                    <div class="custom-row">
                        <? foreach ($newproducts as $key => $newproductss) { ?>
                        <div class="custom-col-5 mb-30">
                            <div class="devita-product-2 mrg-inherit">
                                <div class="product-img">
                                    <div class="product-img-slider">
                                        <?php   $filepath  = "images/product_new/pro_".$newproductss->pro_id.'01.jpg';
                                            $filepath2 = "images/product_new/pro_".$newproductss->pro_id.'02.jpg';
                                            $filepath3 = "images/product_new/pro_".$newproductss->pro_id.'03.jpg'; ?>
                                        <? if(is_file($filepath)) { ?>
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $newproductss->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $newproductss->pro_id; ?>01.jpg" alt="">
                                        </a>
                                        <? } ?>
                                        <? if(is_file($filepath2)) { ?>
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $newproductss->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $newproductss->pro_id; ?>02.jpg" alt="">
                                        </a>
                                        <? } ?>
                                        <? if(is_file($filepath3)) { ?>
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $newproductss->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $newproductss->pro_id; ?>03.jpg" alt="">
                                        </a>
                                        <? } ?>
                                    </div>
                                </div>
                                <div class="list-col">
                                    <div class="gridview">
                                        <div class="product-content text-center">
                                            <?php if ($companyData->cat_type == 1) { ?>
                                            <span><?=$lang=='EN'?$newproductss->cat_name:$newproductss->cat_name_th ?></span>
                                            <?php } ?>
                                            <h4><a href="<? echo base_url(); ?>Products/detail/<? echo $newproductss->pro_id ?>"><?=$lang=='EN'?$newproductss->pro_name_en:$newproductss->pro_name_th ?></a></h4>
                                        </div>
                                        <div class="product-action-wrapper-2 text-center">
                                            <p><?=$lang=='EN'?$newproductss->pro_shot_detail_en:$newproductss->pro_shot_detail_th ?></p>
                                            <div class="product-action">
                                                <a class="action-cart" title="Add To Cart" href="<? echo base_url(); ?>Products/quotation/<? echo $newproductss->pro_id ?>?qtybutton=01">
                                                <?=$lang=='EN'?'Request Quotation':'ขอใบเสนอราคา' ?>    
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
                <div class="tab-pane active" id="home2">
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
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsalls->pro_id; ?>01.jpg" alt="">
                                        </a>
                                        <? } ?>
                                        <? if(is_file($filepath2)) { ?>
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsalls->pro_id; ?>02.jpg" alt="">
                                        </a>
                                        <? } ?>
                                        <? if(is_file($filepath3)) { ?>
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsalls->pro_id; ?>03.jpg" alt="">
                                        </a>
                                        <? } ?>
                                    </div>
                                </div>
                                <div class="list-col">
                                    <div class="gridview">
                                        <div class="product-content text-center">
                                            <?php if ($companyData->cat_type == 1) { ?>
                                            <span><?=$lang=='EN'?$productsalls->cat_name:$productsalls->cat_name_th ?></span>
                                            <?php } ?>
                                            <h4><a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>"><?=$lang=='EN'?$productsalls->pro_name_en:$productsalls->pro_name_th ?></a></h4>
                                        </div>
                                        <div class="product-action-wrapper-2 text-center">
                                            <p><?=$lang=='EN'?$productsalls->pro_shot_detail_en:$productsalls->pro_shot_detail_th ?></p>
                                            <div class="product-action">
                                                <a class="action-cart" title="Add To Cart" href="<? echo base_url(); ?>Products/quotation/<? echo $productsalls->pro_id ?>?qtybutton=01">
                                                <?=$lang=='EN'?'Request Quotation':'ขอใบเสนอราคา' ?>
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
    <div class="product-area pb-30" >
        <div class="pro_type2">
            <div style="text-align: center;margin-bottom: 30px;">
                 <h1><?=$lang=='EN'?'สินค้าและบริการ':'สินค้าและบริการ' ?> </h1>
            </div>
             
            <div class="tab-pane active" id="home2">
                <div class="custom-row">
                    <?php foreach ($categorys as $key => $categoryss) { ?>
                    <div class="custom-col-4" style="padding:5px;">
                        <div class="devita-product-2 mrg-inherit">
                            <div class="product-img">
                                <div class="product-img-slider">
                                    <?php   $filepath  = "images/category/".$categoryss->cat_id.'.jpg'; ?>
                                    <? if(is_file($filepath)) { ?>
                                    <a href="<? echo base_url(); ?>Products/?cat_id=<? echo $categoryss->cat_id ?>">
                                    <img src="<?php echo base_url(); ?>/images/category/<?php echo $categoryss->cat_id; ?>.jpg" alt="">
                                    </a>
                                    <? } ?>
                                </div>
                            </div>
                            <div class="list-col">
                                <div class="gridview">
                                    <div class="product-content text-center">
                                        <h4><a href="<? echo base_url(); ?>Products/?cat_id=<? echo $categoryss->cat_id ?>"><?=$lang=='EN'?$categoryss->cat_name:$categoryss->cat_name_th ?></a></h4>
                                    </div>
                                    <div class="product-action-wrapper-2 text-center">
                                        <p><?=$lang=='EN'?$categoryss->short_cat_name:$categoryss->short_cat_name_th ?></p>
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
<?php } ?>
<?php if ($i->pro_type == 3) { ?>
    <div class="product-area pb-30" >
        <div class="pro_type3">
            <div class="mb-30 news_home">
                <h2 class="new_h4"><?=$lang=='EN'?'Products':'สินค้า' ?></h2>
            </div>

            <div class="tab-content jump">        
                <div class="tab-pane active" id="home2">
                    <div class="custom-row">
                        <?php foreach ($productsall as $key => $productsalls) { ?>
                        <div class="custom-col-4" style="padding:5px;">
                            <div class="devita-product-2 mrg-inherit">
                                <div class="product-img">
                                    <div class="product-img-slider">
                                        <?php   $filepath  = "images/product_new/pro_".$productsalls->pro_id.'01.jpg';
                                            $filepath2 = "images/product_new/pro_".$productsalls->pro_id.'02.jpg';
                                            $filepath3 = "images/product_new/pro_".$productsalls->pro_id.'03.jpg'; ?>
                                        <? if(is_file($filepath)) { ?>
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsalls->pro_id; ?>01.jpg" alt="">
                                        </a>
                                        <? } ?>
                                        <? if(is_file($filepath2)) { ?>
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsalls->pro_id; ?>02.jpg" alt="">
                                        </a>
                                        <? } ?>
                                        <? if(is_file($filepath3)) { ?>
                                        <a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>">
                                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsalls->pro_id; ?>03.jpg" alt="">
                                        </a>
                                        <? } ?>
                                    </div>
                                </div>
                                <div class="list-col">
                                    <div class="">
                                        <div class="product-content text-center">
                                            <?php if ($companyData->cat_type == 1) { ?>
                                            <span><?=$lang=='EN'?$productsalls->cat_name:$productsalls->cat_name_th ?></span>
                                            <?php } ?>
                                            <h4><a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>"><?=$lang=='EN'?$productsalls->pro_name_en:$productsalls->pro_name_th ?></a></h4>
                                            <p><?=$lang=='EN'?$productsalls->pro_shot_detail_en:$productsalls->pro_shot_detail_th ?></p>
                                            <div class="product-action">
                                                <a class="action-cart" title="Add To Cart" href="<? echo base_url("Favorite/add?pro_id={$productsalls->pro_id}"); ?>" >
                                                <?=$lang=='EN'?'Request Quotation':'ขอใบเสนอราคา' ?>
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

<?php if ($i->pro_type == 4) { ?>
<div class="product-area pt-60 pb-45">
            <div class="container">
                <div class="section-border mb-10">
                    <h4 class="section-title section-bg-white"><?=$lang=='EN'?'Products':'สินค้า'?> <span><?=$lang=='EN'?$companyData->com_name_en:$companyData->com_name_th ?></span></h4>
                </div>
                <div class="product-slider-nav nav-style"></div>
                <div class="headphone-slider-active owl-carousel product-slider">
                    <?php for ($i=0; $i < sizeof($productsall) ; $i++) {  ?>                        
                    <div class="item">
                        <div class="devita-product-2">
                            <div class="product-img">
                                <?php   
                                $filepath  = "images/product_new/pro_".$productsall[$i]->pro_id.'01.jpg';
                                ?>
                                <? if(is_file($filepath)) { ?>
                                <a href="<? echo base_url(); ?>Products/detail/<? echo $productsall[$i]->pro_id ?>">
                                <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsall[$i]->pro_id; ?>01.jpg" alt="">
                                </a>
                                <? } ?>
                            </div>
                            <div class="list-col">
                                <div class="gridview">
                                    <div class="product-content text-center">
                                        <span><?=$lang=='EN'?$productsall[$i]->cat_name:$productsall[$i]->cat_name_th ?></span>
                                        <h4><a href="<? echo base_url(); ?>Products/detail/<? echo $productsall[$i]->pro_id ?>"><?=$lang=='EN'?$productsall[$i]->pro_name_en:$productsall[$i]->pro_name_th ?></a></h4>
                                       
                                    </div>
                                    <div class="product-action-wrapper-2 text-center">
                                       
                                         <p><?=$lang=='EN'?$productsall[$i]->pro_shot_detail_en:$productsall[$i]->pro_shot_detail_th ?></p>
                                        <div class="product-action">
                                            <a class="same-action" title="Wishlist" href="javascript:addquatation(<?=$productsall[$i]->pro_id?>)">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="action-cart" href="<? echo base_url("Favorite/add?pro_id={$productsall[$i]->pro_id}"); ?>" >
                                                <?=$lang=='EN'?'Request Quotation':'ขอใบเสนอราคา' ?>
                                            </a>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <? $i++; ?>
                        <div class="devita-product-2">
                            <div class="product-img">
                                <?php   
                                $filepath  = "images/product_new/pro_".$productsall[$i]->pro_id.'01.jpg';
                                ?>
                                <? if(is_file($filepath)) { ?>
                                <a href="<? echo base_url(); ?>Products/detail/<? echo $productsall[$i]->pro_id ?>">
                                <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsall[$i]->pro_id; ?>01.jpg" alt="">
                                </a>
                                <? } ?>
                            </div>
                            <div class="list-col">
                                <div class="gridview">
                                    <div class="product-content text-center">
                                        <span><?=$lang=='EN'?$productsall[$i]->cat_name:$productsall[$i]->cat_name_th ?></span>
                                        <h4><a href="<? echo base_url(); ?>Products/detail/<? echo $productsall[$i]->pro_id ?>"><?=$lang=='EN'?$productsall[$i]->pro_name_en:$productsall[$i]->pro_name_th ?></a></h4>
                                       
                                    </div>
                                    <div class="product-action-wrapper-2 text-center">
                                       
                                         <p><?=$lang=='EN'?$productsall[$i]->pro_shot_detail_en:$productsall[$i]->pro_shot_detail_th ?></p>
                                        <div class="product-action">
                                            <a class="same-action" title="Wishlist" href="javascript:addquatation(<?=$productsall[$i]->pro_id?>)">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="action-cart" href="<? echo base_url("Favorite/add?pro_id={$productsall[$i]->pro_id}"); ?>" >
                                                <?=$lang=='EN'?'Request Quotation':'ขอใบเสนอราคา' ?>
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
        </div>
        
<?php } ?>



</div>
</div>

<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>