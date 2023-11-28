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
          <div class="col-md-12">

            <div class="contact-section">
              <h5 class="contact-heading"><?=$lang=='EN'?'Enter contact information':'กรอกข้อมูลผู้ติดต่อ' ?></h5>
            </div>
            <form class="cons-contact-form" id="frm-contact" name="frm-contact" method="post" action="<?=base_url("Contactus/sendMail")?>" style="padding-top: 30px;">
            <?php if($this->session->flashdata('errors')){ ?>  
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> มีข้อผิดพลาด</h4>
                <small><?=$this->session->flashdata('errors') ?></small>
            </div>
            <?php } ?>  
              <div class="row">
                <div class="col-sm-12">          
                  <div class="form-group">
                    <label>ติดต่อ<span>*</span></label>
                    <input name="name" class="form-control" type="text"  required>                  
                  </div>
                 
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>อีเมล<span>*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>          
                  <div class="form-group">
                    <label>โทรศัพท์</label>
                    <input name="telephone" class="form-control" type="text"  >                 
                  </div>
                </div>
                <div class="col-sm-12">                
                  <div class="form-group">
                    <label>ข้อความ</label>
                    <textarea name="message" class="form-control" rows="4" ></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-default"><?=$lang=='EN'?'Submit':'ส่งข้อความ' ?></button>
              
            </form> 
          </div>
    </div>
  </div>
</div>
<style type="text/css">
  .item<?=$item_id?> .wrap{
      <?=$style?>
  }
</style>