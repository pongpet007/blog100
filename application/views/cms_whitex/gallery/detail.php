<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?>Home"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li ><a href="<?php echo base_url() ?>Gallery"><?=$lang=='EN'?'Portforio':'ผลงานของเรา' ?></a></li>
                <li class="active"><?=$lang=='EN'?$blog->gallery_name:$blog->gallery_name_th ?></li>
            </ul>
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
                            <h2><?=$lang=='EN'?$blog->gallery_name:$blog->gallery_name_th ?></h2>
                        </div>
                        <div style="background-color: white;padding: 30px;border-radius: 30px;margin-top: 30px;">
                            <?=$lang=='EN'?$blog->gallery_detail:$blog->gallery_detail_th ?>
                        </div>
                        <div class="grids">
                            <?php foreach ($gallery as $key => $newgallery) { ?>
                            <div class="grid-item">
                                <a href="<?php echo base_url() ?>images/gallery_images/<?php echo $newgallery->image_id ?>.jpg" data-fancybox="gallery" data-caption="<?=$lang=='EN'?$blog->gallery_name:$blog->gallery_name_th ?>">
                                <img style="width: 100%" src="<?php echo base_url() ?>images/gallery_images/<?php echo $newgallery->image_id ?>.jpg" alt="" />
                                </a>
                            </div>
                            <?/*?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6" style="flex: unset;">
                                <a href="<?php echo base_url() ?>images/gallery_images/<?php echo $newgallery->image_id ?>.jpg" data-fancybox="gallery" data-caption="<?=$lang=='EN'?$blog->gallery_name:$blog->gallery_name_th ?>">
                                <img style="width: 100%" src="<?php echo base_url() ?>images/gallery_images/<?php echo $newgallery->image_id ?>.jpg" alt="" />
                                </a>
                            </div>
                            <?*/?>
                            <?php } ?>
                        </div>
                        
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
                                    <?php $userinput = base_url("Gallery/detail/{$blog->gallery_id}"); ?>
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