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
	        <h2 class="panel-title">Spec <?=$method?></h2>
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
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' ,'name'=>'frm' );  
      echo form_open_multipart("CompanyProductSpec/$method/$com_id/$pro_id/$spec_id",$attributes); ?>
        <?php if($method=='Add'){ ?>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">Multiple Add</label>
              <div class="col-md-6">
              <?php 
                  $attr['onchange'] ="changinput();" ;
                  $attr['id'] ="multiple" ;

                  $options = range(1,20);
                  echo form_dropdown('multiple', $options,$multiple, $attr);
              ?>
              </div>
          </div>
          <?php for($i=1;$i<= $multiple+1;$i++){ ?>
          <h4>Spec <?=$i?></h4>
          <div class="form-group">
           
              <div class="col-md-6">
              <?php 
              $label_en = is_object($spec)?$spec->label_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'label_en[]',
                  'id'=>'label_en',
                  'placeholder' => 'label_en' ,
                  'value' => set_value('label_en')?set_value('label_en'):$label_en,
              );
              echo form_input($data); ?>
              </div>

              <div class="col-md-6">
              <?php 
              $value_en = is_object($spec)?$spec->value_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'value_en[]',
                  'id'=>'value_en',
                  'placeholder' => 'value_en' ,
                  'value' => set_value('value_en')?set_value('value_en'):$value_en,
              );
              echo form_input($data); ?>
              </div>
          </div>
    
          <div class="form-group">
           
              <div class="col-md-6">
              <?php 
              $label_th = is_object($spec)?$spec->label_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'label_th[]',
                  'id'=>'label_th',
                  'placeholder' => 'label_th' ,
                  'value' => set_value('label_th')?set_value('label_th'):$label_th,
              );
              echo form_input($data); ?>
              </div>

              <div class="col-md-6">
              <?php 
              $value_th = is_object($spec)?$spec->value_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'value_th[]',
                  'id'=>'value_th',
                  'placeholder' => 'value_th' ,
                  'value' => set_value('value_th')?set_value('value_th'):$value_th,
              );
              echo form_input($data); ?>
              </div>
          </div>
          <?php } 
          }else{ ?>
          <div class="form-group">
           
              <div class="col-md-6">
              <?php 
              $label_en = is_object($spec)?$spec->label_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'label_en',
                  'id'=>'label_en',
                  'placeholder' => 'label_en' ,
                  'value' => set_value('label_en')?set_value('label_en'):$label_en,
              );
              echo form_input($data); ?>
              </div>

              <div class="col-md-6">
              <?php 
              $value_en = is_object($spec)?$spec->value_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'value_en',
                  'id'=>'value_en',
                  'placeholder' => 'value_en' ,
                  'value' => set_value('value_en')?set_value('value_en'):$value_en,
              );
              echo form_input($data); ?>
              </div>
          </div>
    
          <div class="form-group">
           
              <div class="col-md-6">
              <?php 
              $label_th = is_object($spec)?$spec->label_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'label_th',
                  'id'=>'label_th',
                  'placeholder' => 'label_th' ,
                  'value' => set_value('label_th')?set_value('label_th'):$label_th,
              );
              echo form_input($data); ?>
              </div>

              <div class="col-md-6">
              <?php 
              $value_th = is_object($spec)?$spec->value_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'value_th',
                  'id'=>'value_th',
                  'placeholder' => 'value_th' ,
                  'value' => set_value('value_th')?set_value('value_th'):$value_th,
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
<script type="text/javascript">
  function changinput() {
    var multiple = $('#multiple').val();   
    window.location='<?=base_url()?>CompanyProductSpec/add/<?=$com_id?>/<?=$pro_id?>/' + multiple;
  }
</script>