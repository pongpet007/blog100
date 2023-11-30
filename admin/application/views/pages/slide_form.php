<section role="main" class="content-body">
	<header class="page-header">
		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Slide  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Slide <?=$method?></h2>
		</header>
		<div class="panel-body">
		 	<?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
      echo form_open_multipart("Slide/$method/$id",$attributes); ?>
      	<div class="form-group">
            <label class="col-md-3 control-label" for="">Picture</label>
              <div class="col-md-9">
              <?php 

              $slide_id = is_object($slide)?$slide->slide_id:'';

              $filepath = "../assets/images/slide/{$slide_id}.jpg";

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
	            <label class="col-md-3 control-label" for="">URL : </label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $link = is_object($slide)?$slide->link:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'link',
	                  'id'=>'link',
	                  'placeholder' => 'EX : http://www.pocketpages.net' ,
	                  'value' => set_value('link')?set_value('link'):$link,
	              );
	              echo form_input($data); ?>
	              </div>
	        </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">IS Active</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	                $is_active = is_object($slide)?$slide->is_active:set_value('is_active');  
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