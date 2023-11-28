<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?>Home"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li ><a href="<?php echo base_url() ?>News"><?=$lang=='EN'?'News':'ข่าวสาร' ?></a></li>
                <li class="active"><?=$lang=='EN'?$news->news_title:$news->news_title_th ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-65 pb-65">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-12 col-lg-12">
                <div class="blog-details-wrapper">
                    <div class="single-blog-wrapper">
                        <!-- div class="blog-img mb-30">
                            <img src="<? echo base_url() ?>images/news/<? echo $news->news_id ?>.jpg" alt="">
                        </div> -->
                        <div class="blog-details-content">
                            <h2 ><?=$lang=='EN'?$news->news_title:$news->news_title_th ?></h2>

                        </div>
                        <?=$lang=='EN'?$news->news_desc:$news->news_desc_th ?>
                        <div class="blog-dec-tags-social">
                            <div class="blog-dec-tags">
                                <!-- <ul>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Sports</a></li>
                                </ul> -->
                            </div>
                            <div class="blog-dec-social">
                                <span>share :</span>
                                <ul>
                                    <?php $userinput = base_url("News/detail/$news->news_id"); ?>
                                    <li>

                                        <?php echo '<a class="" href="https://www.facebook.com/sharer/sharer.php?u=', urlencode($userinput), '" target="_blank">';
                                        ?>
                                            <i class="ion-social-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <?php echo '<a class="" href="https://twitter.com/share?url=', urlencode($userinput), '" target="_blank">';
                                        ?>
                                            <i class="ion-social-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>