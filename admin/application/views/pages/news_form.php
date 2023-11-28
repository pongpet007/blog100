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
	        <h2 class="panel-title">News <?=$method?></h2>
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
      echo form_open_multipart("News/$method/$news_id",$attributes); ?>
        <div class="form-group">
            <label class="col-md-2 control-label" for="">News type</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $news_type_id = is_object($news)?$news->news_type_id:set_value('news_type_id');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'news_type_id',
                );

                $options = array(1=>'Yes',2=> 'No');
                echo form_dropdown('news_type_id', $news_types , $news_type_id ,$data);
                ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Date From</label>
              <div class="col-md-3">
              <?php 
              $news_from = is_object($news)?$news->news_from:'';
              $data = array(
                  'class' =>'form-control datepicker' ,
                  'name' =>'news_from',
                  'id'=>'news_from',
                  'placeholder' => 'From' ,
                  'autocomplete'=>'off',
                  'value' => set_value('news_from')?set_value('news_from'):$news_from,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Date To</label>
              <div class="col-md-3">
              <?php 
              $news_to = is_object($news)?$news->news_to:'';
              $data = array(
                  'class' =>'form-control datepicker' ,
                  'name' =>'news_to',
                  'id'=>'news_to',
                  'placeholder' => 'To' ,
                  'autocomplete'=>'off',
                  'value' => set_value('news_to')?set_value('news_to'):$news_to,
              );
              echo form_input($data); ?>
              </div>
          </div>

          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Open URL</label>
              <div class="col-md-10">
              <?php 
              $news_url = is_object($news)?$news->news_url:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'news_url',
                  'id'=>'news_url',
                  'placeholder' => 'URL' ,
                  'value' => set_value('news_url')?set_value('news_url'):$news_url,
              );
              echo form_input($data); ?>
              </div>
          </div>

         <div class="form-group">
            <label class="col-md-2 control-label" for="">Picture small </label>
              <div class="col-md-10 ">
              <?php 

              $news_id = is_object($news)?$news->news_id:'';

              $filepath = "../images/news/news". $news_id .'_title.jpg';

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

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Picture Large </label>
              <div class="col-md-10 ">
              <?php 

              $news_id = is_object($news)?$news->news_id:'';

               $filepath = "../images/news/news". $news_id .'_1.jpg';

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';                
              }

              $data = array(                 
                  'name' =>'picture2',
                  'id'=>'picture2',                
              );
              echo form_upload($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Title EN</label>
              <div class="col-md-10">
              <?php 
              $news_title = is_object($news)?$news->news_title:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'news_title',
                  'id'=>'news_title',
                  'placeholder' => 'EN' ,
                  'value' => set_value('news_title')?set_value('news_title'):$news_title,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Title TH</label>
              <div class="col-md-10">
              <?php 
              $news_title_th = is_object($news)?$news->news_title_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'news_title_th',
                  'id'=>'news_title_th',
                  'placeholder' => 'TH' ,
                  'value' => set_value('news_title_th')?set_value('news_title_th'):$news_title_th,
              );
              echo form_input($data); ?>
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-2 control-label" for="">news_desc</label>
              <div class="col-md-10 ">
              <?php 
              $news_desc = is_object($news)?$news->news_desc:'';
              $data = array(
                  'class' =>'form-control ckeditor' ,                  
                  'name' =>'news_desc',
                  'id'=>'news_desc',
                  'placeholder' => 'news_desc' ,
                  'value' => set_value('news_desc')?set_value('news_desc'):$news_desc,
              );
              echo form_textarea($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">news_desc_th</label>
              <div class="col-md-10 ">
              <?php 
              $news_desc_th = is_object($news)?$news->news_desc_th:'';
              $data = array(
                  'class' =>'form-control ckeditor' ,                  
                  'name' =>'news_desc_th',
                  'id'=>'news_desc_th',
                  'placeholder' => 'news_desc_th' ,
                  'value' => set_value('news_desc_th')?set_value('news_desc_th'):$news_desc_th,
              );
              echo form_textarea($data); ?>
              </div>
          </div>


          
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($news)?$news->is_active:set_value('is_active');  
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