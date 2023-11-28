<section role="main" class="content-body">
	<header class="page-header">
		
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Product  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
	 <section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Directory Category </h2>
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
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' ,'onsubmit'=>'return sendProductForm()' , 'name'=>'frm' );  
      echo form_open_multipart("DirectoryCategory/add/$com_id",$attributes); ?>

          <div class="form-group" id="master" >
              <label class="col-md-1 control-label" for="">Category </label>
              <div class="col-md-4" id="cat">
                 <?php
                
                  $data = array(
                      'class' =>'form-control select2' ,   
                      'style'=>'',                         
                      
                  );
                 
                  echo form_dropdown('cat_id[]', $categorys , '' ,$data);
  
              
                ?>
              </div>
              <label class="col-md-1 control-label" for="">Directory </label>
              <div class="col-md-4" id="dir">
              <?php
                
                  $data = array(
                      'class' =>'form-control select2' ,   
                      'style'=>'',                         
                      
                  );
                 
                  echo form_dropdown('dir_id[]', $directorys , '' ,$data);
  
               
              ?>
              </div>
              <div class="col-md-1">
                <button type="submit" class="btn btn-success">Add</button>
              </div>
          </div>
          <?php echo form_close(); ?> 
          <hr>
          <?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' ,'onsubmit'=>'return sendProductForm()' , 'name'=>'frm' );  
      echo form_open_multipart("DirectoryCategory/add/$com_id",$attributes); ?>
          <div id="datagroup" style="margin-top: 30px;">

              <?php foreach ($directory_categorys as $directory_category) {  ?>
              <div class="form-group" >
                  <label class="col-md-1 control-label" for="">Category </label>
                  <div class="col-md-4" >
                    <?php                           
                
                      $cat_id = $directory_category->cat_id;
                      $data = array(
                          'class' =>'form-control' ,   
                          'style'=>'',                         
                          'id'=>'cat_id',
                      );
                     
                      echo form_dropdown('cat_id[]', $categorys , $cat_id ,$data);
                     
                    ?>   
                  </div>
                  <label class="col-md-1 control-label" for="">Directory</label>
                  <div class="col-md-4" >
                  <?php 
                          
                
                      $dir_id = $directory_category->dir_id;
                      $data = array(
                          'class' =>'form-control' ,   
                          'style'=>'',                         
                          'id'=>'dir_id',
                      );
                     
                      echo form_dropdown('dir_id[]', $directorys , $dir_id ,$data);
                     
                  ?>   
                 
                  </div>
                  
                  <div class="col-md-1">
                    <a href='#' onclick='removecat("<?=$directory_category->id?>")' class='btn btn-danger form-control'> 
                      delete
                    </a>
                  </div>
              </div>
              <?php }  ?>
          </div>         
<?php echo form_close(); ?> 
     
  </div>


		</div>
	</section>	
	<!-- end: page -->
</section>