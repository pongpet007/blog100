<!doctype html>
<html class="no-js" lang="zxx">
    <?php $this->load->view($theme_path.'/inc/header-meta') ?>
    <body>
        
        <?php $this->load->view($theme_path.'/inc/header') ?>
		

		<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
               <li><a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/"><?=lang('Home') ?></a></li>
                <li class="active"><?=lang('Quotation') ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="cart-main-area pt-60 pb-65">
    <div class="container">
        <h3 class="page-title"><?=lang('request quotation') ?></h3>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #fff;">
       
            <div class="container"> 
                <form name="frmRequest" id="frmRequest" class="cart" action="<?=base_url($this->session->userdata('site_lang_name')."/Favorite/update")?>" method="post">
                <div class="table-contentx table-responsivex">
                    <table width="100%" class="table table-striped" style="border-bottom: 1px solid #ebebeb;margin-bottom: 20px;">
                        <thead>
                            <tr>
                                <th><?=lang('Picture') ?></th>
                                <th style="text-align: left;padding-left: 0px;"><?=lang('Product') ?></th>
                                <th><?=lang('amount') ?></th>
                                <th><?=lang('Remove') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cartarr as $product) {  ?>

                            <tr>
                                <td class="product-thumbnail">
                                    <a href="<?=base_url($this->session->userdata('site_lang_name')."/Products/detail/")?><?php echo $product[0]->pro_id ?>" target="_blank"><img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product[0]->pro_id ?>01.jpg" alt="" style="max-width: 100px;"></a>
                                </td>
                                <td class="product-name" style="text-align: left;">
                                    <a href="<?=base_url($this->session->userdata('site_lang_name')."/Products/detail/")?><?php echo $product[0]->pro_id ?>" target="_blank"><?php echo $product[0]->pro_name ?></a>
                                </td>
                                <td class="product-quantity">
                                    <div class="pro-dec-cart">
                                        <?=lang('amount') ?> : <input class="cart-plus-minus-box" type="text" value="<?php echo $product[1] ?>" name="qty[]">
                                    </div>
                                </td>
                                <td>
                                   <a href="<?=base_url($this->session->userdata('site_lang_name')."/Favorite/remove/")?><?php echo $product[2] ?>"> <i class="fa fa-trash"></i> <?=lang('Remove') ?></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div style="text-align: center;">
                        <button style="margin-bottom: 30px;" type="submit" class="btn btn-warning"><?=lang('Improve product quantity') ?></button>
                        <a style="margin-bottom: 30px;" href="<?=base_url($this->session->userdata('site_lang_name')."/Products")?>" class="btn btn-success"><?=lang('Select More Products') ?></a>
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
                                    <h4 class="cart-bottom-title section-bg-white"><?=lang('Enter contact details') ?></h4>
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
                                            <input type="text" name="fullname"  placeholder="<?=lang('Fullname') ?>" value="<?=set_value('fullname')?set_value('fullname'):'' ?>"  required> 
                                        </div>
                                        <div class="tax-select">
                                            <input type="text" name="company_name"  placeholder="<?=lang('Company') ?>" value="<?=set_value('company_name')?set_value('company_name'):'' ?>"  required> 
                                        </div>
                                        <div class="tax-select">
                                            <input type="email" name="email"  placeholder="<?=lang('E-mail') ?>"  value="<?=set_value('email')?set_value('email'):'' ?>"   required>
                                        </div>
                                        <div class="tax-select">
                                            <input type="text" name="telephone"  placeholder="<?=lang('Telephone') ?>"  value="<?=set_value('telephone')?set_value('telephone'):'' ?>"   required> 
                                        </div>
                                        <div class="tax-select">
                                            <textarea name="detail" placeholder="<?=lang('Detail') ?>"><?=set_value('detail')?set_value('detail'):'' ?></textarea>
                                        </div>
                                        <?php echo $widget;?>
                                        <?php echo $script;?>
                                        <br>
                                        <button class="cart-btn-2" type="submit" style="width: 100%;background-color: #174ea9;color: #fff;" ><?=lang('Send a request for a quote') ?></button>
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