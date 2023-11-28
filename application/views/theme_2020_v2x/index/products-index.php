<section id="solutions" class="solutions-main-block">
  <div class="container">
    <div class="row">
      <?php foreach ($productsall as $key => $productsalls) { ?>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="solution-block img-hover-zoom">
            <div class="solution-img">
              <img class="img-responsive" src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsalls->pro_id;?>01.jpg" alt="This zooms-in really well and smooth">
            </div>
            <div class="solution-dtl" style="height: 40px;">
              <a href="<?php echo base_url("products/detail/")?><? echo $productsalls->pro_id ?>">
                <h5 style="text-align: center;" class="solution-heading"><?=$lang=='EN'?$productsalls->pro_name_en:$productsalls->pro_name_th ?></h5>
              </a>
              <p ><?=$lang=='EN'?$productsalls->pro_desc_en:$productsalls->pro_desc_th ?></p>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>