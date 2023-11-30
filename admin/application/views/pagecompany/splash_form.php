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
      <h2 class="panel-title">Splash <?=$method?></h2>
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
        echo form_open_multipart("SplashPage/$method/$splash_id",$attributes); ?>
      <div class="form-group">
        <label class="col-md-2 control-label" for="">Picture</label>
        <div class="col-md-10 ">
          <?php 
            $splash_id = is_object($splash)?$splash->splash_id:'';
            
            $filepath = "../images/splash/". $splash_id .'.jpg';
            
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
      <div class="form-group">
        <label class="col-md-2 control-label" for="">Name</label>
        <div class="col-md-10">
          <?php 
            $splash_name = is_object($splash)?$splash->splash_name:'';
            $data = array(
                'class' =>'form-control' ,
                'name' =>'splash_name',
                'id'=>'splash_name',
                'placeholder' => 'splash_name' ,
                'value' => set_value('splash_name')?set_value('splash_name'):$splash_name,
            );
            echo form_input($data); ?>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="">Date start</label>
        <div class="col-md-10">
          <?php 
            $date_start = is_object($splash)?$splash->date_start:'';
            $data = array(
                'class' =>'form-control datepicker' ,
                'name' =>'date_start',
                'id'=>'date_start',
                'autocomplete'=>'off',
                'placeholder' => 'date_start' ,
                'value' => set_value('date_start')?set_value('date_start'):$date_start,
            );
            echo form_input($data); ?>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="">Date end</label>
        <div class="col-md-10">
          <?php 
            $date_end = is_object($splash)?$splash->date_end:'';
            $data = array(
                'class' =>'form-control datepicker' ,
                'name' =>'date_end',
                'id'=>'date_end',
                'autocomplete'=>'off',
                'placeholder' => 'date_end' ,
                'value' => set_value('date_end')?set_value('date_end'):$date_end,
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