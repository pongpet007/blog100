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
        <h1 style="color: #007437;font-size: 32px;line-height: 40px;font-weight: 500;text-align: left;">คำค้นหาที่ได้รับความนิยม</h1>
        <div class="newsletter-area bg-img ptb-30 newsletter-img">
            <ul style="text-align: left;">
                <?php foreach ($tags as $key => $tag) { ?> 
                    <li class="tag-item" style="list-style: none;
    display: inline-block;
    border: 1px solid;
    padding: 5px;
    border-radius: 5px;
    font-size: 16px;
    line-height: 30px;
    font-weight: 400;">
                        <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-tags/$key"); ?>" class="tag-link">
                            <?php echo $tag ?>                                    
                        </a>
                    </li>
                <?php } ?>  
            </ul>
        </div>

    </div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>