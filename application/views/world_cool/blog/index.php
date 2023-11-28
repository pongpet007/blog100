<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/home"><?=lang('Home') ?></a></li>
                <li class="active"><?=lang('Blog') ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-1133b5b3-bcbb-4530-989b-14dc5438d3ea"></div> -->
            </div>   
            <div class="col-lg-12">
                <h3 style="margin-bottom: 2.0rem;"><?=lang('Blog') ?></h3>
            </div>
            <?php foreach ($blogs as $key => $allblog) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrapper blog-wrapper-new mb-30 main-blog">
                        <div class="blog-img mb-20">
                            <a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/article-detail/<? echo $allblog->blog_url ?>">
                            <img src="<?php echo base_url() ?>images/blog/blog<?php echo $allblog->blog_id ?>_s.jpg?<?=rand()?>" alt="">
                            </a>
                        </div>
                        <!-- <span>Design Digital</span> -->
                        <a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/article-detail/<? echo $allblog->blog_url ?>"><h3 style="padding-top: 5px;"><?=$allblog->blog_name ?></h3></a>
                        <p><?=$allblog->blog_desc_short ?></p>
                        <div class="blog-meta-bundle">
                            <a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/article-detail/<? echo $allblog->blog_url ?>"><?=lang('Read more') ?>  <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
    </div>
</div>
<style type="text/css">
    .blog-wrapper.main-blog:hover {
        box-shadow: 0 0 15px #3140618a;
    }
</style>