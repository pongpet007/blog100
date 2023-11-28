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
        <div class="product-area pb-30" >
            <div class="">
                <div class="mb-30 news_home">
                    <h4 class="new_h4"><?=$lang=='EN'?'Activity And News':'กิจกรรม และข่าวสาร' ?></h4>
                    <p class="new_company"><?=$lang=='EN'?$companyData->com_name_en:$companyData->com_name_th?></p>
                    <p class="new_detail"><?=$lang=='EN'?'News of our various movements':'ข่าวสารความเคลื่อนไหวต่างๆ ของเรา'?></p>
                </div>

                <div class="blog-slider-active-4 owl-carousel nav-style devita-product-red-2">
                    <?php foreach ($news as $key => $newsalls) { ?>
                        <div class="blog-wrapper-2 blog-wrapper-2-news text-center box-bor-shadow">
                            <div class="blog-img mb-15">
                                 <a href="<? echo base_url(); ?>News/detail/<? echo $newsalls->news_id ?>" target="_blank">
                                    <img src="<?php echo base_url(); ?>images/news/<?php echo $newsalls->news_id; ?>.jpg" alt="">
                                    </a>
                            </div>
                            <div class="blog-content news-content">
                                <h4><a href="<? echo base_url(); ?>News/detail/<? echo $newsalls->news_id ?>"  target="_blank"><?=$lang=='EN'?$newsalls->news_title:$newsalls->news_title_th ?></a></h4>   
                                <p class="height"><?=$lang=='EN'?$newsalls->news_short_detail:$newsalls->news_short_detail_th ?></p>

                                <p class="readmore" style="text-align: right;"><?=$lang=='EN'?'Read More':'อ่านเพิ่มเติม' ?></p>                    

                            </div>
                        </div>
                    <?php } ?>  
                </div>
                <?/*?>
                <div class="tab-content jump">
                    <div class="tab-pane active" id="home2">
                        <div class="custom-row">
                            <?php foreach ($news as $key => $newsalls) { ?>
                            <div class="custom-col-4" style="padding:5px;">
                                <div class="devita-product-2 mrg-inherit">
                                    <div class="product-img">
                                        <div class="product-img-slider">
                                            <?php   $filepath  = "images/news/".$newsalls->news_id.'.jpg'; ?>
                                            <? if(is_file($filepath)) { ?>
                                            <a href="<? echo base_url(); ?>News/detail/<? echo $newsalls->news_id ?>">
                                            <img src="<?php echo base_url(); ?>images/news/<?php echo $newsalls->news_id; ?>.jpg" alt="">
                                            </a>
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="list-col">
                                        <div class="gridview">
                                            <div class="product-content text-center">
                                                <h4><a href="<? echo base_url(); ?>News/detail/<? echo $newsalls->news_id ?>"><?=$lang=='EN'?$newsalls->news_title:$newsalls->news_title_th ?></a></h4>
                                            </div>
                                            <div class="product-action-wrapper-2 text-center">
                                                <p><?=$lang=='EN'?$newsalls->news_short_detail:$newsalls->news_short_detail_th ?></p>
                                                <div class="product-action">
                                                    <a class="action-cart" title="Add To Cart" href="<? echo base_url(); ?>News/detail/<? echo $newsalls->news_id ?>">
                                                    <?=$lang=='EN'?'Read More':'อ่านเพิ่มเติม' ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?*/?>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .item<?=$item_id?> .wrap{
        <?=$style?>
    }
</style>