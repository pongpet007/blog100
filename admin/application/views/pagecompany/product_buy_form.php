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
	        <h2 class="panel-title">Product <?=$method?></h2>
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
      echo form_open_multipart("ProductBuy/$method/$com_id/$pro_id",$attributes); ?>
 
       
           <div class="form-group">
            <label class="col-md-3 control-label" for="">Product name en</label>
              <div class="col-md-6">
              <?php 
              $pro_name_en = is_object($product)?$product->pro_name_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'pro_name_en',
                  'id'=>'pro_name_en',
                  'placeholder' => 'Product name en' ,
                  'value' => set_value('pro_name_en')?set_value('pro_name_en'):$pro_name_en,
              );
              echo form_input($data); ?>
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-3 control-label" for="">Product name th</label>
              <div class="col-md-6">
              <?php 
              $pro_name_th = is_object($product)?$product->pro_name_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'pro_name_th',
                  'id'=>'pro_name_th',
                  'placeholder' => 'Product name th' ,
                  'value' => set_value('pro_name_th')?set_value('pro_name_th'):$pro_name_th,
              );
              echo form_input($data); ?>
              </div>
          </div>
                 
          
          
          <div class="form-group">
            <label class="col-md-3 control-label" for="">Category</label>
              <div class="col-md-6">
              <?php 
              $cat_id = is_object($product)?$product->cat_id:set_value('cat_id');
              $data = array(
                  'class' =>'form-control' ,                  
                  'id'=>'cat_id',                                 
              );
             
              echo form_dropdown('cat_id', $categorys , $cat_id ,$data);

              ?>
              </div>
          </div>


          <div class="form-group">
            <label class="col-md-3 control-label" for="">is_active</label>
              <div class="col-md-2">
              <?php 
              $is_active = is_object($product)?$product->is_active:set_value('is_active');
              $data = array(
                  'class' =>'form-control' ,                  
                  'id'=>'is_active',                                 
              );
              $arr = array('1' =>'Yes' ,'2'=>'No' );
              echo form_dropdown('is_active', $arr , $is_active ,$data);

              ?>
              </div>
          </div>    

            <div class="form-group">
            <label class="col-md-3 control-label" for="">Remark</label>
              <div class="col-md-6">
              <?php 
              $remark = is_object($product)?$product->remark:set_value('remark');      
              $data = array(
                  'class' =>'form-control ' ,
                  'name' =>'remark',
                  'id'=>'remark',
                  'placeholder' => 'remark' ,
                  'value' => set_value('remark')?set_value('remark'):$remark,
              );
              echo form_textarea($data); 
              ?>                          
            
              </div>
          </div> 



          <div class="form-group" style="margin-top: 20px;">
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