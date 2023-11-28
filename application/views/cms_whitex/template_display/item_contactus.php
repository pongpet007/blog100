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
<div class="col-12 col-sm-12  col-md-12 <?=$i->width?> item<?=$item_id?> <?=isset($i->spcialclass)?$i->spcialclass:'';?>" >  
<div class="wrap" >

      <div class="row">
            <div class="col">
                <h2 style="padding-bottom: 10px;border-bottom: solid 1px #eee;"><?=$lang=='EN'?'Enter contact information':'กรอกข้อมูลผู้ติดต่อ' ?></h2>
            </div>
        </div>
      <form class="cons-contact-form" id="frm-contact" name="frm-contact" method="post" action="<?=base_url("Contactus/sendMail")?>" style="padding-top: 30px;">
          <?php if($this->session->flashdata('errors')){ ?>  
          <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> มีข้อผิดพลาด</h4>
              <small><?=$this->session->flashdata('errors') ?></small>
          </div>
          <?php } ?>  
          <div class="col-md-12">
              <div class="contact-form-style mb-20">
                  <input name="name" placeholder="ติดต่อ" type="text" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px; ">
                  <input name="email" placeholder="อีเมล" type="text" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px; ">
                  <input name="telephone" placeholder="โทรศัพท์" type="text" style="background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px;" >
                  <textarea name="message" placeholder="ข้อความ" style="height: 200px;background: #ffffff;border: 1px solid #ebebeb;margin-bottom:17px; "></textarea>
                  <?=$widget?>
                  <?=$script?>   
                  <button class="submit" type="submit"><?=$lang=='EN'?'Submit':'ส่งข้อความ' ?></button>
              </div>
          </div>
      </form>

</div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>