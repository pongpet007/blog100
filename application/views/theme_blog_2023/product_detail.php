<!doctype html>
<html class="no-js" lang="th">
<?php $this->load->view('theme_blog_2023/inc/header_meta') ?>
<body class="parallax webp">
    <?php $this->load->view('theme_blog_2023/inc/header') ?>
    
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo base_url() ?>"><?=lang('Home') ?></a></li>
                    <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/products"><?=lang('All Products') ?></a></li>

                    <?php if ($category->cat_name != "") { ?>
                    <?  
                        $cat_url = $category->cat_url; 
                    ?>
                    <li><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-category/$cat_url");?>"><?=$category->cat_name ?></a></li>
                    <?php } ?>
                    <li class="active"><?=$product->pro_name ?></li>


                </ul>
            </div>
        </div>
    </div>

    <style type="text/css">
        .breadcrumb-area {
            padding: 20px 0 20px;
            border-top: 5px solid <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
            border-bottom: 5px solid <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
        }
        .breadcrumb-area ul {
            padding: 0;margin-bottom: 0;
        }
        .breadcrumb-content li {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
            display: inline-block;
            font-size: 16px;
            margin-right: 28px;
            position: relative;
        }
        .breadcrumb-content li::before {
            background-color: #aaaaaa;
            content: "";
            height: 2px;
            position: absolute;
            right: -22px;
            top: 10px;
            transform: rotate(-67deg);
            transition: all 0.4s ease 0s;
            width: 12px;
        }
        .breadcrumb-content li:last-child:before {
            background-color: #aaaaaa;
            content: "";
            height: 0px;
            position: absolute;
            right: -22px;
            top: 10px;
            transform: rotate(-67deg);
            transition: all 0.4s ease 0s;
            width: 0px;
        }
        .breadcrumb-content li a {
            color: #000;text-decoration: none;
        }
        .breadcrumb-content li a:hover {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
        }
    </style>

    <div id="section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="products-names"><?=$product->pro_name ?></h1>
                    <div class="pro-dec-categories" style="margin-bottom: 30px;">
                        <ul>
                            <?  
                                $cat_url  = $category->cat_url;

                            ?>
                            <li class="categories-title" style="font-weight: bold"><?=lang('Category') ?> :</li>
                            <li><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-category/$cat_url");?>"><?=$category->cat_name ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="article-desc">
                        <?=$product->pro_desc_long ?>
                    </div>
                    <?/*?>
                    <div class="article-link">
                        <a href="<?=$category->product_link_social ?>">CONTACT LINK</a>
                    </div>
                    <?*/?>

                </div>

                <div class="col-lg-12">
                    <div class="article-tags">
                        <div class="product-description-wrapper">
                            <ul>
                                <li class="categories-title"><?=lang('TAGS') ?> :</li>
                                <?php 
                                    $arr = array();
                                    $row = 0;

                                    if(strstr($product->tags, ',')){
                                        $keywords = explode(',', $product->tags);

                                        $keywords2 = explode(',', $product->tags_url);
                                        // print_r($keywords);
                                        for($i=0;$i< sizeof($keywords);$i++){
                                            $arr[$row][0] = trim($keywords[$i]);
                                            $arr[$row][1] = trim($keywords2[$i]);
                                            $row++;
                                        }
                                    }
                                    else{

                                        $arr[$row][0] = $product->tags;
                                        $arr[$row][1] = $product->tags_url;
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
                                        $arr[] ='<li><a href="'. base_url($this->session->userdata('site_lang_name')."/products-tags/$key").'">'.$newnewarr .'</a></li>';
                                    }

                                    if(sizeof($arr)>0)
                                    echo implode(' , ', $arr);
                                ?>  
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="col-lg-12">
                    <div class="share">
                        <div class="product-details-content">
                            <div class="products-share">
                                <? $urlshare = base_url()."".$this->session->userdata('site_lang_name')."/products-detail/".$product->pro_url ?>

                                <p style="background: #DE0B0B;padding: 5px;border-radius: 3px;color: #fff;display: inline-block;border: 1px solid #DE0B0B;margin-bottom: 5px;">
                                    <i class="fa-solid fa-share-from-square" style="margin-right: 5px;"></i><?=lang('share')?> </p>

                                    <a class="btn-facebook" href="https://www.facebook.com/sharer.php?u=<?=$urlshare ?>"> <i class="fab fa-facebook-square" style="margin-right: 5px;"></i> <?=lang('facebook')?></a>

                                    <a class="btn-line" href="https://social-plugins.line.me/lineit/share?url=<?=$urlshare ?>"> <i class="fab fa-line" style="margin-right: 5px;"></i> <?=lang('line')?></a>

                                    <a class="btn-twitter" href="https://twitter.com/share?url=<?=$urlshare ?>"> <i class="fab fa-twitter"></i> <?=lang('twitter')?></a>

                                    <a class="btn-mail" href="mailto:?subject=<?=$urlshare ?>"> <i class="far fa-envelope"></i> <?=lang('sendmail')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style type="text/css">
            a {
                text-decoration: none;
            }
            #section1 {
                padding: 60px 0;
            }
            .btn-facebook {
                border: 1px solid #0a82ed;color: #0a82ed;padding: 5px 10px;border-radius: 3px;display: inline-block;text-decoration: none;
            }
            .btn-facebook:hover, .btn-facebook:focus {
                background-color: #0a82ed;
                color: #FFF;
            }
            .btn-line {
                border: 1px solid #00b300;color: #00b300;padding: 5px 10px;border-radius: 3px;display: inline-block;text-decoration: none;
            }
            .btn-line:hover, .btn-line:focus {
                background-color: #00b300;
                color: #FFF;
            }
            .btn-twitter {
                border: 1px solid #1da1f3;color: #1da1f3;padding: 5px 10px;border-radius: 3px;display: inline-block;text-decoration: none;
            }
            .btn-twitter:hover, .btn-twitter:focus {
                background-color: #1da1f3;
                color: #FFF;
            }
            .btn-mail {
                border: 1px solid #4F4F4F;color: #4F4F4F;padding: 5px 10px;border-radius: 3px;display: inline-block;text-decoration: none;
            }
            .btn-mail:hover, .btn-mail:focus {
                background-color: #4F4F4F;
                color: #FFF;
            }
            .products-names {
                font-size: 30px;font-weight: 500;color: <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;line-height: 60px;
            }
            .pro-dec-categories ul {
                padding: 0;
                margin-bottom: 0;
            }
            .pro-dec-categories ul li {
                color: #000000;
                display: inline-block;
                font-size: 16px;
                position: relative;
            }
            .pro-dec-categories ul li a {
                color: #000000;
                display: inline-block;
                font-size: 16px;
                position: relative;
                text-decoration: none;
            }
            .pro-dec-categories ul li a:hover {
                color: <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
            }
            .product-description-wrapper ul {
                padding: 0;
                margin-bottom: 15px;
                margin-top: 15px;
            }
            .product-description-wrapper ul li {
                font-size: 16px;
                font-weight: 500;
                display: inline-block;color: #000;
            }
            .product-description-wrapper ul li a {
                color: #000;text-decoration: none;font-weight: 400;
            }
            .product-description-wrapper ul li a:hover {
                color: <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
            }
        </style>

        <?php $this->load->view('theme_blog_2023/inc/footer') ?>
        <?php $this->load->view('theme_blog_2023/inc/footer_js') ?>

        <style type="text/css">

            @media (max-width: 767px) and (min-width: 300px) {

            }
            @media (max-width: 991px) and (min-width: 768px) {

            }
            @media (max-width: 1199px) and (min-width: 992px) {

            }
            @media (max-width: 1365px) and (min-width: 1200px) {

            }
            @media (max-width: 1599px) and (min-width: 1366px) {

            }
            @media (min-width: 1600px) {}

        </style>


        <style type="text/css">
            .fb-page,
            .fb-page span,
            .fb-page span iframe[style] {
                max-width: 100% !important;
            }
        </style>




    </body>

    </html>

