<section role="main" class="content-body">
  <header class="page-header">
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
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Product <?=$method?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
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
      <div>

        

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Picture</a></li>
          <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Detail</a></li>
        
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab1">            
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture big 1 (1200 x 1125)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'01big.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;">';    
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;          
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro1200x1125.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture1big',
                      'id'=>'picture1big',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture big 2 (1200 x 1125)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'02big.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                    
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro1200x1125.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture2big',
                      'id'=>'picture2big',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture big 3 (1200 x 1125)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'03big.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                      echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                   
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro1200x1125.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture3big',
                      'id'=>'picture3big',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
            <div class="form-group">
              
              <div class="col-md-4">
                <center style="font-weight:bold;">Picture 1 (570 x 570)</center>
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'01.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;">';    
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;          
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro570x570.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture1',
                      'id'=>'picture1',                
                  );
                  echo form_upload($data); ?>
              </div>

              <div class="col-md-4">
                <center style="font-weight:bold;">Picture 2 (570 x 570)</center>
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'02.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                    
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro570x570.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture2',
                      'id'=>'picture2',                
                  );
                  echo form_upload($data); ?>
              </div>
              
              <div class="col-md-4">
                <center style="font-weight:bold;">Picture 3 (570 x 570)</center>
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'03.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                      echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                   
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro570x570.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture3',
                      'id'=>'picture3',                
                  );
                  echo form_upload($data); ?>
              </div>

            </div>

            <div class="form-group">
              
              <div class="col-md-4">
                <center style="font-weight:bold;">Picture 1 WEBP</center>
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'01.webp';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;">';    
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;          
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro570x570.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  ?>
              </div>

              <div class="col-md-4">
                <center style="font-weight:bold;">Picture 2 WEBP</center>
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'02.webp';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                    
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro570x570.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  ?>
              </div>
              
              <div class="col-md-4">
                <center style="font-weight:bold;">Picture 3 WEBP</center>
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'03.webp';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                      echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                   
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro570x570.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  ?>
              </div>

            </div>
           
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture 1 small (210 x 210)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'01small.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;">';    
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;          
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro210x210.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture1small',
                      'id'=>'picture1small',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture 2 small (210 x 210)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'02small.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                    
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro210x210.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture2small',
                      'id'=>'picture2small',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture 3 small (210 x 210)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'03small.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                      echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                   
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro210x210.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture3small',
                      'id'=>'picture3small',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
            
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture 90*90 1 (90 x 90)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'0190.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                      echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                   
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro90x90.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture190',
                      'id'=>'picture190',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture 90*90 2 (90 x 90)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'0290.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                      echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                   
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro90x90.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture290',
                      'id'=>'picture290',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
            <div class="form-group hide">
              <label class="col-md-2 control-label" for="">Picture 90*90 3 (90 x 90)</label>
              <div class="col-md-6">
                <?php 
                  $pro_id = is_object($product)?$product->pro_id:'';
                  
                  $filepath = "../images/product_new/pro_". $pro_id .'0390.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;"><br>'; 
                      echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;                   
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro90x90.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture390',
                      'id'=>'picture390',                
                  );
                  echo form_upload($data); ?>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="tab2">
            
           
            <div class="form-group">
              <label class="col-md-2 control-label" for="">Product URL <span style="color: red">*</span></label>
              <div class="col-md-6">
                <?php 
                  $pro_url = is_object($product)?$product->pro_url:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'pro_url',
                      'id'=>'pro_url',
                      'placeholder' => 'Product URL' ,
                      'value' => set_value('pro_url')?set_value('pro_url'):$pro_url,
                  );
                  echo form_input($data); ?>
              </div>
            </div>

            <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">Number ID</label>
              <div class="col-md-6">
                <?php 
                  $number_id = is_object($product)?$product->number_id:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'number_id',
                      'id'=>'number_id',
                      'placeholder' => 'Product number id' ,
                      'value' => set_value('number_id')?set_value('number_id'):$number_id,
                  );
                  echo form_input($data); ?>
              </div>
            </div>

            <div class="form-group" style="">
              <label class="col-md-2 control-label" for="">LINK CONTACT SOCIAL</label>
              <div class="col-md-6">
                <?php 
                  $product_link_social = is_object($product)?$product->product_link_social:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'product_link_social',
                      'id'=>'product_link_social',
                      'placeholder' => 'LINK CONTACT SOCIAL' ,
                      'value' => set_value('product_link_social')?set_value('product_link_social'):$product_link_social,
                  );
                  echo form_input($data); ?>
              </div>
            </div>
                    
            <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">pro_price</label>
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
            <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">pro price old</label>
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
              <label class="col-md-2 control-label" for="">Position</label>
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
              <label class="col-md-2 control-label" for="">Position index</label>
              <div class="col-md-6">
                <?php 
                  $orders_index = is_object($product)?$product->orders_index:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'orders_index',
                      'id'=>'orders_index',
                      'placeholder' => 'orders_index' ,
                      'value' => set_value('orders_index')?set_value('orders_index'):$orders_index,
                  );
                  echo form_input($data); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="">Category</label>
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
              <label class="col-md-2 control-label" for="">Brand</label>
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
             <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">Promotion</label>
              <div class="col-md-6">
                <?php 
                  $promotion_id = is_object($product)?$product->promotion_id:set_value('promotion_id');
                  $data = array(
                      'class' =>'form-control' ,                  
                      'id'=>'promotion_id',                                 
                  );
                  
                  echo form_dropdown('promotion_id', $promotions , $promotion_id ,$data);
                  
                  ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label" for="">is_active</label>
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
            <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">Pimar</label>
              <div class="col-md-2">
                <?php 
                  $is_pimar = is_object($product)?$product->is_pimar:set_value('is_pimar');
                  $data = array(
                      'class' =>'form-control' ,                  
                      'id'=>'is_pimar',                                 
                  );
                  $arr = array('1' =>'Yes' ,'2'=>'No' );
                  echo form_dropdown('is_pimar', $arr , $is_pimar ,$data);
                  
                  ?>
              </div>
            </div>
            <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">is_new</label>
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
            <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">Remark</label>
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

            <h4 style="display: none;">Product Deal</h4>
            <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">is_deal</label>
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
            <div class="form-group" style="display: none;">
              <label class="col-md-2 control-label" for="">deal expire</label>
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
              <label class="col-md-2 control-label" for="">START DATE</label>
              <div class="col-md-6 ">
                <?php 
                  $start_date = is_object($product)?$product->start_date:'';
                  $data = array(
                      'class' =>'form-control datepicker' ,
                      'name' =>'start_date',
                      'id'=>'start_date',
                      'placeholder' => 'start_date' ,
                      'data-date-format'=>'yyyy-mm-dd',
                      'value' => set_value('start_date')?set_value('start_date'):$start_date,
                  );
                  echo form_input($data); ?>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2 control-label" for="">END DATE</label>
              <div class="col-md-6 ">
                <?php 
                  $end_date = is_object($product)?$product->end_date:'';
                  $data = array(
                      'class' =>'form-control datepicker' ,
                      'name' =>'end_date',
                      'id'=>'end_date',
                      'placeholder' => 'end_date' ,
                      'data-date-format'=>'yyyy-mm-dd',
                      'value' => set_value('end_date')?set_value('end_date'):$end_date,
                  );
                  echo form_input($data); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="">SELECT DOMAINS</label>
              <div class="col-md-6 ">
                <input type="checkbox" style="width:20px;height:20px;" name="allcheckbox" id="select-all" value="1"/><span style="padding: 0 15px;">ALL DOMAINS</span> <br>

                <?
                  $domainselect = is_object($product)?explode(',', $domainselect):array();

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
          </div>  

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
      <div class="form-group" style="margin-top: 20px;">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">
        </label>
        <div class="col-md-6">
          <input type="hidden" name="id" id="id" value="<?=$com_id ?>">
          <?php 
            $data = array(
            'class' =>'btn btn-sm btn-primary' ,
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
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Language</a>
        <a href="#" onclick="$('#language').show();$('#country_id').focus();" class="btn  btn-sm btn-success">Add language</a>
         Filter Language : <?php    
              $data = array(
                'class' =>'form-control' ,                 
                'id'=>'countryfillter',
                'style'=>'width:300px;display:inline;',
                'onchange'=>'filtercountry()'
              );
              
              echo form_dropdown('countryfillter',$countrys , 0 ,$data);
              
            ?>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <!-- Modal Language -->
    <!-- Modal -->
<?php 
$attributes = array('id' =>'frmlanguage' , 'class'=>'form-horizontal' , 'name'=>'frmlanguage' ,'target'=>'_blank' );  
echo form_open_multipart("#",$attributes); ?>

      <div class="language" id="language" style="display: none;">
        

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Language</label>
                  <div class="col-md-10 ">
                     <?php    
                      $data = array(
                        'class' =>'form-control' ,                 
                        'id'=>'country_id',                                          
                      );
                      
                      echo form_dropdown('country_id',$countrys , 0 ,$data);
                      
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">meta_title</label>
                  <div class="col-md-10 ">
                    <?php                      
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_title',
                          'id'=>'meta_title',
                          'placeholder' => 'meta_title' ,
                          'value' => set_value('meta_title')?set_value('meta_title'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
               
                <div class="form-group ">
                  <label class="col-md-2 control-label" for="">meta_keyword</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_keyword',
                          'id'=>'meta_keyword',
                          'placeholder' => 'meta_keyword' ,
                          'value' => set_value('meta_keyword')?set_value('meta_keyword'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group <?=$_SESSION["sslevel"]==1?'hide':''?> ">
                  <label class="col-md-2 control-label" for="">meta_description</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_description',
                          'id'=>'meta_description',
                          'placeholder' => 'meta_description' ,
                          'value' => set_value('meta_description')?set_value('meta_description'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>                
               
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">pro_name</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'pro_name',
                          'id'=>'pro_name',
                          'placeholder' => 'pro_name' ,
                          'value' => set_value('pro_name')?set_value('pro_name'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-md-2 control-label" for="">tags</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ' ,
                          'rows'=>2,
                          'name' =>'tags',
                          'id'=>'tags',
                          'placeholder' => 'tags' ,
                          'value' => set_value('tags')?set_value('tags'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">pro_desc_short (Product Over)</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'pro_desc_short',
                          'id'=>'pro_desc_short',
                          'placeholder' => 'pro_desc_short' ,
                          'value' => set_value('pro_desc_short')?set_value('pro_desc_short'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">pro_desc_short2</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'pro_desc_short2',
                          'id'=>'pro_desc_short2',
                          'placeholder' => 'pro_desc_short2' ,
                          'value' => set_value('pro_desc_short2')?set_value('pro_desc_short2'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">pro_desc_long</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'pro_desc_long',
                          'id'=>'pro_desc_long',
                          'placeholder' => 'pro_desc_long' ,
                          'value' => set_value('pro_desc_long')?set_value('pro_desc_long'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">spec</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'spec',
                          'id'=>'spec',
                          'placeholder' => 'spec' ,
                          'value' => set_value('spec')?set_value('spec'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>               
                <div class="form-group">
                  <label class="col-md-2 control-label" for=""></label>
                  <div class="col-md-10 ">
                    <input type="hidden" id="language_id" name="language_id" value="">
                    <input type="hidden" id="pro_id" name="pro_id" value="<?=$pro_id?>">
                    <input type="hidden" id="languagemethod" name="languagemethod" value="add">
                    <button type="button" onclick="savelanguage()" class="btn  btn-sm btn-primary" >Save changes</button>
                    <button type="button" onclick="window.location.reload();" class="btn  btn-sm btn-warning" >Close</button>
                  </div>
                </div>               
                
      </div>
     
    <!-- end Modal Language -->
    <?php echo form_close(); ?> 

          <?php foreach ($languages as $language) { 
             
            if(sizeof($language->languages) >0 ){
           
              foreach ($language->languages as $cl) {
            ?>
           <div class="table-responsive countryall country<?=$language->country_id ?>">
                  <table class="table table-striped">
                    <tr>
                      <th colspan="2"> <h2>Language <?=$language->short_name ?></h2>
                        <a href="javascript:editlanguage('<?=$cl->language_id ?>')" class="btn  btn-sm btn-warning">Edit language</a>
                        <a href="javascript:deletelanguage('<?=$cl->language_id ?>')" class="btn  btn-sm btn-danger">Delete language</a>
                      </th>
                    </tr>

                    <tr>
                      <td width="300">Meta title</td>
                      <td><?=$cl->meta_title ?></td>
                    </tr> 
                    <tr>
                      <td>Meta keyword</td>
                      <td><?=$cl->meta_keyword ?></td>
                    </tr> 
                    <tr>
                      <td>Meta description</td>
                      <td><?=$cl->meta_description ?></td>
                    </tr> 
                    <tr>
                      <td>Product name</td>
                      <td><?=$cl->pro_name ?></td>
                    </tr> 
                     <tr>
                      <td>Tags</td>
                      <td><?=$cl->tags ?></td>
                    </tr> 
                    <tr>
                      <td>description short (Product over)</td>
                      <td><?=$cl->pro_desc_short ?></td>
                    </tr> 
                    <tr>
                      <td>description short2</td>
                      <td><?=$cl->pro_desc_short2 ?></td>
                    </tr> 
                    <tr>
                      <td>description long</td>
                      <td><?=$cl->pro_desc_long ?></td>
                    </tr> 
                    <tr>
                      <td>specification</td>
                      <td><?=$cl->spec ?></td>
                    </tr> 
                    <tr>
                      <td>cby / cdate</td>
                      <td><?=$cl->cby ?> / <?=$cl->cdate ?></td>
                    </tr>    
                    <tr>
                      <td>uby / udate</td>
                      <td><?=$cl->uby ?> / <?=$cl->udate ?></td>
                    </tr>                   

                  </table>
          </div>
          <?php }}} ?>
      </div>
    </div>
  </div>  
</div>


  <!-- end: page -->
</section>

 
    <script type="text/javascript">
  
  function editlanguage(id) {
      $('#languagemethod').val('edit');
      $.getJSON( "<?=base_url("CompanyProduct/getLanguageJson/")?>"+id, function( data ) {       
        $('#country_id').val(data.country_id);
        $('#meta_title').val(data.meta_title);
        $('#meta_keyword').val(data.meta_keyword);
        $('#meta_description').val(data.meta_description);
        $('#pro_name').val(data.pro_name);
        $('#tags').val(data.tags);       
        $('#language_id').val(id);       
        CKEDITOR.instances.pro_desc_short.setData(data.pro_desc_short);
        CKEDITOR.instances.pro_desc_short2.setData(data.pro_desc_short2);
        CKEDITOR.instances.pro_desc_long.setData(data.pro_desc_long);
        CKEDITOR.instances.spec.setData(data.spec);      
        $('#language').show();
        $('#country_id').focus();
      });
  }
  function deletelanguage(id) {
    if(confirm('Delete this language?')){
      $.get('<?=base_url("CompanyProduct/deletelanguage/")?>' + id,function (data) {        
        window.location.reload();
      });
    }
  }

  function savelanguage() {
    if($('#country_id').val()==0){
        alert('please select language');
        $('#country_id').focus();
        return false;
    }
    var pro_desc_short = encodeURIComponent(CKEDITOR.instances.pro_desc_short.getData());
    var pro_desc_short2 = encodeURIComponent(CKEDITOR.instances.pro_desc_short2.getData());
    var pro_desc_long = encodeURIComponent(CKEDITOR.instances.pro_desc_long.getData());
    var spec = encodeURIComponent(CKEDITOR.instances.spec.getData());
    var frm = $('#frmlanguage').serialize();
    frm = frm +'&pro_desc_short2='+pro_desc_short2+'&pro_desc_short='+pro_desc_short+'&pro_desc_long='+pro_desc_long+'&spec='+spec;
    // console.log(frm);
    // return;
    $.post('<?=base_url("CompanyProduct/savelanguage")?>',frm,function(data) {
      if(data.indexOf('save complete')>-1){    
        alert(data);
        window.location.reload();
      }

    });
  }
  function filtercountry() {
    var cid = $('#countryfillter').val();
    if(cid > 0)
    {
      $('.countryall').hide();
      $('.country' + cid).show();
    }
    else
    {
      $('.countryall').show();
    }
    

  }


</script>