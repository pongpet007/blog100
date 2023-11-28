<section id="page-banner" class="page-banner-main-block" style="background-image: url('<?php echo base_url() ?>assets_theme_2020_v2/img/about/1.png')">
    <h1 class="page-banner-heading text-center">หนังสืออิเล็กทรอนิกส์</h1>
</section>
<section class="breadcrumb-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
                    <li>หนังสืออิเล็กทรอนิกส์</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section id="team" class="team-main-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="section">
          <h3 class="section-heading">E-BOOK ONLINE</h3>
        </div>
        <div class="team-block">
          <p>คู่มือการใช้งานออนไลน์ ที่เรารวบรวมไว้ให้คุณสามารถคลิกเข้าชมเพื่อข้อมูลทั้งหมดได้ ที่นี่</p>
          <a href="<?php echo base_url() ?>Ebook" class="btn btn-default">View</a>
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
                <h6 style="text-align: center;min-height: 50px;" class="team-name"><?php echo $indexebook->name_th ?></h6>
              </a>
              <!-- <div class="team-post">Co-Founder</div>
                <div class="team-contact"><a href="tel:#">+87 1244 25 4240</a></div> -->
              <div style="text-align: center;margin-bottom: 20px;" class="team-mail"><a target="_blank" href="<?php echo $indexebook->link ?>">ดาวน์โหลด</a></div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>