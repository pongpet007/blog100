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

    if(!isset($i->pro_type)){
      $i->pro_type = 1;
    }

?>
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?>" style="border: 1px solid red;">  
<div class="wrap" style="<?=$style?>text-align: center;">
  <?php if ($i->pro_type == 1) { ?>
    <img src="<?=base_url("assets/product_template.jpg")?>" class="" style="display: unset; width: 100%;height: auto;"> 
  <?php }if ($i->pro_type == 2) { ?>
    <img src="<?=base_url("assets/product_template2.jpg")?>" class="" style="display: unset; width: 100%;height: auto;"> 
  <?php }if ($i->pro_type == 3) { ?>
    <img src="<?=base_url("assets/product_template3.jpg")?>" class="" style="display: unset; width: 100%;height: auto;"> 
  <?php } ?>
  <?php if ($i->pro_type == 4) { ?>
    <img src="<?=base_url("assets/product_template4.jpg")?>" class="" style="display: unset; width: 100%;height: auto;"> 
  <?php } ?>
  
  
  <a href="<?=base_url("ContentRowItem/edititem/$item_id")?>"  class="btn btn-warning" target="blank"><i class="fa fa-cog"></i> แก้ไข component</a>

  <a href="<?=base_url("ContentRowItem/deleteitem/$item_id")?>"  onclick="return confirm('delete ?');" class="btn btn-danger" target="blank"><i class="fa fa-trash"></i> ลบ component</a>
 
</div>
</div>