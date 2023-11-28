<section role="main" class="content-body">
    <header class="page-header">
        <h2>Welcome  <span style="color:yellow;"><?php echo $company->com_name ?> expire :<?php echo $company->expire ?> </span> </h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                    <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span> Home  &nbsp;&nbsp;&nbsp;</span></li>
            </ol>
        </div>
    </header>
    <div class="content-wrapper">
        <section class="content">
            <?php if($this->session->flashdata('msg')){ ?>  
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>
            </div>
            <?php } ?>
            <?php if($this->session->flashdata('errors')){ ?>  
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> มีช้อผิดพลาด</h4>
                <small><?=$this->session->flashdata('errors') ?></small>
            </div>
            <?php } ?>
            <div class="box box-danger">
                <div class="box-header">
                    <h3> แก้ไขข้อมูลบริษัท</h3>
                </div>
                <div class="box-body">
                    <?php 
                        $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' ,'onsubmit'=>'return sendForm()' , 'name'=>'frm' );  
                        echo form_open_multipart("customeradmin/Company/$method/$id",$attributes); ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Company title EN</label>
                        <div class="col-md-6 ">
                            <?php 
                                $com_title_en = is_object($company)?$company->com_title_en:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'com_title_en',
                                    'id'=>'com_title_en',
                                    'placeholder' => 'Company name EN' ,
                                    'value' => set_value('com_title_en')?set_value('com_title_en'):$com_title_en,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Company title TH</label>
                        <div class="col-md-6 ">
                            <?php 
                                $com_title_th = is_object($company)?$company->com_title_th:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'com_title_th',
                                    'id'=>'com_title_th',
                                    'placeholder' => 'Company name TH' ,
                                    'value' => set_value('com_title_th')?set_value('com_title_th'):$com_title_th,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>   
                    <? if ($company->comtype_id != 2 and $company->comtype_id != 3) { ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_name_en</label>
                        <div class="col-md-6 ">
                            <?php 
                                $com_name_en = is_object($company)?$company->com_name_en:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'com_name_en',
                                    'id'=>'com_name_en',
                                    'placeholder' => 'com_name_en' ,
                                    'value' => set_value('com_name_en')?set_value('com_name_en'):$com_name_en,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_name_th</label>
                        <div class="col-md-6 ">
                            <?php 
                                $com_name_th = is_object($company)?$company->com_name_th:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'com_name_th',
                                    'id'=>'com_name_th',
                                    'placeholder' => 'com_name_th' ,
                                    'value' => set_value('com_name_th')?set_value('com_name_th'):$com_name_th,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <? } ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_address_en</label>
                        <div class="col-md-9 ">
                            <?php 
                                $com_address_en = is_object($company)?$company->com_address_en:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'rows'=>2,
                                    'name' =>'com_address_en',
                                    'id'=>'com_address_en',
                                    'placeholder' => 'com_address_en' ,
                                    'value' => set_value('com_address_en')?set_value('com_address_en'):$com_address_en,
                                );
                                echo form_textarea($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_address_th</label>
                        <div class="col-md-9 ">
                            <?php 
                                $com_address_th = is_object($company)?$company->com_address_th:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'rows'=>2,
                                    'name' =>'com_address_th',
                                    'id'=>'com_address_th',
                                    'placeholder' => 'com_address_th' ,
                                    'value' => set_value('com_address_th')?set_value('com_address_th'):$com_address_th,
                                );
                                echo form_textarea($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_zipcode</label>
                        <div class="col-md-6 ">
                            <?php 
                                $com_zipcode = is_object($company)?$company->com_zipcode:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'com_zipcode',
                                    'id'=>'com_zipcode',
                                    'placeholder' => 'com_zipcode' ,
                                    'value' => set_value('com_zipcode')?set_value('com_zipcode'):$com_zipcode,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_phone</label>
                        <div class="col-md-6 ">
                            <?php 
                                $com_phone = is_object($company)?$company->com_phone:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'com_phone',
                                    'id'=>'com_phone',
                                    'placeholder' => 'com_phone' ,
                                    'value' => set_value('com_phone')?set_value('com_phone'):$com_phone,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_hotline</label>
                        <div class="col-md-6 ">
                            <?php 
                                $hotline = is_object($company)?$company->hotline:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'hotline',
                                    'id'=>'hotline',
                                    'placeholder' => 'hotline' ,
                                    'value' => set_value('hotline')?set_value('hotline'):$hotline,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_fax</label>
                        <div class="col-md-6 ">
                            <?php 
                                $com_fax = is_object($company)?$company->com_fax:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'com_fax',
                                    'id'=>'com_fax',
                                    'placeholder' => 'com_fax' ,
                                    'value' => set_value('com_fax')?set_value('com_fax'):$com_fax,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">com_email</label>
                        <div class="col-md-6 ">
                            <?php 
                                $com_email = is_object($company)?$company->com_email:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'com_email',
                                    'id'=>'com_email',
                                    'placeholder' => 'com_email' ,
                                    'value' => set_value('com_email')?set_value('com_email'):$com_email,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">url1</label>
                        <div class="col-md-6 ">
                            <?php 
                                $url1 = is_object($company)?$company->url1:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'rows'=>4,
                                    'name' =>'url1',
                                    'id'=>'url1',
                                    'placeholder' => 'url1' ,
                                    'value' => set_value('url1')?set_value('url1'):$url1,
                                );
                                echo form_textarea($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">url2</label>
                        <div class="col-md-6 ">
                            <?php 
                                $url2 = is_object($company)?$company->url2:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'rows'=>4,
                                    'name' =>'url2',
                                    'id'=>'url2',
                                    'placeholder' => 'url2' ,
                                    'value' => set_value('url2')?set_value('url2'):$url2,
                                );
                                echo form_textarea($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">latitude</label>
                        <div class="col-md-6 ">
                            <?php 
                                $latitude = is_object($company)?$company->latitude:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'latitude',
                                    'id'=>'latitude',
                                    'placeholder' => 'latitude' ,
                                    'value' => set_value('latitude')?set_value('latitude'):$latitude,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">longitude</label>
                        <div class="col-md-6 ">
                            <?php 
                                $longitude = is_object($company)?$company->longitude:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'longitude',
                                    'id'=>'longitude',
                                    'placeholder' => 'longitude' ,
                                    'value' => set_value('longitude')?set_value('longitude'):$longitude,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">facebook</label>
                        <div class="col-md-6 ">
                            <?php 
                                $facebook = is_object($company)?$company->facebook:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'facebook',
                                    'id'=>'facebook',
                                    'placeholder' => 'facebook' ,
                                    'value' => set_value('facebook')?set_value('facebook'):$facebook,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">facebook fanpage </label>
                        <div class="col-md-6 ">
                            <?php 
                                $facebook_fanpage = is_object($company)?$company->facebook_fanpage:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'facebook_fanpage',
                                    'id'=>'facebook_fanpage',
                                    'placeholder' => 'facebook fanpage' ,
                                    'value' => set_value('facebook_fanpage')?set_value('facebook_fanpage'):$facebook_fanpage,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">facebook id</label>
                        <div class="col-md-6 ">
                            <?php 
                                $facebookid = is_object($company)?$company->facebookid:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'facebookid',
                                    'id'=>'facebookid',
                                    'placeholder' => 'facebook id' ,
                                    'value' => set_value('facebookid')?set_value('facebookid'):$facebookid,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">Youtube Channel</label>
                        <div class="col-md-6 ">
                            <?php 
                                $youtube = is_object($company)?$company->youtube:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'youtube',
                                    'id'=>'youtube',
                                    'placeholder' => 'Youtube Channel' ,
                                    'value' => set_value('youtube')?set_value('youtube'):$youtube,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">twitter</label>
                        <div class="col-md-6 ">
                            <?php 
                                $twitter = is_object($company)?$company->twitter:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'twitter',
                                    'id'=>'twitter',
                                    'placeholder' => 'twitter' ,
                                    'value' => set_value('twitter')?set_value('twitter'):$twitter,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="">line_id</label>
                        <div class="col-md-6 ">
                            <?php 
                                $line_id = is_object($company)?$company->line_id:'';
                                $data = array(
                                    'class' =>'form-control' ,
                                    'name' =>'line_id',
                                    'id'=>'line_id',
                                    'placeholder' => 'line_id' ,
                                    'value' => set_value('line_id')?set_value('line_id'):$line_id,
                                );
                                echo form_input($data); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        </label>
                        <div class="col-md-6 ">
                            <input type="hidden" name="id" id="id" value="<?=$id ?>">
                            <?php 
                                $data = array(
                                'class' =>'btn btn-primary' ,
                                'name' =>'btn_send',
                                'id'=>'btn_send',
                                'value'=>'SAVE'
                                );
                                echo form_submit($data); 
                                ?>
                        </div>
                    </div>
                    <?php echo form_close(); ?> 
                </div>
            </div>
        </section>
    </div>
</section>