<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?>Home"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li class="active"><?=$lang=='EN'?'Blog':'บทความ' ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-30 pb-30">
    <div class="container">
        <div class="row">
                
            <div class="col-lg-12">
                <h3><?=$lang=='EN'?'Blog':'บทความ' ?></h3>
            </div>
            <?php foreach ($blogs as $key => $allblog) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-wrapper mb-30 main-blog">
                        <div class="blog-img mb-20">
                            <a href="<? echo base_url() ?>Blog/detail/<? echo $allblog->blog_id ?>">
                            <img src="<?php echo base_url() ?>images/blog/blog<?php echo $allblog->blog_id ?>_s.jpg?<?=rand()?>" alt="">
                            </a>
                        </div>
                        <!-- <span>Design Digital</span> -->
                        <h3 style="overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; 
   -webkit-box-orient: vertical;"><a href="<? echo base_url() ?>Blog/detail/<? echo $allblog->blog_id ?>"><?=$lang=='EN'?$allblog->title_en:$allblog->title_th ?></a></h3>
                        
                        <div class="blog-meta-bundle">
                            <div class="blog-meta">
                                <a href="<? echo base_url() ?>Blog/detail/<? echo $allblog->blog_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="blog-readmore">
                                <a href="<? echo base_url() ?>Blog/detail/<? echo $allblog->blog_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
    </div>
</div>