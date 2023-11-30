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
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
      echo form_open_multipart("Menu/$method/$menu_id",$attributes); ?>
          
          

        
          <?php foreach ($countrys as $country) { ?>
          <div class="form-group ">
            <label class="col-md-2 control-label" for="">Menu <?=$country->short_name ?></label>
              <div class="col-md-10">
              <?php 
              $menu_name = isset($country->language[0])?$country->language[0]->menu_name:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'menu_name[]',                  
                  'placeholder' => 'Menu ' . $country->short_name   ,
                  'value' => set_value('menu_name')?set_value('menu_name'):$menu_name,
              );
              echo form_input($data); ?>
              <input type="hidden" name="country_id[]" value="<?=$country->country_id ?>">
              </div>
          </div> 
          <?php } ?>

          <?php foreach ($countrys as $country) { ?>
          <div class="form-group ">
            <label class="col-md-2 control-label" for="">Meta Title <?=$country->short_name ?></label>
              <div class="col-md-10">
              <?php 
              $meta_title = isset($country->language[0])?$country->language[0]->meta_title:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'meta_title[]',                  
                  'placeholder' => 'Meta Title ' . $country->short_name   ,
                  'value' => set_value('meta_title')?set_value('meta_title'):$meta_title,
              );
              echo form_input($data); ?>
              </div>
          </div> 
          <?php } ?>

          <?php foreach ($countrys as $country) { ?>
          <div class="form-group ">
            <label class="col-md-2 control-label" for="">Meta Keyword <?=$country->short_name ?></label>
              <div class="col-md-10">
              <?php 
              $meta_keyword = isset($country->language[0])?$country->language[0]->meta_keyword:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'meta_keyword[]',                  
                  'placeholder' => 'Meta Keyword ' . $country->short_name   ,
                  'value' => set_value('meta_keyword')?set_value('meta_keyword'):$meta_keyword,
              );
              echo form_input($data); ?>
              </div>
          </div> 
          <?php } ?>

          <?php foreach ($countrys as $country) { ?>
          <div class="form-group ">
            <label class="col-md-2 control-label" for="">Meta Description <?=$country->short_name ?></label>
              <div class="col-md-10">
              <?php 
              $meta_description = isset($country->language[0])?$country->language[0]->meta_description:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'meta_description[]',                  
                  'placeholder' => 'Meta Description ' . $country->short_name   ,
                  'value' => set_value('meta_description')?set_value('meta_description'):$meta_description,
              );
              echo form_input($data); ?>
              </div>
          </div> 
          <?php } ?>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Menu Type</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $menu_type_id = is_object($menu)?$menu->menu_type_id:set_value('menu_type_id');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'menu_type_id',
                );
                echo form_dropdown('menu_type_id', $menutypes , $menu_type_id ,$data);
                ?>
              </div>
          </div>
          
          

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Link Target</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $target = is_object($menu)?$menu->target:set_value('target');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'target',
                );

                $options = array('0'=>'',1=>'_blank');
                echo form_dropdown('target', $options , $target ,$data);
                ?>
              </div>
          </div>


          <?php foreach ($countrys as $country) { ?>
          <div class="form-group  rowexternallink <?=(is_object($menu)&&$menu->menu_type_id==3)?'':'hide'?> ">
            <label class="col-md-2 control-label" for="">External link <?=$country->short_name ?></label>
              <div class="col-md-10">
              <?php 
              $url = isset($country->language[0])?$country->language[0]->url:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'url[]',                  
                  'placeholder' => 'External link ' . $country->short_name   ,
                  'value' => set_value('url')?set_value('url'):$url,
              );
              echo form_input($data); ?>
              </div>
          </div> 
          <?php } ?>
          <?/*?>
          <div class="form-group rowexternallink <?=(is_object($menu)&&$menu->menu_type_id==3)?'':'hide'?> ">
            <label class="col-md-2 control-label" for="">External link</label>
              <div class="col-md-10 ">
              <?php 
                $url = is_object($menu)?$menu->url:set_value('url');  
                $data = array(
                  'class' =>'form-control' ,
                  'name' =>'url',
                  'id'=>'url',
                  'placeholder' => 'url' ,
                  'value' => set_value('url')?set_value('url'):$url,
                );

                
                echo form_input($data);
                ?>
              </div>
          </div>
          <?*/?>
          

          <div class="form-group rowfeature  <?=(is_object($menu)&&$menu->menu_type_id==2)?'':'hide'?>">
            <label class="col-md-2 control-label" for="">Feature</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $feature_id = is_object($menu)?$menu->feature_id:set_value('feature_id');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'feature_id',
                );

                echo form_dropdown('feature_id', $features , $feature_id ,$data);
                ?>
              </div>
          </div>

         
          <div class="form-group rowcontent  <?=(is_object($menu)&&$menu->menu_type_id==1)?'':'hide'?>">
            <label class="col-md-2 control-label" for="">Content</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $content_id = is_object($menu)?$menu->content_id:set_value('content_id');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'content_id',
                );
                echo form_dropdown('content_id', $contents , $content_id ,$data);
                ?>
              </div>
          </div>

          

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Header</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_header = is_object($menu)?$menu->is_header:set_value('is_header');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'is_header',
                );

                $options = array(1=>'Yes',2=> 'No');
                echo form_dropdown('is_header', $options , $is_header ,$data);
                ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Footer</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_footer = is_object($menu)?$menu->is_footer:set_value('is_footer');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'is_footer',
                );

                $options = array(1=>'Yes',2=> 'No');
                echo form_dropdown('is_footer', $options , $is_footer ,$data);
                ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($menu)?$menu->is_active:set_value('is_active');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'is_active',
                );

                $options = array(1=>'Yes',2=> 'No');
                echo form_dropdown('is_active', $options , $is_active ,$data);
                ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Menu Parent</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $parent_id = is_object($menu)?$menu->parent_id:set_value('parent_id');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'parent_id',
                );

                echo form_dropdown('parent_id', $mainmenus , $parent_id ,$data);
                ?>
              </div>
          </div>

         
        

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" id="id" name="id" value="1">
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
<script type="text/javascript">
  $(document).ready(function(){
      $('#menu_type_id').change(function(){
          $('.rowexternallink').hide().removeClass('hide');
          $('.rowfeature').hide().removeClass('hide');
          $('.rowcontent').hide().removeClass('hide');

          if($(this).val()==1){
              $('.rowcontent').show();
          }

          if($(this).val()==2){
              $('.rowfeature').show();
          }

          if($(this).val()==3){
              $('.rowexternallink').show();
          }

      });

  });  
</script>