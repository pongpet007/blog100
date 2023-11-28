<div class="row">
	<div class="col-md-12">
		<div class="content-box">			
				<h3>ข้อมูลนามบัตร</h3>
			
<?php if($this->session->flashdata('msg')): ?>
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo $this->session->flashdata('msg') ?>
	</div>
<?php endif; ?>
<?php if($this->session->flashdata('errors')): ?>
	<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo $this->session->flashdata('errors') ?>
	</div>
<?php endif; ?>
						
<?php 
	$attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );
	
	echo form_open_multipart("customeradmin/Namecard/$method/$id",$attributes);
?>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('หมวดหมู่ (TH)'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$cat_name_th = is_object($namecard)?$category->cat_name_th:'';
					$data = array(
							'class' =>'form-control typeahead' ,
							'name' =>'cat_name_th',
							'id'=>'cat_name_th',
							'placeholder' => 'หมวดหมู่ (TH)' ,
							'autocomplete'=>"off",
							'value' => set_value('cat_name_th')?set_value('cat_name_th'):$cat_name_th,
					);
					echo form_input($data); ?>
				</div>
			</div>
			
			<div class="form-group" style="display:none">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('ประเทศ'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$country_id = is_object($namecard)?$namecard->country_id:set_value('country_id');
					$data = array('class' =>'form-controlx select2' ,				
							'id'=>'country_id',
							'style'=>'width:100%',			
							
					);

					echo form_dropdown('country_id',$countrys,$country_id,$data); ?>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('จังหวัด'); ?> 
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$province_id = is_object($namecard)?$namecard->province_id:set_value('province_id');
					$data = array('class' =>'form-controlx ' ,				
							'id'=>'province_id',
							'style'=>'width:100%',			
							
					);

					echo form_dropdown('province_id',$provinces,$province_id,$data); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('อำเภอ/เขต'); ?> 
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$amphur_id = is_object($namecard)?$namecard->amphur_id:set_value('amphur_id');
					$data = array('class' =>'form-controlx ' ,				
							'id'=>'amphur_id',			
							'style'=>'width:100%',
					);

					echo form_dropdown('amphur_id',array(),$amphur_id,$data); ?>
					<input type="hidden" id="hidamphur_id" name="hidamphur_id" value="<?=$amphur_id?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('position'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$position_id = is_object($namecard)?$namecard->position_id:set_value('position_id');
					$data = array('class' =>'form-controlx select2' ,				
							'id'=>'position_id',			
							'style'=>'width:100%',
					);

					echo form_dropdown('position_id',$positions,$position_id,$data); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('Company'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$company_name = is_object($namecard)?$namecard->company_name:'';
					$data = array(
							'class' =>'form-control' ,
							'name' =>'company_name',
							'id'=>'company_name',
							'placeholder' => 'Company' ,
							'value' => set_value('company_name')?set_value('company_name'):$company_name,
					);
					echo form_input($data); ?>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('Company EN'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$company_name_en = is_object($namecard)?$namecard->company_name_en:'';
					$data = array(
							'class' =>'form-control' ,
							'name' =>'company_name_en',
							'id'=>'company_name_en',
							'placeholder' => 'Company EN' ,
							'value' => set_value('company_name_en')?set_value('company_name_en'):$company_name_en,
					);
					echo form_input($data); ?>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('fullname'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$fullname = is_object($namecard)?$namecard->fullname:'';
					$data = array(
							'class' =>'form-control' ,
							'name' =>'fullname',
							'id'=>'fullname',
							'placeholder' => 'fullname' ,
							'value' => set_value('fullname')?set_value('fullname'):$fullname,
					);
					echo form_input($data); ?>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('fullname EN'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$fullname_en = is_object($namecard)?$namecard->fullname_en:'';
					$data = array(
							'class' =>'form-control' ,
							'name' =>'fullname_en',
							'id'=>'fullname_en',
							'placeholder' => 'fullname_en' ,
							'value' => set_value('fullname_en')?set_value('fullname_en'):$fullname_en,
					);
					echo form_input($data); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('telephone'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$telephone = is_object($namecard)?$namecard->telephone:'';
					$data = array(
							'class' =>'form-control' ,
							'name' =>'telephone',
							'id'=>'telephone',
							'placeholder' => 'telephone' ,
							'value' => set_value('telephone')?set_value('telephone'):$telephone,
					);
					echo form_input($data); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('mobile'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$mobile = is_object($namecard)?$namecard->mobile:'';
					$data = array(
							'class' =>'form-control' ,
							'name' =>'mobile',
							'id'=>'mobile',
							'placeholder' => 'mobile' ,
							'value' => set_value('mobile')?set_value('mobile'):$mobile,
					);
					echo form_input($data); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('email'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$email = is_object($namecard)?$namecard->email:'';
					$data = array(
							'class' =>'form-control' ,
							'name' =>'email',
							'id'=>'email',
							'placeholder' => 'email' ,
							'value' => set_value('email')?set_value('email'):$email,
					);
					echo form_input($data); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
					<?php echo form_label('website'); ?> <span class="required">*</span>
				</label>
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php 
					$website = is_object($namecard)?$namecard->website:'';
					$data = array(
							'class' =>'form-control' ,
							'name' =>'website',
							'id'=>'website',
							'placeholder' => 'website' ,
							'value' => set_value('website')?set_value('website'):$website,
					);
					echo form_input($data); ?>
				</div>
			</div>
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
					<input type="hidden" name="id" id="id" value="<?=$id?>">
				</div>
			</div>



<?php echo form_close(); ?>    

		</div>
	</div>
</div>
