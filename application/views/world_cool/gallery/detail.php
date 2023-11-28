<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?>Home"><?=lang('Home')?></a></li>
                <li ><a href="<?php echo base_url() ?>Gallery"><?=lang('Portforio')?></a></li>
                <li class="active"><?=$gallery->gallery_name ?></li>
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
                            <h2><?=$gallery->gallery_name ?></h2>
                        </div>
                        <div style="background-color: white;border-radius: 30px;margin-top: 30px;">
                            <?= $gallery->gallery_desc ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 30px;">
                <?php foreach ($galleryimages as $key => $galleryimage) { ?>
                    <div class="col-md-3" style="margin-bottom: 30px;">
                        <a href="<?php echo base_url() ?>images/gallery_images/<?php echo $galleryimage->image_id ?>.jpg" data-fancybox="gallery" data-caption="<?=$galleryimage->image_name?>">
                            <img style="width: 100%;height: 215px;object-fit: cover;" src="<?php echo base_url() ?>images/gallery_images/<?php echo $galleryimage->image_id ?>.jpg" alt="" />
                        </a>
                    </div>
                <? } ?>
        </div>

    </div>
</div>