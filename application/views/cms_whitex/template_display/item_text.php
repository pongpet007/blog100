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


  <?php if (isset($i->title_en) and (isset($i->title_th))) { ?>
   <?=isset($i->button_text_link)&&!empty($i->button_text_link)?'<a href="'.$i->button_text_link.'" target="_blank">':''?>
    <h3 class="text-title"><?=$lang=='EN'?$i->title_en:$i->title_th;?></h3>
  <?=isset($i->button_text_link)&&!empty($i->button_text_link)?'</a>':''?>
  <?php }  ?>
  <?php if (isset($i->info_en) and (isset($i->info_th))) { ?>
    <div class="text-desc"><?=$lang=='EN'?$i->info_en:$i->info_th;?></div> 
  <?php }  ?>

  <?php if (isset($i->textbtnactive) && $i->textbtnactive == 1) { ?>
    <button title="<?=$i->button_text_th;?>" onclick="location.href='<?=$i->button_text_link;?>'" type="button" class="btn btn-success"><?=$lang=='EN'?$i->button_text_en:$i->button_text_th;?></button>
  <?php } ?> 

</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>