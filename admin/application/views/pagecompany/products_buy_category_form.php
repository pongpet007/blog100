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
	        <h2 class="panel-title">Category <?=$method?></h2>
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
      echo form_open_multipart("ProductBuyCategory/$method/$com_id/$cat_id",$attributes); ?>
         
         
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Category EN</label>
              <div class="col-md-10">
              <?php 
              $cat_name = is_object($category)?$category->cat_name:'';
              $data = array(
                  'autocomplete'=>'off',
                  'class' =>'form-control' ,
                  'name' =>'cat_name',
                  'id'=>'cat_name',
                  'placeholder' => 'Category EN' ,
                  'value' => set_value('cat_name')?set_value('cat_name'):$cat_name,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Category TH</label>
              <div class="col-md-10">
              <?php 
              $cat_name_th = is_object($category)?$category->cat_name_th:'';
              $data = array(
                  'autocomplete'=>'off',
                  'class' =>'form-control' ,
                  'name' =>'cat_name_th',
                  'id'=>'cat_name_th',
                  'placeholder' => 'Category TH' ,
                  'value' => set_value('cat_name_th')?set_value('cat_name_th'):$cat_name_th,
              );
              echo form_input($data); ?>
              </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_show = is_object($category)?$category->is_show:set_value('is_show');  
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
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">
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
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>