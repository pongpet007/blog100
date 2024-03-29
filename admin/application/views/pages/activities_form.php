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
	        <h2 class="panel-title">Activities <?=$method?></h2>
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
      echo form_open_multipart("Activities/$method/$activities_id",$attributes); ?>
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Year</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $year = is_object($activities)?$activities->year:set_value('year');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'year',
                );
                for ($i=date('Y')+1; $i > date('Y')-10 ; $i--) { 
                  $options[$i] = $i;
                }
                

                echo form_dropdown('year', $options , $year ,$data);
                ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Date EN</label>
              <div class="col-md-10">
              <?php 
              $showdate_en = is_object($activities)?$activities->showdate_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'showdate_en',
                  'id'=>'showdate_en',
                  'placeholder' => 'Date EN' ,
                  'value' => set_value('showdate_en')?set_value('showdate_en'):$showdate_en,
              );
              echo form_input($data); ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Date TH</label>
              <div class="col-md-10">
              <?php 
              $showdate_th = is_object($activities)?$activities->showdate_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'showdate_th',
                  'id'=>'showdate_th',
                  'placeholder' => 'Date TH' ,
                  'value' => set_value('showdate_th')?set_value('showdate_th'):$showdate_th,
              );
              echo form_input($data); ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Place EN</label>
              <div class="col-md-10">
              <?php 
              $place_en = is_object($activities)?$activities->place_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'place_en',
                  'id'=>'place_en',
                  'placeholder' => 'Place EN' ,
                  'value' => set_value('place_en')?set_value('place_en'):$place_en,
              );
              echo form_input($data); ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Place TH</label>
              <div class="col-md-10">
              <?php 
              $place_th = is_object($activities)?$activities->place_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'place_th',
                  'id'=>'place_th',
                  'placeholder' => 'Place TH' ,
                  'value' => set_value('place_th')?set_value('place_th'):$place_th,
              );
              echo form_input($data); ?>
              </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Activities name EN</label>
              <div class="col-md-10">
              <?php 
              $title_en = is_object($activities)?$activities->title_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title_en',
                  'id'=>'title_en',
                  'placeholder' => 'Activities name EN' ,
                  'value' => set_value('title_en')?set_value('title_en'):$title_en,
              );
              echo form_input($data); ?>
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-2 control-label" for="">Activities name TH</label>
              <div class="col-md-10">
              <?php 
              $title_th = is_object($activities)?$activities->title_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title_th',
                  'id'=>'title_th',
                  'placeholder' => 'Activities name TH' ,
                  'value' => set_value('title_th')?set_value('title_th'):$title_th,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($activities)?$activities->is_active:set_value('is_active');  
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
            <label class="col-md-2 control-label" for="">Detail EN</label>
              <div class="col-md-10 ">
              <?php 
              $detail_en = is_object($activities)?$activities->detail_en:'';
              $data = array(
                  'class' =>'form-control ckeditor' ,                  
                  'name' =>'detail_en',
                  'id'=>'detail_en',
                  'placeholder' => 'detail_en' ,
                  'value' => set_value('detail_en')?set_value('detail_en'):$detail_en,
              );
              echo form_textarea($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Detail TH</label>
              <div class="col-md-10 ">
              <?php 
              $detail_th = is_object($activities)?$activities->detail_th:'';
              $data = array(
                  'class' =>'form-control ckeditor' ,                  
                  'name' =>'detail_th',
                  'id'=>'detail_th',
                  'placeholder' => 'detail_th' ,
                  'value' => set_value('detail_th')?set_value('detail_th'):$detail_th,
              );
              echo form_textarea($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Picture Title</label>
              <div class="col-md-10 ">
              <?php 
               $id = is_object($activities)?$activities->id:'';
               $filepath = "../images/activities/activities{$id}_s.jpg";

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
                  echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-danger btn-xs">Delete File</a>';
              }

              $data = array(                 
                  'name' =>'picture_s',
                  'id'=>'picture_s',                
              );
              echo form_upload($data); ?>
              </div>
          </div>
          <?php for($i=1;$i<=8;$i++){ ?>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Picture <?=$i?></label>
              <div class="col-md-10 ">
              <?php 
             
               $filepath = "../images/activities/activities{$id}_$i.jpg";

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
                  echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-danger btn-xs">Delete File</a>';               
              }

              $data = array(                 
                  'name' =>'picture_'.$i,
                  'id'=>'picture_'.$i,                
              );
              echo form_upload($data); ?>
              </div>
          </div>
          <?php } ?>
        

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">             
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