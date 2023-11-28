<!doctype html>
<html class="no-js" lang="zxx">
    <?php $this->load->view($theme_path.'/inc/header-meta') ?>
    <body>
        
        <?php $this->load->view($theme_path.'/inc/header') ?>
		

		<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
               <li><a href="<? echo base_url() ?>"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li class="active"><?=$lang=='EN'?'Quotation':'ใบเสนอราคา' ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="cart-main-area pt-60 pb-65">
    <div class="container">
        <h3 class="page-title">ขอใบเสนอราคา</h3>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #fff;">
       
            <div class="container"> 
                <form name="frmRequest" id="frmRequest" class="cart" action="<?=base_url("Favorite/update")?>" method="post">
                <div class="table-contentx table-responsivex">
                    <table width="100%" class="table table-striped" style="border-bottom: 1px solid #ebebeb;margin-bottom: 20px;">
                        <thead>
                            <tr>
                                <th><?=$lang=='EN'?'Picture':'รูปสินค้า'?></th>
                                <th style="text-align: left;padding-left: 0px;"><?=$lang=='EN'?'Product':'สินค้า'?></th>
                                <th><?=$lang=='EN'?'QTY':'จำนวน'?></th>
                                <th><?=$lang=='EN'?'remove':'ลบ'?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->cart->contents() as $product) { 
                               //print_r($product);

                            ?>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="<?=base_url("products/detail/{$product['id']}")?>" target="_blank"><img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product['id']; ?>01small.jpg" alt="" style="max-width: 100px;"></a>
                                </td>
                                <td class="product-name" style="text-align: left;">
                                    <a href="<?=base_url("products/detail/{$product['id']}")?>" target="_blank"><?=$lang=='EN'?$product['pro_name_en']:$product['pro_name_th'] ?></a>
                                </td>
                                <td class="product-quantity">
                                    <div class="pro-dec-cart">
                                        QTY : <input class="cart-plus-minus-box" type="text" value="<?php echo $product['qty'] ?>" name="qty[]">
                                    </div>
                                </td>
                                <td>
                                   <a href="<?=base_url("Favorite/remove/{$product['rowid']}")?>"> <i class="fa fa-trash"></i> <?=$lang=='EN'?'remove':'ลบ'?></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-warning"><?=$lang=='EN'?'Update quantity':'ปรับปรุงจำนวนสินค้า'?></button>
                        <a href="<?=base_url("Products")?>" class="btn btn-success"><?=$lang=='EN'?'Add more product':'เลือกสินค้าเพิ่ม'?></a>
                    </div>
                </div>
                </form>
            </div>
            <div class="about-us-area pt-80 pb-80" style="background-image: url(../../assets_theme_2020_v1/img/1.jpg);background-repeat: no-repeat;padding-top: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" style="background-color: #fff">
                            <form name="frmsendRequest" id="frmsendRequest" class="cart" action="<?=base_url("Favorite/sendmail")?>" method="post">
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       
       
    </div>
</div>

        <?php $this->load->view($theme_path.'/inc/footer') ?>

        <?php $this->load->view($theme_path.'/inc/footer-js') ?>
       
    </body>
</html>