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
  
<div class="blog-area pb-60" style="padding-top: 60px;">
    <div class="">
        <div class="section-border mb-30">
            <h4 class="section-title section-bg-white-2"><?=$lang=='EN'?'Blog':'บทความ' ?></h4>
            <a href="<?php echo base_url() ?>Blog">
                <h4 style="float: right;" class="section-title-right section-bg-white-2"><?=$lang=='EN'?'More':'เพิ่มเติม' ?></h4>
            </a>
            
        </div>
        <div class="blog-slider-active-3 owl-carousel nav-style devita-product-red-2">
            <?php foreach ($blogs as $blog) { ?>
                <div class="blog-wrapper-2 blog-wrapper-2-news text-center">
                    <div class="blog-img mb-15">
                         <a href="<? echo base_url() ?>Blog/detail/<? echo $blog->blog_id ?>" target="_blank">
                            <img src="<?php echo base_url() ?>images/blog/blog<?php echo $blog->blog_id ?>_s.jpg?<?=rand()?>" alt="">
                            </a>
                        <div class="blog-categori">
                                <span><?=$lang=='EN'?'Blog':'บทความ' ?></span>                            
                        </div>
                    </div>
                    <div class="blog-content">
                        <h4><a href="<? echo base_url() ?>Blog/detail/<? echo $blog->blog_id ?>"  target="_blank"><?=$lang=='EN'?$blog->title_en:$blog->title_th ?></a></h4>   
                        <p><?=$lang=='EN'?$blog->blog_short_detail:$blog->blog_short_detail_th ?></p>                    

                    </div>
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