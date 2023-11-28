<section role="main" class="content-body">
  <header class="page-header">
    <h2>Welcome  <span style="color:yellow;"><?php echo $_SERVER['SERVER_NAME'] ?> </span> </h2>
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
  <!-- start: page -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
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
        <!-- /.box-header -->
        <div class="box-body">

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          DOMAIN <?=$method?> 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">



         <?php 
            $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' ,'onsubmit'=>'return sendForm()' , 'name'=>'frm' ,'target'=>'_blank' );  
            echo form_open_multipart("Company/$method/$id",$attributes); ?>
          <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <?php if ($_SESSION["sslevel"]>1) { ?>
                <li role="presentation" class="active" ><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Picture</a></li>
              <?php } ?>              
              <li role="presentation" class="<?=$_SESSION['sslevel']>1?'':'active'?>"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Detail</a></li>                        
                
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane <?=$_SESSION['sslevel']>1?'active':''?>" id="tab1">
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Icon</label>
                  <div class="col-md-6 ">
                    <?php           
                      $filepath = "../images/icon.png";
                      if(is_file($filepath)){
                        echo '<img src="'.base_url($filepath).'?'.rand().'">';
                         ?>
                    <br><a href="<?php echo base_url("Filemanage/delete") ?>?filepath=<?=$filepath;?>" onclick="return confirm('Delete ? ');" class="btn btn-danger btn-xs" target="_blank">delete</a>
                    <?
                      }
                      
                      //echo $filepath;   
                      $data = array(                 
                          'name' =>'icon',
                          'id'=>'icon',                 
                      );
                      echo form_upload($data)?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Logo แบบ แบบสี่เหลี่ยม</label>
                  <div class="col-md-6 ">
                    <?php           
                      $filepath = "../images/logo/logo.webp";
                      if(is_file($filepath)){
                        echo '<img src="'.base_url($filepath).'?'.rand().'">';
                         ?>
                    <br><a href="<?php echo base_url("Filemanage/delete") ?>?filepath=<?=$filepath;?>" onclick="return confirm('Delete ? ');" class="btn btn-danger btn-xs" target="_blank">delete</a>
                    <?
                      }
                      
                      //echo $filepath;   
                      $data = array(                 
                          'name' =>'logo',
                          'id'=>'logo',                 
                      );
                      echo form_upload($data)?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">Logo แบบยาว</label>
                  <div class="col-md-6 ">
                    <?php           
                      $filepath = "../images/logo/logo_long.webp";
                      if(is_file($filepath)){
                        echo '<img src="'.base_url($filepath).'?'.rand().'">';
                         ?>
                    <br><a href="<?php echo base_url("Filemanage/delete") ?>?filepath=<?=$filepath;?>" onclick="return confirm('Delete ? ');" class="btn btn-danger btn-xs" target="_blank">delete</a>
                    <?
                      }
                      
                      //echo $filepath;   
                      $data = array(                 
                          'name' =>'logo2',
                          'id'=>'logo2',                 
                      );
                      echo form_upload($data)?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">QR code</label>
                  <div class="col-md-6 ">
                    <?php           
                      $filepath = "../images/qrcode.png";
                      if(is_file($filepath)){
                        echo '<img src="'.base_url($filepath).'?'.rand().'">';
                         ?>
                    <br><a href="<?php echo base_url("Filemanage/delete") ?>?filepath=<?=$filepath;?>" onclick="return confirm('Delete ? ');" class="btn btn-danger btn-xs" target="_blank">delete</a>
                    <?
                      }
                      
                      //echo $filepath;   
                      $data = array(                 
                          'name' =>'qrcode',
                          'id'=>'qrcode',                 
                      );
                      echo form_upload($data)?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">Map</label>
                  <div class="col-md-6 ">
                    <?php           
                      $filepath = "../images/map/".$company->com_id.".jpg";
                      if(is_file($filepath)){
                        echo "<a href='".base_url($filepath)."?".rand()."' target='_blank'>";
                        echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:600px;">';
                        echo "</a>";
                         ?>
                    <br><a href="<?php echo base_url("Filemanage/delete") ?>?filepath=<?=$filepath;?>" onclick="return confirm('Delete ? ');" class="btn btn-danger btn-xs" target="_blank">delete</a>
                    <?
                      }
                      
                      //echo $filepath;   
                      $data = array(                 
                          'name' =>'map',
                          'id'=>'map',                 
                      );
                      echo form_upload($data)?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">Background</label>
                  <div class="col-md-6 ">
                    <?php           
                      $filepath = "../images/bg/".$company->com_id.".jpg";
                      if(is_file($filepath)){
                        echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:700px;">';
                        ?>
                    <br><a href="<?php echo base_url("Filemanage/delete") ?>?filepath=<?=$filepath;?>" onclick="return confirm('Delete ? ');" class="btn btn-danger btn-xs" target="_blank">delete</a>
                    <?
                      }
                      
                      //echo $filepath;   
                      $data = array(                 
                          'name' =>'bg',
                          'id'=>'bg',                 
                      );
                      echo form_upload($data)?>
                  </div>
                </div>

                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">Product-banner</label>
                  <div class="col-md-6 ">
                    <?php           
                      $filepath = "../images/product-banner.jpg";
                      if(is_file($filepath)){
                        echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:700px;">';
                        ?>
                    <br><a href="<?php echo base_url("Filemanage/delete") ?>?filepath=<?=$filepath;?>" onclick="return confirm('Delete ? ');" class="btn btn-danger btn-xs" target="_blank">delete</a>
                    <?
                      }
                      
                      //echo $filepath;   
                      $data = array(                 
                          'name' =>'productbanner',
                          'id'=>'productbanner',                 
                      );
                      echo form_upload($data)?>
                  </div>
                </div>

                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">background footer</label>
                  <div class="col-md-6 ">
                    <?php           
                      $filepath = "../images/bgfooter.png";
                      if(is_file($filepath)){
                        echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:700px;">';
                        ?>
                    <br><a href="<?php echo base_url("Filemanage/delete") ?>?filepath=<?=$filepath;?>" onclick="return confirm('Delete ? ');" class="btn btn-danger btn-xs" target="_blank">delete</a>
                    <?
                      }
                      
                      //echo $filepath;   
                      $data = array(                 
                          'name' =>'bgfooter',
                          'id'=>'bgfooter',                 
                      );
                      echo form_upload($data)?>
                  </div>
                </div>

              </div>
              <div role="tabpanel" class="tab-pane <?=$_SESSION['sslevel']>1?'':'active'?>" id="tab2">
                             
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">Staff Count</label>
                  <div class="col-md-6 ">
                    <?php 
                      $staff_count = is_object($company)?$company->staff_count:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'staff_count',
                          'id'=>'staff_count',
                          'placeholder' => 'Staff Count' ,
                          'value' => set_value('staff_count')?set_value('staff_count'):$staff_count,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                
                
                <div class="form-group " style="display: none;">
                  <label class="col-md-2 control-label" for="">จังหวัด</label>
                  <div class="col-md-6 ">
                    <?php 
                      $province_id = is_object($company)?$company->province_id:set_value('province_id');  
                      $data = array(
                        'class' =>'form-control' ,                 
                        'id'=>'province_id',
                      );
                      
                      echo form_dropdown('province_id', $provinces , $province_id ,$data);
                      
                      ?>
                  </div>
                </div>
                <div class="form-group " style="display: none;">
                  <label class="col-md-2 control-label" for="">อำเภอ</label>
                  <div class="col-md-6 ">
                    <?php 
                      $amphur_id = is_object($company)?$company->amphur_id:set_value('amphur_id');  
                      $data = array(
                        'class' =>'form-control' ,                 
                        'id'=>'amphur_id',
                      );
                      
                      echo form_dropdown('amphur_id',$amphurs , $amphur_id ,$data);
                      
                      ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">DOMAIN</label>
                  <div class="col-md-6 ">
                    <?php 
                      $com_website = is_object($company)?$company->com_website:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'com_website',
                          'id'=>'com_website',
                          'placeholder' => 'com_website' ,
                          'value' => set_value('com_website')?set_value('com_website'):$com_website,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group <?=$company->comtype_id==1?'hide':''?> ">
                  <label class="col-md-2 control-label" for="">Theme color</label>
                  <div class="col-md-6 ">
                    <?php 
                    $packageBG = is_object($company)?$company->packageBG:'';
                    $data = array(
                      'class' =>'form-control colorpicker' ,
                      'name' =>'packageBG',
                      'id'=>'packageBG',
                      'style'=>'background:'.$packageBG.'; color:white;',
                      'placeholder' => 'packageBG' ,
                      'autocomplete'=>'off',
                      'value' => set_value('packageBG')?set_value('packageBG'):$packageBG,
                    );
                    echo form_input($data); ?>
                  </div>
                </div>
                <div class="form-group <?=$company->comtype_id==1?'hide':''?> ">
                  <label class="col-md-2 control-label" for="">Theme color Hover</label>
                  <div class="col-md-6 ">
                    <?php 
                    $PackageBG_Hover = is_object($company)?$company->PackageBG_Hover:'';
                    $data = array(
                      'class' =>'form-control colorpicker' ,
                      'name' =>'PackageBG_Hover',
                      'id'=>'PackageBG_Hover',
                      'style'=>'background:'.$PackageBG_Hover.'; color:white;',
                      'placeholder' => 'PackageBG_Hover' ,
                      'autocomplete'=>'off',
                      'value' => set_value('PackageBG_Hover')?set_value('PackageBG_Hover'):$PackageBG_Hover,
                    );
                    echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group <?=$company->comtype_id==1?'hide':''?> ">
                  <label class="col-md-2 control-label" for="">Theme Font Color Header</label>
                  <div class="col-md-6 ">
                    <?php 
                    $package_text_color = is_object($company)?$company->package_text_color:'';
                    $data = array(
                      'class' =>'form-control colorpicker' ,
                      'name' =>'package_text_color',
                      'id'=>'package_text_color',
                      'style'=>'background:'.$package_text_color.'; color:white;',
                      'placeholder' => 'package_text_color' ,
                      'autocomplete'=>'off',
                      'value' => set_value('package_text_color')?set_value('package_text_color'):$package_text_color,
                    );
                    echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group <?=$company->comtype_id==1?'hide':''?> ">
                  <label class="col-md-2 control-label" for="">Theme Font Color Header Hover</label>
                  <div class="col-md-6 ">
                    <?php 
                    $category_color = is_object($company)?$company->category_color:'';
                    $data = array(
                      'class' =>'form-control colorpicker' ,
                      'name' =>'category_color',
                      'id'=>'category_color',
                      'style'=>'background:'.$category_color.'; color:white;',
                      'placeholder' => 'category_color' ,
                      'autocomplete'=>'off',
                      'value' => set_value('category_color')?set_value('category_color'):$category_color,
                    );
                    echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">com_phone</label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">com_phone</label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">com_hotline, <span style="color: red;">icon social</span></label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">com_fax</label>
                  <div class="col-md-6">
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">com_email</label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">url1</label>
                  <div class="col-md-6 ">
                    <?php 
                      $url1 = is_object($company)?$company->url1:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'url1',
                          'id'=>'url1',
                          'placeholder' => 'url1' ,
                          'value' => set_value('url1')?set_value('url1'):$url1,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">url2</label>
                  <div class="col-md-6 ">
                    <?php 
                      $url2 = is_object($company)?$company->url2:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'url2',
                          'id'=>'url2',
                          'placeholder' => 'url2' ,
                          'value' => set_value('url2')?set_value('url2'):$url2,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">Ebook Store</label>
                  <div class="col-md-6 ">
                    <?php 
                      $ebookstore = is_object($company)?$company->ebookstore:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'ebookstore',
                          'id'=>'ebookstore',
                          'placeholder' => 'http://www.ebookstore.in.th' ,
                          'value' => set_value('ebookstore')?set_value('ebookstore'):$ebookstore,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">expire</label>
                  <div class="col-md-6 ">
                    <?php 
                      $expire = is_object($company)?$company->expire:'';
                      $data = array(
                          'class' =>'form-control datepicker' ,
                          'name' =>'expire',
                          'id'=>'expire',
                          'placeholder' => 'expire' ,
                          'data-date-format'=>'yyyy-mm-dd',
                          'value' => set_value('expire')?set_value('expire'):$expire,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">latitude</label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">longitude</label>
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

                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">location, <span style="color: red;">icon social</span></label>
                  <div class="col-md-6 ">
                    <?php 
                      $location = is_object($company)?$company->location:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'location',
                          'id'=>'location',
                          'placeholder' => 'location' ,
                          'value' => set_value('location')?set_value('location'):$location,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">instargram, <span style="color: red;">icon social</span></label>
                  <div class="col-md-6 ">
                    <?php 
                      $instargram = is_object($company)?$company->instargram:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'instargram',
                          'id'=>'instargram',
                          'placeholder' => 'instargram' ,
                          'value' => set_value('instargram')?set_value('instargram'):$instargram,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">facebook_messenger, <span style="color: red;">icon social</span></label>
                  <div class="col-md-6 ">
                    <?php 
                      $facebook_messenger = is_object($company)?$company->facebook_messenger:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'facebook_messenger',
                          'id'=>'facebook_messenger',
                          'placeholder' => 'facebook_messenger' ,
                          'value' => set_value('facebook_messenger')?set_value('facebook_messenger'):$facebook_messenger,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">facebook, <span style="color: red;">icon social</span></label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">facebook fanpage</label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">facebook id</label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">youtube, <span style="color: red;">icon social</span></label>
                  <div class="col-md-6 ">
                    <?php 
                      $youtube = is_object($company)?$company->youtube:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'youtube',
                          'id'=>'youtube',
                          'placeholder' => 'youtube' ,
                          'value' => set_value('youtube')?set_value('youtube'):$youtube,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">twitter, <span style="color: red;">icon social</span></label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">line_id, <span style="color: red;">icon social</span></label>
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
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">Product Limit</label>
                  <div class="col-md-6 ">
                    <?php 
                      $packageProductLimit = is_object($company)?$company->packageProductLimit:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'packageProductLimit',
                          'id'=>'packageProductLimit',
                          'placeholder' => 'packageProductLimit' ,
                          'value' => set_value('packageProductLimit')?set_value('packageProductLimit'):$packageProductLimit,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                
                <div class="form-group" style="display: none;">
                  <label class="col-md-2 control-label" for="">Google Analytics</label>
                  <div class="col-md-6 ">
                    <?php 
                      $google_anlytic = is_object($company)?$company->google_anlytic:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'google_anlytic',
                          'id'=>'google_anlytic',
                          'placeholder' => 'google_anlytic' ,
                          'value' => set_value('google_anlytic')?set_value('google_anlytic'):$google_anlytic,
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="form-group" style="margin-top: 20px;">
            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">
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
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">DOMAIN Language </a>
        &nbsp; 
         <a href="#" onclick="$('#language').show();$('#country_id').focus();" class="btn  btn-sm btn-success">Add language</a>
         Filter Language : <?php    
              $data = array(
                'class' =>'form-control' ,                 
                'id'=>'countryfillter',
                'style'=>'width:300px;display:inline;',
                'onchange'=>'filtercountry()'
              );
              
              echo form_dropdown('countryfillter',$countrys , 0 ,$data);
              
            ?>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">   

       <!-- Modal Language -->
    <!-- Modal -->
<?php 
$attributes = array('id' =>'frmlanguage' , 'class'=>'form-horizontal' , 'name'=>'frmlanguage' ,'target'=>'_blank' );  
echo form_open_multipart("#",$attributes); ?>

      <div id="language" style="display: none;">
        
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Language</label>
                  <div class="col-md-10 ">
                     <?php    
                      $data = array(
                        'class' =>'form-control' ,                 
                        'id'=>'country_id',                                          
                      );
                      
                      echo form_dropdown('country_id',$countrys , 0 ,$data);
                      
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">meta_title</label>
                  <div class="col-md-10 ">
                    <?php                      
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_title',
                          'id'=>'meta_title',
                          'placeholder' => 'meta_title' ,
                          'value' => set_value('meta_title')?set_value('meta_title'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">meta_keyword</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_keyword',
                          'id'=>'meta_keyword',
                          'placeholder' => 'meta_keyword' ,
                          'value' => set_value('meta_keyword')?set_value('meta_keyword'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">meta_description</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_description',
                          'id'=>'meta_description',
                          'placeholder' => 'meta_description' ,
                          'value' => set_value('meta_description')?set_value('meta_description'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>                
               
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">com_name</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'com_name',
                          'id'=>'com_name',
                          'placeholder' => 'com_name' ,
                          'value' => set_value('com_name')?set_value('com_name'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">com_address</label>
                  <div class="col-md-10 ">
                    <?php 
                    
                      $data = array(
                          'class' =>'form-control' ,
                          'rows'=>2,
                          'name' =>'com_address',
                          'id'=>'com_address',
                          'placeholder' => 'com_address' ,
                          'value' => set_value('com_address')?set_value('com_address'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">com_desc_short</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'com_desc_short',
                          'id'=>'com_desc_short',
                          'placeholder' => 'com_desc_short' ,
                          'value' => set_value('com_desc_short')?set_value('com_desc_short'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">com_desc</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'com_desc',
                          'id'=>'com_desc',
                          'placeholder' => 'com_desc' ,
                          'value' => set_value('com_desc')?set_value('com_desc'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for=""></label>
                  <div class="col-md-10 ">
                    <input type="hidden" id="company_language_id" name="company_language_id" value="">        
                    <input type="hidden" id="languagemethod" name="languagemethod" value="add">
                    <button type="button" onclick="savelanguage()" class="btn btn-primary" >Save changes</button>
                    <button type="button" onclick="window.location.reload();" class="btn  btn-sm btn-warning" >Close</button>
                  </div>
                </div>
               
                
      </div>
   
    <!-- end Modal Language -->
    <?php echo form_close(); ?> 

         
          <?php foreach ($languages as $language) { 
             
            if(sizeof($language->company_languages) >0 ){
           
              foreach ($language->company_languages as $cl) {
            ?>
           <div class="table-responsive countryall country<?=$language->country_id ?>">
                  <table class="table table-striped">
                    <tr>
                      <th colspan="2"> <h2>Language <?=$language->short_name ?></h2>
                        <a href="javascript:editlanguage('<?=$cl->company_language_id ?>')" class="btn btn-warning">Edit language</a>
                        <a href="javascript:deletelanguage('<?=$cl->company_language_id ?>')" class="btn btn-danger">Delete language</a>
                      </th>
                    </tr>
                    <tr>
                      <td>Meta Domain Title</td>
                      <td><?=$cl->meta_title ?></td>
                    </tr>
                    <tr>
                      <td>Meta Domain Keyword</td>
                      <td><?=$cl->meta_keyword ?></td>
                    </tr>
                    <tr>
                      <td>Meta Domain Description</td>
                      <td><?=$cl->meta_description ?></td>
                    </tr>
                    <tr style="display: none;">
                      <td>Company name</td>
                      <td><?=$cl->com_name ?></td>
                    </tr> 
                    <tr style="display: none;">
                      <td>Company description short</td>
                      <td><?=$cl->com_desc_short ?></td>
                    </tr> 
                    <tr style="display: none;">
                      <td>Company description</td>
                      <td><?=$cl->com_desc ?></td>
                    </tr> 
                    <tr style="display: none;">
                      <td>Address</td>
                      <td><?=$cl->com_address ?></td>
                    </tr> 
                    <tr>
                      <td>cby / cdate</td>
                      <td><?=$cl->cby ?> / <?=$cl->cdate ?></td>
                    </tr>    
                    <tr>
                      <td>uby / udate</td>
                      <td><?=$cl->uby ?> / <?=$cl->udate ?></td>
                    </tr>                   

                  </table>
          </div>
          <?php }}} ?>

      </div>
    </div>
  </div>  
</div>

         
        </div>
      </div>
    </section>
    <!-- /.content -->

   

  </div>
  <!-- end: page -->
</section>
<script type="text/javascript">
  
  function editlanguage(id) {
      $('#languagemethod').val('edit');
      $.getJSON( "<?=base_url("Company/getLanguageJson/")?>"+id, function( data ) {       
        $('#country_id').val(data.country_id);
        $('#meta_title').val(data.meta_title);
        $('#meta_keyword').val(data.meta_keyword);
        $('#meta_description').val(data.meta_description);
        $('#com_name').val(data.com_name);
        $('#com_address').val(data.com_address);       
        $('#company_language_id').val(id);       
        CKEDITOR.instances.com_desc_short.setData(data.com_desc_short);
        CKEDITOR.instances.com_desc.setData(data.com_desc);
        $('#language').show();
        $('#country_id').focus();
      });
  }
  function deletelanguage(id) {
    if(confirm('Delete this language?')){
      $.get('<?=base_url("Company/deletelanguage/")?>' + id,function (data) {        
        window.location.reload();
      });
    }
  }

  function savelanguage() {
    if($('#country_id').val()==0){
        alert('please select language');
        $('#country_id').focus();
        return false;
    }
    var com_desc_short = encodeURIComponent(CKEDITOR.instances.com_desc_short.getData());
    var com_desc = encodeURIComponent(CKEDITOR.instances.com_desc.getData());
    var frm = $('#frmlanguage').serialize();
    frm = frm +'&com_desc='+com_desc+'&com_desc_short='+com_desc_short;
    

    $.post('<?=base_url("Company/savelanguage")?>',frm,function(data) {
      if(data.indexOf('save complete')>-1){
        alert(data);
        window.location.reload();
      }

    });
  }
  function filtercountry() {
    var cid = $('#countryfillter').val();
    if(cid > 0)
    {
      $('.countryall').hide();
      $('.country' + cid).show();
    }
    else
    {
      $('.countryall').show();
    }
    

  }

  function showfooter(obj) {     
     if($(obj).val()==1){

      $('.img-footer').attr('src','<?=base_url("assets/footer1.jpg")?>');
     }
     if($(obj).val()==2){
      $('.img-footer').attr('src','<?=base_url("assets/footer2.jpg")?>');
     }
  }

  function showheader(obj) {     
     if($(obj).val()==1){
      $('.img-header').attr('src','<?=base_url("assets/header1.jpg")?>');
     }
     if($(obj).val()==2){
      $('.img-header').attr('src','<?=base_url("assets/header2.jpg")?>');
     }
     if($(obj).val()==3){
      $('.img-header').attr('src','<?=base_url("assets/header3.jpg")?>');
     }
     if($(obj).val()==4){
      $('.img-header').attr('src','<?=base_url("assets/header4.jpg")?>');
     }
  }
</script>