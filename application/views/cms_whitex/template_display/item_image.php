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
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> p-0 t-0 item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>" >  
    <div class="wrap" style="">
        <div id="item<?=$item_id?>" class="picture">
               <?
              if(isset($i->picture)){
                  $filepath = "images/item/".$i->picture;
                  if(is_file($filepath)){
                    if($i->link)
                      echo "<a href=\"{$i->link}\" target=\"_blank\">";
                    
                    echo '<img src="'. base_url($filepath) .'" class="img-fluid" />';

                    if($i->link)
                      echo "</a>";
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