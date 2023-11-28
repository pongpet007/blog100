<section role="main" class="content-body">
	<header class="page-header">
		<h2><span style="color:yellow;"></span> </h2>
	
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

	<section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Config Splash Page</h2>
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
      echo form_open_multipart("Splash/index/",$attributes); ?>
      	
	   <div class="form-group">
 
      <label class="col-md-3 control-label" for="">Splash page <br/>Picture (width 1920 * 1080)</label>
      <div class="col-md-6">
       
       <? 
        $filepath = "../assets/images/splash/splash.jpg"; 
        if(is_file($filepath))
          echo "<img src='$filepath?".rand()."' class='img-responsive'>"; 
    ?>
        <input type="file" name="splash" id="splash"> 
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label" for="">Background </label>
      <div class="col-md-6">
         <label><input type="radio" name="splash_bg_type" id="radio" value="1" <? if($config->splash_bg_type==1) echo "checked=\"checked\""; ?> /></label>
        <?
      $filepath = "../assets/images/splash/bg.jpg";
      if(is_file($filepath))
      echo "<img src='$filepath?". rand() ."' class='img-responsive'>";
      ?>        
        <input type="file" name="bgpic" id="bgpic"  />
        
      </div> 
      </div>
        <div class="form-group">
      <label class="col-md-3 control-label" for=""> </label>
      <div class="col-md-6">  
           <input type="radio" name="splash_bg_type" id="radio2" value="2" <? if($config->splash_bg_type==2) echo "checked=\"checked\""; ?> />
      <input  class="colorpicker form-control " name="splash_bg_value" type="text" id="splash_bg_value" value="<?=$config->splash_bg_value;?>" size="8" maxlength="7" autocomplete="off" />
  
      </div>
        </div>
      <div class="form-group">
      <label class="col-md-3 control-label" for="">Switch </label>
      <div class="col-md-6">  
        <label>
        <input name="splash" type="radio" value="1" 
        <? if($config->splash==1) echo "checked"; ?>>
        On
      </label>
        <label>
        <input type="radio" name="splash" value="0" <? if($config->splash==0) echo "checked"; ?> />
        </label>
        Off
      </div>
        </div>
       <div class="form-group">
      <label class="col-md-3 control-label" for="">Expire</label>
        <div class="col-md-6">  
        <input  class="form-control" data-plugin-datepicker="" data-plugin-options='{"format":"yyyy-mm-dd"}' type="text" name="splash_expire"  id="splash_expire" size="10" value="<? if(!is_null($config->splash_expire))
    echo date('Y-m-d',strtotime($config->splash_expire));
    
    ?>"  />
        
      </div>     
        </div>
      <div class="form-group">
        <label class="col-md-3 control-label" for=""></label>
        <div class="col-md-6">
          <input name="Submit" type="submit" value="SAVE" />
             
        </div>
    </div>

	      <?php echo form_close(); ?> 

        </div>
    </section>

	<!-- start: page -->
	
	<!-- end: page -->
</section>