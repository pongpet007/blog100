<!doctype html>
<html class="no-js" lang="zxx">
    <?php $this->load->view($theme_path.'/inc/header-meta') ?>
    <body>
        
        <div style="background-image: url(<? echo base_url() ?>); background-size: 100%; background-repeat: no-repeat;">
                <?php $this->load->view($theme_path.'/inc/header') ?>
        
                <?php  require_once("slide/slider.php");  ?>
        </div>
        
        

        <?php foreach ($homepage->rows as $row) {
           
         ?>
     	<div id="section<?=$row->row_id ?>" >
        <div class="<?=$row->is_fullwidth==1?'container-fluid':'container'?> " >
            <div class="rowwrap<?=$row->row_id ?>">                
                    <div class="container container<?=$row->row_id ?>">
                        <div class="row">
                    
                    <?php 
                      
                    foreach ($row->items as $item) {
                         // Text
                        if($item->template_id==1){
                            $this->load->view($theme_path."/template_display/item_text",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==2){ // Images
                            $this->load->view($theme_path."/template_display/item_image",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==3){ // Google Map
                            $this->load->view($theme_path."/template_display/item_google_map",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==4){ // Youtube
                            $this->load->view($theme_path."/template_display/item_youtube",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==5){ // VDO
                            $this->load->view($theme_path."/template_display/item_vdo",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==6){ // Contactus
                            $this->load->view($theme_path."/template_display/item_contactus",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==7){ // Product
                            $this->load->view($theme_path."/template_display/item_product",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==8){ // Blog
                            $this->load->view($theme_path."/template_display/item_blog",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==9){ // Blog
                            $this->load->view($theme_path."/template_display/item_contactus_information",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==10){ // News letter
                            $this->load->view($theme_path."/template_display/item_newsletter",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==11){ // slide
                            $this->load->view($theme_path."/template_display/item_slide",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==12){ // news
                            $this->load->view($theme_path."/template_display/item_news",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==13){ // item_image_responsive_full
                            $this->load->view($theme_path."/template_display/item_image_responsive_full",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                    } 

                    ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php } ?>

        <?php $this->load->view($theme_path.'/inc/footer') ?>

        <?php $this->load->view($theme_path.'/inc/footer-js') ?>
        <style type="text/css">
            <?php foreach ($homepage->rows as $row) { ?>
            #section<?=$row->row_id ?>{
            <?
                if($row->bg_filename){
                    echo "
                    background-image: url(".base_url("images/bg/$row->bg_filename").");
                    background-size: cover;
                    background-repeat: no-repeat;
                    ";
                } 
                
                if($row->bg_color){
                    echo "background-color: {$row->bg_color};";
                }
            ?>  
                margin-top: <?=$row->margin_top ?>px;
                margin-right: <?=$row->margin_right ?>px;
                margin-bottom: <?=$row->margin_bottom ?>px;
                margin-left: <?=$row->margin_left ?>px;
                padding-top: <?=$row->padding_top ?>px;
                padding-right: <?=$row->padding_right ?>px;
                padding-bottom: <?=$row->padding_bottom ?>px;
                padding-left: <?=$row->padding_left ?>px;
            }

            <?php } ?>
        </style>
        
    </body>
</html>