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
	        <h2 class="panel-title">Qrcode <?=$method ?></h2>
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
      	echo form_open_multipart("Myqrcode/$method/$qrcode_id",$attributes); ?>
        
        <div class="form-group">
            <label class="col-md-2 control-label" for="">Title</label>
              <div class="col-md-10">
              <?php 
              $title = is_object($qrcode)?$qrcode->title:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title',
                  'id'=>'title',
                  'placeholder' => 'title' ,
                  'value' => set_value('title')?set_value('title'):$title,
              );
              echo form_input($data); ?>
              </div>
        </div>

        <div class="form-group hide">
            <label class="col-md-2 control-label" for="">json</label>
              <div class="col-md-10 ">
              <?php 
              $json = is_object($qrcode)?$qrcode->json:'';
              $data = array(
                  'class' =>'form-control' ,                  
                  'name' =>'json',
                  'id'=>'json',
                  'placeholder' => 'JSON format' ,
                  'value' => set_value('json')?set_value('json'):$json,
              );
              echo form_textarea($data); ?>
              </div>
        </div>
		
		 <div class="form-group">
            <label class="col-md-2 control-label" for="">Book</label>
              <div class="col-md-2 ">
               <?php
               $qrcode_type_id = is_object($qrcode)?$qrcode->qrcode_type_id:set_value('qrcode_type_id');
              $data = array('class' =>'form-control' ,
              'id'=>'qrcode_type_id', 
          	  'onchange'=>'window.location=\''.$_SERVER['PHP_SELF'].'?book=\' + this.value' );
          	  //'onchange'=>'alert(this.value)' );
             
              $qrcode_type_id = empty($qrcode_type_id)?1:$qrcode_type_id;              
              $qrcode_type_id = !empty($book)?$book:$qrcode_type_id;

              echo form_dropdown('qrcode_type_id',$qrcode_types,$qrcode_type_id,$data); ?>
              </div>
        </div>
		
		<div class="form-group">
            <label class="col-md-2 control-label" for="">Type</label>
              <div class="col-md-2 ">
               <?php
               $ads_product = is_object($qrcode)?$qrcode->ads_product:set_value('ads_product');
              $data = array('class' =>'form-control' ,
              'id'=>'ads_product', 
          	  'onchange'=>'checktype()');
             
              echo form_dropdown('ads_product',array(1=>'ADS',2=>'PRODUCT'),$ads_product,$data); ?>
              </div>
        </div>
       
         <div class="form-group">
            <label class="col-md-2 control-label" for="">Company</label>
              <div class="col-md-10 ">
               <?php
               $com_id = is_object($qrcode)?$qrcode->com_id:set_value('com_id');
              $data = array('class' =>'form-control' ,
              'id'=>'com_id',
              'onchange'=>'loadProduct()' );

              $qrcode_type_id = empty($qrcode_type_id)?1:$qrcode_type_id;              
              $qrcode_type_id = !empty($book)?$book:$qrcode_type_id;

              if($qrcode_type_id==1)
              {
              	$company = $brandexCompanys;
              }
              elseif($qrcode_type_id==2)
              {
              	$company = $pocketCompanys;
              }
              elseif($qrcode_type_id==3)
              {
              	$company = $aecCompanys;
              }
             
              echo form_dropdown('com_id',$company,$com_id,$data); ?>
              </div>
        </div>

		<div class="form-group group_pro_id <?=$ads_product==2?'':'hide'?>">
            <label class="col-md-2 control-label" for="">Product_id</label>
              <div class="col-md-10">
              <?php 
              $pro_id = is_object($qrcode)?$qrcode->pro_id:'';
              $data = array('class' =>'form-control' ,
              'id'=>'pro_id', );
              echo form_dropdown('pro_id',$products,$pro_id,$data); ?>

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
<script type="text/javascript">
	function checktype() {
		if($('#ads_product').val()==2)
		{
			$('.group_pro_id').removeClass('hide');
		}
		else{
			$('.group_pro_id').addClass('hide');	
		}
	}

	function loadProduct() {
		if($('#ads_product').val()==2)
		{
			var com_id = $('#com_id').val();

			if($('#qrcode_type_id').val()==1){// Brandex
				
				$("#pro_id").removeOption(/./);
				$("#pro_id").ajaxAddOption('<?=base_url("Myqrcode/getProductBrandex/")?>' + com_id, {}, false, function(){});
			}
			if($('#qrcode_type_id').val()==2){// Pocket
				
				$("#pro_id").removeOption(/./);
				$("#pro_id").ajaxAddOption('<?=base_url("Myqrcode/getProductPocket/")?>' + com_id, {}, false, function(){});	
			}
			if($('#qrcode_type_id').val()==3){// Aec 
				
				$("#pro_id").removeOption(/./);
				$("#pro_id").ajaxAddOption('<?=base_url("Myqrcode/getProductAec/")?>' + com_id, {}, false, function(){});	
			}
		}
	}
</script>