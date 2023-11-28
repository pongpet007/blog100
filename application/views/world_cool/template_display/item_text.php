 <? 
  
 	$i = json_decode($jsondata);
    
    $style = "margin-left:{$i->ml}px;\n";
    $style .= "margin-right:{$i->mr}px;\n";
    $style .= "margin-bottom:{$i->mb}px;\n";
    $style .= "margin-top:{$i->mt}px;\n";

    $style .= "padding-left:{$i->pl}px;\n";
    $style .= "padding-right:{$i->pr}px;\n";
    $style .= "padding-bottom:{$i->pb}px;\n";
    $style .= "padding-top:{$i->pt}px;\n";

?>
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?>  <?=isset($i->spcialclass)?$i->spcialclass:'';?>">  
<div class="wrap" >
    
    <?

  if(isset($i->picture)){
    $filepath = "images/item/".$i->picture;
    if(is_file($filepath)){
      // if($i->link)
      //   echo "<a href=\"{$i->link}\" target=\"_blank\">";
      
      echo '<img src="'. base_url($filepath) .'" class="img-responsive" />';

      // if($i->link)
      //   echo "</a>";
    }
  }
  ?>  

  <?php if ( isset($i->{"info_".$this->session->userdata('site_lang')}) ) { ?>
    <div class="text-desc"><?=$i->{"info_".$this->session->userdata('site_lang')}?></div> 
  <?php }  ?>

  <?php if (isset($i->textbtnactive) && $i->textbtnactive == 1) { ?>
    <button title="<?=$i->{"button_text_".$this->session->userdata('site_lang')} ?>" onclick="location.href='<?=$i->{"button_text_link_".$this->session->userdata('site_lang')}?>'" type="button" class="btn btn-success"><?=$i->{"button_text_".$this->session->userdata('site_lang')}?></button>
  <?php } ?> 

</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>