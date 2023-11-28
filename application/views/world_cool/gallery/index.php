<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?>Home"><?=lang('Home')?></a></li>
                <li class="active"><?=lang('Portforio')?></li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-30 pb-30">
    <div class="container">
        <?php if (count($gallery_categorys) > 1) { ?>
            <div class="row" style="justify-content: center;padding: 0px 15px;margin-bottom: 30px;">
                <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/portforio" class="gallery_categorys <?=$checkactive == "0" ? "active" : ""?>">
                    ALL GALLERY
                </a>
                <?php foreach ($gallery_categorys as $key => $new_gallery_categorys) { ?>
                    <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/portforio-category/<?=$new_gallery_categorys->cat_url ?>" class="gallery_categorys <?=$checkactive == $new_gallery_categorys->cat_id ? "active" : ""?>">
                        <?=$new_gallery_categorys->cat_name ?>
                    </a>
                <?php } ?>
            </div>
            <style type="text/css">
                .gallery_categorys.active {
                    border: 1px solid #d90000;padding: 5px 5px;margin-right: 5px;background-color: #d90000;color: #FFF;font-size: 16px;
                }
                .gallery_categorys.active:hover {
                    border: 1px solid #d90000;padding: 5px 5px;margin-right: 5px;color: #000000;background-color: #FFF;
                }
                .gallery_categorys {
                    border: 1px solid #d90000;padding: 5px 5px;margin-right: 5px;font-size: 16px;
                }
                .gallery_categorys:hover {
                    border: 1px solid #d90000;padding: 5px 5px;margin-right: 5px;background-color: #d90000;color: #FFFFFF;
                }
            </style>
        <?php } ?>
            
        <div class="row">
                
            <div class="col-lg-12">
                
            </div>
            <?php foreach ($gallery as $key => $allgallery) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrapper mb-30 main-blog">
                        <div class="blog-img mb-20">
                            <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/portforio-detail/<?=$allgallery->gallery_url?>">
                                <img src="<?php echo base_url() ?>images/gallery/<?php echo $allgallery->gallery_id ?>.jpg" title="<?=$allgallery->gallery_name ?>" alt="<?=$allgallery->gallery_name ?>">
                            </a>
                        </div>
                        <!-- <span>Design Digital</span> -->
                        <h3><a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/portforio-detail/<?=$allgallery->gallery_url?>"><?=$allgallery->gallery_name ?></a></h3>
                        
                        <div class="blog-meta-bundle">
                            <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/portforio-detail/<?=$allgallery->gallery_url?>"><?=lang('Read more') ?> <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <? if ($links != "") { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-total-pages">
                        <div class="pagination-style">
                            <?=$links?> 
                        </div>
                        
                    </div>
                </div>
            </div>
        <? } ?>
            
        
    </div>
</div>
<style type="text/css">
    .blog-wrapper.main-blog:hover {
        box-shadow: 0 0 15px #3140618a;
    }
</style>