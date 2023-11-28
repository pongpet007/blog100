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
<div class=" d-none d-lg-block d-xl-block <?=$i->width?> p-0 t-0 item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>" >  
<div class="wrap" style=" text-align: center; min-height: 500px;">
      
</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>