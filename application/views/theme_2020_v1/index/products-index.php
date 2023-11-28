<div class="product-area pb-30" >
    <div class="container">
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