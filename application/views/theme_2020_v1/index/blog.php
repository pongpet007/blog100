<div class="blog-area pb-60" style="padding-top: 60px;">
    <div class="container">
        <div class="section-border mb-30">
            <h4 class="section-title section-bg-white-2"><?=$lang=='EN'?'Blog':'บทความ' ?></h4>
        </div>
        <div class="blog-slider-active-3 owl-carousel nav-style devita-product-red-2">
            <?php foreach ($news as $key => $news_index) { ?>
                <div class="blog-wrapper-2 text-center">
                    <div class="blog-img mb-15">
                        <a href="#"><img alt="" src="<? echo base_url() ?>images/news/<?php echo $news_index->news_id ?>.jpg?<?=rand()?>"></a>
                        <div class="blog-categori">
                            <?php if ($news_index->news_type_id == 1 ) { ?>
                                <span><?=$lang=='EN'?'News and Activity':'ข่าวสารและกิจกรรม' ?></span>
                            <?php } ?>
                            <?php if ($news_index->news_type_id == 2 ) { ?>
                                <span><?=$lang=='EN'?'Blog':'บทความ' ?></span>
                            <?php } ?>

                            
                        </div>
                    </div>
                    <div class="blog-content">
                        <h4><a href="#"><?=$lang=='EN'?$news_index->news_title:$news_index->news_title_th ?></a></h4>
                        <p><?=$lang=='EN'?$news_index->news_short_detail:$news_index->news_short_detail_th ?></p>
                    </div>
                </div>
            <?php } ?>  
        </div>
    </div>
</div>