<section role="main" class="content-body">
   <header class="page-header">
      <h2>Welcome  <span style="color:yellow;">Brandexdirectory.com</span> System</h2>
      <div class="right-wrapper pull-right">
         <ol class="breadcrumbs">
            <li>
               <a href="#">
               <i class="fa fa-home"></i>
               </a>
            </li>
            <li><span> Menu  &nbsp;&nbsp;&nbsp;</span></li>
         </ol>
      </div>
   </header>
   <!-- start: page -->
   <section class="panel">
      <header class="panel-heading">
         <div class="panel-actions">
         </div>
         <h2 class="panel-title">Menu <?=$method?></h2>
      </header>
      <div class="panel-body">
         <?php if($this->session->flashdata('msg')){ ?>  
         <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>
         </div>
         <?php } ?>
         <?php if($this->session->flashdata('errors')){ ?>  
         <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> มีช้อผิดพลาด</h4>
            <small><?=$this->session->flashdata('errors') ?></small>
         </div>
         <?php } ?>
         <?php 
            $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' ,'onsubmit'=>'return sendProductForm()' , 'name'=>'frm' );  
            echo form_open_multipart("customeradmin/CompanyMenu/$method/$com_id/$menu_id",$attributes); ?>
         <div class="form-group" hidden="">
            <label class="col-md-3 control-label" for="">Menu (eng)</label>
            <div class="col-md-6">
               <?php 
                  $menu_name = is_object($product)?$product->menu_name:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'menu_name',
                      'id'=>'menu_name',
                      'placeholder' => 'Menu name' ,
                      'disabled' => '' ,
                      'value' => set_value('menu_name')?set_value('menu_name'):$menu_name,
                  );
                  echo form_input($data); ?>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">Menu (eng)</label>
            <div class="col-md-6">
               <?php 
                  $menu_name = is_object($product)?$product->menu_name:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'menu_name',
                      'id'=>'menu_name',
                      'placeholder' => 'Menu name' ,
                      'value' => set_value('menu_name')?set_value('menu_name'):$menu_name,
                  );
                  echo form_input($data); ?>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">Menu (th)</label>
            <div class="col-md-6">
               <?php 
                  $menu_name_th = is_object($product)?$product->menu_name_th:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'menu_name_th',
                      'id'=>'menu_name_th',
                      'placeholder' => 'Menu th' ,
                      'value' => set_value('menu_name_th')?set_value('menu_name_th'):$menu_name_th,
                  );
                  echo form_input($data); ?>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">Menu Type</label>    
            <div class="col-md-6">
               <input name="menu_type" type="radio" id="menu_type1" value="1" checked="checked" onclick="typeclick(this);" />URL
               <input id="menu_type2" onclick="typeclick(this);" name="menu_type" type="radio" value="2" <? if($product->menu_type==2 or empty($product->menu_type)) echo 'checked="checked"'; ?>  />Content
            </div>
         </div>
         <div class="form-group menu1 <?=($product->menu_type==1)?'':' hide '?>" >
            <label class="col-md-3 control-label" for="">URL</label>    
            <div class="col-md-6">
               <input name="url" type="text" id="url" class="form-control" size="80" value="<?=$product->menu_type?>" />
            </div>
         </div>
         <div class="form-group menu2 <?=($product->menu_type==2 or empty($product->menu_type))?'':' hide '?>">
            <label class="col-md-3 control-label" for="">Content</label>    
            <div class="col-md-6">          
               <select name="content" id="content">
               <?
                  foreach ($content1 as $con) {
                    
                  if($con->con_id == $rowedit["con_id"])
                    echo " <option value='$con->con_id' selected='selected'>$con->c_name</option>";
                    else
                    echo " <option value='$con->con_id'>$con->c_name</option>";
                  }
                  ?>    
               </select>
            </div>
         </div>
         <div class="form-group menu3 <?=($product->menu_type==2)?'':' hide '?>" >
            <label class="col-md-3 control-label" for="">Display URL</label>    
            <div class="col-md-6">
               <input name="menu_display_url" type="text" id="menu_display_url" class="form-control" size="80" value="<?=$product->menu_display_url?>" />
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">Target</label>   
            <div class="col-md-9">
               <select name="target" id="target">
                  <? $target = array('none','_top','_parent','_self','_blank'); 
                     foreach($target as $value){ 
                     ?>
                  <option value="<?=$value ?>" <?= ($product->menu_target==$value)?' selected="selected" ':''?>><?=$value?></option>
                  <? } ?>          
               </select>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">Is main menu</label>   
            <div class="col-md-6">
               <input name="is_main" type="radio" value="1" onclick="showMain(this)"  checked="checked" />Main menu
               <input name="is_main" type="radio" value="2" <?=($product->is_main==2)?' checked="checked" ':''; ?> onclick="showMain(this)" />Sub menu 
            </div>
         </div>
         <div class="form-group submenu1 <?=($product->is_main==1 or empty($product->is_main))?' hide ':'' ?>">
            <label class="col-md-3 control-label" for="">Is main menu</label>   
            <div class="col-md-6">
               <select name="menu_parent" id="menu_parent">
               <?
                  foreach ($menus as $menu) {
                  
                  echo "<option value='$menu->menu_id' $sl >$menu->menu_name($menu->menu_name_th)</option>";
                  //showSubMenuOption(7,$rowMP["menu_id"],$rowedit["menu_parent"]);
                  }
                  ?>
               </select>
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">top menu</label>   
            <div class="col-md-6">
               <input name="top" type="checkbox" id="top" value="1" <?=($product->top==1 or $product->top=="")?' checked="checked"':''; ?> />
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">bottom menu</label>    
            <div class="col-md-6">
               <input name="bottom" type="checkbox" id="top" value="1" <?=($product->bottom==1)?' checked="checked"':''?> />
            </div>
         </div>
         <div class="form-group">
            <label class="col-md-3 control-label" for="">Active</label>   
            <div class="col-md-6">
               <input name="is_active" type="radio" value="1" checked="checked" />Yes
               <input name="is_active" type="radio" value="2" <?= ($product->is_active>1)?' checked="checked" ':''?>  />No
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
            </label>
            <div class="col-md-6">
               <input type="hidden" name="id" id="id" value="<?=$com_id ?>">
               <?php 
                  $data = array(
                  'class' =>'btn btn-primary' ,
                  'name' =>'btn_send',
                  'id'=>'btn_send',
                  'value'=>'SAVE'
                  );
                  echo form_submit($data); 
                  ?>
            </div>
         </div>
         <?php echo form_close(); ?> 
      </div>
      </div>
      <script type="text/javascript">
         $(document).ready(function(e) {
           $('#btn_submit').click(function(){
             
             //$('#desc').val($('.summernote').eq(0).code());            
             
             $('#form1').submit();
             
           });
                   
               });
         
         function typeclick(obj)
         {
           if($(obj).val()==1)
           {
             $('.menu1').removeClass('hide');
             $('.menu2').addClass('hide');
             $('.menu3').addClass('hide');
           }
           
           if($(obj).val()==2)
           {
             $('.menu1').addClass('hide');
             $('.menu2').removeClass('hide');
             $('.menu3').removeClass('hide');
           }
           
         }
         
         function showMain(obj)
         {
           if($(obj).val()==1)
           {
             $('.submenu1').addClass('hide');        
           }
           
           if($(obj).val()==2)
           {
             $('.submenu1').removeClass('hide');                   
           }
         }
         
      </script>
   </section>
   <!-- end: page -->
</section>