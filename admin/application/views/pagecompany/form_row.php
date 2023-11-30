
<form class="form-horizontal" id="formaddrow" name="formaddrow" enctype="multipart/form-data" method="post" action="<?=isset($row)?base_url("ContentRow/editrow/$row->row_id"):base_url("ContentRow/addrow")?>" target="_blank">
  <div class="form-group">
    <label for="inputEmail3" class="col-md-3 control-label">Box type</label>
    <div class="col-md-9">
      <select id="is_fullwidth" name="is_fullwidth" class="form-control">
        <option value="1" <?=isset($row)&&$row->is_fullwidth=='1'?' selected ':'' ?> >Full width</option>
        <option value="2" <?=isset($row)&&$row->is_fullwidth=='2'?' selected ':'' ?> >Box width</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-md-3 control-label">BG image</label>
    <div class="col-md-9">
      <?php 
        if(isset($row)){
          $filepath = "../images/bg/$row->bg_filename";

          if(is_file($filepath))
          {
            echo "<img src='".base_url("$filepath")."' class='img-responsive'>";
            echo "<a href='".base_url("Filemanage/delete?filepath=$filepath")."' class='btn btn-danger btn-xs' target='_blank'>delete</a>";
          }
        }
       ?>
      <input type="file" name="bg" id="bg" accept="image/*">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-md-3 control-label">BG color</label>
    <div class="col-md-9">
      <input type="text" autocomplete="off" class="form-control colorpicker" name="bg_color" id="bg_color" placeholder="" value="<?=isset($row)&&$row->bg_color?$row->bg_color:''; ?>">
    </div>
  </div>
<hr>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-3 control-label">Margin</label>
    <div class="col-md-9">
      MT : <input type="text" class="form-control" name="margin_top" id="margin_top"  placeholder="margin_top" style="width: 50px;display: inline;" value="<?=isset($row)&&$row->margin_top?$row->margin_top:'0'; ?>">
      MR : <input type="text" class="form-control" name="margin_right" id="margin_right"  placeholder="margin_right" style="width: 50px;display: inline;" value="<?=isset($row)&&$row->margin_right?$row->margin_right:'0'; ?>">
      MB : <input type="text" class="form-control" name="margin_bottom" id="margin_bottom"  placeholder="margin_bottom" style="width: 50px;display: inline;" value="<?=isset($row)&&$row->margin_bottom?$row->margin_bottom:'0'; ?>">
      ML : <input type="text" class="form-control" name="margin_left" id="margin_left"  placeholder="margin_left" style="width: 50px;display: inline;" value="<?=isset($row)&&$row->margin_left?$row->margin_left:'0'; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-md-3 control-label">Padding</label>
    <div class="col-md-9">
      PT : <input type="text" class="form-control" name="padding_top" id="padding_top"  placeholder="padding_top"  style="width: 50px;display: inline;" value="<?=isset($row)&&$row->padding_top?$row->padding_top:'0'; ?>">
      PR : <input type="text" class="form-control" name="padding_right" id="padding_right"  placeholder="padding_right"  style="width: 50px;display: inline;" value="<?=isset($row)&&$row->padding_right?$row->padding_right:'0'; ?>">
      PB : <input type="text" class="form-control" name="padding_bottom" id="padding_bottom"  placeholder="padding_bottom"  style="width: 50px;display: inline;" value="<?=isset($row)&&$row->padding_bottom?$row->padding_bottom:'0'; ?>">
      PL : <input type="text" class="form-control" name="padding_left" id="padding_left"  placeholder="padding_left"  style="width: 50px;display: inline;" value="<?=isset($row)&&$row->padding_left?$row->padding_left:'0'; ?>">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-md-3 control-label">Select Show Content</label>
    <div class="col-md-9">
      <?php if (isset($row)&&$row->checkboxlang?$row->checkboxlang:'0') { ?>
        <? 
          $str = $row->checkboxlang;

          $checkboxlangs = array();
          if(strstr($str,',')){
            $checkboxlangs = explode(',',$str);
          }else{
            if($str){
              $checkboxlangs[] = $str;
            }
          }  
          foreach ($checkboxlangs as $checkboxlangsnew) {
             $checknums[$checkboxlangsnew] = $checkboxlangsnew;
           } 
        ?> 
      <?php }else{ ?>

      <?php } ?>

      <? foreach ($country as $countrynew) { ?>
        <?php if (isset($checknums)) { ?>
          <? if (array_key_exists($countrynew->country_id, $checknums)) { ?>
            <input type="checkbox" id="checkboxlang" name="checkboxlang[]" value="<?=$countrynew->country_id?>" Checked> : <?=$countrynew->short_name?> (<?=$countrynew->iso2?>)<br>
          <? }else{ ?>
            <input type="checkbox" id="checkboxlang" name="checkboxlang[]" value="<?=$countrynew->country_id?>" > : <?=$countrynew->short_name?> (<?=$countrynew->iso2?>)<br>
          <? } ?>
        <?php }else{ ?>
          <input type="checkbox" id="checkboxlang" name="checkboxlang[]" value="<?=$countrynew->country_id?>" Checked> : <?=$countrynew->short_name?> (<?=$countrynew->iso2?>)<br>
        <?php } ?>
      <? } ?>
    </div>
  </div>

    
    
 

  <div class="form-group">
    <div class="col-sm-offset-2 col-md-9">
      <input type="hidden" name="content_id" id="content_id" value="<?=$content_id?>">
      <button type="submit" name="btnaddrowsave" id="btnaddrowsave" class="btn btn-default">SAVE</button>
    </div>
  </div>
</form>

