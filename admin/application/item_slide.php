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
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>">  
<div class="wrap" style="text-align: center;">
  <div class="brand-logo-area">
    <div class="container">
        <div class="section-border">
            <h4 class="section-title section-bg-white-2"><?=$lang=='EN'?'OUR ':'ลูกค้าของเรา' ?></h4>
            
            
        </div>
        <div class="brand-logo-active owl-carousel ptb-60">
            <?php foreach ($imgss as $key => $imgsss) { ?>
                <div class="single-brand-logo">
                    <img style="width: 100%" src="<?php echo base_url() ?>images/slide_images/<?php echo $imgsss->slide_image_id ?>.jpg">
                </div>
            <?php } ?>
        </div>
    </div>
</div>


</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>

