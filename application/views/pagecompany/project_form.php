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
            echo form_open_multipart("customeradmin/CompanyProject/$method/$com_id/$imgga_id",$attributes); ?>


            
         <div class="form-group">
            <label class="col-md-3 control-label" for="">Logo</label>
              <div class="col-md-6 ">
              <?php           
              $filepath = "assets/images/ssimproject/".$product->imgga_id.".jpg";
              if(is_file($filepath))
                echo '<img src="'.base_url($filepath).'?'.rand().'">';

              //echo $filepath;   
              $data = array(                 
                  'name' =>'logo',
                  'id'=>'logo',                 
              );
              echo form_upload($data)?>
              </div>
          </div>

         <div class="form-group">
            <label class="col-md-3 control-label" for="">gallery title name</label>
            <div class="col-md-6">
               <?php 
                  $gallery_name = is_object($product)?$product->gallery_name:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'gallery_name',
                      'id'=>'gallery_name',
                      'placeholder' => 'gallery_name' ,
                      'value' => set_value('gallery_name')?set_value('gallery_name'):$gallery_name,
                  );
                  echo form_input($data); ?>
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