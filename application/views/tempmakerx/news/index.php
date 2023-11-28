<section class="breadcrumb-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
               <ol class="breadcrumb">
                <li><a href="<? echo base_url() ?>Home"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li class="active"><?=$lang=='EN'?'News':'ข่าวสาร' ?></li>
            </ol>
            </div>
        </div>
    </div>
</section>
<!--  news -->
  <section id="news-grid" class="news-grid-main-block">
    <div class="container">
      <div class="row">
        <?php foreach ($newss as $key => $allblog) { ?>
        <div class="col-md-4 col-sm-6">
          <div class="news-grid-block">
            <div class="news-grid-img">
              <a href="<? echo base_url() ?>News/detail/<? echo $allblog->news_id ?>">
                <img src="<?php echo base_url() ?>images/news/<?php echo $allblog->news_id ?>.jpg?<?=rand()?>" class="img-responsive" alt="<?=$lang=='EN'?$allblog->news_title:$allblog->news_title_th ?>">                 
                </a>
            </div>
            <div class="news-grid-dtl">
              <a href="<? echo base_url() ?>News/detail/<? echo $allblog->news_id ?>"><h5 class="news-grid-heading"><?=$lang=='EN'?$allblog->news_title:$allblog->news_title_th ?></h5></a>
              <div class="date hide">August 22, 2016</div>
              <p><?=$lang=='EN'?$allblog->news_short_detail:$allblog->news_short_detail_th ?></p> 
              <a href="<? echo base_url() ?>News/detail/<? echo $allblog->news_id ?>" class="plain-btn"><?=$lang=='EN'?'Read More':'อ่านเพิ่ม'?></a> 
            </div>
          </div>
        </div>        
        <?php } ?>
      </div>
      <nav aria-label="Page navigation" class="news-grid-pagination">        
        <?=$links ?>
      </nav>
    </div>
  </section>
<!--  end news -->