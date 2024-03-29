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
	        <h2 class="panel-title">PORTFORIO <?=$method?></h2>
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
      echo form_open_multipart("CompanyAds/$method/$com_id/$company_ads_id",$attributes); ?>
          
          <div class="form-group">
            <label class="col-md-2 control-label" for=""></label>
              <div class="col-md-10 ">
                <img src="<?php echo base_url('images/ads_position.jpg') ?>" class="img-responsive" alt="">
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Picture (370*220)</label>
              <div class="col-md-10 ">
              <?php 

              $company_ads_id = is_object($ads)?$ads->company_ads_id:'';

              $filepath = "../images/cover/". $company_ads_id .'.jpg';

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
            <label class="col-md-2 control-label" for="">Position</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $position = is_object($ads)?$ads->position:set_value('position');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'position',
                );

                $options = array(1=>'1',2=> '2', 3=> '3',4=> '4',5=> '5',6=> '6',7=> '7',8=> '8');
                echo form_dropdown('position', $options , $position ,$data);
                ?>
              </div>
          </div>
        

          <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Link</label>
              <div class="col-md-10">
              <?php 
              $link = is_object($ads)?$ads->link:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'link',
                  'id'=>'link',
                  'placeholder' => 'link' ,
                  'value' => set_value('link')?set_value('link'):$link,
              );
              echo form_input($data); ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($ads)?$ads->is_active:set_value('is_active');  
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
            <label class="col-md-2 control-label" for="">Show Index</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $show_index = is_object($ads)?$ads->show_index:set_value('show_index');  
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