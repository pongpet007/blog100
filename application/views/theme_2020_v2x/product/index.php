<section id="page-banner" class="page-banner-main-block" style="background-image: url('<?php echo base_url() ?>assets_theme_2020_v2/img/about/1.png')">
    <h1 class="page-banner-heading text-center">สินค้า</h1>
</section>
<!--  end page banner  -->
<!--  breadcrumb -->
<section class="breadcrumb-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
                    <li>สินค้า</li>
                </ol>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
</section>
<!-- end breadcrumb -->
<!-- projects  -->
<section id="projects-page" class="projects-page-main-block">
    <div class="container">
        <div class="projects-filter">
            <ul>
                <li style="font-size: 16px;" class="btn fil-cat" data-rel="all">หมวดหมู่ทั้งหมด</li>
                <?php foreach ($categorys as $key => $categoryss) { ?>
                <li style="font-size: 16px;" class="btn fil-cat" data-rel="<?php echo $categoryss->cat_id ?>"><?=$lang=='EN'?$categoryss->short_cat_name:$categoryss->short_cat_name_th ?></li>
                <? } ?>
            </ul>
        </div>
        <div class="row">
            <div id="projects-gallery" class="projects-gallery">

            <? foreach ($products as $newproducts) { ?>
                <? foreach ($newproducts as $key => $newproductss) { ?>
                <div class="col-md-3 col-sm-4 projects-gallery-block scale-anm all <? echo $newproducts[0]->cat_id ?>">
                    <div class="featured-block">
                        <div class="featured-img">
                            <img src="<?php echo base_url(); ?>/images/product_new/pro_<?php echo $newproductss->pro_id; ?>01.jpg" class="img-responsive" alt="projects">
                            <div class="overlay-bg"></div>
                        </div>
                        <div class="featured-dtl">
                            
                            <a href="<?php echo base_url("products/detail/")?><? echo $newproductss->pro_id ?>" class="btn btn-default">รายละเอียดเพิ่มเติม</a>
                        </div>
                        <div class="team-social1" style="text-align: center;">
                          <ul>
                            <li><a href="<?php echo base_url("products/detail/")?><? echo $newproductss->pro_id ?>" target="_blank"><? echo $newproductss->pro_name_th ?></a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>

            </div>
        </div>
    </div>
</section>
<style type="text/css">
  .team-social1 ul li a:hover {
      color: #012043;
      font-size: 15px;
  }
  .team-social1 {
  
  bottom: 0px;
  width: 100%;
  
  opacity: 1;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.team-social1 ul li {
  display: inline-block;
  padding: 10px 5px 8px;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.team-social1 ul li a {
  color: #222;
  font-size: 15px;
}
.team-social1 ul li:hover {
  padding: 10px 10px 8px;
  /*background-color: #ECC53f;*/
}
</style>

<section id="team" class="team-main-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="section">
          <h3 class="section-heading">หนังสืออิเล็กทรอนิกส์ ออนไลน์</h3>
        </div>
        <div class="team-block">
          <p>คู่มือการใช้งานออนไลน์ ที่เรารวบรวมไว้ให้คุณสามารถคลิกเข้าชมเพื่อข้อมูลทั้งหมดได้ ที่นี่</p>
          <a href="<?php echo base_url() ?>Ebook" class="btn btn-default">เพิ่มเติม</a>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="row">
          <?php foreach ($ebook as $key => $indexebook) { ?>
          <div class="col-md-3 col-sm-6">
            <div class="team-member">
              <div class="team-img">
                <img src="<? echo base_url() ?>images/ebook/<?php echo $indexebook->ebook_id ?>.jpg" class="img-responsive" alt="team-member">
                <div class="team-social">
                  <ul>
                    <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
              <a href="<?php echo $indexebook->link ?>">
                <h6 style="text-align: center;" class="team-name"><?php echo $indexebook->name_th ?></h6>
              </a>
              <!-- <div class="team-post">Co-Founder</div>
                <div class="team-contact"><a href="tel:#">+87 1244 25 4240</a></div> -->
              <div style="text-align: center;" class="team-mail"><a target="_blank" href="<?php echo $indexebook->link ?>">ดาวน์โหลด</a></div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>