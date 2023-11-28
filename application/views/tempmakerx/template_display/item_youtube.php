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

  <div class="headertext"><?=$i->headertext ?></div>
  <div class="embedyoutube"><?=$i->embedyoutube ?></div>
  <div class="footertext"><?=$i->footertext ?></div>
      

</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>