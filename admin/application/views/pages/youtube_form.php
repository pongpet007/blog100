<section role="main" class="content-body">
	<header class="page-header">		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Youtube  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Youtube <?=$method?></h2>
		</header>
		<div class="panel-body">
		 	<?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
      echo form_open_multipart("Youtube/$method/$id",$attributes); ?>
      	

			 <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Picture</label>
              <div class="col-md-10 ">
              <?php 

              $youtube_id = is_object($youtube)?$youtube->youtube_id:'';

              $filepath = "../assets/images/youtube/". $youtube_id .'.jpg';

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
            <label class="col-md-2 control-label" for="">Title EN</label>
              <div class="col-md-10">
              <?php 
              $title_en = is_object($youtube)?$youtube->title_en:'';
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
            <label class="col-md-2 control-label" for="">Title TH</label>
              <div class="col-md-10">
              <?php 
              $title_th = is_object($youtube)?$youtube->title_th:'';
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

          <div class="form-group">
            <label class="col-md-2 control-label" for="">url</label>
              <div class="col-md-10">
              <?php 
              $url = is_object($youtube)?$youtube->url:'';
              if($url){
              ?>	
              <iframe width="360" height="250" src="<?=$url?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
              <?php 
              }
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'url',
                  'id'=>'url',
                  'placeholder' => 'url' ,
                  'value' => set_value('url')?set_value('url'):$url,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($youtube)?$youtube->is_active:set_value('is_active');  
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