<?php
  if(isset($data->jsondata))
  $i = json_decode($data->jsondata);

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
<h2 style="padding-left: 15px;">Item Google map</h2>
    <div class="form-group">
      <label class="col-md-2 control-label" for="">Header text Show/hide</label>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <select class="form-control" name="headertext" id="headertext">
              <option value="2" <?=isset($i->headertext)&&$i->headertext=='2'?'selected':''?> >hide</option>
              <option value="1" <?=isset($i->headertext)&&$i->headertext=='1'?'selected':''?>>show</option>
            </select>
        </div>
    </div> 

<?php 
if(isset($i->headertext)&&$i->headertext=='1'){
foreach ($countrys as $country) { ?>
    <h3>Language <?=$country->short_name?></h3>
    <div class="form-group">
      <label class="col-md-2 control-label" for="">Header <?=$country->short_name?></label>
        <div class="col-md-10 col-sm-6 col-xs-12">
            <textarea class="form-control ckeditor" id="mapdesc_<?=$country->country_id?>" name="mapdesc_<?=$country->country_id?>" ><?=isset($i->{"mapdesc_".$country->country_id})?$i->{"mapdesc_".$country->country_id}:''?></textarea>
            
        </div>
    </div>
<?php }} ?>
    

   