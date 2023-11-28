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
                    
                    echo '<img class="d-none d-xl-block d-lg-block img-fluid" src="'. base_url($filepath) .'" />';

                    if($i->link)
                      echo "</a>";
                  }

              }
             
              ?>

              <?
              if(isset($i->picture2)){
                  $filepath2 = "images/item/".$i->picture2;
                  if(is_file($filepath2)){
                    if($i->link)
                      echo "<a href=\"{$i->link}\" target=\"_blank\">";
                    
                    echo '<img class="d-block d-sm-block d-md-block d-lg-none d-xl-none img-fluid" src="'. base_url($filepath2) .'" />';

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