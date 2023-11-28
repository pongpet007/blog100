<?php $this->load->view($theme_path.'/product/nevbar') ?>

<div class="shop-page-area pt-30 pb-65">
    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                 <?php 
                    $filepath = "images/product-banner.jpg";                   
                    if(is_file($filepath)){
                 ?>
                <div class="banner-area pb-30 ">                
                    <a href="#"><img alt="" src="<? echo base_url($filepath);?>"></a>
                </div>
                <?php } ?>
                <div class="shop-topbar-wrapper">
                    <div class="shop-topbar-left">
                        <div class="grid-list-options nav view-mode">
                            <a class="active" href="#product-grid" data-view="product-grid" data-toggle="tab"><i class="fa fa-th"></i></a>
                            <a href="#product-list" data-view="product-list" data-toggle="tab"><i class="fa fa-list-ul"></i></a>
                        </div>
                        <p>แสดง <? echo $starts ?> - <? echo $ends ?> ถึง <? echo $total_rows ?> จาก  </p>
                    </div>
                    <div class="product-sorting-wrapper" style="text-align: right;">
                        <div class="product-shorting shorting-style">
                            <label style="display: inline;">จำนวนสินค้าต่อหน้า :</label>
                            <div style="display: inherit;" class="dropdown">
                                <button class="btn dropdown-toggle" style="    border: 1px solid #f4f4f4;
                                    background-color: #fff;    height: 31px;
                                    margin-top: -4px;
                                    margin-left: 13px;
                                    padding: 0px 26px 0px 21px;" type="button" data-toggle="dropdown">
                                <?
                                    if($views==2){
                                       echo  '36';
                                    }
                                    elseif($views==3){
                                      echo  '60';
                                    }
                                    else
                                    {
                                       echo  '24';
                                    }
                                    ?>                                    
                                </button>
                                <ul class="dropdown-menu nav-menu1">
                                    <li style="padding-left: 10px;"><a href="<?php echo base_url("Products") ?>?cat_id=<?php echo $cat_id?>">24</a></li>
                                    <li style="padding-left: 10px;"><a href="<?php echo base_url("Products") ?>?cat_id=<?php echo $cat_id?>&view=2&order=<? echo $orderby; ?>">36</a></li>
                                    <li style="padding-left: 10px;"><a href="<?php echo base_url("Products") ?>?cat_id=<?php echo $cat_id?>&view=3&order=<? echo $orderby; ?>">60</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-show shorting-style">
                            <label style="display: inline;">จัดเรียงโดย :</label>
                            <div style="display: inherit;" class="dropdown">
                                <button class="btn dropdown-toggle" style="    border: 1px solid #f4f4f4;
                                    background-color: #fff;    height: 31px;
                                    margin-top: -4px;
                                    margin-left: 13px;
                                    padding: 0px 26px 0px 21px;" type="button" data-toggle="dropdown">
                                <?
                                    if($orderby==2){
                                       echo  'Name';
                                    }else
                                    {
                                       echo  'Default';
                                    }
                                    ?>                                    
                                </button>
                                <ul class="dropdown-menu nav-menu1">
                                    <li style="padding-left: 10px;"><a href="<?php echo base_url("Products") ?>?cat_id=<?php echo $cat_id?>">ปกติ</a></li>
                                    <li style="padding-left: 10px;"><a href="<?php echo base_url("Products") ?>?cat_id=<?php echo $cat_id?>&view=<? echo $views ?>&order=2">ชื่อ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content jump">
                                        <div class="tab-pane active pb-20" id="product-grid">
                        <div class="row">
                            <?php foreach ($product as $key => $productall) { ?>
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-6 mb-30" style="margin-bottom: 50px;padding: 5px;">
                                <div class="devita-product-2 mrg-inherit">
                                    <div class="product-img">
                                        <div class="product-img-slider">
                                            <?php   $filepath  = "images/product_new/pro_".$productall->pro_id.'01small.jpg';
                                                $filepath2 = "images/product_new/pro_".$productall->pro_id.'02small.jpg';
                                                $filepath3 = "images/product_new/pro_".$productall->pro_id.'03small.jpg'; 
                                                ?>
                                            <? if(is_file($filepath)) { ?>
                                            <a href="<?php echo base_url("products/detail/")?><? echo $productall->pro_id ?>">
                                            <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productall->pro_id; ?>01small.jpg" alt="">
                                            </a>
                                            <? } ?>
                                            <? if(is_file($filepath2)) { ?>
                                            <a href="<?php echo base_url("products/detail/")?><? echo $productall->pro_id ?>">
                                            <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productall->pro_id; ?>02small.jpg" alt="">
                                            </a>
                                            <? } ?>
                                            <? if(is_file($filepath3)) { ?>
                                            <a href="<?php echo base_url("products/detail/")?><? echo $productall->pro_id ?>">
                                            <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productall->pro_id; ?>03small.jpg" alt="">
                                            </a>
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="list-col">
                                        <div class="gridview gridviewnew">
                                            <div class="product-content product-contentnew text-center" style="padding-top: 11px;">
                                                <h4><a href="<?php echo base_url("products/detail/")?><? echo $productall->pro_id ?>"><?=$lang=='EN'?$productall->pro_name_en:$productall->pro_name_th ?></a></h4>
                                            </div>
                                            <div class="product-action-wrapper-2">
                                                <p><?=$productall->pro_desc_short ?></p>
                                                <div class="product-action">
                                                    <a class="action-cart" title="ขอใบเสนอราคา" href="<? echo base_url("Favorite/add?pro_id={$productall->pro_id}"); ?>">
                                                    ขอใบเสนอราคา
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }  ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="product-list">
                        <div class="row">
                            <?php foreach ($product as $key => $productall) { ?>
                            <div class="col-lg-12">
                                <div class="product-list-wrapper shop-border mb-40 pb-40">
                                    <div class="product-img">
                                        <div class="product-img-slider">
                                            <?php   $filepath  = "images/product_new/pro_".$productall->pro_id.'01small.jpg';
                                                $filepath2 = "images/product_new/pro_".$productall->pro_id.'02small.jpg';
                                                $filepath3 = "images/product_new/pro_".$productall->pro_id.'03small.jpg'; 
                                                ?>
                                            <? if(is_file($filepath)) { ?>
                                            <a href="<?php echo base_url("products/detail/")?><? echo $productall->pro_id ?>">
                                            <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productall->pro_id; ?>01small.jpg" alt="">
                                            </a>
                                            <? } ?>
                                            <? if(is_file($filepath2)) { ?>
                                            <a href="<?php echo base_url("products/detail/")?><? echo $productall->pro_id ?>">
                                            <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productall->pro_id; ?>02small.jpg" alt="">
                                            </a>
                                            <? } ?>
                                            <? if(is_file($filepath3)) { ?>
                                            <a href="<?php echo base_url("products/detail/")?><? echo $productall->pro_id ?>">
                                            <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productall->pro_id; ?>03small.jpg" alt="">
                                            </a>
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="product-list-content" style="min-height: 240px;">
                                        <?php if ($companyData->cat_type == 1) { ?>
                                            <span><?=$lang=='EN'?$productall->cat_name:$productall->cat_name_th ?></span>
                                        <?php } ?>
                                        
                                        <h4><a href="<?php echo base_url("products/detail/")?><? echo $productall->pro_id ?>"><?=$lang=='EN'?$productall->pro_name_en:$productall->pro_name_th ?></a></h4>
                                        <div class="product-action">
                                            <a class="action-cart" href="<? echo base_url(); ?>Products/quotation/<? echo $productall->pro_id ?>?qtybutton=01" title="ขอใบเสนอราคา"> ขอใบเสนอราคา </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="pagination-total-pages">
                        <div class="pagination-style">
                            <?=$links?> 
                        </div>
                        <div class="total-pages">
                            <p>แสดง <? echo $starts ?> - <? echo $ends ?> ถึง <? echo $total_rows ?> จาก  </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view($theme_path.'/product/menu-left') ?>
        </div>
    </div>
</div>