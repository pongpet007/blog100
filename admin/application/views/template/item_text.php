<?php
  if(isset($data->jsondata))
  $i = json_decode($data->jsondata);
  // print_r($i);
  // exit();
?>
 <div class="form-group">
    <label class="col-md-2 control-label" for="">Width</label>
      <div class="col-md-3 col-sm-6 col-xs-12">
      <?php 
        if($method=='additemsave'){
          $width = 'col-lg-6';
        }
        elseif($method=='edititemsave'){
          $width = isset($i)?$i->width:'col-lg-6';  
        }               
               
        $data = array(
          'class' =>'form-control' ,                 
          'id'=>'width',
        );
        $widths = array('col-lg-1'=>'1/12',
                'col-lg-2'=>'2/12',
                'col-lg-3'=>'3/12',
                'col-lg-4'=>'4/12',
                'col-lg-5'=>'5/12',
                'col-lg-6'=>'6/12',
                'col-lg-7'=>'7/12',
                'col-lg-8'=>'8/12',
                'col-lg-9'=>'9/12',
                'col-lg-10'=>'10/12',
                'col-lg-11'=>'11/12',
                'col-lg-12'=>'12/12',
              );
        echo form_dropdown('width', $widths , $width ,$data);
        ?>
      </div>
  </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="">margin</label>
        <div class="col-md-3 col-sm-6 col-xs-12">
      L : <input type="text" id="ml" name="ml" class="form-control" value="<?=isset($i->ml)?$i->ml:'0'?>" style="width: 50px; display: inline;">
      R : <input type="text" id="mr" name="mr" class="form-control" value="<?=isset($i->mr)?$i->mr:'0'?>" style="width: 50px; display: inline;">
      T : <input type="text" id="mt" name="mt" class="form-control" value="<?=isset($i->mt)?$i->mt:'0'?>" style="width: 50px; display: inline;">
      B : <input type="text" id="mb" name="mb" class="form-control" value="<?=isset($i->mb)?$i->mb:'0'?>" style="width: 50px; display: inline;">
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label" for="">padding</label>
        <div class="col-md-3 col-sm-6 col-xs-12">
      L : <input type="text" id="pl" name="pl" class="form-control" value="<?=isset($i->pl)?$i->pl:'0'?>" style="width: 50px; display: inline;">
      R : <input type="text" id="pr" name="pr" class="form-control" value="<?=isset($i->pr)?$i->pr:'0'?>" style="width: 50px; display: inline;">
      T : <input type="text" id="pt" name="pt" class="form-control" value="<?=isset($i->pt)?$i->pt:'0'?>" style="width: 50px; display: inline;">
      B : <input type="text" id="pb" name="pb" class="form-control" value="<?=isset($i->pb)?$i->pb:'0'?>" style="width: 50px; display: inline;">
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label" for="">Spacial class</label>
        <div class="col-md-10 col-sm-6 col-xs-12">
          <input type="text" class="form-control" name="spcialclass" placeholder="spcialclass" id="spcialclass" value="<?=isset($i->spcialclass)?$i->spcialclass:''?>">         
        </div>
    </div>

    <h2 style="padding-left: 15px;">Item Text</h2>
    <div class="form-group">
      <label class="col-md-2 control-label" for="">Picture</label>
        <div class="col-md-10 col-sm-6 col-xs-12">
          <?php 
            if(isset($i->picture)){
              $filepath = "../images/item/".$i->picture;

              if(is_file($filepath))
              {
                echo "<img src='".base_url("$filepath")."' class='img-responsive'>";
                echo "<a href='".base_url("Filemanage/delete?filepath=$filepath")."' class='btn btn-danger btn-xs' target='_blank'>delete</a>";
              }
            }
           ?>
            <input type="file"id="picture" name="picture">
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label" for="">Button Show/hide</label>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <select class="form-control" name="textbtnactive" id="textbtnactive">
              <option value="2" <?=isset($i->textbtnactive)&&$i->textbtnactive=='2'?'selected':''?> >hide</option>
              <option value="1" <?=isset($i->textbtnactive)&&$i->textbtnactive=='1'?'selected':''?>>show</option>
            </select>
        </div>
    </div> 
    <?php /* if(isset($i->textbtnactive)&&$i->textbtnactive=='1'){ ?>
    <div class="form-group">
      <label class="col-md-2 control-label" for="">Button url</label>
        <div class="col-md-10 col-sm-6 col-xs-12">
          <input type="text" class="form-control" name="button_text_link" placeholder="button_text_link" id="button_text_link" value="<?=isset($i->button_text_link)?$i->button_text_link:''?>">         
        </div>
    </div>
    <?php } */ ?>

<?php foreach ($countrys as $country) { ?>
    <h3>Language <?=$country->short_name?></h3>
 
    <div class="form-group">
      <label class="col-md-2 control-label" for="">Title <?=$country->iso2 ?></label>
        <div class="col-md-10 col-sm-6 col-xs-12">

          <input type="text" class="form-control" name="title_<?=$country->country_id?>" id="title_<?=$country->country_id?>" value="<?=isset($i->{'title_'.$country->country_id})?$i->{'title_'.$country->country_id}:''?>">         
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="">Desc <?=$country->iso2 ?></label>
        <div class="col-md-10 col-sm-6 col-xs-12">
           <textarea name="info_<?=$country->country_id?>" id="info_<?=$country->country_id?>" class="form-control ckeditor"><?=isset($i->{"info_".$country->country_id})?$i->{"info_".$country->country_id}:''?></textarea>
            <pre style="font-size: 16px; background:#cfe0ee;">
              <?php if (isset($i->{"info_".$country->country_id})) {
                echo htmlspecialchars($i->{"info_".$country->country_id});
              }
                
              ?>
            </pre>
        </div>
    </div>
    <?php if(isset($i->textbtnactive)&&$i->textbtnactive=='1'){ ?>
    <div class="form-group">
      <label class="col-md-2 control-label" for="">Button url <?=$country->iso2 ?></label>
        <div class="col-md-10 col-sm-6 col-xs-12">
          <input type="text" class="form-control" name="button_text_link_<?=$country->country_id?>"  id="button_text_link_<?=$country->country_id?>" value="<?=isset($i->{"button_text_link_".$country->country_id})?$i->{"button_text_link_".$country->country_id}:''?>">         
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="">Button Text <?=$country->iso2 ?></label>
        <div class="col-md-10 col-sm-6 col-xs-12">
          <input type="text" class="form-control" name="button_text_<?=$country->country_id?>"  id="button_text_<?=$country->country_id?>" value="<?=isset($i->{"button_text_".$country->country_id})?$i->{"button_text_".$country->country_id}:''?>">         
        </div>
    </div>
    <?php } ?>

 <?php } ?>   