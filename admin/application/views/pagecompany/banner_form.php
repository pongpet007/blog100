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
	        <h2 class="panel-title">Banner <?=$method?></h2>
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
      echo form_open_multipart("CompanyBanner/$method/$banner_id",$attributes); ?>
          
          <div class="form-group">
            <label class="col-md-2 control-label" for=""></label>
              <div class="col-md-10 ">
                <img src="<?php echo base_url('images/banner_position.jpg') ?>" class="img-responsive" alt="">
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Picture</label>
              <div class="col-md-10 ">
              <?php 

              $banner_id = is_object($banner)?$banner->banner_id:'';
              $filepath = "../images/banner/". $banner_id .'_mobile.webp';

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
            <label class="col-md-2 control-label" for="">BANNER TYPE</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $banner_type = is_object($banner)?$banner->banner_type:set_value('banner_type');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'banner_type',
                );

                $options = array(0=>'------SELECT BANNER TYPE------',1=>'BANNER HOME',2=> 'BANNER ADVERTISING');
                echo form_dropdown('banner_type', $options , $banner_type ,$data);
                ?>
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-2 control-label" for="">Position</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $position = is_object($banner)?$banner->position:set_value('position');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'position',
                );

                $options = array(1=>'1',2=> '2', 3=> '3',4=> '4',5=> '5',6=> '6',7=> '7',8=> '8');
                echo form_dropdown('position', $options , $position ,$data);
                ?>
              </div>
          </div>
        

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Link</label>
              <div class="col-md-10">
              <?php 
              $link = is_object($banner)?$banner->link:'';
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
                $is_active = is_object($banner)?$banner->is_active:set_value('is_active');  
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
              <label class="col-md-2 control-label" for="">SELECT DOMAINS</label>
              <div class="col-md-6 ">
                <input type="checkbox" style="width:20px;height:20px;" name="allcheckbox" id="select-all" value="1"/><span style="padding: 0 15px;">ALL DOMAINS</span> <br>

                <?
                  $domainselect = is_object($banner)?explode(',', $domainselect):array();

                  foreach ($company as $key => $value) {
                      if(in_array($value->com_id,$domainselect))
                      {
                        $checked=' checked ';
                      }
                      else
                      {
                        $checked="";
                      }
                      echo "<input type='checkbox' style='width:20px;height:20px;' name='com_website[]' value='$value->com_id' $checked><span style='padding: 0 15px;'> $value->com_website </span><br>";
                    }
                ?>
                <?/*php foreach ($company as $key => $new_company) { ?>
                  <input type="checkbox" name="com_website[]" id="checkbox-1" value="<?=$new_company->com_id?>"/> <span style="padding: 0 15px;"><?=$new_company->com_website?></span> <br>
                <?php } */?>

              </div>
            </div>
        
<script type="text/javascript">
        $('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
}); 
      </script>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="id" id="id" value="<?=$banner_id ?>">
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