<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>"><?=$lang=='EN'?'Home':'หน้าแรก'?></a></li>
              <li><?=$lang=='EN'?'Blog':'บทความ' ?></li>
            </ol> 
          
        </div>
    </div>
</div>
<div class="blog-area " style="padding: 50px 0;">
    <div class="container">
        <div class="row">
                
            <div class="col-md-12">
                <h3 style="margin-bottom: 2.0rem;"><?=$lang=='EN'?'Blog':'บทความ' ?></h3>
            </div>
            <?php foreach ($blogs as $key => $allblog) { ?>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-wrapper blog-wrapper-new mb-30 main-blog">
                        <div class="blog-img mb-20">
                            <a href="<? echo base_url() ?>Blog/detail/<? echo $allblog->blog_id ?>">
                            <img src="<?php echo base_url() ?>images/blog/blog<?php echo $allblog->blog_id ?>_s.jpg?<?=rand()?>" alt="">
                            </a>
                        </div>
                        <!-- <span>Design Digital</span> -->
                        <h3 style=""><a href="<? echo base_url() ?>Blog/detail/<? echo $allblog->blog_id ?>"><?=$lang=='EN'?$allblog->title_en:$allblog->title_th ?></a></h3>
                        <p><?=$lang=='EN'?$allblog->blog_short_detail:$allblog->blog_short_detail_th ?></p>
                        <div class="blog-meta-bundle">
                            <div class="blog-meta">
                                <a href="<? echo base_url() ?>Blog/detail/<? echo $allblog->blog_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>                            
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
    </div>
</div>