<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
             <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>Home"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li><a href="<?php echo base_url() ?>Job"><?=$lang=='EN'?'Job':'ร่วมงานกับเรา' ?></a></li>
                <li class="active"><?=$lang=='EN'?$blog->job_name:$blog->job_name_th ?></li>
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
                            <h2><?=$lang=='EN'?$blog->job_name:$blog->job_name_th ?></h2>
                        </div>
                        <div style="background-color: white;padding: 30px;border-radius: 30px;margin-top: 30px;">
                            <?=$lang=='EN'?$blog->job_detail:$blog->job_detail_th ?>
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
                                <span><?=$lang=='EN'?'share':'แชร์' ?> :</span>
                                <ul>
                                    <?php $userinput = base_url("Job/detail/<? echo $blog->job_id ?>"); ?>
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