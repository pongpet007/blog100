<section role="main" class="content-body">
  <header class="page-header">
    <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
        <li>
          <a href="#">
          <i class="fa fa-home"></i>
          </a>
        </li>
        <li><span> Home  &nbsp;&nbsp;&nbsp;</span></li>
      </ol>
    </div>
  </header>
  <!-- start: page -->
  <!-- Content Wrapper. Contains page content -->
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
      </div>
      <h2 class="panel-title">Gallery Image <?=$method?></h2>
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
        $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
        echo form_open_multipart("CompanyGallery/$methods/$com_id/$image_id",$attributes); ?>
      <div class="form-group">
        <label class="col-md-2 control-label" for="">Picture</label>
        <div class="col-md-10 ">
          <?php 
            $image_id = is_object($gallery_image)?$gallery_image->image_id:'';
            
            $filepath = "../images/gallery_images/". $image_id .'.jpg';
            
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';                
            }
            
            $data = array(                 
                'name' =>'picture',
                'id'=>'picture',                
            );
            echo form_upload($data); ?>
        </div>
      </div>
      <?php foreach ($countrys as $country) { ?>
      <div class="form-group">
        <label class="col-md-2 control-label" for="">image name <?=$country->short_name ?></label>
        <div class="col-md-10">
          <?php 
            $image_name ='';
            if(isset($gallery_image->languages)){
                foreach ($gallery_image->languages as $language) {
                    if($language->country_id==$country->country_id){
                      $image_name = $language->image_name;
                    }               
                }
            }
            
            $data = array(
                'class' =>'form-control' ,
                'name' =>'image_name[]',
                'id'=>'image_name',
                'placeholder' => 'image name '.$country->short_name ,
                'value' => set_value('image_name')?set_value('image_name'):$image_name,
            );
            echo form_input($data); ?>
            <input type="hidden" name="country_id[]" value="<?=$country->country_id ?>">
        </div>
      </div>
     <?php } ?>
      <div class="form-group">
        <label class="col-md-2 control-label" for="">Position</label>
        <div class="col-md-10">
          <?php 
            $position = is_object($gallery_image)?$gallery_image->position:'';
            $data = array(
                'class' =>'form-control' ,
                'name' =>'position',
                'id'=>'position',
                'placeholder' => 'position' ,
                'value' => set_value('position')?set_value('position'):$position,
            );
            echo form_input($data); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
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
  <!-- /.content -->
  </div>
  <!-- end: page -->
</section>