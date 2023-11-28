<section role="main" class="content-body">
	<header class="page-header">
		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Directory  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Directory <?=$method?></h2>
		</header>
		<div class="panel-body">
		 	<?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
      echo form_open_multipart("Directory1/$method/$id",$attributes); ?>
      	<div class="form-group ">
            <label class="col-md-3 control-label" for="">Picture</label>
              <div class="col-md-9">
              <?php 

              $dir_id = is_object($directory)?$directory->dir_id:'';

              $filepath = "../images/directory/". $dir_id .'.jpg';

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
            <label class="col-md-3 control-label" for="">Picture ads1</label>
              <div class="col-md-9">
              <?php 

              $dir_id = is_object($directory)?$directory->dir_id:'';

              $filepath = "../images/directory/". $dir_id .'ads1.jpg';

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
	            <label class="col-md-3 control-label" for="">subdomain : </label>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	            <?php if(is_object($directory) && $directory->subdomain){
          				$url = 'https://'.$directory->subdomain.'.brandexdirectory.com';
          				echo "<a href='$url' style='color:red; font-size:16px;'>$url</a>";
          			} 
          			
	              $subdomain = is_object($directory)?$directory->subdomain:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'subdomain',
	                  'id'=>'subdomain',
	                  'placeholder' => 'subdomain' ,
	                  'value' => set_value('subdomain')?set_value('subdomain'):$subdomain,
	              );
	              echo form_input($data); ?>
	              </div>
	        </div>


          <div class="form-group hide">
            <label class="col-md-3 control-label" for="">Picture ads2</label>
              <div class="col-md-9">
              <?php 

              $dir_id = is_object($directory)?$directory->dir_id:'';

              $filepath = "../assets/images/directory/". $dir_id .'ads2.jpg';

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';                
              }

              $data = array(                 
                  'name' =>'picture3',
                  'id'=>'picture3',                
              );
              echo form_upload($data); ?>
              </div>
          </div>

          <div class="form-group hide">
	            <label class="col-md-3 control-label" for="">URL : </label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $url2 = is_object($directory)?$directory->url2:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'url2',
	                  'id'=>'url2',
	                  'placeholder' => 'EX : http://www.pocketpages.net' ,
	                  'value' => set_value('url2')?set_value('url2'):$url2,
	              );
	              echo form_input($data); ?>
	              </div>
	        </div>


	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Titlebar TH</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $titlebarth = is_object($directory)?$directory->titlebarth:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'titlebarth',
	                  'id'=>'titlebarth',
	                  'placeholder' => 'Titlebar TH' ,
	                  'value' => set_value('titlebarth')?set_value('titlebarth'):$titlebarth,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Titlebar EN</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $titlebaren = is_object($directory)?$directory->titlebaren:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'titlebaren',
	                  'id'=>'titlebaren',
	                  'placeholder' => 'Titlebar EN' ,
	                  'value' => set_value('titlebaren')?set_value('titlebaren'):$titlebaren,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">meta keyword</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $metakeyword = is_object($directory)?$directory->metakeyword:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'metakeyword',
	                  'id'=>'metakeyword',
	                  'placeholder' => 'meta keyword' ,
	                  'value' => set_value('metakeyword')?set_value('metakeyword'):$metakeyword,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">meta description</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $metadescription = is_object($directory)?$directory->metadescription:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'rows'=>2,
	                  'name' =>'metadescription',
	                  'id'=>'metadescription',
	                  'placeholder' => 'meta description' ,
	                  'value' => set_value('metadescription')?set_value('metadescription'):$metadescription,
	              );
	              echo form_textarea($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Directory EN</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $dir_name_en = is_object($directory)?$directory->dir_name_en:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'dir_name_en',
	                  'id'=>'dir_name_en',
	                  'placeholder' => 'Directory EN' ,
	                  'value' => set_value('dir_name_en')?set_value('dir_name_en'):$dir_name_en,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Directory TH</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $dir_name_th = is_object($directory)?$directory->dir_name_th:'';
	              $data = array(
	                  'class' =>'form-control' ,
	                  'name' =>'dir_name_th',
	                  'id'=>'dir_name_th',
	                  'placeholder' => 'Directory TH' ,
	                  'value' => set_value('dir_name_th')?set_value('dir_name_th'):$dir_name_th,
	              );
	              echo form_input($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Directory Detail EN</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $dir_desc_en = is_object($directory)?$directory->dir_desc_en:'';
	              $data = array(
	                  'class' =>'form-control ckeditor' ,
	                  'name' =>'dir_desc_en',
	                  'id'=>'dir_desc_en',
	                  'placeholder' => 'Directory Detail EN' ,
	                  'value' => set_value('dir_desc_en')?set_value('dir_desc_en'):$dir_desc_en,
	              );
	              echo form_textarea($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Directory Detail  TH</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	              $dir_desc_th = is_object($directory)?$directory->dir_desc_th:'';              
	              $data = array(
	                  'class' =>'form-control ckeditor' ,
	                  'name' =>'dir_desc_th',
	                  'id'=>'dir_desc_th',
	                  'placeholder' => 'Directory Detail  TH' ,
	                  'value' => set_value('dir_desc_th')?set_value('dir_desc_th'):$dir_desc_th,
	              );
	              echo form_textarea($data); ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">IS Active</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	                $is_show = is_object($directory)?$directory->is_show:set_value('is_show');  
	                $data = array(
	                  'class' =>'form-control' ,                 
	                  'id'=>'is_show',
	                );

	                $options = array(1=>'Yes',2=> 'No');
	                echo form_dropdown('is_show', $options , $is_show ,$data);
	                ?>
	              </div>
	          </div>
	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Show Index</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	                $show_index = is_object($directory)?$directory->show_index:set_value('show_index');  
	                $data = array(
	                  'class' =>'form-control' ,                 
	                  'id'=>'show_index',
	                );

	                $options = array(1=>'Yes',2=> 'No');
	                echo form_dropdown('show_index', $options , $show_index ,$data);
	                ?>
	              </div>
	          </div>

	          <div class="form-group">
	            <label class="col-md-3 control-label" for="">Parent Directory</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	              <?php 
	                $dir_ref = is_object($directory)?$directory->dir_ref:set_value('dir_ref');  
	                $data = array(
	                  'class' =>'form-control' ,                 
	                  'id'=>'dir_ref',
	                );

	               ;
	                echo form_dropdown('dir_ref', $dir_refs , $dir_ref ,$data);

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