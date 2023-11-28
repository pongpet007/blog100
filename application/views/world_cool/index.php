<!doctype html>
<html class="no-js" lang="th">
<?php header('Cache-Control: max-age=84600'); ?>
<?php $this->load->view($theme_path . '/inc/header-meta') ?>
<style type="text/css">
    .container2 {
            max-width: 100%;
        }
        .container3 {
            max-width: 100%;
        }
        .container4 {
            max-width: 100%;
        }
</style>

<body class="parallax webp">
    <?php $this->load->view($theme_path . '/inc/header') ?>
    <?php
    // require_once("slide/slider.php");
    // require_once("banner/slider.php");
    ?>
    <?php foreach ($homepage->rows as $row) {
        $str = $row->checkboxlang;

        $checkboxlangs = array();
        if (strstr($str, ',')) {
            $checkboxlangs = explode(',', $str);
        } else {
            if ($str) {
                $checkboxlangs[] = $str;
            }
        }
        foreach ($checkboxlangs as $checkboxlangsnew) {
            $checknums[$checkboxlangsnew] = $checkboxlangsnew;
        }
        ?>
        <?php if (array_key_exists($this->session->userdata('site_lang'), $checknums)) { ?>
            <div id="section<?= $row->row_id ?>" style="display: block;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <div class="<?= $row->is_fullwidth == 1 ? 'container-fluid' : 'container' ?> ">
                    <div class="rowwrap<?= $row->row_id ?>">
                        <div class="container container<?= $row->row_id ?>">
                            <div class="row">
                                <?php
                                foreach ($row->items as $item) {


                                    if ($item->template_id == 1) {
                                        $this->load->view($theme_path . "/template_display/item_text", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 2) { // Images
                                        $this->load->view($theme_path . "/template_display/item_image", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 3) { // Google Map
                                        $this->load->view($theme_path . "/template_display/item_google_map", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 4) { // Youtube
                                        $this->load->view($theme_path . "/template_display/item_youtube", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 5) { // VDO
                                        $this->load->view($theme_path . "/template_display/item_vdo", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 6) { // Contactus
                                        $this->load->view($theme_path . "/template_display/item_contactus", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 7) { // Product
                                        $this->load->view($theme_path . "/template_display/item_product", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 8) { // Blog
                                        $this->load->view($theme_path . "/template_display/item_blog", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 9) { // Blog
                                        $this->load->view($theme_path . "/template_display/item_contactus_information", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 10) { // News letter
                                        $this->load->view($theme_path . "/template_display/item_newsletter", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 11) { // slide
                                        $this->load->view($theme_path . "/template_display/item_slide", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 12) { // news
                                        $this->load->view($theme_path . "/template_display/item_news", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 13) { // item_image_responsive_full
                                        $this->load->view($theme_path . "/template_display/item_image_responsive_full", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? } else { ?>
            <div id="section<?= $row->row_id ?>" style="display: none;">
                <div class="<?= $row->is_fullwidth == 1 ? 'container-fluid' : 'container' ?> ">
                    <div class="rowwrap<?= $row->row_id ?>">
                        <div class="container container<?= $row->row_id ?>">
                            <div class="row">
                                <?php
                                foreach ($row->items as $item) {


                                    if ($item->template_id == 1) {
                                        $this->load->view($theme_path . "/template_display/item_text", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 2) { // Images
                                        $this->load->view($theme_path . "/template_display/item_image", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 3) { // Google Map
                                        $this->load->view($theme_path . "/template_display/item_google_map", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 4) { // Youtube
                                        $this->load->view($theme_path . "/template_display/item_youtube", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 5) { // VDO
                                        $this->load->view($theme_path . "/template_display/item_vdo", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 6) { // Contactus
                                        $this->load->view($theme_path . "/template_display/item_contactus", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 7) { // Product
                                        $this->load->view($theme_path . "/template_display/item_product", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 8) { // Blog
                                        $this->load->view($theme_path . "/template_display/item_blog", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 9) { // Blog
                                        $this->load->view($theme_path . "/template_display/item_contactus_information", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 10) { // News letter
                                        $this->load->view($theme_path . "/template_display/item_newsletter", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 11) { // slide
                                        $this->load->view($theme_path . "/template_display/item_slide", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 12) { // news
                                        $this->load->view($theme_path . "/template_display/item_news", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    } elseif ($item->template_id == 13) { // item_image_responsive_full
                                        $this->load->view($theme_path . "/template_display/item_image_responsive_full", array('item_id' => $item->item_id, 'jsondata' => $item->jsondata));
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
        <?php $checknums = null;
        $checkboxlangs = null;
        ?>
    <?php } ?>
    <?php if (sizeof($splash) > 0) {
        ?>

        <div class="modal fade bs-example-modal-lg" style="height: 100vh;align-items: center;justify-content: center;" id="r10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg banner-popup" role="document">
                <div class="modal-content">
                    <img src="<?= base_url("images/splash/{$splash[0]->splash_id}.jpg") ?>?<?= rand(); ?>" class="img-fluid">
                </div>
            </div>
        </div>

        <style type="text/css">
            .modal.show {
                display: flex !important;
            }
        </style>
        <style type="text/css">
            @media (max-width: 1400px) and (min-width: 1300px) {
                .banner-popup {
                    width: 400px !important;
                }
            }
        </style>
    <?php } ?>

    <?php $this->load->view($theme_path . '/inc/footer') ?>
    <?php $this->load->view($theme_path . '/inc/footer-js') ?>
    
    <style type="text/css">
        <?php foreach ($homepage->rows as $row) { ?>#section<?= $row->row_id ?> {
            <?
            if ($row->bg_filename) {
                echo "
                background-image: url(" . base_url("images/bg/$row->bg_filename") . ");
                    background-size: cover;
                    background-repeat: no-repeat;
                    ";
                }

                if ($row->bg_color) {
                    echo "background-color: {$row->bg_color};";
                }
                ?>margin-top: <?= $row->margin_top ?>px;
                margin-right: <?= $row->margin_right ?>px;
                margin-bottom: <?= $row->margin_bottom ?>px;
                margin-left: <?= $row->margin_left ?>px;
                padding-top: <?= $row->padding_top ?>px;
                padding-right: <?= $row->padding_right ?>px;
                padding-bottom: <?= $row->padding_bottom ?>px;
                padding-left: <?= $row->padding_left ?>px;
            }

        <?php } ?>
    </style>


    <style type="text/css">
        #section1 {
            padding: 60px 0;
        }
        #section3 {
            padding: 30px 0;
        }
        #section4 {
            padding: 60px 0;
        }
        #section6 {
            padding: 60px 0;
        }
        .container7 {
            max-width: 100%;
        }

        @media (max-width: 767px) and (min-width: 300px) {
            
        }
        @media (max-width: 991px) and (min-width: 768px) {
            
        }
        @media (max-width: 1199px) and (min-width: 992px) {
            
        }
        @media (max-width: 1365px) and (min-width: 1200px) {
            
        }
        @media (max-width: 1599px) and (min-width: 1366px) {

        }
        @media (min-width: 1600px) {}

    </style>


    <style type="text/css">
        .fb-page,
        .fb-page span,
        .fb-page span iframe[style] {
            max-width: 100% !important;
        }
    </style>

    <?/*?>
    <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100089204995306" data-tabs="timeline" data-width="" data-height="365" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profile.php?id=100089204995306" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=100089204995306">บจก.เบสท์ บรัช สี่พระยา ผลิตและจำหน่ายแปรงอุตสาหกรรม</a></blockquote></div>
    <?*/?>

    <?
            $paymentDate       = new DateTime(); // Today
            $contractDateBegin = new DateTime('2023-04-10');
            $contractDateEnd   = new DateTime('2023-04-17');

            if ($paymentDate > $contractDateBegin && $paymentDate < $contractDateEnd){ ?>
                <? $headers = get_headers('https://www.brandexdirectory.com/popupsong/bestbrush-siphaya_song.jpg', 1);
                if($this->session->userdata('splash') < time()){ 
                    $this->session->set_userdata('splash',time()+900);
                    if (strpos($headers['Content-Type'], 'image/') !== false) { ?>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('#popupimage').attr('src', 'https://www.brandexdirectory.com/popupsong/bestbrush-siphaya_song.jpg');
                                $('#popup').modal('show');
                            });
                            
                        </script>
                    <? } ?>

                    <style type="text/css">
                        /*#popup .modal-dialog {
                            max-width: 80%;
                        }*/
                        #popup .modal-body {
                            padding: 10px!important;
                        }
                    </style>
                <?    }
            }else{ ?>
                <script type="text/javascript">
                    $(function() {
                        $.get('https://www.brandexdirectory.com/api/popup/list', function(data) {
                            if (data.length > 0) {
                                $('#popupimage').attr('src', 'https://www.brandexdirectory.com/images/splash/' + data[0].splash_id + '.jpg');
                                $('#popup').modal('show');
                            }
                        });
                    });
                </script>

                <style type="text/css">
                    /*#popup .modal-dialog {
                        max-width: 40%;
                    }*/
                    #popup .modal-body {
                        padding: 10px!important;
                    }
                </style>
            <?  }
            ?>

            <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="" id="popupimage" class="img-fluid img-responsive" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



</body>

</html>

