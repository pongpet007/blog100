<section role="main" class="content-body">
	<header class="page-header">
		 <h2>Welcome  <span style="color:yellow;"><?php echo $company->com_name ?> expire :<?php echo $company->expire ?> </span> </h2>
	
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
	        <h2 class="panel-title">Item </h2>
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
      $action = $method=='additemsave'?$row_id:$item_id;
      echo form_open_multipart("ContentRowItem/$method/$action",$attributes); ?>
         <div class="form-group">
            <label class="col-md-2 control-label" for="">Template</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
               
                if($method=='additemsave'){
                  $template_id = $seltemplate_id;
                }
                elseif($method=='edititemsave'){
                  $template_id = ($seltemplate_id>0)?$seltemplate_id:$item->template_id;  
                }                
               

                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'template_id',
                );
                echo form_dropdown('template_id', $templates , $template_id ,$data);
                ?>
              </div>
          </div>
          <?

              
             $data = array();

            if($method=='edititemsave' && !($seltemplate_id)){
                $seltemplate_id = $item->template_id;
            }

            if(is_object($item) && $seltemplate_id==$item->template_id)
            {
                $data = $item;
            }
              
              
              
              // Text
              if($seltemplate_id==1){
                  $this->load->view("template/item_text",array('data'=>$data));
              }
              elseif($seltemplate_id==2){ // Images
                  $this->load->view("template/item_image",array('data'=>$data));
              }
              elseif($seltemplate_id==3){ // Google Map
                  $this->load->view("template/item_google_map",array('data'=>$data));
              }
              elseif($seltemplate_id==4){ // Youtube
                  $this->load->view("template/item_youtube",array('data'=>$data));
              }
              elseif($seltemplate_id==5){ // VDO
                  $this->load->view("template/item_vdo",array('data'=>$data));
              }
              elseif($seltemplate_id==6){ // Contact us 
                  $this->load->view("template/item_contactus",array('data'=>$data));
              }
              elseif($seltemplate_id==7){ // Product
                  $this->load->view("template/item_product",array('data'=>$data));
              }
              elseif($seltemplate_id==8){ // Blog
                  $this->load->view("template/item_blog",array('data'=>$data));
              }
              elseif($seltemplate_id==9){ // Blog
                  $this->load->view("template/item_contactus_information",array('data'=>$data));
              }

              elseif($seltemplate_id==10){ // newsletter
                  $this->load->view("template/item_newsletter",array('data'=>$data));
              }
              elseif($seltemplate_id==11){ // Blog
                  $this->load->view("template/item_slide",array('data'=>$data));
              }
              elseif($seltemplate_id==12){ // News
                  $this->load->view("template/item_news",array('data'=>$data));
              }
              elseif($seltemplate_id==13){ // Images Responsive Full
                  $this->load->view("template/item_image_responsive_full",array('data'=>$data));
              }
              elseif($seltemplate_id==14){ // Images Responsive Full
                  $this->load->view("template/item_gallery",array('data'=>$data));
              }
              
          ?>


          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="row_id" id="row_id" value="<?=$row_id?>">
              <input type="hidden" name="item_id" id="item_id" value="<?=$item_id?>">
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
  $(document).ready(function(){
      
      $('#template_id').change(function(){
          $('#frm').attr('method','get');
          $('#frm').attr('action','<?=is_object($item)?base_url("ContentRowItem/edititem/$item->item_id"):base_url("ContentRowItem/additem/$row_id")?>');
          $('#frm').submit();
      });

  });
</script>
