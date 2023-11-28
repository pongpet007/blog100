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
<div class="<?=$i->width?>" style="border: 1px solid red;">  
<div class="wrap" style="<?=$style?>">
  <?
  $filepath = "../images/item/".$i->picture;
  if(is_file($filepath)){
  	if($i->link)
  		echo "<a href=\"{$i->link}\" target=\"_blank\">";
  	
  	echo '<img src="'. base_url($filepath) .'" class="img-responsive" />';

  	if($i->link)
  		echo "</a>";
  }

  ?>
  <a href="<?=base_url("ContentRowItem/edititem/$item_id")?>"  class="btn btn-warning" target="blank"><i class="fa fa-cog"></i> component</a>
  
   <a href="<?=base_url("ContentRowItem/deleteitem/$item_id")?>"  onclick="return confirm('delete ?');" class="btn btn-danger" target="blank"><i class="fa fa-trash"></i> component</a>

</div>
</div>