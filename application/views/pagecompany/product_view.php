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
            <li><span> Product  &nbsp;&nbsp;&nbsp;</span></li>
         </ol>
      </div>
   </header>
   <!-- start: page -->
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="row"> 
            <form id="frmsearch" name="frmsearch" action="<?=base_url("customeradmin/CompanyProduct/view/$com_id")?>" method="post">
            <div class="col-md-12" style="padding-bottom: 10px;">
               <div style="margin-top: 0px;font-size: 14px;">Total <span style="color:red;"><?=$total_rows;?></span> item(s)
               <?php 
                  $data = array(
                          'name'          => 'keyword',
                          'id'            => 'keyword',
                          'value'         => $search['keyword'],
                          'style'         => 'width:250px;display:inline;',
                          'class'         =>'form-control',
                  );
                  echo form_input($data);

                  $cat_id = $search['cat_id']?$search['cat_id']:0;

                  $options =array(
                     'style'=>"display:inline;width:250px;",
                     'class'=>'form-control',
                  );
                  echo form_dropdown('cat_id', $categorys, $cat_id, $options);

                ?>
                  <input type="submit" name="btnsubmit" class="btn btn-success" value="Search">
               </div>
            </div>
            </form>
            <?php foreach($products as $product){  ?>
               
            
            <div class="col-xs-6 col-sm-3 col-md-2" style="padding-left: 2px; padding-right: 2px;">
                <div class="products-list " style="background: white; margin-bottom: 4px;border-radius: 25px; overflow: hidden;border: 1px solid #ccc;">
                    <div class="item">         
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block left-b">                                         
                                    <div class="product-image-container second_img">
                                        <a href="<?=base_url("products/detail/$product->pro_id") ?>" target="_blank" title="<?=$product->pro_name_en ?>">
                                          <?php 
                                             $filepath = "images/product_new/pro_{$product->pro_id}01.jpg";
                                             if(is_file($filepath)){
                                           ?>
                                          <img src="<?=base_url("$filepath") ?>" class="img-1 img-responsive" alt="image1">
                                          <?php } ?>
                                       </a>
                                    </div>                                                
                                </div>
                                <div class="right-block" style="background: #fff0f0;padding-top: 5px;">                                               
                                    <div class="caption hide-cont">                                                   
                                       
                                       <h5 style="margin-bottom:3px; text-align: center;padding-left: 15px; height: 32px; overflow: hidden; text-overflow: ellipsis;">
                                          <a href="<?=base_url("Store/ProductDetail/$com_id/$product->pro_id") ?>" target="_blank" title="<?=$product->pro_name_th ?>"><?=$product->pro_name_th ?></a>
                                       </h5> 
                                                            
                                                                       
                                    </div>
                                </div>                                          
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
            
            <?php } ?>

            <div class="col-md-12"><?=$links ?></div>

        </div>       
      </section>
      <!-- /.content -->
   </div>
   <!-- end: page -->
</section>