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
        <div class="product-area pt-60 pb-45">
            <div class="container">
                <div class="section-border mb-10">
                    <h4 class="section-title section-bg-white"><?=lang('News') ?></h4>
                </div>
                <div class="product-slider-nav nav-style"></div>
                <div class="headphone-slider-active owl-carousel product-slider">
                    <?php foreach ($news as $new) { ?>
                        <div class="devita-product-2">
                            <div class="product-img">
                                <a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/News/detail/<? echo $new->news_id ?>" target="_blank">
                                    <img src="<?php echo base_url() ?>images/news/<?php echo $new->news_id ?>.jpg?<?=rand()?>" alt="">
                                </a>
                            </div>
                            <div class="list-col">
                                <div class="gridview">
                                    <div class="product-content text-center">
                                        <h4 style="padding-top: 5px;"><a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/News/detail/<? echo $new->news_id ?>"  target="_blank"><?=$new->news_name ?></a></h4>   
                                        <p><?=$new->news_desc_short ?></p>   
                                    </div>
                                </div>
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
