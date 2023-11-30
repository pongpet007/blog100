<section role="main" class="content-body">
	<header class="page-header">
		
	
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
  <section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Brand <?=$method?></h2>
		</header>
		<div class="panel-body">
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

    <?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
      echo form_open_multipart("Brand/$method/$brand_id",$attributes); ?>
          
         <div class="form-group">
            <label class="col-md-2 control-label" for="">Logo (165 x 55)</label>
              <div class="col-md-10 ">
              <?php 

              $brand_id = is_object($brand)?$brand->brand_id:'';

              $filepath = "../images/brand/". $brand_id .'.jpg';

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';                
              }

              $data = array(                 
                  'name' =>'picture',
                  'id'=>'picture',                
              );
              echo form_upload($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Brand name EN</label>
              <div class="col-md-10">
              <?php 
              $name_en = is_object($brand)?$brand->name_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'name_en',
                  'id'=>'name_en',
                  'placeholder' => 'Brand name EN' ,
                  'value' => set_value('name_en')?set_value('name_en'):$name_en,
              );
              echo form_input($data); ?>
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-2 control-label" for="">Brand name TH</label>
              <div class="col-md-10">
              <?php 
              $name_th = is_object($brand)?$brand->name_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'name_th',
                  'id'=>'name_th',
                  'placeholder' => 'Brand name TH' ,
                  'value' => set_value('name_th')?set_value('name_th'):$name_th,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Brand Title EN</label>
              <div class="col-md-10">
              <?php 
              $title_en = is_object($brand)?$brand->title_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title_en',
                  'id'=>'title_en',
                  'placeholder' => 'Brand Title TH' ,
                  'value' => set_value('title_en')?set_value('title_en'):$title_en,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Brand Title TH</label>
              <div class="col-md-10">
              <?php 
              $title_th = is_object($brand)?$brand->title_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title_th',
                  'id'=>'title_th',
                  'placeholder' => 'Brand Title TH' ,
                  'value' => set_value('title_th')?set_value('title_th'):$title_th,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Detail EN</label>
              <div class="col-md-10 ">
              <?php 
              $desc_en = is_object($brand)?$brand->desc_en:'';
              $data = array(
                  'class' =>'form-control ckeditor' ,                  
                  'name' =>'desc_en',
                  'id'=>'desc_en',
                  'placeholder' => 'desc_en' ,
                  'value' => set_value('desc_en')?set_value('desc_en'):$desc_en,
              );
              echo form_textarea($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Detail TH</label>
              <div class="col-md-10 ">
              <?php 
              $desc_th = is_object($brand)?$brand->desc_th:'';
              $data = array(
                  'class' =>'form-control ckeditor' ,                  
                  'name' =>'desc_th',
                  'id'=>'desc_th',
                  'placeholder' => 'desc_th' ,
                  'value' => set_value('desc_th')?set_value('desc_th'):$desc_th,
              );
              echo form_textarea($data); ?>
              </div>
          </div>
           <div class="form-group">
            <label class="col-md-2 control-label" for="">Brand Type</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $brand_type_id = is_object($brand)?$brand->brand_type_id:set_value('brand_type_id');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'brand_type_id',
                );

                $options = array(1=>'Company',2=> 'Product');
                echo form_dropdown('brand_type_id', $options , $brand_type_id ,$data);
                ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($brand)?$brand->is_active:set_value('is_active');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'is_active',
                );

                $options = array(1=>'Yes',2=> 'No');
                echo form_dropdown('is_active', $options , $is_active ,$data);
                ?>
              </div>
          </div>
        

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">             
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
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>