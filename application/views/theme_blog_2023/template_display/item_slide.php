 <? 

 $i = json_decode($jsondata);

 $style = "margin-left:{$i->ml}px;";
 $style .= "margin-right:{$i->mr}px;";
 $style .= "margin-bottom:{$i->mb}px;";
 $style .= "margin-top:{$i->mt}px;";

 $style .= "padding-left:{$i->pl}px;";
 $style .= "padding-right:{$i->pr}px;";
 $style .= "padding-bottom:{$i->pb}px;";
 $style .= "padding-top:{$i->pt}px;";

 ?>
 
 <div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>">  
    <div class="wrap" style="text-align: center;">
        <?php if ($i->slide_id == "3") { ?>

            <div class="brand-logo-active-new owl-carousel">
                <?php foreach ($imgss1 as $key => $imgsss) { ?>
                    <div class="single-brand-logo" style="box-shadow: 0 0 6px #3140618a;border: 1px solid #e5e5e5;">
                        <img style="width: 100%" src="<?php echo base_url() ?>images/slide_images/<?php echo $imgsss->slide_image_id ?>.jpg">
                    </div>
                <?php } ?>
            </div>

        <? } ?>
        <?php if ($i->slide_id == "1") { ?>

            <div class="brand-logo-active-new owl-carousel">
                <?php foreach ($imgss as $key => $imgsss) { ?>
                    <div class="single-brand-logo" style="box-shadow: 0 0 6px #3140618a;border: 1px solid #e5e5e5;">
                        <img style="width: 100%" src="<?php echo base_url() ?>images/slide_images/<?php echo $imgsss->slide_image_id ?>.jpg">
                    </div>
                <?php } ?>
            </div>

        <? } ?>
        <?php if ($i->slide_id == "2") { ?>
            <div class="swiper swiperslide" style="padding: 40px 0;">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php for ($i=0; $i < sizeof($imgss) ; $i++) {  ?> 
                        <div class="swiper-slide">
                            <div class="slide_images-<?=$i?>" style="position: relative;margin-bottom: 15px;">
                                <div class="overlayslide"></div>
                                <img style="width: 100%;" src="<?php echo base_url() ?>images/slide_images/<?php echo $imgss[$i]->slide_image_id ?>.jpg">
                                <div class="detail-slide">
                                    <h1><?php echo $imgss[$i]->image_name ?></h1>
                                    <p><?php echo $imgss[$i]->image_detail ?></p>
                                </div>
                                <style type="text/css">
                                    .slide_images-<?=$i?>:hover .overlayslide {
                                        outline-offset: -100px;
                                        overflow: hidden;
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        background: linear-gradient(180deg, #FFFFFF00 0%, #153C9759 36%, #0E358A9C 63%, #1F1877 100%), url(<?php echo base_url() ?>images/slide_images/<?php echo $imgss[$i]->slide_image_id ?>.jpg) no-repeat top center;
                                    }
                                    .slide_images-<?=$i?>:hover .detail-slide {
                                        position: absolute;
                                        bottom: 0;
                                        text-align: left;
                                        border-left: 5px solid #FFB300;
                                        margin: 10px 15px;
                                        padding: 0 15px;display: block;
                                    }
                                    .slide_images-<?=$i?>:hover .detail-slide h1 {
                                        font-size: 30px;line-height: 30px;font-weight: 500;color: #FFB300;
                                    }
                                    .slide_images-<?=$i?>:hover .detail-slide p {
                                        font-size: 14px;line-height: 24px;font-weight: 300;    color: #FFFFFF;margin: 0;
                                    }
                                    .slide_images-<?=$i?> .detail-slide {
                                        display: none;
                                    }
                                </style>

                            </div>


                            <?  $i++; if(isset($imgss[$i])){ ?>
                                <div class="slide_images-<?=$i?>" style="position: relative;margin-bottom: 15px;">
                                    <div class="overlayslide"></div>
                                    <img style="width: 100%;" src="<?php echo base_url() ?>images/slide_images/<?php echo $imgss[$i]->slide_image_id ?>.jpg">
                                    <div class="detail-slide">
                                        <h1><?php echo $imgss[$i]->image_name ?></h1>
                                        <p><?php echo $imgss[$i]->image_detail ?></p>
                                    </div>
                                    <style type="text/css">
                                        .slide_images-<?=$i?>:hover .overlayslide {
                                            outline-offset: -100px;
                                            overflow: hidden;
                                            position: absolute;
                                            height: 100%;
                                            width: 100%;
                                            background: linear-gradient(180deg, #FFFFFF00 0%, #153C9759 36%, #0E358A9C 63%, #1F1877 100%), url(<?php echo base_url() ?>images/slide_images/<?php echo $imgss[$i]->slide_image_id ?>.jpg) no-repeat top center;
                                        }
                                        .slide_images-<?=$i?>:hover .detail-slide {
                                            position: absolute;
                                            bottom: 0;
                                            text-align: left;
                                            border-left: 5px solid #FFB300;
                                            margin: 10px 15px;
                                            padding: 0 15px;
                                            display: block;
                                        }
                                        .slide_images-<?=$i?>:hover .detail-slide h1 {
                                            font-size: 30px;line-height: 30px;font-weight: 500;color: #FFB300;
                                        }
                                        .slide_images-<?=$i?>:hover .detail-slide p {
                                            font-size: 14px;line-height: 24px;font-weight: 300;    color: #FFFFFF;margin: 0;
                                        }
                                        .slide_images-<?=$i?> .detail-slide {
                                            display: none;
                                        }
                                    </style>

                                </div>
                            <? } ?>
                        </div>
                    <? } ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

            <style type="text/css">
                .swiperslide .swiper-pagination {
                    bottom: 15px!important;top: unset!important;width: 90%!important;height: var(--swiper-pagination-progressbar-size,10px)!important;
                }
                .swiperslide .swiper-button-next:after, .swiperslide .swiper-rtl .swiper-button-prev:after, .swiperslide .swiper-button-prev:after, .swiperslide .swiper-rtl .swiper-button-next:after {
                    background: #E59F25 0% 0% no-repeat padding-box;
                    border-radius: 22px;
                    font-size: 16px;
                    padding: 10px 15px;
                    font-weight: bold;
                    color: #000080;
                }
                .swiperslide .swiper-button-next, .swiperslide .swiper-rtl .swiperslide .swiper-button-prev, .swiperslide .swiper-button-prev, .swiper-rtl .swiper-button-next {
                    bottom: 0px;top: unset;
                }
                .swiperslide .swiper-button-prev, .swiperslide .swiper-rtl .swiperslide .swiper-button-next {
                    bottom: 0px!important;top: unset!important;left: unset;
                    right: 60px;
                }
                :root {
                    --swiper-theme-color: #e59f25;
                }
            </style>
            <script type="text/javascript">
                const swiper = new Swiper('.swiperslide', {
                    loop: true,
                    slidesPerView: 2,
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    autoplay: {
                        delay: 5000,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'progressbar',
                    },
                })
            </script>
        <?php } ?>
        
    </div>
</div>
<style type="text/css">
    .item<?=$item_id?> .wrap{
        <?=$style?>
    }
</style>