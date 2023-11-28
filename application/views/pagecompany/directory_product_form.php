<section role="main" class="content-body">
	<header class="page-header">
		<h2>Welcome  <span style="color:yellow;">Brandexdirectory.com</span> System</h2>
	
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
	        <h2 class="panel-title">Directory product</h2>
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
      echo form_open_multipart("CompanyProduct/directory/$com_id/$pro_id",$attributes); ?>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Directory <br>
              <a href="#" class="btn btn-sm btn-info" onclick="clonedir()" ><i class="fa fa-plus"></i> Add more</a></label>
              <div class="col-md-6" id="dir">

              <?php
                if(sizeof($directory_products)==0){
                  $data = array(
                      'class' =>'form-control' ,   
                      'style'=>'margin-top:5px;width:80%;display:inline;',                         
                      
                  );
                 
                  echo form_dropdown('dir_id[]', $directorys , '' ,$data);
  
                }
                

              $count = 1;
              foreach ($directory_products as $directory_product) {              
            
                  $dir_id = $directory_product->dir_id;
                  $data = array(
                      'class' =>'form-control' ,   
                      'style'=>'margin-top:5px;width:80%;display:inline;',                         
                      'id'=>'dir_id'.$count,
                  );
                 
                  echo form_dropdown('dir_id[]', $directorys , $dir_id ,$data);
                  echo "<a href='' onclick='removedir(\"#dir_id{$count}\",$directory_product->id)' class='btn btn-danger btn-sm'> <i class='fa fa-remove'></i> del</a>";
                  $count++;
              }
              ?>
              </div>
          </div>



          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6">
              
              <input type="hidden" name="id" id="id" value="<?=$com_id ?>">
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
	<!-- end: page -->
</section>