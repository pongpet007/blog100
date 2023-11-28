 <? 

 $i = json_decode($jsondata);

 $style = "margin-left:{$i->ml}px;";
 $style .= "margin-right:{$i->mr}px;";
 $style .= "margin-bottom:{$i->mb}px;";
 $style .= "margin-top:{$i->mt}px;";

 $style .= "padding-left:{$i->pl}px;";
 $style .= "padding-right:{$i->pr}px;";
 $style .= "padding-bottom:{$i->pb}px;";
 $style .= "padding-top:{$i->pt}px;";

 ?>
 <div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>">  
    <div class="wrap" style="text-align: center;">
        <div class="blog-area">
            <div class="product-area" style="padding-top: 0px;">
                <div class="title-article" style="text-align: left;">
                    <h1 class="section-article-title"><?=lang('Blog') ?></h1>
                    <hr>
                </div>

                <div class="blog_main row" style="margin-bottom: 30px;">
                    <?php foreach ($blogs as $key => $new_blogs) { ?>
                        <div class="col-md-4 ">
                            <div class="article_one">
                                <div class="article-img">
                                    <a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $new_blogs->blog_url ?>" target="_blank">
                                        <img src="<?php echo base_url() ?>images/blog/blog<?php echo $new_blogs->blog_id ?>_s.webp" alt="<?=$new_blogs->blog_name ?>" style="width: 100%;">
                                    </a>
                                </div>
                                <div class="article-text">
                                    <h1>
                                        <a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $new_blogs->blog_url ?>"><?=$new_blogs->blog_name ?></a>
                                    </h1>
                                    <p>
                                        <?=$new_blogs->blog_desc_short?>
                                    </p>
                                    <a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $new_blogs->blog_url ?>">
                                        <?=lang('See More')?>...
                                    </a>
                                </div> 
                            </div>
                                
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-12 seeall" style="text-align: right;">
                        <a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article" style="">
                            <?=lang('See All')?> <i style="padding-left: 15px;" class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <style type="text/css">
                    .title-article {
                        text-align: center;
                    }
                    .title-article .section-article-title {
                        text-align: center;color: #007437;font-size: 32px;line-height: 60pxfont-weight: 500;margin-bottom: 15px;
                    }
                    .title-article hr {
                        border: 2px solid #C49F06;width: 120px;text-align: center;margin: 0 auto 60px;
                    }
                    .article_one {
                        border: 5px solid #DEDEDE;
                    }
                    .article_one .article-img {
                        padding: 10px;
                    }
                    .article_one .article-text {
                        text-align: left;padding: 10px;
                    }
                    .article_one .article-text h1 {
                        font-size: 20px;line-height: 30px;font-weight: 500;color: #222529;border-left: 5px solid #FFCC00;padding-left: 5px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;
                    }
                    .article_one .article-text h1:hover a {
                        color: #201879;
                    }
                    .article_one .article-text p {
                        font-size: 16px;line-height: 25px;font-weight: 300;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;
                    }
                    .seeall a {
                        font-size: 16px;line-height: 25px;font-weight: 400;color: #222529;
                    }
                    .seeall a:hover {
                        color: #E59F25;
                    }
                </style>
                <?/*?>
                <div class="product-slider-nav nav-style nav-style-red"></div>
                <div class="headphone-slider-active-2 owl-carousel product-slider" style="margin-top: 30px;">

                    <?php for ($i=0; $i < sizeof($blogs) ; $i++) {  ?> 
                        <div class="item">
                            <div class="devita-product-2 devita-news-2 devita-product-red">
                                <div class="product-img">
                                    <a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $blogs[$i]->blog_url ?>" target="_blank">
                                        <img src="<?php echo base_url() ?>images/blog/blog<?php echo $blogs[$i]->blog_id ?>_s.webp" alt="<?=$blogs[$i]->blog_name ?>">
                                    </a>
                                </div>
                                <div class="list-colborblog">
                                    <div class="gridview borblog">
                                        <div class="product-content cuttext">
                                            <h1><a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $blogs[$i]->blog_url ?>"><?=$blogs[$i]->blog_name ?></a></h1>
                                            <p><?=$blogs[$i]->blog_desc_short?></p> 
                                            <h2>
                                                <a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $blogs[$i]->blog_url ?>">
                                                    <?=lang('See More')?>...
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?  $i++; if(isset($blogs[$i])){ ?>
                                <div class="devita-product-2 devita-news-2 devita-product-red">
                                    <div class="product-img">
                                        <a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $blogs[$i]->blog_url ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>images/blog/blog<?php echo $blogs[$i]->blog_id ?>_s.webp" alt="<?=$blogs[$i]->blog_name ?>">
                                        </a>
                                    </div>
                                    <div class="list-colborblog">
                                        <div class="gridview borblog">
                                            <div class="product-content cuttext">
                                                <h1><a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $blogs[$i]->blog_url ?>"><?=$blogs[$i]->blog_name ?></a></h1>
                                                <p><?=$blogs[$i]->blog_desc_short?></p> 
                                                <h2>
                                                    <a href="<? echo base_url($this->session->userdata('site_lang_name')) ?>/article-detail/<? echo $blogs[$i]->blog_url ?>">
                                                        <?=lang('See More')?>...
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    <? } ?>
                </div>
                <style type="text/css">
    .cuttext h1 {
        color: #222529;font-size: 21px;line-height: 25px;font-weight: 500;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;max-height: 50px;min-height: 50px;
    }
    .cuttext h1 a:hover {
        color: #0157a3;
    }
    .cuttext h2 {
        font-size: 14px;line-height: 15px;font-weight: 500;color: #DE0B0B;
    }
    .cuttext h2 a {
        font-size: 14px;line-height: 15px;font-weight: 500;color: #DE0B0B;
    }
    .cuttext h2 a:hover {
        color: #0156A3;
    }
    .cuttext p {
        font-size: 18px;line-height: 27px;font-weight: 400;color: #707070;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;max-height: 54px;
    }
    .section-border::before {
        top: 25px;
    }
    .devita-news-2 .list-col .gridview{
        padding: 0px 5px 30px 0px;
        border-bottom: 1px solid #dddddd;
        border-left: 1px solid #dddddd;
        border-right: 1px solid #dddddd;
    }
    .devita-news-2 {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .section-blog-title {
        color: #000000;font-size: 40px;line-height: 40px;font-weight: 500;padding-right: 10px;
    }
    .product-content {
        padding: 10px 10px 10px;
    }
    .section-blog-title::before {
        background-color: #FF0000;
        content: "";
        height: 2px;
        left: 15px;
        position: absolute;
        top: 50px;
        transition: all 0.4s ease 0s;
        width: 74px;
        z-index: 1;
    }
    @media (max-width: 575px) and (min-width: 300px) {
        .cuttext h1 {
            font-size: 18px;line-height: 25px;font-weight: 500;
        }
        .cuttext p {
            font-size: 16px;line-height: 27px;
        }
        .cuttext h2 {
            font-size: 16px;line-height: 20px;
        }
    }
</style>
                <?*/?>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>
