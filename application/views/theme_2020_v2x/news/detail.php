<section id="page-banner" class="page-banner-main-block" style="background-image: url('<?php echo base_url() ?>assets_theme_2020_v2/img/about/1.png')">
    <h1 class="page-banner-heading text-center">ข่าวสารและบทความ</h1>
</section>
<!--  end page banner  -->
<!--  breadcrumb -->
<section class="breadcrumb-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>Home">หน้าแรก</a></li>
                    <?php if ($news->news_type_id == 1) { ?>
                    <li>ข่าวสาร</li>
                    <?php } ?>
                    <?php if ($news->news_type_id == 2) { ?>
                    <li>บทความ</li>
                    <?php } ?>
                    <li><?=$lang=='EN'?$news->news_title:$news->news_title_th ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end breadcrumb -->
<!--  single post -->
<section id="single-post" class="single-post-main-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="news-list-block single-post-block">
                    <!-- <div class="news-list-img">
                        <img src="images/blog/list-news-3.jpg" class="img-responsive" alt="news">
                        </div> -->
                    <div class="news-list-dtl">
                        <h3 class="news-list-heading"><?=$lang=='EN'?$news->news_title:$news->news_title_th ?></h3>
                        <ul class="meta-tags">
                        </ul>
                        <?=$lang=='EN'?$news->news_desc:$news->news_desc_th ?>
                    </div>
                </div>
                <div class="single-post-tag-block">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-post-tag">Tags: 
                                <?php 
                                    $str = $lang=='EN'?$news->tag_en:$news->tag_th;
                                    $tags = array();
                                    if(strstr($str,',')){
                                        $tags = explode(',', $str);
                                    }else{
                                        if($str){
                                            $tags[] = $str;
                                        }
                                    }                               
                                    foreach ($tags as $tag) { ?>  
                                <a href="<?php echo base_url("news/index/$tag"); ?>"><?php echo $tag ?> ,</a>
                                <?php } ?> 
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-post-share text-right">
                                <ul>
                                    <li>Share: </li>
                                    <li class="facebook"><a href="http://www.facebook.com/sharer/sharer.php" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/intent/tweet" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <li class="tag-item"><a href="<?php echo base_url("news/index/$tag"); ?>" class="tag-link"><?php echo $tag ?></a></li>
                            <?php } ?> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>