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
<div class="wrap" >
  
<!-- featured product  -->
  <section id="featured" class="featured-main-block">
    <div class="section">
      <div class="container">
        <h3 class="section-heading"><?=$lang=='EN'?'Blog':'บทความ' ?></h3>
      </div>
    </div>
    <div class="container">
      <div id="featured-slider" class="featured-slider">
        <?php foreach ($blogs as $blog) { ?>
        <div class="item featured-block"> 
          <div class="featured-img">
            <img src="<?php echo base_url() ?>images/blog/blog<?php echo $blog->blog_id ?>_s.jpg?<?=rand()?>" alt="" class="img-responsive">           
            <div class="overlay-bg"></div>
          </div>
          <div class="featured-dtl">
            <h5 class="featured-heading"><?=$lang=='EN'?$blog->title_en:$blog->title_th ?></h5>
            <a href="<? echo base_url() ?>Blog/detail/<? echo $blog->blog_id ?>"  target="_blank" class="btn btn-default"><?=$lang=='EN'?'Detail':'รายละเอียด'?></a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
<!-- end featured product  -->

</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>