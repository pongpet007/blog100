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

	<section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title"> Brandexdirectory.com</h2>
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
      echo form_open_multipart("Home/index/",$attributes); ?>
      	<div class="form-group hide">
            <label class="col-md-2 control-label" for="">Aboutus EN</label>
              <div class="col-md-10">
              <?php 
                $aboutus_en = is_object($config)?$config->aboutus_en:set_value('aboutus_en');    
                
                $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'aboutus_en',
                  'id'=>'aboutus_en',
                  'placeholder' => 'aboutus_en' ,
                  'value' => set_value('aboutus_en')?set_value('aboutus_en'):$aboutus_en,
                );
              
              echo form_textarea($data); 

              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Aboutus TH</label>
              <div class="col-md-10">
              <?php 
               $aboutus_th = is_object($config)?$config->aboutus_th:set_value('aboutus_th');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'aboutus_th',
                  'id'=>'aboutus_th',
                  'placeholder' => 'aboutus_th' ,
                  'value' => set_value('aboutus_th')?set_value('aboutus_th'):$aboutus_th,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Request TH</label>
              <div class="col-md-10">
              <?php 
               $request_th = is_object($config)?$config->request_th:set_value('request_th');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'request_th',
                  'id'=>'request_th',
                  'placeholder' => 'request_th' ,
                  'value' => set_value('request_th')?set_value('request_th'):$request_th,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Request EN</label>
              <div class="col-md-10">
              <?php 
               $request_en = is_object($config)?$config->request_en:set_value('request_en');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'request_en',
                  'id'=>'request_en',
                  'placeholder' => 'request_en' ,
                  'value' => set_value('request_en')?set_value('request_en'):$request_en,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">QA EN</label>
              <div class="col-md-10">
              <?php 
               $qa_en = is_object($config)?$config->qa_en:set_value('qa_en');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'qa_en',
                  'id'=>'qa_en',
                  'placeholder' => 'qa_en' ,
                  'value' => set_value('qa_en')?set_value('qa_en'):$qa_en,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">QA TH</label>
              <div class="col-md-10">
              <?php 
               $qa_th = is_object($config)?$config->qa_th:set_value('qa_th');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'qa_th',
                  'id'=>'qa_th',
                  'placeholder' => 'qa_th' ,
                  'value' => set_value('qa_th')?set_value('qa_th'):$qa_th,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Web Theme EN</label>
              <div class="col-md-10">
              <?php 
               $webtheme_en = is_object($config)?$config->webtheme_en:set_value('webtheme_en');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'webtheme_en',
                  'id'=>'webtheme_en',
                  'placeholder' => 'webtheme_en' ,
                  'value' => set_value('webtheme_en')?set_value('webtheme_en'):$webtheme_en,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Web Theme TH</label>
              <div class="col-md-10">
              <?php 
               $webtheme_th = is_object($config)?$config->webtheme_th:set_value('webtheme_th');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'webtheme_th',
                  'id'=>'webtheme_th',
                  'placeholder' => 'webtheme_th' ,
                  'value' => set_value('webtheme_th')?set_value('webtheme_th'):$webtheme_th,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">AR EN</label>
              <div class="col-md-10">
              <?php 
               $ar_en = is_object($config)?$config->ar_en:set_value('ar_en');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'ar_en',
                  'id'=>'ar_en',
                  'placeholder' => 'ar_en' ,
                  'value' => set_value('ar_en')?set_value('ar_en'):$ar_en,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">AR TH</label>
              <div class="col-md-10">
              <?php 
               $ar_th = is_object($config)?$config->ar_th:set_value('ar_th');     
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'ar_th',
                  'id'=>'ar_th',
                  'placeholder' => 'ar_th' ,
                  'value' => set_value('ar_th')?set_value('ar_th'):$ar_th,
              );
              echo form_textarea($data); 
              ?>                            
              </div>
          </div>

          <div class="form-group hide">
	        <label class="control-label col-md-2 " for="first-name">
	        </label>

	        <div class="col-md-10">
	        
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

	<!-- start: page -->
	
	<!-- end: page -->
</section>