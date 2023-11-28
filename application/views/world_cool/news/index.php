<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/Home"><?=lang('Home')?></a></li>
                <li class="active"><?=lang('News') ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-30 pb-30">
    <div class="container">
        <div class="row">           
                
            <div class="col-lg-12">
                <h3 style="margin-bottom: 2.0rem;"><?=lang('News') ?></h3>
            </div>
            <?php foreach ($newss as $key => $allblog) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrapper blog-wrapper-new mb-30 main-blog">
                        <div class="blog-img mb-20">
                            <a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/news-detail/<? echo $allblog->news_url ?>">
                            <img src="<?php echo base_url() ?>images/news/<?php echo $allblog->news_id ?>.jpg?<?=rand()?>" alt="">
                            </a>
                        </div>
                        <!-- <span>Design Digital</span> -->
                        <h3><a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/news-detail/<? echo $allblog->news_url ?>"><?=$allblog->news_name ?></a></h3>
                        <p><?=$allblog->news_desc_short ?></p>
                        <div class="blog-meta-bundle">
                            <div class="blog-meta">
                                <a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/news-detail/<? echo $allblog->news_url ?>"><?=lang('Read more') ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="blog-readmore">
                                <a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/news-detail/<? echo $allblog->news_url ?>"><?=lang('Read more') ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
    </div>
</div>