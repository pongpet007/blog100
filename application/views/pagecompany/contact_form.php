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
            <li><span> Contact  &nbsp;&nbsp;&nbsp;</span></li>
         </ol>
      </div>
   </header>
   <!-- start: page -->
   <section class="panel">
      <header class="panel-heading">
         <div class="panel-actions">
         </div>
         <h2 class="panel-title">Contact <?=$method?></h2>
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
            echo form_open_multipart("customeradmin/CompanyContent/$method/$com_id/$con_id",$attributes); ?>


            
         <div class="form-group">
            <label class="col-md-3 control-label" for="">title (eng)</label>
            <div class="col-md-6">
               <?php 
                  $title = is_object($product)?$product->title:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'title',
                      'id'=>'title',
                      'placeholder' => 'title name' ,
                      'value' => set_value('title')?set_value('title'):$title,
                  );
                  echo form_input($data); ?>
            </div>
         </div>

         <div class="form-group">
            <label class="col-md-3 control-label" for="">title (th)</label>
            <div class="col-md-6">
               <?php 
                  $title_th = is_object($product)?$product->title_th:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'title_th',
                      'id'=>'title_th',
                      'placeholder' => 'title th name' ,
                      'value' => set_value('title_th')?set_value('title_th'):$title_th,
                  );
                  echo form_input($data); ?>
            </div>
         </div>

         <div class="form-group">
            <label class="col-md-3 control-label" for="">Meta Keyword</label>
            <div class="col-md-6">
               <?php 
                  $keyword = is_object($product)?$product->keyword:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'keyword',
                      'id'=>'keyword',
                      'placeholder' => 'Meta Keyword' ,
                      'value' => set_value('keyword')?set_value('keyword'):$keyword,
                  );
                  echo form_input($data); ?>
            </div>
         </div>
      
          <div class="form-group">
            <label class="col-md-3 control-label" for="">Meta Description</label>
            <div class="col-md-6">
               <?php 
                  $description = is_object($product)?$product->description:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'description',
                      'id'=>'description',
                      'placeholder' => 'Meta Description' ,
                      'value' => set_value('description')?set_value('description'):$description,
                  );
                  echo form_input($data); ?>
            </div>
         </div>
      
            <div class="form-group">
            <label class="col-md-3 control-label" for="">Content Name</label>
            <div class="col-md-6">
               <?php 
                  $c_name = is_object($product)?$product->c_name:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'c_name',
                      'id'=>'c_name',
                      'placeholder' => 'Content Name' ,
                      'value' => set_value('c_name')?set_value('c_name'):$c_name,
                  );
                  echo form_input($data); ?>
            </div>
         </div>
           
      <div class="form-group">
            <label class="col-md-3 control-label" for="">Detail (EN)</label>
              <div class="col-md-9 ">
              <?php 
              $c_des = is_object($product)?$product->c_des:'';
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'c_des',
                  'id'=>'c_des',
                  'placeholder' => 'c_des' ,
                  'value' => set_value('c_des')?set_value('c_des'):$c_des,
              );
              echo form_textarea($data); ?>
              <!-- <div id="com_desc_en" class="summernote"><?=$com_desc_en?></div>   -->
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="">Detail (th)</label>
              <div class="col-md-9 ">
              <?php 
              $c_des_th = is_object($product)?$product->c_des_th:'';
              $data = array(
                  'class' =>'form-control ckeditor' ,
                  'name' =>'c_des_th',
                  'id'=>'c_des_th',
                  'placeholder' => 'c_des_th' ,
                  'value' => set_value('c_des_th')?set_value('c_des_th'):$c_des_th,
              );
              echo form_textarea($data); ?>
              <!-- <div id="com_desc_en" class="summernote"><?=$com_desc_en?></div>   -->
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