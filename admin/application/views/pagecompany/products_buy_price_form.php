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
	        <h2 class="panel-title">Price <?=$method?></h2>
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
      echo form_open_multipart("ProductBuyPrice/$method/$com_id/$pbp_id",$attributes); ?>
        
        <?php if(strtolower($method)=='add'){ ?> 
        <div class="form-group">
            <label class="col-md-2 control-label" for="">เรียกใช้ราคา ณ วันที่ </label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php           
                $get_pbp_id   = isset($get_pbp_id)?$get_pbp_id:0;
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'clone',
                  'onchange'=>"window.location='$_SERVER[PHP_SELF]?pbp_id='+this.value ",
                );
                echo form_dropdown('clone', $priceclones , $get_pbp_id ,$data);
                // print_r($_SERVER);
                ?>
              </div>
          </div>
        <hr>
         <?php } ?>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">ราคา ณ วันที่</label>
              <div class="col-md-10">
              <?php 
              $pp_date = is_object($price)?$price->pp_date:date('Y-m-d');
              $data = array(
                  'autocomplete'=>'off',
                  'class' =>'form-control datepicker' ,
                  'name' =>'pp_date',
                  'id'=>'pp_date',
                  'placeholder' => 'Date' ,
                  'value' => set_value('pp_date')?set_value('pp_date'):$pp_date,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">หมายเหตุ</label>
              <div class="col-md-10">
              <?php 
              $comment = is_object($price)?$price->comment:'';
              $data = array(                
                  'class' =>'form-control' ,
                  'name' =>'comment',
                  'id'=>'comment',
                  'placeholder' => 'Comment' ,
                  'value' => set_value('comment')?set_value('comment'):$comment,
              );
              echo form_input($data); ?>
              </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">สถานะเปิดใช้งาน</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_show = is_object($price)?$price->is_show:set_value('is_show');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'is_show',
                );

                $options = array(1=>'Yes',2=> 'No');
                echo form_dropdown('is_show', $options , $is_show ,$data);
                ?>
              </div>
          </div>
          
          

        <div class="form-group">
          <div class="co -md-12">
            <table class="table table-striped">
                <tr>
                  <td>
                    <?php 
                    
                    $data = array(
                      'class' =>'form-control' ,                 
                      'id'=>'category',
                      'onchange'=>'showhidecat(this);'
                    );
                   
                    echo form_dropdown('category', $categorys , 0 ,$data);
                    ?>

                  </td>
                  <td>Product name</td>
                  <td>Price</td>
                </tr>
                <?php foreach ($products as $product) { 

                  $price = isset($price_items[$product->pro_id])?$price_items[$product->pro_id]->price:0;
                  ?>
                <tr class="priceAll cat<?=$product->cat_id ?>">
                  <td><?=$product->cat_name_th?></td>
                  <td><?=$product->pro_name_th?></td>
                  <td>
                      <input type="text" class="form-control" name="price[]" value="<?=$price ?>">
                      <input type="hidden" class="form-control" name="pro_id[]" value="<?=$product->pro_id ?>">
                  </td>
                </tr>
                <?php } ?>
            </table>
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
