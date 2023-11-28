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
      echo form_open_multipart("CompanyProduct/$method/$com_id/$pro_id",$attributes); ?>
          
          <?php for ($i=0; $i < count($fields) ; $i++) { 
              $name = "col".($i+1);

              if($i==0)
              	echo "<h4 style='padding-left:150px;color:red;'>Product Features</h4>";
              if($i==6)
              	echo "<h4 style='padding-left:150px;color:red;'>Quick Details</h4>";
              if($i==12)
              	echo "<h4 style='padding-left:150px;color:red;'>Supplier Features</h4>";
              if($i==22)
              	echo "<h4 style='padding-left:150px;color:red;'>Online Performance</h4>";
              if($i==26)
              	echo "<h4 style='padding-left:150px;color:red;'>Trade Capability</h4>";
              if($i==29)
              	echo "<h4 style='padding-left:150px;color:red;'>Production Capability</h4>";
            ?>             
          <div class="form-group">
            <label class="col-md-3 control-label" for=""><?=$fields[$i];?></label>
              <div class="col-md-6 ">
              <?php 
             
              $$name = is_object($product)?$product->$name:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>$name,
                  'id'=>$name,
                  'placeholder' => $fields[$i] ,
                 
                  'value' => set_value($name)?set_value($name):$$name,
              );
              echo form_input($data); ?>
              </div>
          </div>
         <?php } ?>     

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