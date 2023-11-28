<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?>Home"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li class="active"><?=$lang=='EN'?'Portforio':'ผลงานของเรา' ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-30 pb-30">
    <div class="container">
        <div class="row">
                
            <div class="col-lg-12">
                <h3><?=$lang=='EN'?'Portforio':'ผลงานของเรา' ?></h3>
            </div>
            <?php foreach ($gallery as $key => $allgallery) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrapper mb-30 main-blog">
                        <div class="blog-img mb-20">
                            <a href="<? echo base_url() ?>Gallery/detail/<? echo $allgallery->gallery_id ?>">
                                <img src="<?php echo base_url() ?>images/gallery/<?php echo $allgallery->gallery_id ?>.jpg?<?=rand()?>" title="<?=$lang=='EN'?$allgallery->gallery_name:$allgallery->gallery_name_th ?>" alt="<?=$lang=='EN'?$allgallery->gallery_name:$allgallery->gallery_name_th ?>">
                            </a>
                        </div>
                        <!-- <span>Design Digital</span> -->
                        <h3 style="overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; 
   -webkit-box-orient: vertical;"><a href="<? echo base_url() ?>Gallery/detail/<? echo $allgallery->gallery_id ?>"><?=$lang=='EN'?$allgallery->gallery_name:$allgallery->gallery_name_th ?></a></h3>
                        
                        <div class="blog-meta-bundle">
                            <div class="blog-meta">
                                <p>
                                    <?=$lang=='EN'?$allgallery->gallery_short_detail:$allgallery->gallery_short_detail_th ?>
                                </p>
                                <a href="<? echo base_url() ?>Gallery/detail/<? echo $allgallery->gallery_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="blog-readmore">
                                <a href="<? echo base_url() ?>Gallery/detail/<? echo $allgallery->gallery_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
    </div>
</div>