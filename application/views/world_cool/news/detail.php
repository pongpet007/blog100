<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/home"><?=lang('Home')?></a></li>
                <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/news"><?=lang('News') ?></a></li>
                <li class="active"><?=$news->news_name ?></li>
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
                        <?=$news->news_desc ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;padding-top: 15px;">
            <div class="col-lg-12">
                <div class="blog_dec_tags">
                    <ul>
                        <li class="categories-title" style="font-weight: bold"><?=lang('Tag') ?> : </li>
                        <?php 
                        $arr = array();
                        $row = 0;

                        if(strstr($news->news_tags, ',')){
                            $keywords = explode(',', $news->news_tags);

                            $keywords2 = explode(',', $news->news_tags_url);
                                            // print_r($keywords);
                            for($i=0;$i< sizeof($keywords);$i++){
                                $arr[$row][0] = trim($keywords[$i]);
                                $arr[$row][1] = trim($keywords2[$i]);
                                $row++;
                            }
                        }
                        else{

                            $arr[$row][0] = $news->news_tags;
                            $arr[$row][1] = $news->news_tags_url;
                            $row++;
                        }           
                        $newarr = array();
                        for($x =0;$x< sizeof($arr);$x++){
                            if(!in_array($arr[$x][1] , $newarr)){
                                $newarr[$arr[$x][1]] =  $arr[$x][0];
                            }
                        }

                        $arr = array();
                        foreach ($newarr as $key => $newnewarr) {
                            $arr[] ='<li><a href="'. base_url($this->session->userdata('site_lang_name')."/news-tags/$key").'">'.$newnewarr .'</a></li>';
                        }

                        if(sizeof($arr)>0)
                            echo implode(' , ', $arr);
                        ?>   
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="share">
                    <? $urlshare = base_url()."".$this->session->userdata('site_lang_name')."/news/".$news->news_url ?>

                    <p style="background: #DE0B0B;padding: 5px;border-radius: 3px;color: #fff;display: inline-block;border: 1px solid #DE0B0B;margin-bottom: 5px;"><i class="bi bi-share-fill pe-2" style="margin-right: 5px;"></i><?=lang('share')?> </p>

                    <a class="btn-facebook" href="https://www.facebook.com/sharer.php?u=<?=$urlshare ?>"> <i class="fab fa-facebook-square" style="margin-right: 5px;"></i> <?=lang('facebook')?></a>

                    <a class="btn-line" href="https://social-plugins.line.me/lineit/share?url=<?=$urlshare ?>"> <i class="fab fa-line" style="margin-right: 5px;"></i> <?=lang('line')?></a>

                    <a class="btn-twitter" href="https://twitter.com/share?url=<?=$urlshare ?>"> <i class="fab fa-twitter"></i> <?=lang('twitter')?></a>

                    <a class="btn-mail" href="mailto:?subject=<?=$urlshare ?>"> <i class="far fa-envelope"></i> <?=lang('sendmail')?></a>

                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .btn-facebook {
        border: 1px solid #0a82ed;color: #0a82ed;padding: 5px 10px;border-radius: 3px;display: inline-block;
    }
    .btn-facebook:hover, .btn-facebook:focus {
        background-color: #0a82ed;
        color: #FFF;
    }
    .btn-line {
        border: 1px solid #00b300;color: #00b300;padding: 5px 10px;border-radius: 3px;display: inline-block;
    }
    .btn-line:hover, .btn-line:focus {
        background-color: #00b300;
        color: #FFF;
    }
    .btn-twitter {
        border: 1px solid #1da1f3;color: #1da1f3;padding: 5px 10px;border-radius: 3px;display: inline-block;
    }
    .btn-twitter:hover, .btn-twitter:focus {
        background-color: #1da1f3;
        color: #FFF;
    }
    .btn-mail {
        border: 1px solid #4F4F4F;color: #4F4F4F;padding: 5px 10px;border-radius: 3px;display: inline-block;
    }
    .btn-mail:hover, .btn-mail:focus {
        background-color: #4F4F4F;
        color: #FFF;
    }

    .share h5 {
        font-size: 16px;font-weight: bold;display: inline-block;
    }
    .share span a {
        color: #000;
    }
    .share span {
        font-weight: 300;
    }
    .share span:hover a {
        color: #DE0B0B;
    }
    .blog-main:hover {
        box-shadow: 1px 4px 15px #00000029;
    }
    .blog-title a h1 {
        font-size: 20px;line-height: 30px;font-weight: 500;color: #000;
    }
    .blog-title a:hover h1 {
        color: #DE0B0B;
    }
    .blog-title p {
        font-size: 16px;line-height: 30px;font-weight: 400;color: #000;
    }
    .blog-title a span {
        font-size: 16px;line-height: 30px;font-weight: 500;color: #000;
    }
    .blog-title a:hover span {
        color: #DE0B0B;
    }
    .blog_dec_tags ul li {
        font-size: 16px;
        font-weight: 300;
        display: inline-block;
    }
    .blog_dec_tags ul li a {
        color: #000;
    }
    .blog_dec_tags ul {
        padding-left: 0rem;
    }
    .blog_dec_tags ul li:hover a {
        color: #DE0B0B;
    }

</style>