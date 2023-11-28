<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
                <li class="active">วีดีโอสื่อการสอน</li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-65 pb-65">
    <div class="container">

        <div class="row">
            <?php foreach ($youtube as $key => $youtubeall) { ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrapper mb-30 main-blog">
                    <div class="blog-img mb-20">
                        <?php if ($youtubeall->media_type == 2) { ?>
                                <iframe width="100%" height="183" src="<?php echo $youtubeall->url ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <? } ?>
                            <?php if ($youtubeall->media_type == 1) { ?>
                                <iframe src="<?php echo $youtubeall->url ?>" width="100%" height="183" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                            <? } ?>
                    </div>
                    
                    <h3><a href="#"><?php echo $youtubeall->title_th ?></a></h3>
                    
                    <!-- <div class="blog-meta-bundle">
                        <div class="blog-meta">
                            <ul>
                                
                                <li><a href="#">Read more</a></li>
                            </ul>
                        </div>
                        <div class="blog-readmore">
                            <a href="blog-details.html">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
        <? } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pagination-total-pages">
                    <div class="pagination-style">
                            <?=$links?> 
                        </div>
                        <div class="total-pages">
                            <p>แสดง <? echo $starts ?> - <? echo $ends ?> ถึง <? echo $total_rows ?> จาก  </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
