<section role="main" class="content-body">
	<header class="page-header">
		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Company  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
		<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    

    <!-- Main content -->
    <section class="content">
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

<div class="box box-primary">
  <div class="box-header">
     <h3> Company <?=$method?> </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
      echo form_open_multipart("Company/$method/$id",$attributes); ?>

        

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Company Type</label>
              <div class="col-md-6 ">
              <?php 
                $comtype_id = is_object($company)?$company->comtype_id:set_value('comtype_id');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'comtype_id',
                );

                echo form_dropdown('comtype_id', $companytypes , $comtype_id ,$data);

                ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Company Name EN</label>
              <div class="col-md-6 ">
              <?php 
              $com_name_en = is_object($company)?$company->com_name_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'com_name_en',
                  'id'=>'com_name_en',
                  'placeholder' => 'Company Name EN' ,
                  'value' => set_value('com_name_en')?set_value('com_name_en'):$com_name_en,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Company Name TH</label>
              <div class="col-md-6 ">
              <?php 
              $com_name_th = is_object($company)?$company->com_name_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'com_name_th',
                  'id'=>'com_name_th',
                  'placeholder' => 'Company Name TH' ,
                  'value' => set_value('com_name_th')?set_value('com_name_th'):$com_name_th,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Expire</label>
              <div class="col-md-6 ">
              <?php 
              $expire = is_object($company)?$company->expire:'';
              $data = array(
                  'class' =>'form-control datepicker' ,
                  'name' =>'expire',
                  'id'=>'expire',
                  'placeholder' => 'Expire' ,
                  'data-date-format'=>'yyyy-mm-dd',
                  'value' => set_value('expire')?set_value('expire'):$expire,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 ">
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
</div>



    </section>
    <!-- /.content -->
  </div>

	<!-- end: page -->
</section>