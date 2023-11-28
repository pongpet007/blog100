<section role="main" class="content-body">
	<header class="page-header">		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Page  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Page <?=$method?></h2>
		</header>
		<div class="panel-body">
		 	<?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
      echo form_open_multipart("Page/$method/$id",$attributes); ?>
      	

			 <div class="form-group">
	            <label class="col-md-3 control-label" for="">url display<span style="color: red"> * require</span></label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $url_display = is_object($page)?$page->url_display:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'url_display',
	                  'id'=>'url_display',
	                  'placeholder' => 'url display' ,
	                  'value' => set_value('url_display')?set_value('url_display'):$url_display,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>


	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Titlebar EN <span style="color: red"> </span></label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $title_en = is_object($page)?$page->title_en:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'title_en',
	                  'id'=>'title_en',
	                  'placeholder' => 'Titlebar EN' ,
	                  'value' => set_value('title_en')?set_value('title_en'):$title_en,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>
	           <div class="form-group">
	            <label class="col-md-3 control-label" for="">Titlebar TH</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $title_th = is_object($page)?$page->title_th:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'title_th',
	                  'id'=>'title_th',
	                  'placeholder' => 'Titlebar TH' ,
	                  'value' => set_value('title_th')?set_value('title_th'):$title_th,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>
	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">meta keyword</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $keyword = is_object($page)?$page->keyword:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'keyword',
	                  'id'=>'keyword',
	                  'placeholder' => 'meta keyword' ,
	                  'value' => set_value('keyword')?set_value('keyword'):$keyword,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">meta description</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $description = is_object($page)?$page->description:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'rows'=>2,
	                  'name' =>'description',
	                  'id'=>'description',
	                  'placeholder' => 'meta description' ,
	                  'value' => set_value('description')?set_value('description'):$description,
	              );
	              echo form_textarea($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Content EN</label>
	              <div class="col-md-12 col-sm-12 col-xs-12">
	              <?php 
	              $content_en = is_object($page)?$page->content_en:'';
	              $data = array(
	                  'class' =>'form-control ckeditor' ,
	                  'name' =>'content_en',
	                  'id'=>'content_en',
	                  'placeholder' => 'Page EN' ,
	                  'value' => set_value('content_en')?set_value('content_en'):$content_en,
	              );
	              echo form_textarea($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Content TH</label>
	              <div class="col-md-12 col-sm-12 col-xs-12">
	              <?php 
	              $content_th = is_object($page)?$page->content_th:'';
	              $data = array(
	                  'class' =>'form-control ckeditor' ,
	                  'name' =>'content_th',
	                  'id'=>'content_th',
	                  'placeholder' => 'Page TH' ,
	                  'value' => set_value('content_th')?set_value('content_th'):$content_th,
	              );
	              echo form_textarea($data); ?>
	              </div>
	          </div>


	    <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
	        </label>

	        <div class="col-md-6 col-sm-6 col-xs-12">
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
	</section>
	<!-- end: page -->
</section>