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
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>">  
<div class="wrap" style="text-align: center;">

    <div class="product-area pb-30" >
        <div class="">
            <div style="text-align: center;margin-bottom: 30px;">
                <h1><?=$lang=='EN'?'News letter':'รับข้อมูลข่าวสาร' ?> </h1>
            </div>
             
            <div>
                <h3><?=$lang=='EN'?'Special privileges only for you To receive information before anyone else':'สิทธิพิเศษเฉพาะคุณเท่านั้น เพื่อรับข้อมูลข่าวสารก่อนใคร' ?> </h3>
            </div>
            <div>
                <form id="frmnewsletter" method="get" action="<?=base_url("Home/subscription")?>">
                    <input type="text" name="email" id="email" placeholder="<?=$lang=='EN'?'Enter your email':'กรุณากรอกอีเมล์'?>">
                    <button class="btn"><?=$lang=='EN'?'Confirm receive information':'ยืนยันรับข้อมูลข่าวสาร'?></button>
                </form>   
            </div>

        </div>
    </div>

</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>