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
	        <h2 class="panel-title">Product <?=$method?></h2>
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
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' ,'onsubmit'=>'return sendProductForm()' , 'name'=>'frm' );  
      echo form_open_multipart("CompanyProduct/$method/$com_id/$pro_id",$attributes); ?>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Picture 1 (850 x 1036)</label>
              <div class="col-md-9">
              <?php 

              $pro_id = is_object($product)?$product->pro_id:'';

              $filepath = "../assets/images/product/pro_". $pro_id .'01.jpg';

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';                
              }

              $data = array(                 
                  'name' =>'picture1',
                  'id'=>'picture1',                
              );
              echo form_upload($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Picture 2  (850 x 1036)</label>
              <div class="col-md-9">
              <?php 

              $pro_id = is_object($product)?$product->pro_id:'';

              $filepath = "../assets/images/product/pro_". $pro_id .'02.jpg';

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';                
              }

              $data = array(                 
                  'name' =>'picture2',
                  'id'=>'picture2',                
              );
              echo form_upload($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Picture 3  (850 x 1036)</label>
              <div class="col-md-9">
              <?php 

              $pro_id = is_object($product)?$product->pro_id:'';

              $filepath = "../assets/images/product/pro_". $pro_id .'03.jpg';

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';                
              }

              $data = array(                 
                  'name' =>'picture3',
                  'id'=>'picture3',                
              );
              echo form_upload($data); ?>
              </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label" for="">Title en</label>
              <div class="col-md-6">
              <?php 
              $title_en = is_object($product)?$product->title_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title_en',
                  'id'=>'title_en',
                  'placeholder' => 'Title en' ,
                  'value' => set_value('title_en')?set_value('title_en'):$title_en,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Title th</label>
              <div class="col-md-6">
              <?php 
              $title_th = is_object($product)?$product->title_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title_th',
                  'id'=>'title_th',
                  'placeholder' => 'Title th' ,
                  'value' => set_value('title_th')?set_value('title_th'):$title_th,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">meta_keyword</label>
              <div class="col-md-6">
              <?php 
              $meta_keyword = is_object($product)?$product->meta_keyword:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'meta_keyword',
                  'id'=>'meta_keyword',
                  'placeholder' => 'meta_keyword' ,
                  'value' => set_value('meta_keyword')?set_value('meta_keyword'):$meta_keyword,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">meta_description</label>
              <div class="col-md-6">
              <?php 
              $meta_description = is_object($product)?$product->meta_description:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'meta_description',
                  'id'=>'meta_description',
                  'placeholder' => 'meta_description' ,
                  'value' => set_value('meta_description')?set_value('meta_description'):$meta_description,
              );
              echo form_input($data); ?>
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-3 control-label" for="">Product name en</label>
              <div class="col-md-6">
              <?php 
              $pro_name_en = is_object($product)?$product->pro_name_en:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'pro_name_en',
                  'id'=>'pro_name_en',
                  'placeholder' => 'Product name en' ,
                  'value' => set_value('pro_name_en')?set_value('pro_name_en'):$pro_name_en,
              );
              echo form_input($data); ?>
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-3 control-label" for="">Product name th</label>
              <div class="col-md-6">
              <?php 
              $pro_name_th = is_object($product)?$product->pro_name_th:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'pro_name_th',
                  'id'=>'pro_name_th',
                  'placeholder' => 'Product name th' ,
                  'value' => set_value('pro_name_th')?set_value('pro_name_th'):$pro_name_th,
              );
              echo form_input($data); ?>
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-3 control-label" for="">pro_desc_en</label>
              <div class="col-md-9">
              <?php 
              $pro_desc_en = is_object($product)?$product->pro_desc_en:set_value('pro_desc_en');      
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'pro_desc_en',
                  'id'=>'pro_desc_en',
                  'placeholder' => 'pro_desc_en' ,
                  'value' => set_value('pro_desc_en')?set_value('pro_desc_en'):$pro_desc_en,
              );
              echo form_textarea($data); 
              ?>             
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-3 control-label" for="">pro_desc_th</label>
              <div class="col-md-9">
              <?php 
              $pro_desc_th = is_object($product)?$product->pro_desc_th:set_value('pro_desc_th');      
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'pro_desc_th',
                  'id'=>'pro_desc_th',
                  'placeholder' => 'pro_desc_th' ,
                  'value' => set_value('pro_desc_th')?set_value('pro_desc_th'):$pro_desc_th,
              );
              echo form_textarea($data); 
              ?>

              </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" for="">pro_desc_en_long</label>
              <div class="col-md-9">
              <?php 
              $pro_desc_en_long = is_object($product)?$product->pro_desc_en_long:set_value('pro_desc_en_long');      
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'pro_desc_en_long',
                  'id'=>'pro_desc_en_long',
                  'placeholder' => 'pro_desc_en_long' ,
                  'value' => set_value('pro_desc_en_long')?set_value('pro_desc_en_long'):$pro_desc_en_long,
              );
              echo form_textarea($data); 
              ?>              
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-3 control-label" for="">pro_desc_th_long</label>
              <div class="col-md-9">
               <?php 
              $pro_desc_th_long = is_object($product)?$product->pro_desc_th_long:set_value('pro_desc_th_long');      
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'pro_desc_th_long',
                  'id'=>'pro_desc_th_long',
                  'placeholder' => 'pro_desc_th_long' ,
                  'value' => set_value('pro_desc_th_long')?set_value('pro_desc_th_long'):$pro_desc_th_long,
              );
              echo form_textarea($data); 
              ?>                          
              </div>
          </div>
            
          <div class="form-group">
            <label class="col-md-3 control-label" for="">Specification EN</label>
              <div class="col-md-9">
               <?php 
              $spec_en = is_object($product)?$product->spec_en:set_value('spec_en');      
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'spec_en',
                  'id'=>'spec_en',
                  'placeholder' => 'spec_en' ,
                  'value' => set_value('spec_en')?set_value('spec_en'):$spec_en,
              );
              echo form_textarea($data); 
              ?>                          
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Specification TH</label>
              <div class="col-md-9">
               <?php 
              $spec_th = is_object($product)?$product->spec_th:set_value('spec_th');      
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'spec_th',
                  'id'=>'spec_th',
                  'placeholder' => 'spec_th' ,
                  'value' => set_value('spec_th')?set_value('spec_th'):$spec_th,
              );
              echo form_textarea($data); 
              ?>                          
              </div>
          </div>

            <div class="form-group">
            <label class="col-md-3 control-label" for="">Remark</label>
              <div class="col-md-9">
              <?php 
              $remark = is_object($product)?$product->remark:set_value('remark');      
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'remark',
                  'id'=>'remark',
                  'placeholder' => 'remark' ,
                  'value' => set_value('remark')?set_value('remark'):$remark,
              );
              echo form_textarea($data); 
              ?>                          
            
              </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label" for="">Tags EN</label>
              <div class="col-md-9">
              <?php 
              $tags_en = is_object($product)?$product->tags_en:set_value('tags_en');      
              $data = array(
                  'class' =>'form-control ' ,
                  'name' =>'tags_en',
                  'id'=>'tags_en',
                  'placeholder' => 'tags_en' ,
                  'value' => set_value('tags_en')?set_value('tags_en'):$tags_en,
              );
              echo form_textarea($data); 
              ?>                          
            
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Tags TH </label>
              <div class="col-md-9">
              <?php 
              $tags_th = is_object($product)?$product->tags_th:set_value('tags_th');      
              $data = array(
                  'class' =>'form-control ' ,
                  'name' =>'tags_th',
                  'id'=>'tags_th',
                  'placeholder' => 'tags_th' ,
                  'value' => set_value('tags_th')?set_value('tags_th'):$tags_th,
              );
              echo form_textarea($data); 
              ?>                          
            
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">pro_price</label>
              <div class="col-md-6">
              <?php 
              $pro_price = is_object($product)?$product->pro_price:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'pro_price',
                  'id'=>'pro_price',
                  'placeholder' => 'pro_price' ,
                  'value' => set_value('pro_price')?set_value('pro_price'):$pro_price,
              );
              echo form_input($data); ?>
              </div>
          </div>
                  
           <div class="form-group">
            <label class="col-md-3 control-label" for="">Position</label>
              <div class="col-md-6">
              <?php 
              $orders = is_object($product)?$product->orders:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'orders',
                  'id'=>'orders',
                  'placeholder' => 'orders' ,
                  'value' => set_value('orders')?set_value('orders'):$orders,
              );
              echo form_input($data); ?>
              </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label" for="">Category</label>
              <div class="col-md-6">
              <?php 
              $cat_id = is_object($product)?$product->cat_id:set_value('cat_id');
              $data = array(
                  'class' =>'form-control' ,                  
                  'id'=>'cat_id',                                 
              );
             
              echo form_dropdown('cat_id', $categorys , $cat_id ,$data);

              ?>
              </div>
          </div>
           <div class="form-group">
            <label class="col-md-3 control-label" for="">Brand</label>
              <div class="col-md-6">
              <?php 
              $brand_id = is_object($product)?$product->brand_id:set_value('brand_id');
              $data = array(
                  'class' =>'form-control' ,                  
                  'id'=>'brand_id',                                 
              );
             
              echo form_dropdown('brand_id', $brands , $brand_id ,$data);

              ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">is_active</label>
              <div class="col-md-2">
              <?php 
              $is_active = is_object($product)?$product->is_active:set_value('is_active');
              $data = array(
                  'class' =>'form-control' ,                  
                  'id'=>'is_active',                                 
              );
              $arr = array('1' =>'Yes' ,'2'=>'No' );
              echo form_dropdown('is_active', $arr , $is_active ,$data);

              ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">is_new</label>
              <div class="col-md-2">
              <?php 
              $is_new = is_object($product)?$product->is_new:'';
              $data = array(
                  'class' =>'form-control' ,                
                  'id'=>'is_new', 
              );
              $arr = array('1' =>'Yes' ,'2'=>'No' );
              echo form_dropdown('is_new', $arr , $is_new ,$data);?>
              </div>
          </div>
          
          <h4>Product Deal</h4>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">is_deal</label>
              <div class="col-md-2">
              <?php 
              $is_deal = is_object($product)?$product->is_deal:set_value('is_deal');
              $data = array(
                  'class' =>'form-control' ,                  
                  'id'=>'is_deal',                                 
              );
              $arr = array('2'=>'No','1' =>'Yes');
              echo form_dropdown('is_deal', $arr , $is_deal ,$data);

              ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" for="">deal expire</label>
              <div class="col-md-6 ">
              <?php 
              $deal_expire = is_object($product)?$product->deal_expire:'';
              $data = array(
                  'class' =>'form-control datepicker' ,
                  'name' =>'deal_expire',
                  'id'=>'deal_expire',
                  'placeholder' => 'deal_expire' ,
                  'data-date-format'=>'yyyy-mm-dd',
                  'value' => set_value('deal_expire')?set_value('deal_expire'):$deal_expire,
              );
              echo form_input($data); ?>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" for="">pro price old</label>
              <div class="col-md-6">
              <?php 
              $pro_price_old = is_object($product)?$product->pro_price_old:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'pro_price_old',
                  'id'=>'pro_price_old',
                  'placeholder' => 'pro_price_old' ,
                  'value' => set_value('pro_price_old')?set_value('pro_price_old'):$pro_price_old,
              );
              echo form_input($data); ?>
              </div>
          </div>


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