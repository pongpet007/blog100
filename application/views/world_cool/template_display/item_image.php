 <? 
 
 $i = json_decode($jsondata);
 
 $style = "margin-left:{$i->ml}px; ";
 $style .= "margin-right:{$i->mr}px; ";
 $style .= "margin-bottom:{$i->mb}px; ";
 $style .= "margin-top:{$i->mt}px; ";

 $style .= "padding-left:{$i->pl}px; ";
 $style .= "padding-right:{$i->pr}px; ";
 $style .= "padding-bottom:{$i->pb}px; ";
 $style .= "padding-top:{$i->pt}px; ";

 ?>
 <div class="col-12 col-sm-12  col-md-12 <?=$i->width?> t-0 item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>" >  
  <div class="wrap" style="">
    <div id="item<?=$item_id?>" class="picture">
     <?
     if(isset($i->picture)){
      $filepath = "images/item/".$i->picture;
      if (stristr($filepath, 'png')){
        $filepathwebp = str_replace(".png",".webp",$filepath);
        $imgname = "png";
      }
      if (stristr($filepath, 'jpg')){
        $filepathwebp = str_replace(".jpg",".webp",$filepath);
        $imgname = "jpg";
      }

      
      if(is_file($filepath)){
                    // print_r($i);
        if ( isset($i->{"button_text_link_".$this->session->userdata('site_lang')}) && ($i->{"button_text_link_".$this->session->userdata('site_lang')}) != '' ) {
          echo "<a href=\"{$i->{"button_text_link_".$this->session->userdata('site_lang')}}\" target=\"_blank\">";
        }
        echo '<img src="'. base_url($filepathwebp) .'" alt="'.$companyData->com_name.'" class="img-fluid" />';

        if ( isset($i->{"button_text_link_".$this->session->userdata('site_lang')}) && ($i->{"button_text_link_".$this->session->userdata('site_lang')}) != ''  ) {
          echo "</a>";
        }
      }

    }
    
    ?>
  </div>
</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
    <?=$style?>
  }
</style>