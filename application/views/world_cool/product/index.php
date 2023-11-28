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
                    <p><?=lang('display') ?> <? echo $starts ?> <?=lang('to') ?> <? echo $ends ?> <?=lang('from') ?> <? echo $total_rows ?>   </p>
                </div>
                <div class="product-sorting-wrapper" style="">
                    <div class="product-shorting shorting-style">
                        <label style="display: inline;"><?=lang('Display per page') ?> : </label>
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
                           echo  $companyData->display_product_limit;
                       }
                       ?>                                    
                   </button>
                   <ul class="dropdown-menu nav-menu1">
                    <li style="padding-left: 10px;"><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/Products") ?>?cat_id=<?php echo $cat_id?>"><?php echo $companyData->display_product_limit ?></a></li>
                    <li style="padding-left: 10px;"><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/Products") ?>?cat_id=<?php echo $cat_id?>&view=2&order=<? echo $orderby; ?>">36</a></li>
                    <li style="padding-left: 10px;"><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/Products") ?>?cat_id=<?php echo $cat_id?>&view=3&order=<? echo $orderby; ?>">60</a></li>
                </ul>
            </div>
        </div>
        
    </div>
</div>
<div class="tab-content jump">
    <div class="tab-pane active pb-20" id="product-grid">
        <div class="row">
            <?php 
            foreach ($product as $key => $productall) {
                $images = $productall->pictures; 
                ?>
                <?php if ($productall->pro_name != "") { ?>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6" style="padding: 5px;">
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
                                            <img src="<?php echo base_url($filepath); ?>" alt="">
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
                                        <h4><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>"><?=$productall->pro_name ?></a></h4>
                                    </div>
                                    <div class="product-action-wrapper-2">
                                        
                                        <div class="product-action">
                                            <a class="action-cart" title="<?=lang('ProductDetail')?>" href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>">
                                                <?=lang('ProductDetail')?>
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
    <div class="tab-pane" id="product-list">
        <div class="row">
            <?php foreach ($product as $key => $productall) { 
                $images = $productall->pictures; 
                ?>
                <?php if ($productall->pro_name!="") { ?>
                    <div class="col-lg-12">
                        <div class="product-list-wrapper shop-border mb-40 pb-40">
                            <div class="product-img">
                                <div class="product-img-slider">
                                 <?php   
                                    $filepath  = "images/product_new/detail_".$images[0]->pro_pic_id.'_300.webp';
                                    $filepath2 = "images/product_new/detail_".$images[1]->pro_pic_id.'_300.webp';
                                    $filepath3 = "images/product_new/detail_".$images[2]->pro_pic_id.'_300.webp'; 
                                    ?>
                                    <? if(is_file($filepath)) { ?>
                                        <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>">
                                            <img src="<?php echo base_url($filepath); ?>" alt="">
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
                        <div class="product-list-content" style="min-height: 240px;">
                            <?php if ($companyData->cat_type == 1) { ?>
                                <span><?=$productall->cat_name ?></span>
                            <?php } ?>

                            <h4 style="font-size: 20px;line-height: 30px;font-weight: 300;"><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>"><?= $productall->pro_name ?></a></h4>
                            <div style="font-size: 16px;line-height: 30px;font-weight: 300;">
                                <?=$productall->pro_desc_short2 ?>
                            </div>
                            <div class="product-action">
                                <a class="action-cart" href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-detail/")?><? echo $productall->pro_url ?>" title="<?=lang('ProductDetail')?>"> <?=lang('ProductDetail')?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        <?php } ?>
    </div>
</div>
<div class="pagination-total-pages">
    <div class="pagination-style">
        <?=$links?> 
    </div>
    <div class="total-pages">
        <p><?=lang('display') ?> <? echo $starts ?> <?=lang('to') ?> <? echo $ends ?> <?=lang('from') ?> <? echo $total_rows ?>  </p>
    </div>
</div>
</div>
</div>
<?php $this->load->view($theme_path.'/product/menu-left') ?>
</div>
</div>
</div>

<style type="text/css">
    .product-content > h4 {
        font-size: 14px;
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