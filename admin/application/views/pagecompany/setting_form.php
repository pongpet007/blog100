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
        <div class="box-header">
          <h3> Setting </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php 
          $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' ,'onsubmit'=>'return sendForm()' , 'name'=>'frm','target'=>'_blank'  );  
          echo form_open_multipart("Setting/$method/$id",$attributes); ?>
          <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

              <li role="presentation" class="active"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Theme</a></li>
              <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Header & Footer</a></li>


            </ul>
            <!-- Tab panes -->
            <div class="tab-content">             

              <div role="tabpanel" class="tab-pane active" id="tab5">
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">PDPA On <span style="color: red;">**</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 
                    $is_pdpa = is_object($company)?$company->is_pdpa:set_value('is_pdpa');  
                    $data = array(
                      'class' =>'form-control' ,                 
                      'id'=>'is_pdpa',
                    );

                    $options = array(1=>'show',2=> 'none show');
                    echo form_dropdown('is_pdpa', $options , $is_pdpa ,$data);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Theme<label style="color: red"> *</label></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 
                    $theme_id = is_object($company)?$company->theme_id:set_value('theme_id');  

                    $data = array(
                      'class' =>'form-control' ,                 
                      'id'=>'theme_id',
                    );

                    echo form_dropdown('theme_id', $themes , $theme_id ,$data);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Index Product Limit</label>
                  <div class="col-md-6 ">
                    <?php 
                    $display_index_product_limit = is_object($company)?$company->display_index_product_limit:'';
                    $data = array(
                      'class' =>'form-control' ,
                      'name' =>'display_index_product_limit',
                      'id'=>'display_index_product_limit',
                      'placeholder' => 'display_index_product_limit' ,
                      'value' => set_value('display_index_product_limit')?set_value('display_index_product_limit'):$display_index_product_limit,
                    );
                    echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Display Product Limit</label>
                  <div class="col-md-6 ">
                    <?php 
                    $display_product_limit = is_object($company)?$company->display_product_limit:'';
                    $data = array(
                      'class' =>'form-control' ,
                      'name' =>'display_product_limit',
                      'id'=>'display_product_limit',
                      'placeholder' => 'display_product_limit' ,
                      'value' => set_value('display_product_limit')?set_value('display_product_limit'):$display_product_limit,
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
                  <label class="col-md-2 control-label" for="">Theme link color</label>
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
                  <label class="col-md-2 control-label" for="">Theme Category color</label>
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
                <div class="form-group <?=$company->comtype_id==1?'hide':''?> ">
                  <label class="col-md-2 control-label" for="">Theme button color</label>
                  <div class="col-md-6 ">
                    <?php 
                    $button_color = is_object($company)?$company->button_color:'';
                    $data = array(
                      'class' =>'form-control colorpicker' ,
                      'name' =>'button_color',
                      'id'=>'button_color',
                      'style'=>'background:'.$button_color.'; color:white;',
                      'placeholder' => 'button_color' ,
                      'autocomplete'=>'off',
                      'value' => set_value('button_color')?set_value('button_color'):$button_color,
                    );
                    echo form_input($data); ?>
                  </div>
                </div>
                <div class="form-group <?=$company->comtype_id==1?'hide':''?> ">
                  <label class="col-md-2 control-label" for="">Theme link color : Hover</label>
                  <div class="col-md-6 ">
                    <?php 
                    $link_color_hover = is_object($company)?$company->link_color_hover:'';
                    $data = array(
                      'class' =>'form-control colorpicker' ,
                      'name' =>'link_color_hover',
                      'id'=>'link_color_hover',
                      'style'=>'background:'.$link_color_hover.'; color:white;',
                      'placeholder' => 'link_color_hover' ,
                      'autocomplete'=>'off',
                      'value' => set_value('link_color_hover')?set_value('link_color_hover'):$link_color_hover,
                    );
                    echo form_input($data); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Theme Show Catagory <label style="color: red"> *</label></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 
                    $cat_type = is_object($company)?$company->cat_type:set_value('cat_type');  
                    $data = array(
                      'class' =>'form-control' ,                 
                      'id'=>'cat_type',
                    );

                    $options = array(1=>'show',2=> 'none show');
                    echo form_dropdown('cat_type', $options , $cat_type ,$data);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">CSS Theme<label style="color: red"> *</label></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 
                    $css = is_object($company)?$company->css:'';
                    $data = array(
                      'class' =>'form-control' ,
                      'rows'=>20,
                      'name' =>'css',
                      'id'=>'css',
                      'placeholder' => 'CSS THEME' ,
                      'style' => 'font-family:monospace',
                      'value' => set_value('css')?set_value('css'):$css,
                    );
                    echo form_textarea($data); 
                    ?>
                  </div>
                </div>


              </div> <!-- end tab -->
              <div role="tabpanel" class="tab-pane " id="tab6">

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Header<label style="color: red"> *</label></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 
                    $header_id = is_object($company)?$company->header_id:set_value('header_id');  

                    $data = array(
                      'class' =>'form-control' ,                 
                      'id'=>'header_id',
                      'onchange'=>'showheader(this)'
                    );
                    $options = array('-- Select Header --','Header 1','Header 2','Header 3');

                    echo form_dropdown('header_id', $options , $header_id ,$data);
                    $filename = "";
                    if($header_id >0){
                      $filename = "header{$header_id}.jpg";
                    }
                    ?>
                  </div>
                </div>

                <div class="form-group header_detail">
                  <div class="row">
                    <label class="col-md-2 control-label" for="">Header<label style="color: red"> *</label></label>
                    <div class="col-md-6">
                      <div class="img">
                        <img src="<?=base_url("assets/$filename")?>" class="img-header img-responsive">
                      </div>                            
                    </div>
                  </div>
                </div>
                <?php 
                $json = json_decode($company->header_footer_json);
                ?>
                <div class="option" style="margin-top: 20px; margin-bottom: 20px;">
                  <div class="row">
                    <label class="col-md-2 control-label" for="">Background header top </label>
                    <div class="col-md-2 ">
                      <?php 


                      $header_top_bg_color = isset($json->header_top_bg_color)?$json->header_top_bg_color:'';
                      $data = array(
                        'class' =>'form-control colorpicker' ,
                        'name' =>'header_top_bg_color',
                        'id'=>'header_top_bg_color',        
                        'placeholder' => 'header_top_bg_color' ,
                        'autocomplete'=>'off',
                        'value' => set_value('header_top_bg_color')?set_value('header_top_bg_color'):$header_top_bg_color,
                      );
                      echo form_input($data); ?>
                    </div>
                    <div class="col-md-2" ><div style="background-color: <?=$header_top_bg_color ?>; height: 35px; padding: 5px;"></div></div>
                  </div>

                  <div class="row">
                    <label class="col-md-2 control-label" for="">Background header middle </label>
                    <div class="col-md-2 ">
                      <?php 


                      $header_middle_bg_color = isset($json->header_middle_bg_color)?$json->header_middle_bg_color:'';
                      $data = array(
                        'class' =>'form-control colorpicker' ,
                        'name' =>'header_middle_bg_color',
                        'id'=>'header_middle_bg_color',        
                        'placeholder' => 'header_middle_bg_color' ,
                        'autocomplete'=>'off',
                        'value' => set_value('header_middle_bg_color')?set_value('header_middle_bg_color'):$header_middle_bg_color,
                      );
                      echo form_input($data); ?>
                    </div>
                    <div class="col-md-2" ><div style="background-color: <?=$header_middle_bg_color ?>; height: 35px; padding: 5px;"></div></div>
                  </div>

                  <div class="row">
                    <label class="col-md-2 control-label" for="">Background header bottom </label>
                    <div class="col-md-2 ">
                      <?php 


                      $header_bottom_bg_color = isset($json->header_bottom_bg_color)?$json->header_bottom_bg_color:'#c54f4f';
                      $data = array(
                        'class' =>'form-control colorpicker' ,
                        'name' =>'header_bottom_bg_color',
                        'id'=>'header_bottom_bg_color',        
                        'placeholder' => 'header_bottom_bg_color' ,
                        'autocomplete'=>'off',
                        'value' => set_value('header_bottom_bg_color')?set_value('header_bottom_bg_color'):$header_bottom_bg_color,
                      );
                      echo form_input($data); ?>
                    </div>
                    <div class="col-md-2"><div style="background-color: <?=$header_bottom_bg_color ?>; height: 35px; padding: 5px;"></div></div>
                  </div>

                  <div class="row">
                    <label class="col-md-2 control-label" for="">Search Box</label>
                    <div class="col-md-2 ">

                      <?php 
                      $searchbox = isset($json->searchbox)?$json->searchbox:'1';  

                      $data = array(
                        'class' =>'form-control' ,                 
                        'id'=>'searchbox',
                      );
                      $options = array('-- Select Header --','สี่เหลี่ยม','โค้งมน');

                      echo form_dropdown('searchbox', $options , $searchbox ,$data);
                      ?>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Footer<label style="color: red"> *</label></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 
                    $footer_id = is_object($company)?$company->footer_id:set_value('footer_id');  

                    $data = array(
                      'class' =>'form-control' ,                 
                      'id'=>'footer_id',
                      'onchange'=>'showfooter(this)'
                    );
                    $options = array('-- Select Footer --','Footer 1','Footer 2');

                    echo form_dropdown('footer_id', $options , $footer_id ,$data);

                    $filename = "";
                    if($footer_id>0){
                      $filename = "footer{$footer_id}.jpg";
                    }

                    ?>


                  </div>
                </div>


                <div class="form-group header_detail">
                  <div class="row">
                    <label class="col-md-2 control-label" for=""></label>
                    <div class="col-md-6">
                      <div class="img" style="text-align: center;">
                        <img class="img-footer img-responsive" src="<?=base_url("assets/$filename")?>" >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="option" style="margin-top: 20px; margin-bottom: 20px;">

                  <div class="row">
                    <label class="col-md-2 control-label" for="">Background type</label>
                    <div class="col-md-3 "> 
                      <?php 
                      $footer_type = isset($json->footer_type)?$json->footer_type:'0';  

                      $data = array(
                        'class' =>'form-control' ,                 
                        'id'=>'footer_type',
                        'onchange'=>'showfootertype(this)'
                      );
                      $options = array('-- Footer Background type --','picture','color');        
                      echo form_dropdown('footer_type', $options , $footer_type ,$data);
                      ?>
                    </div>
                  </div>

                  <div class="row ft footerpicture " <?=($footer_type==2 or $footer_type==0)?' style="display:none" ':''?> >
                    <label class="col-md-2 control-label" for="">Background picture</label>
                    <div class="col-md-6 ">
                      <?php           
                      $filepath = "../images/bgfooter.png";
                      if(is_file($filepath)){
                        echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive">';
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


                  <div class="row ft footercolor  " <?=($footer_type==1  or $footer_type==0 )?' style="display:none" ':''?>>
                    <label class="col-md-2 control-label" for="">Background footer top </label>
                    <div class="col-md-2 ">
                      <?php 

                      $footer_top_bg_color = isset($json->footer_top_bg_color)?$json->footer_top_bg_color:'';
                      $data = array(
                        'class' =>'form-control colorpicker' ,
                        'name' =>'footer_top_bg_color',
                        'id'=>'footer_top_bg_color',        
                        'placeholder' => 'footer_top_bg_color' ,
                        'autocomplete'=>'off',
                        'value' => set_value('footer_top_bg_color')?set_value('footer_top_bg_color'):$footer_top_bg_color,
                      );
                      echo form_input($data); ?>
                    </div>
                    <div class="col-md-2" ><div style="background-color: <?=$footer_top_bg_color ?>; height: 35px; padding: 5px;"></div></div>
                  </div>

                  <div class="row">
                    <label class="col-md-2 control-label" for="">Background footer bottom </label>
                    <div class="col-md-2 ">
                      <?php 


                      $footer_bottom_bg_color = isset($json->footer_bottom_bg_color)?$json->footer_bottom_bg_color:'#c54f4f';
                      $data = array(
                        'class' =>'form-control colorpicker' ,
                        'name' =>'footer_bottom_bg_color',
                        'id'=>'footer_bottom_bg_color',        
                        'placeholder' => 'footer_bottom_bg_color' ,
                        'autocomplete'=>'off',
                        'value' => set_value('footer_bottom_bg_color')?set_value('footer_bottom_bg_color'):$footer_bottom_bg_color,
                      );
                      echo form_input($data); ?>
                    </div>
                    <div class="col-md-2"><div style="background-color: <?=$footer_bottom_bg_color ?>; height: 35px; padding: 5px;"></div></div>
                  </div>




                </div>




              </div> <!-- end tab -->

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
    </section>
    <!-- /.content -->
  </div>
  <!-- end: page -->
</section>
<script type="text/javascript">
  function showfooter(obj) {     
   if($(obj).val()==1){

    $('.img-footer').attr('src','<?=base_url("assets/footer1.jpg")?>');
  }
  if($(obj).val()==2){
    $('.img-footer').attr('src','<?=base_url("assets/footer2.jpg")?>');
  }
}

function showfootertype(obj) {
  $('.ft').hide();
  if($(obj).val()==1){
    $('.footerpicture').show();
  }
  if($(obj).val()==2){
   $('.footercolor').show();
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