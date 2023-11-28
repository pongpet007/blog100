<section id="page-banner" class="page-banner-main-block" style="background-image: url('<?php echo base_url() ?>assets_theme_2020_v2/img/about/1.png')">
    <h1 class="page-banner-heading text-center">ข่าวสาร</h1>
</section>
<section class="breadcrumb-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
                    <li>ข่าวสาร</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section id="news-list" class="news-list-main-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($newsss as $key => $allnews) { ?>
                <div class="news-list-block">
                    <div class="news-list-img">
                        <a href="<? echo base_url() ?>News/detail/<? echo $allnews->news_id ?>"><img src="<?php echo base_url() ?>images/news/<?php echo $allnews->news_id ?>.jpg" class="img-responsive" alt="news"></a>
                    </div>
                    <div class="news-list-dtl">
                        <a href="<? echo base_url() ?>News/detail/<? echo $allnews->news_id ?>">
                            <h3 class="news-list-heading"><?=$lang=='EN'?$allnews->news_title:$allnews->news_title_th ?></h3>
                        </a>
                        <p><?=$lang=='EN'?$allnews->news_short_detail:$allnews->news_short_detail_th ?></p>
                        <a href="<? echo base_url() ?>News/detail/<? echo $allnews->news_id ?>" class="btn btn-default">อ่านเพิ่มเติม</a>
                    </div>
                </div>
                <?php } ?>
                <nav aria-label="Page navigation" class="news-list-pagination">
                    <?=$links?> 
                </nav>
            </div>
            <div class="col-sm-3">
                <div class="news-list-sidebar">
                    <div class="sidebar-widget search-widget">
                        <form method="GET" class="search-form" id="frmSearch" name="frmSearch" action="<?=base_url("News/");?>" style="margin-top: 25px;">
                            <div class="form-group">
                                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search Here.....">
                                <a href="#" onclick="$(this).closest('form').submit()"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget rct-news-widget">
                        <h6 class="widget-heading">ข่าวล่าสุด</h6>
                        <ul>
                            <?php foreach ($recentnres as $key => $recentnre) { ?>
                            <li>
                                <a href="<?php echo base_url() ?>News/detail/<?php echo $recentnre->news_id ?>">
                                    <h6 style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;line-height: 1.5;-webkit-box-orient: vertical;margin: 0 0 3px;text-transform: none;white-space: normal;text-overflow: ellipsis;height: 50px;" class="rct-news-title">
                                        <?=$lang=='EN'?$recentnre->news_title:$recentnre->news_title_th ?>
                                    </h6>
                                </a>
                                <div class="date"><?php echo $recentnre->news_datetime ?></div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="sidebar-widget tag-widget">
                        <h6 class="widget-heading">คำค้นหาบทความและข่าวสาร</h6>
                        <ul>
                            <?php foreach ($tags as $tag) { ?> 
                            <li class="tag-item"><a href="<?php echo base_url("news/index/?tags=$tag"); ?>" class="tag-link"><?php echo $tag ?></a></li>
                            <?php } ?> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>