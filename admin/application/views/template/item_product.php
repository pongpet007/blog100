<?php
  if(isset($data->jsondata))
  $i = json_decode($data->jsondata);
  
  if(isset($i) && !isset($i->pro_type))
  {
      $i->pro_type = 1;
  }
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

    <div class="form-group">
      <label class="col-md-2 control-label" for="">Products Type</label>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <select class="form-control" name="pro_type" id="pro_type">
              <option value="0">--Select Type--</option>
              <option value="5" <?=isset($i->pro_type)&&$i->pro_type=='5'?'selected':''?> >Brand Slide</option>
              <option value="4" <?=isset($i->pro_type)&&$i->pro_type=='4'?'selected':''?> >Products Slide</option>
              <option value="3" <?=isset($i->pro_type)&&$i->pro_type=='3'?'selected':''?> >Products Only</option>
              <option value="2" <?=isset($i->pro_type)&&$i->pro_type=='2'?'selected':''?> >Category Only</option>
              <option value="1" <?=isset($i->pro_type)&&$i->pro_type=='1'?'selected':''?> >Category Filer</option>
            </select>
        </div>
    </div>

    <style>
      .myDiv{
        display:none;
      }  
    </style>

    <script>
      $(document).ready(function(){
        $("div.myDiv").hide();
        $("#show"+<?=isset($i->pro_type)?$i->pro_type:'0' ?>).show();

        $('#pro_type').on('change', function(){
          var demovalue = $(this).val();          
          $("div.myDiv").hide();
          $("#show"+demovalue).show();
        });
      

      });

    </script>

    <div id="show1" class="myDiv">
      <div class="form-group">
        <label class="col-md-2 control-label" for=""></label>
        <div class="col-md-10 col-sm-6 col-xs-12">            
            <h2>Get All Category Filer</h2>
            <img src="<?=base_url("assets/product_template.jpg")?>" class="img-responsive" style="">
        </div>
      </div>
    </div>

    <div id="show2" class="myDiv">
      <div class="form-group">
        <label class="col-md-2 control-label" for=""></label>
        <div class="col-md-10 col-sm-6 col-xs-12">            
            <h2>Get All Category Only</h2>
            <img src="<?=base_url("assets/product_template2.jpg")?>" class="img-responsive" style="">
        </div>
      </div>
    </div>

    <div id="show3" class="myDiv">
      <div class="form-group">
        <label class="col-md-2 control-label" for=""></label>
        <div class="col-md-10 col-sm-6 col-xs-12">            
            <h2>Get All Products Only</h2>
            <img src="<?=base_url("assets/product_template2.jpg")?>" class="img-responsive" style="">
        </div>
      </div>
    </div>
    <div id="show4" class="myDiv">
      <div class="form-group">
        <label class="col-md-2 control-label" for=""></label>
        <div class="col-md-10 col-sm-6 col-xs-12">            
            <h2>Get All Products Only</h2>
            <img src="<?=base_url("assets/product_template4.jpg")?>" class="img-responsive" style="">
        </div>
      </div>
    </div>
    
    

     


   