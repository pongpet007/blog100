<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>"><?=$lang=='EN'?'Home':'หน้าแรก'?></a></li>
              <li><?=$lang=='EN'?'Blog':'บทความ' ?></li>
            </ol> 
        </div>
    </div>
</div>
<div class="blog-area ">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-12 col-lg-12">
                <div class="blog-details-wrapper">
                    <div class="single-blog-wrapper">
                        <div class="blog-details-content" style="margin-top: 30px;">
                            <h2><?=$lang=='EN'?$blog->title_en:$blog->title_th ?></h2>

                        </div>
                        <div style="background-color: white;padding: 30px;border-radius: 30px;margin-top: 30px;">
                            <?=$lang=='EN'?$blog->detail_en:$blog->detail_th ?>
                        </div>
                        
                        <div class="blog-dec-tags-social">
                            <div class="blog-dec-tags">
                            </div>
                            <div class="blog-dec-social">
                                <span>share :</span>
                                <ul>
                                    <?php $userinput = base_url("Blog/detail/{$blog->blog_id}"); ?>
                                    <li>

                                        <?php echo '<a class="" href="https://www.facebook.com/sharer/sharer.php?u=', urlencode($userinput), '">';
                                        ?>
                                            <i class="ion-social-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <?php echo '<a class="" href="https://twitter.com/share?url=', urlencode($userinput), '">';
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