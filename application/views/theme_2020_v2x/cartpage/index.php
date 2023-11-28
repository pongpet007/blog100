<img class="img-responsive" src="http://bdproof.com/advancethermo/admin/../images/product_new/pro_banner_<?php echo $product->pro_id ?>01.jpg">
<!--  end page banner  -->
<!--  breadcrumb -->
<section class="breadcrumb-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>Home">หน้าแรก</a></li>
                    <li><a href="<?php echo base_url() ?>Products">สินค้า</a></li>
                    <li><a href="<?php echo base_url() ?>Products/detail/<?php echo $product->pro_id ?>">
                        <?=$lang=='EN'?$product->pro_name_en:$product->pro_name_th ?>
                        </a>
                    </li>
                    <li>ขอใบเสนอราคา</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact-page-main-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-section">
                    <h5 class="contact-heading">ขอใบเสนอราคา</h5>
                </div>
                <form name="frmRequest" id="frmRequest" class="cart" action="<?=base_url("Products/sentquotation")?>" method="post">
                    <div id="cart" class="cart-main-block">
                        <div class="cart-table">
                            <table>
                                <tr>
                                    <th></th>
                                    <th>สินค้า</th>
                                    <th>จำนวน</th>
                                </tr>
                                <tr>
                                    <td class="remove-btn"><img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $product->pro_id; ?>01small.jpg" alt=""></td>
                                    <td class="cart-product">
                                        <a href="#"><?=$lang=='EN'?$product->pro_name_en:$product->pro_name_th ?></a>
                                        <p>รายละเอียด</p>
                                        <p><?=$lang=='EN'?$product->pro_desc_en:$product->pro_desc_th ?></p>
                                    </td>
                                    <td class="">จำนวน : <input class="" type="text" value="<?php echo $qtybutton ?>" name="qtybutton"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <?php if($this->session->flashdata('errors')){ ?>  
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i> มีช้อผิดพลาด</h4>
                            <small><?=$this->session->flashdata('errors') ?></small>
                        </div>
                        <?php } ?>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ชื่อ - นามสกุล <span>*</span></label>
                                <input type="text" name="fullname" class="form-control" placeholder="<?=$lang=='EN'?'Fullname':'ชื่อ'?>" value="<?=set_value('fullname')?set_value('fullname'):'' ?>"  required> 
                            </div>
                            <div class="form-group">
                                <label>เบอร์ติดต่อ</label>
                                <input type="text" name="company_name" class="form-control" placeholder="<?=$lang=='EN'?'Company':'ชื่อบริษัท'?>" value="<?=set_value('company_name')?set_value('company_name'):'' ?>"  required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>อีเมล <span>*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="<?=$lang=='EN'?'E-mail':'อีเมล์'?>"  value="<?=set_value('email')?set_value('email'):'' ?>"   required>
                            </div>
                            <div class="form-group">
                                <label>ชื่อบริษัท</label>
                                <input type="text" name="telephone" class="form-control" placeholder="<?=$lang=='EN'?'Telephone':'โทรศัพท์'?>"  value="<?=set_value('telephone')?set_value('telephone'):'' ?>"   required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group" hidden>
                                <label>หัวข้อ</label>
                                <input type="text" name="pro_id" class="form-control" placeholder="<?=$lang=='EN'?'pro_id':'pro_id'?>"  value="<? echo $pro_id ?>"   required> 
                            </div>
                            <div class="form-group">
                                <label>ข้อความ</label>
                                <textarea class="form-control" name="detail" placeholder="<?=$lang=='EN'?'Detail':'รายละเอียด'?>"><?=set_value('detail')?set_value('detail'):'' ?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php echo $widget;?>
                    <?php echo $script;?>
                    <button type="submit" class="btn btn-default">ส่งขอใบเสนอราคา</button>
                </form>
            </div>
        </div>
    </div>
</section>