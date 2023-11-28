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
	        <h2 class="panel-title">Exhibition <?=$method?></h2>
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
      echo form_open_multipart("exhibition/$method/$ban_id",$attributes); ?>
          
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Text</label>
              <div class="col-md-10">
              <?php 
              $ban_text = is_object($exhibition)?$exhibition->ban_text:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'ban_text',
                  'id'=>'ban_text',
                  'placeholder' => 'ban_text' ,
                  'value' => set_value('text')?set_value('text'):$ban_text,
              );
              echo form_input($data); ?>
              </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Url</label>
              <div class="col-md-10">
              <?php 
              $url = is_object($exhibition)?$exhibition->ban_url:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'ban_url',
                  'id'=>'ban_url',
                  'placeholder' => 'ban_url' ,
                  'value' => set_value('Url')?set_value('Url'):$url,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
          <label class="col-md-2 control-label" for="">Status</label>
            <div class="col-md-10">
              <?
              
                $sec = is_object($exhibition)?$exhibition->ban_showhide:'show';
            

                $ban_sts = array('show'=>'show','hide'=>'hide');
                
                echo form_dropdown('status', $ban_sts, $sec);
              ?>
      </div>
    </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Picture ( 440 * 318 )</label>
              <div class="col-md-10 ">
              <?php 

              $ban_id = is_object($exhibition)?$exhibition->ban_id:'';

              $filepath = "../assets/images/exhibition/banner". $ban_id .'.gif';

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
              <label class="col-md-2 control-label" for="">Expire</label>
              <div class="col-md-3">
              <?php 
              $expire = is_object($exhibition)?$exhibition->expire:'';
              $data = array(
                  'class' =>'form-control datepicker' ,
                  'name' =>'expire',
                  'id'=>'expire',
                  'placeholder' => 'expire' ,
                  'data-date-format'=>'yyyy-mm-dd',
                  'value' => set_value('expire')?set_value('expire'):$expire,
              );
              echo form_input($data); ?>
              </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Start date</label>
              <div class="col-md-3">
              <?php 
              $start_date = is_object($exhibition)?$exhibition->start_date:'';
              $data = array(
                  'class' =>'form-control datepicker' ,
                  'name' =>'start_date',
                  'id'=>'start_date',
                  'placeholder' => 'start_date' ,
                  'value' => set_value('start_date')?set_value('start_date'):$start_date,
              );
              echo form_input($data); ?>
              </div>
          </div>     
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">End date</label>
              <div class="col-md-3">
              <?php 
              $end_date = is_object($exhibition)?$exhibition->end_date:'';
              $data = array(
                  'class' =>'form-control datepicker' ,
                  'name' =>'end_date',
                  'id'=>'end_date',
                  'placeholder' => 'end_date' ,
                  'value' => set_value('end_date')?set_value('end_date'):$end_date,
              );
              echo form_input($data); ?>
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
          

          

      <?php echo form_close(); ?> 
 
		</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>