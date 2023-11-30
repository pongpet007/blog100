<section role="main" class="content-body">
  <header class="page-header">
    <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
        <li>
          <a href="#">
          <i class="fa fa-home"></i>
          </a>
        </li>
        <li><span> Picture  &nbsp;&nbsp;&nbsp;</span></li>
      </ol>
    </div>
  </header>
  <!-- start: page -->
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
      </div>
      <h2 class="panel-title">Picture <?=$method?></h2>
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
        echo form_open_multipart("CompanyProductPicture/$method/$pro_id/$pro_pic_id",$attributes); ?>

            <div class="form-group">
              <label class="col-md-3 control-label" for="">Picture (1200 x 1200)<br><span style="color: red;">เฉพาะนามสกุลไฟล์ .jpg</span></label>
              <div class="col-md-6">
                <?php 
                  $pro_pic_id = is_object($picture)?$picture->pro_pic_id:'';
                  
                  $filepath = "../images/product_new/detail_". $pro_pic_id .'_1200.jpg';
                  
                  if(is_file($filepath)){
                      echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:350px;">';    
                       echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-xs btn-danger" target="_blank">Delete file</a>' ;          
                  }else{
                    echo '<img src="'.base_url().'../assets_theme_2020_v1/pro1200x1125.png?'.rand().'" class="img-responsive" style="max-width:350px;">';
                  }
                  
                  $data = array(                 
                      'name' =>'picture1200',
                      'id'=>'picture1200', 
                      'accept'=>'image/jpeg',              
                  );
                  echo form_upload($data); ?>
              </div>
            </div>  

            
            
            <div class="form-group">
              <label class="col-md-3 control-label" for="">Color</label>
              <div class="col-md-6">
                <?php 
                  $color = is_object($picture)?$picture->color:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'color',
                      'id'=>'color',
                      'placeholder' => 'Color' ,
                      'value' => set_value('color')?set_value('color'):$color,
                  );
                  echo form_input($data); ?>
              </div>
            </div>


      <div class="form-group" style="margin-top: 20px;">
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
  </section>
  <!-- end: page -->
</section>