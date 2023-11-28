<?php 
            $filepath = "images/product_new/pro_banner_{$product->pro_id}01.jpg";
          ?>
          <?php
            if (is_file($filepath)) {?>
              <img class="img-responsive" src="<?php echo base_url() ?>images/product_new/pro_banner_<?php echo $product->pro_id ?>01.jpg">
            <? }
          ?>


<!--  end page banner  -->
<!--  breadcrumb -->
<section class="breadcrumb-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
          <li><a href="<?php echo base_url() ?>Products">สินค้า</a></li>
          <li><?php echo $product->pro_name_th ?></li>
        </ol>
      </div>
      <div class="col-sm-4">
        <div class="breadcrumb-btn">

          <a href="<? echo base_url(); ?>Products/quotation/<? echo $product->pro_id ?>?qtybutton=01" class="btn btn-default">ขอใบเสนอราคา</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end breadcrumb -->
<!-- projects  -->
<section id="project-dtl" class="project-dtl-main-block">
  <?php if ($product->content_active==1) { ?>
  <div class="container" style="margin-bottom: 15px;">
    <?php echo $product->pro_desc_th_long ?>
  </div>
  <? } ?>
  <?php if ($product->content_active==2) { ?>
  <?php echo $content->profile_th ?>
  <? } ?>
</section>
<section id="news-list" class="">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="news-list-sidebar">
          <div class="sidebar-widget tag-widget">
            <h6 class="widget-heading">คำค้นหา</h6>
            <ul>
              <?php 
                $str = $lang=='EN'?$product->tags_en:$product->tags_th;
                $tags = array();
                if(strstr($str,',')){
                    $tags = explode(',', $str);
                }else{
                    if($str){
                        $tags[] = $str;
                    }
                }                               
                foreach ($tags as $tag) { ?>  
              <li><a href="<?php echo base_url("Products/showtag/?tag=$tag"); ?>"><?php echo $tag ?></a></li>
              <?php } ?> 
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end projects  -->
<section id="team-abt" class="team-abt-main-block">
  <div class="container">
    <div class="section">
      <h3 class="section-heading">ผลงานของเรา</h3>
    </div>
    <div class="row">
      <?php $newkey = 0;
        foreach ($portforio as $key => $portforios) {
        $newkey = $newkey+1; ?>
      <div class="col-md-3 col-sm-4">
        <div class="team-member">
          <div class="team-img">
            <a onclick="openModal();currentSlide(<?php echo $newkey ?>)">
            <img src="<?php echo base_url() ?>images/cover/<?php echo $portforios->company_ads_id ?>.jpg" class="img-responsive" alt="team-member">
            </a>
          </div>
          <a onclick="openModal();currentSlide(<?php echo $newkey ?>)">
            <h6 style="text-align: center;" class="team-name"><?php echo $portforios->name_th ?></h6>
          </a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
    <?php 
      $newkey = 0;
      foreach ($portforio as $key => $portforioall) { 
      $newkey = $newkey+1;
      ?>
    <div class="mySlides">
      <div class="numbertext"><?php echo $newkey ?> / 4</div>
      <img src="<?php echo base_url() ?>images/cover/<?php echo $portforioall->company_ads_id ?>.jpg" style="width:100%">
    </div>
    <?php } ?>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    <?php 
      $newkey = 0;
      foreach ($portforio as $key => $portforioall) { 
      $newkey = $newkey+1;
      ?>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url() ?>images/cover/<?php echo $portforioall->company_ads_id ?>.jpg" style="width:100%;display: none;" onclick="currentSlide(<?php echo $newkey ?>)" alt="<?php echo $portforioall->name_th ?>">
    </div>
    <?php } ?>
  </div>
</div>
<style>
  .row > .column {
  padding: 0 8px;
  }
  .row:after {
  content: "";
  display: table;
  clear: both;
  }
  .column {
  float: left;
  width: 25%;
  }
  /* The Modal (background) */
  .modal {
  display: none;
  position: fixed;
  z-index: 1000;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #00000078;
  }
  /* Modal Content */
  .modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 800px;
  }
  /* The Close Button */
  .close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
  }
  .close:hover,
  .close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
  }
  .mySlides {
  display: none;
  }
  .cursor {
  cursor: pointer;
  }
  /* Next & previous buttons */
  .prev,
  .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  }
  /* Position the "next button" to the right */
  .next {
  right: 0;
  border-radius: 3px 0 0 3px;
  }
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  }
  /* Number text (1/3 etc) */
  .numbertext {
  color: #000;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  }
  img {
  margin-bottom: -4px;
  }
  .caption-container {
  text-align: center;
  padding: 2px 16px;
  color: white;
  }
  .demo {
  opacity: 0.6;
  }
  .active,
  .demo:hover {
  opacity: 1;
  }
  img.hover-shadow {
  transition: 0.3s;
  }
  .hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
</style>
<script>
  function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
</script>