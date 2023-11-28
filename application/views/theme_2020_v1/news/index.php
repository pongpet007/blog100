<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?>Home"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li class="active"><?=$lang=='EN'?'News & Blog':'ข่าวสาร และ บทความ' ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-65 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><?=$lang=='EN'?'NEWS':'ข่าวสาร' ?></h3>
            </div>
            <?php foreach ($newss as $key => $allnews) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrapper mb-30 main-blog">
                        <div class="blog-img mb-20">
                            <a href="<? echo base_url() ?>News/detail/<? echo $allnews->news_id ?>">
                            <img src="<?php echo base_url() ?>images/news/<?php echo $allnews->news_id ?>.jpg?<?=rand()?>" alt="">
                            </a>
                        </div>
                        <!-- <span>Design Digital</span> -->
                        <h3><a href="<? echo base_url() ?>News/detail/<? echo $allnews->news_id ?>"><?=$lang=='EN'?$allnews->news_title:$allnews->news_title_th ?></a></h3>
                        <p><?=$lang=='EN'?$allnews->news_short_detail:$allnews->news_short_detail_th ?></p>
                        <div class="blog-meta-bundle">
                            <div class="blog-meta">
                                <a href="<? echo base_url() ?>News/detail/<? echo $allnews->news_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="blog-readmore">
                                <a href="<? echo base_url() ?>News/detail/<? echo $allnews->news_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                
            <div class="col-lg-12">
                <h3><?=$lang=='EN'?'Blog':'บทความ' ?></h3>
            </div>
            <?php foreach ($blog as $key => $allblog) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrapper mb-30 main-blog">
                        <div class="blog-img mb-20">
                            <a href="<? echo base_url() ?>News/detail/<? echo $allblog->news_id ?>">
                            <img src="<?php echo base_url() ?>images/news/<?php echo $allblog->news_id ?>.jpg?<?=rand()?>" alt="">
                            </a>
                        </div>
                        <!-- <span>Design Digital</span> -->
                        <h3><a href="<? echo base_url() ?>News/detail/<? echo $allblog->news_id ?>"><?=$lang=='EN'?$allblog->news_title:$allblog->news_title_th ?></a></h3>
                        <p><?=$lang=='EN'?$allblog->news_short_detail:$allblog->news_short_detail_th ?></p>
                        <div class="blog-meta-bundle">
                            <div class="blog-meta">
                                <a href="<? echo base_url() ?>News/detail/<? echo $allblog->news_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="blog-readmore">
                                <a href="<? echo base_url() ?>News/detail/<? echo $allblog->news_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
    </div>
</div>