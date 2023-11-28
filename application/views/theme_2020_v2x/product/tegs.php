<section id="page-banner" class="page-banner-main-block" style="background-image: url('<?php echo base_url() ?>assets_theme_2020_v2/img/about/1.png')">
    <h1 class="page-banner-heading text-center">สินค้า</h1>
</section>
<section class="breadcrumb-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
                    <li>สินค้า</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- end breadcrumb -->
<!--  news -->
<section id="news-grid" class="news-grid-main-block">
    <div class="container">
        <div class="row">
            <?php foreach ($product as $key => $productall) { ?>
            <div class="col-md-3 col-sm-6">
                <div class="news-grid-block">
                    <div class="news-grid-img">
                        <a href="single-post.html"><img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $productall->pro_id; ?>01.jpg" class="img-responsive" alt="news"></a>
                    </div>
                    <div class="news-grid-dtl">
                        <a href="single-post.html">
                            <h5 class="news-grid-heading"><?=$lang=='EN'?$productall->pro_name_en:$productall->pro_name_th ?></h5>
                        </a>
                        <p><?=$lang=='EN'?$productall->pro_desc_en:$productall->pro_desc_th ?></p>
                        <a href="single-post.html" class="plain-btn">Read More</a> 
                    </div>
                </div>
            </div>
            <?php }  ?>
        </div>
        <nav aria-label="Page navigation" class="news-grid-pagination">
            <?=$links?> 
        </nav>
    </div>
</section>