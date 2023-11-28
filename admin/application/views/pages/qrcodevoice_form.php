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
	        <h2 class="panel-title">Qrcode <?=$method ?></h2>
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
      	echo form_open_multipart("MyqrcodeVoice/$method/$qrcode_id/$qrcodevoice_id",$attributes); ?>
        
        <div class="form-group">
            <label class="col-md-1 control-label" for="">Title EN</label>
              <div class="col-md-11">
              <?php 
              $title_en = is_object($qrcodevoice)?$qrcodevoice->title_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title_en',
                  'id'=>'title_en',
                  'placeholder' => 'title_en' ,
                  'value' => set_value('title_en')?set_value('title_en'):$title_en,
              );
              echo form_input($data); ?>
              </div>
        </div>

        <div class="form-group">
            <label class="col-md-1 control-label" for="">Title TH</label>
              <div class="col-md-11">
              <?php 
              $title_th = is_object($qrcodevoice)?$qrcodevoice->title_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title_th',
                  'id'=>'title_th',
                  'placeholder' => 'title_th' ,
                  'value' => set_value('title_th')?set_value('title_th'):$title_th,
              );
              echo form_input($data); ?>
              </div>
        </div>

        <div class="form-group ">
            <label class="col-md-1 control-label" for="">Url</label>
              <div class="col-md-11 ">
              <?php 
              $url = is_object($qrcodevoice)?$qrcodevoice->url:'';
              $data = array(
                  'class' =>'form-control' ,                  
                  'name' =>'url',
                  'id'=>'url',
                  'placeholder' => 'url' ,
                  'value' => set_value('url')?set_value('url'):$url,
              );
              echo form_textarea($data); ?>
              </div>
        </div>
		
        <div class="form-group">
	          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
	          </label>

	          <div class="col-md-6 col-sm-6 col-xs-12">
	          <input type="hidden" name="id" id="id" value="x">
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
