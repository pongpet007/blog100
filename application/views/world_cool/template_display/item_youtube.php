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
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>" >  
<div class="wrap" style="text-align: center;">
  <? if(isset($i->headertextshow)&&$i->headertextshow=='1'){ ?>
  <div class="headertext"><?=$i->{"headertext_".$lang} ?></div>
  <?php } ?>

  <div class="embedyoutube"><?=$i->embedyoutube ?></div>

  <? if(isset($i->headertextshow)&&$i->headertextshow=='1'){ ?>
  <div class="footertext"><?=$i->{"footertext_".$lang} ?></div>
  <?php } ?>
      

</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>