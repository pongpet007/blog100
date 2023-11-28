<section id="testimonials" class="testimonials-main-block" style="background-image: url('<? echo base_url() ?>assets_theme_2020_v2/images/bg/testimonial-bg.jpg')">
  <div class="container">
    <div class="section">
      <h3 class="section-heading">ข่าวสารและกิจกรรม</h3>
    </div>
    <div class="row">
      <div id="testimonials-slider" class="testimonials-slider">
        <?php foreach ($news as $key => $allnews) { ?>
          <div class="item">
            <div class="testimonial-block">
              <div class="testimonial-detail">
                <a href="<? echo base_url() ?>News/detail/<? echo $allnews->news_id ?>">
                  <p><b><?php echo $allnews->news_title_th ?></b> <br>
                    <?php echo $allnews->news_name_th ?>
                  </p>
                </a>
                
              </div>
            </div>
          </div>
        <?php } ?>
          
      </div>
    </div>
  </div>
</section>