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
    <div class="wrap" style="">
         <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1938.4238905426182!2d100.4005730690635!3d13.667018298398578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bd0c15b87083%3A0xd54d8ba9aec7215a!2zUy5HLiBTSUFNIENPLiwgTFRELiDguJou4LmA4Lit4Liq4LiI4Li1IOC4quC4ouC4suC4oSDguIjguLPguIHguLHguJQ!5e0!3m2!1sen!2sth!4v1609143659379!5m2!1sen!2sth" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 -->      
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.5671582926966!2d100.51398469618186!3d13.730281491262817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e298d964de911b%3A0x48de5d845b3c439d!2z4Lia4LiI4LiBLuC5gOC4muC4quC4l-C5jCDguJrguKPguLHguIog4Liq4Li14LmI4Lie4Lij4Liw4Lii4Liy!5e0!3m2!1sth!2sth!4v1677813700592!5m2!1sth!2sth" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div style="text-align: center;">
                              
            </div>  
    </div>
</div>

<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
  button.googlemap {
    background-color: #1E98D6;
    color: #fff;
  }
  button.googlemap:hover {
    background-color: #223359;
    color: #fff;
  }
</style>
