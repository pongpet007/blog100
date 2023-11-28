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
<section id="portfalio" class="portfalio-main-block">
    <div class="section ">
      <div class="container">
        <h3 class="section-heading"><?=$lang=='EN'?'Portfalio':'ผลงานของเรา'?></h3>
      </div>
    </div>
    <div class="container">
      <div id="portfalio-slider" class="portfalio-slider">
        <?php foreach ($gallerys as $gallery) { ?>
        <div class="item portfalio-block"> 
          <div class="portfalio-img">
             <?php   
                $filepath  = "images/gallery/".$gallery->gallery_id.'.jpg';               
            ?>
            <? if(is_file($filepath)) { ?>
            <a href="<? echo base_url(); ?>Gallery/detail/<?= $gallery->gallery_id ?>">
            <img src="<?php echo base_url($filepath); ?>" alt="" class="img-responsive">
            </a>
            <? } ?>
            <div class="overlay-bg"></div>
          </div>
          <div class="portfalio-dtl">
            <h4><a href="<? echo base_url(); ?>Gallery/detail/<? echo $gallery->gallery_id ?>"><?=$lang=='EN'?$gallery->gallery_name:$gallery->gallery_name_th ?></a></h4>
            <p><?=$lang=='EN'?$gallery->gallery_short_detail:$gallery->gallery_short_detail_th ?></p>
            <a href="<? echo base_url(); ?>Gallery/detail/<? echo $gallery->gallery_id ?>" class="btn btn-success btn-xs"><?=$lang=='EN'?'Detail':'รายละเอียด' ?></a>
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