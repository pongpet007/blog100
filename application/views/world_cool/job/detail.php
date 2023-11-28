<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?>Home"><?=lang('Home') ?></a></li>
                <li><a href="<?php echo base_url() ?>Job"><?=lang('Job') ?></a></li>
                <li class="active"><?=$job->job_name ?></li>
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
                            <h2><?=$job->job_name ?></h2>
                        </div>
                        <div style="background-color: white;padding: 30px;border-radius: 30px;margin-top: 30px;">
                            <?=$job->job_desc ?>
                        </div>
                        
                        
                        <div class="blog-dec-tags-social">
                            
                            <div class="blog-dec-social">
                                <span><?=lang('share') ?> :</span>
                                <ul>
                                    <?php $userinput = base_url("Job/detail/<? echo $job->job_id ?>"); ?>
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