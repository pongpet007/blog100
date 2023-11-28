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
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?>" style="border: 1px solid red;">  
<div class="wrap" style="<?=$style?>">
  <?
  if(isset($i->picture)){
      $filepath = "../images/item/".$i->picture;
      if(is_file($filepath)){
        // if($i->link)
        //   echo "<a href=\"{$i->link}\" target=\"_blank\">";
        
        echo '<img src="'. base_url($filepath) .'" class="img-responsive" />';

        // if($i->link)
        //   echo "</a>";
      }
  }
 
  $lang='TH';
  ?>

  <?php if (isset($i->title_221) ) { ?>
    <h2 ><?=$i->title_221?></h2>
  <? } ?>

  <?php if (isset($i->info_221) ) { ?>
    <p ><?=$i->info_221 ;?></p>  
  <? } ?>
  <?php if (isset($i->textbtnactive) && $i->textbtnactive == 1) { ?>
    <button title="<?=isset($i->button_text_221)?$i->button_text_221:'';?>" onclick="location.href='<?=isset($i->button_text_link)?$i->button_text_link:'';?>'" type="button" class="btn"><?=isset($i->button_text_221)?$i->button_text_221:'';?></button>
  <?php } ?>
  
  
  <a href="<?=base_url("ContentRowItem/edititem/$item_id")?>"  class="btn btn-warning" target="blank"><i class="fa fa-cog"></i> แก้ไข component</a>

  <a href="<?=base_url("ContentRowItem/deleteitem/$item_id")?>"  onclick="return confirm('delete ?');" class="btn btn-danger" target="blank"><i class="fa fa-trash"></i> ลบ component</a>

</div>
</div>