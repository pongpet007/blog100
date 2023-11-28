 <? 
  
    $i = json_decode($jsondata);

    $style = "margin-left:{$i->ml}px;";
    $style .= "margin-right:{$i->mr}px;";
    $style .= "margin-bottom:{$i->mb}px;";
    $style .= "margin-top:{$i->mt}px;";

    $style .= "padding-left:{$i->pl}px;";
    $style .= "padding-right:{$i->pr}px;";
    $style .= "padding-bottom:{$i->pb}px;";
    $style .= "padding-top:{$i->pt}px;";

?>
<section id="featured" class="featured-main-block">
    <div class="section hide">
      <div class="container">
        <h3 class="section-heading">Featured Projects</h3>
      </div>
    </div>
    <div class="container">
      <div id="featured-slider" class="featured-slider">
        <?php foreach ($productsall as $key => $productsalls) { ?>
        <div class="item featured-block"> 
          <div class="featured-img">
             <?php   
                $filepath  = "images/product_new/pro_".$productsalls->pro_id.'01.jpg';
                $filepath2 = "images/product_new/pro_".$productsalls->pro_id.'02.jpg';
                $filepath3 = "images/product_new/pro_".$productsalls->pro_id.'03.jpg'; 
            ?>
            <? if(is_file($filepath)) { ?>
            <a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>">
            <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productsalls->pro_id; ?>01.jpg" alt="" class="img-responsive">
            </a>
            <? } ?>
            <div class="overlay-bg"></div>
          </div>
          <div class="featured-dtl">
            <h4><a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>"><?=$lang=='EN'?$productsalls->pro_name_en:$productsalls->pro_name_th ?></a></h4>
            <p><?=$lang=='EN'?$productsalls->pro_shot_detail_en:$productsalls->pro_shot_detail_th ?></p>
            <a href="<? echo base_url(); ?>Products/detail/<? echo $productsalls->pro_id ?>" class="btn btn-info btn-xs"><?=$lang=='EN'?'Detail':'รายละเอียด' ?></a>
          </div>
        </div>
        <?php } ?>
    
      </div>
    </div>
  </section>


<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>