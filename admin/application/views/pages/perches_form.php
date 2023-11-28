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
	        <h2 class="panel-title">Perches <?=$method?></h2>
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
      echo form_open_multipart("Perches/$method/$perches_id",$attributes); ?>

          <div class="tab-content">
            <div id="tab1" class="tab-pane active">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                  <?php echo form_label('จังหวัด'); ?> <span class="required">*</span>
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php
                  $province_id = is_object($provinces)?$province->province_id:set_value('province_id');
                  $data = array('class' =>'form-control' , 'id'=>'province_id', );
                  echo form_dropdown('province_id',$provinces,$province_id,$data); ?>
                </div>
              </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                <?php echo form_label('อำเภอ/เขต'); ?> <span class="required">*</span>
              </label>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php
               $amphur_id = is_object($perches)?$perches->amphur_id:set_value('amphur_id');
              $data = array('class' =>'form-control' ,
              'id'=>'amphur_id', );
              $amphurs = array();
              echo form_dropdown('amphur_id',$amphurs,$amphur_id,$data); ?>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
            Picture ( 440 * 318 )</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
								<?php

	              $perches_id = is_object($perches)?$perches->perches_id:'';

	              $filepath = "../assets/images/perches/Perches". $perches_id .'.png';

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


          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
          </label>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="hidden" name="id" id="id" value="x">
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
          <!-- <div class="form-group">
            <label class="col-md-2 control-label" for="">Text</label>
              <div class="col-md-10">
              <?php
              /*
              $text = is_object($ban_id)?$ban_id->ban_text:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'text',
                  'id'=>'text',
                  'placeholder' => 'text' ,
                  'value' => set_value('text')?set_value('text'):$text,
              );
              echo form_input($data);
              */
              ?>
              </div>
          </div> -->



      <?php echo form_close(); ?>

		</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>
