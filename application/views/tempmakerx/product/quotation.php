<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>Home/">Home</a></li>
                <li><a href="<?php echo base_url() ?>products/">Products </a></li>
                <li><a href="<?php echo base_url() ?>products/detail/<?php echo $product->pro_id ?>"><?=$lang=='EN'?$product->pro_name_en:$product->pro_name_th ?> </a></li>
                <li class="active">Quatition </li>
            </ol>
        </div>
    </div>
</div>
<div class="cart-main-area pt-60 pb-65">
    <div class="container">
        <h3 class="page-title">ขอใบเสนอราคา</h3>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #fff;">
        <form name="frmRequest" id="frmRequest" class="cart" action="<?=base_url("Products/sentquotation")?>" method="post">
            <div class="container">
                <div class="table-content table-responsive">
                    <table width="100%" style="border-bottom: 1px solid #ebebeb;margin-bottom: 20px;">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="text-align: left;padding-left: 0px;">สินค้า</th>
                                <th>จำนวน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>01small.jpg" alt=""></a>
                                </td>
                                <td class="product-name" style="text-align: left;">
                                    <a href="#"><?=$lang=='EN'?$product->pro_name_en:$product->pro_name_th ?></a>
                                    <p>รายละเอียด</p>
                                    <p><?=$lang=='EN'?$product->pro_desc_en:$product->pro_desc_th ?></p>
                                </td>
                                <td class="product-quantity">
                                    <div class="pro-dec-cart">
                                        QTY : <input class="cart-plus-minus-box" type="text" value="<?php echo $qtybutton ?>" name="qtybutton">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="about-us-area pt-80 pb-80" style="background-image: url(../../assets_theme_2020_v1/img/1.jpg);background-repeat: no-repeat;padding-top: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6" style="background-color: #fff">
                            <div class="cart-tax">
                                <div class="">
                                    <h4 class="cart-bottom-title section-bg-white">กรอกรายละเอียดผู้ติดต่อ</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <div class="tax-select-wrapper">
                                        <?php if($this->session->flashdata('errors')){ ?>  
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h4><i class="icon fa fa-ban"></i> มีช้อผิดพลาด</h4>
                                            <small><?=$this->session->flashdata('errors') ?></small>
                                        </div>
                                        <?php } ?>   
                                        <div class="tax-select">
                                            <input type="text" name="fullname"  placeholder="<?=$lang=='EN'?'Fullname':'ชื่อ'?>" value="<?=set_value('fullname')?set_value('fullname'):'' ?>"  required> 
                                        </div>
                                        <div class="tax-select">
                                            <input type="text" name="company_name"  placeholder="<?=$lang=='EN'?'Company':'ชื่อบริษัท'?>" value="<?=set_value('company_name')?set_value('company_name'):'' ?>"  required> 
                                        </div>
                                        <div class="tax-select">
                                            <input type="email" name="email"  placeholder="<?=$lang=='EN'?'E-mail':'อีเมล'?>"  value="<?=set_value('email')?set_value('email'):'' ?>"   required>
                                        </div>
                                        <div class="tax-select">
                                            <input type="text" name="telephone"  placeholder="<?=$lang=='EN'?'Telephone':'โทรศัพท์'?>"  value="<?=set_value('telephone')?set_value('telephone'):'' ?>"   required> 
                                        </div>
                                        <div class="tax-select" hidden="">
                                            <input type="text" name="pro_id"  placeholder="<?=$lang=='EN'?'pro_id':'pro_id'?>"  value="<? echo $pro_id ?>"   required> 
                                        </div>
                                        <div class="tax-select">
                                            <textarea name="detail" placeholder="<?=$lang=='EN'?'Detail':'รายละเอียด'?>"><?=set_value('detail')?set_value('detail'):'' ?></textarea>
                                        </div>
                                        <?php echo $widget;?>
                                        <?php echo $script;?>
                                        <br>
                                        <button class="cart-btn-2" type="submit" style="width: 100%;background-color: #174ea9;color: #fff;" >ส่งขอใบเสนอราคา</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php if ($realatedproductscount>1) { ?>
        <div class="product-area pb-45">
            <div class="container">
                <div class="section-border mb-10">
                    <h4 class="section-title section-bg-white" style="padding-left: 0px;"><?=$lang=='EN'?'Related Products':'สินค้าที่เกี่ยวข้อง'?></h4>
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
    </div>
</div>
<?php if ($realatedproductscount>1) { ?>
<div class="product-area">
    <div class="container">
    </div>
</div>
<? } ?>