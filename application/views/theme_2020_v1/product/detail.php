<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?>Home">หน้าแรก</a></li>
                <li><a href="<? echo base_url() ?>Products/?cat_id=<? echo $product->cat_id ?>"><?=$lang=='EN'?$product->cat_name:$product->cat_name_th ?></a></li>
                <li class="active"><?=$lang=='EN'?$product->pro_name_en:$product->pro_name_th ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details pt-65 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-img">
                    <div class="zoompro-border zoompro-span">
                        <img class="zoompro" src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>01.jpg" data-zoom-image="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>01big.jpg" alt=""/>                    
                    </div>
                    <div id="gallery" class="mt-20 product-dec-slider">
                        <?php   $filepath  = "images/product_new/pro_".$product->pro_id.'01.jpg';
                            $filepath2 = "images/product_new/pro_".$product->pro_id.'02.jpg';
                            $filepath3 = "images/product_new/pro_".$product->pro_id.'03.jpg';
                            $filepathbig  = "images/product_new/pro_".$product->pro_id.'01big.jpg';
                            $filepath2big = "images/product_new/pro_".$product->pro_id.'02big.jpg';
                            $filepath3big = "images/product_new/pro_".$product->pro_id.'03big.jpg';
                            $filepathsmall  = "images/product_new/pro_".$product->pro_id.'01small.jpg';
                            $filepath2small = "images/product_new/pro_".$product->pro_id.'02small.jpg';
                            $filepath3small = "images/product_new/pro_".$product->pro_id.'03small.jpg'; 
                            $filepath90  = "images/product_new/pro_".$product->pro_id.'0190.jpg';
                            $filepath290 = "images/product_new/pro_".$product->pro_id.'0290.jpg';
                            $filepath390 = "images/product_new/pro_".$product->pro_id.'0390.jpg'; 
                            ?>
                        <?php if (isset($filepath) and isset($filepathbig) and isset($filepathsmall) and isset($filepath90)) { ?>
                        <a data-image="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>01.jpg" 
                            data-zoom-image="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>01big.jpg">
                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>0190.jpg" alt="">
                        </a>
                        <?php } ?>
                        <?php if (isset($filepath2) and isset($filepath2big) and isset($filepath2small) and isset($filepath290)) { ?>
                        <a data-image="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>02.jpg" 
                            data-zoom-image="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>02big.jpg">
                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>0290.jpg" alt="">
                        </a>
                        <?php } ?>
                        <?php if (isset($filepath3) and isset($filepath3big) and isset($filepath3small) and isset($filepath390)) { ?>
                        <a data-image="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>03.jpg" 
                            data-zoom-image="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>03big.jpg">
                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>0390.jpg" alt="">
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h4><?=$lang=='EN'?$product->pro_name_en:$product->pro_name_th ?></h4>
                    <?
                            if(strstr($companyData->com_phone,',')){
                                $arrs = explode(',', $companyData->com_phone);
                                $phones = 1;
                                foreach ($arrs as $arr) {
                                    if ($phones == 1) {
                                        echo "<a href='tel:$arr' ><h3 style='margin-top: 36px;margin-bottom: 36px; color: #19be0e;'>ติดต่อผู้ขาย</h3></a>";
                                    }
                                    $phones = $phones + 1;
                                }
                            }else{
                                $arr = $companyData->com_phone;
                                echo "<a href='tel:$arr' ><h3 style='margin-top: 36px;margin-bottom: 36px; color: #19be0e;'>ติดต่อผู้ขาย</h3></a><br>";
                            }
                            ?>
                    
                    <p><?=$lang=='EN'?$product->pro_desc_en:$product->pro_desc_th ?></p>
                    <div class="quality-add-to-cart">
                        <form name="frmRequest" id="frmRequest" action="<?=base_url("Products/quotation/$product->pro_id")?>" method="get">
                            <div class="quality">
                                <label style="margin-right: 10px;">จำนวน :</label>
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="01">
                            </div>
                            <div class="product-action">
                                <button class="button-qutation" type="submit" title="ขอใบเสนอราคา" href="#"> ขอใบเสนอราคา </button>
                            </div>
                        </form>
                    </div>
                    <div class="pro-dec-categories">
                        <ul>
                            <li class="categories-title" style="font-weight: bold">หมวดหมู่สินค้า :</li>
                            <li><a href="<? echo base_url() ?>Products/?cat_id=<? echo $product->cat_id ?>"><?=$lang=='EN'?$product->cat_name:$product->cat_name_th ?></a></li>
                        </ul>
                    </div>
                    <div class="pro-dec-categories">
                        <ul>
                            <li class="categories-title" style="font-weight: bold">ป้ายกำกับสินค้า : </li>
                            <?php 
                                $str = $lang=='EN'?$product->tags_en:$product->tags_th;
                                $tags = array();
                                if(strstr($str,',')){
                                    $tags = explode(',', $str);
                                }else{
                                    if($str){
                                        $tags[] = $str;
                                    }
                                }                               
                                foreach ($tags as $tag) { ?>  
                            <li><a href="<?php echo base_url("products/showtag/$tag"); ?>"><?php echo $tag ?> ,</a></li>
                            <?php } ?>  
                        </ul>
                    </div>
                    <div class="pro-dec-social">
                        <ul>
                            <?php $userinput = base_url("products/detail/$pro_id"); ?>
                            <li>
                                <?php echo '<a class="tweet" href="https://twitter.com/share?url=', urlencode($userinput), '">';
                                    ?>
                                <i class="ion-social-twitter"></i> 
                                Tweet
                                </a>
                            </li>
                            <li>
                                <?php echo '<a class="share" href="https://www.facebook.com/sharer/sharer.php?u=', urlencode($userinput), '">';
                                    ?>
                                <i class="ion-social-facebook"></i> 
                                Share
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="pro-dec-btn">
                        <a href="<?php echo base_url() ?>products/detail/<?php echo $leftpro[0]->pro_id ?>"><i class="fa fa-angle-left"></i></a>
                        <a href="<?php echo base_url() ?>products/detail/<?php echo $rightpro[0]->pro_id ?>"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area pt-25 pb-70">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav text-center">
                <a class="active" data-toggle="tab" href="#des-details1">รายละเอียดสินค้า</a>
                <a data-toggle="tab" href="#des-details2">ข้อมูลเฉพาะ</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-wrapper">
                        <?=$lang=='EN'?$product->pro_desc_en_long:$product->pro_desc_th_long ?>
                    </div>
                </div>
                <div id="des-details2" class="tab-pane">
                    <div class="product-anotherinfo-wrapper">
                        <?=$lang=='EN'?$product->spec_en:$product->spec_th ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($realatedproductscount>1) { ?>
    <div class="product-area pb-45">
        <div class="container">
            <div class="section-border mb-10">
                <h4 class="section-title section-bg-white">สินค้าที่เกี่ยวข้อง</h4>
            </div>
            <div class="product-slider-nav nav-style"></div>
            <div class="headphone-slider-active product-slider owl-carousel nav-style">
                <?php foreach ($realatedproducts as $key => $realatedproductsall) { ?>
                <div class="devita-product-2">
                    <div class="product-img">
                        <a href="<? echo base_url(); ?>Products/detail/<? echo $realatedproductsall->pro_id ?>">
                        <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $realatedproductsall->pro_id; ?>01.jpg" alt="">
                        </a> 
                    </div>
                    <div class="list-col" style="margin-bottom: 40px;">
                        <div class="gridview">
                            <div class="product-content text-center">
                                <?php if ($companyData->cat_type == 1) { ?>
                                    <span><?=$lang=='EN'?$realatedproductsall->cat_name:$realatedproductsall->cat_name_th ?></span>
                                <?php } ?>
                                
                                <h4><a href="<? echo base_url(); ?>Products/detail/<? echo $realatedproductsall->pro_id ?>"><?=$lang=='EN'?$realatedproductsall->pro_name_en:$realatedproductsall->pro_name_th ?></a></h4>
                            </div>
                            <div class="product-action-wrapper-2 text-center">
                                <p><?=$lang=='EN'?$realatedproductsall->pro_shot_detail_en:$realatedproductsall->pro_shot_detail_th ?></p>
                                <div class="product-action">
                                    <a class="action-cart" title="Add To Cart" href="<? echo base_url(); ?>Products/quotation/<? echo $realatedproductsall->pro_id ?>?qtybutton=01">
                                    <?=$lang=='EN'?'Request Quotation':'ขอใบเสนอราคา' ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <? } ?>
            </div>
        </div>
    </div>
<? } ?>