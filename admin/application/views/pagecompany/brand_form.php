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
	        <h2 class="panel-title">Brand <?=$method?>
           <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal">Add language</a>
           Filter Language : <?php    
              $data = array(
                'class' =>'form-control' ,                 
                'id'=>'countryfillter',
                'style'=>'width:300px;display:inline;',
                'onchange'=>'filtercountry()'
              );
              
              echo form_dropdown('countryfillter',$countrys , 0 ,$data);
              
            ?>

          </h2>
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
      echo form_open_multipart("CompanyBrand/$method/$brand_id",$attributes); ?>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Brand picture (165 x 55)</label>
              <div class="col-md-10 ">
              <?php 

              $brand_id = is_object($brand)?$brand->brand_id:'';

              $filepath = "../images/brand/". $brand_id .'.jpg';

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
                  <label class="col-md-2 control-label" for="">Position</label>
                  <div class="col-md-10 ">
                    <?php 
                      $position = is_object($brand)?$brand->position:'';
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
                  <label class="col-md-2 control-label" for="">Brand URL <span style="color: red;">*</span></label>
                  <div class="col-md-10 ">
                    <?php 
                      $brand_url = is_object($brand)?$brand->brand_url:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'brand_url',
                          'id'=>'brand_url',
                          'placeholder' => 'brand_url' ,
                          'value' => set_value('brand_url')?set_value('brand_url'):$brand_url,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($brand)?$brand->is_active:set_value('is_active');  
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
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">             
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
       <?php foreach ($languages as $language) { 
             
            if(sizeof($language->brand_languages) >0 ){
           
              foreach ($language->brand_languages as $cl) {
            ?>
           <div class="table-responsive countryall country<?=$language->country_id ?>">
                  <table class="table table-striped">
                    <tr>
                      <th colspan="2"> <h2>Language <?=$language->short_name ?></h2>
                        <a href="javascript:editlanguage('<?=$cl->language_id ?>')" class="btn btn-sm btn-warning">Edit language</a>
                        <a href="javascript:deletelanguage('<?=$cl->language_id ?>')" class="btn btn-sm btn-danger">Delete language</a>
                      </th>
                    </tr>

                    <tr>
                      <td width="300">Meta title</td>
                      <td><?=$cl->meta_title ?></td>
                    </tr> 
                    <tr>
                      <td>Meta keyword</td>
                      <td><?=$cl->meta_keyword ?></td>
                    </tr> 
                    <tr>
                      <td>Meta description</td>
                      <td><?=$cl->meta_description ?></td>
                    </tr> 
                    <tr>
                      <td>Brand name</td>
                      <td><?=$cl->brand_name ?></td>
                    </tr> 
                    <tr>
                      <td>Brand Detail</td>
                      <td><?=$cl->brand_desc ?></td>
                    </tr>                     
                    <tr>
                      <td>cby / cdate</td>
                      <td><?=$cl->cby ?> / <?=$cl->cdate ?></td>
                    </tr>    
                    <tr>
                      <td>uby / udate</td>
                      <td><?=$cl->uby ?> / <?=$cl->udate ?></td>
                    </tr>                   

                  </table>
          </div>
          <?php }}} ?>
 
		</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>
<style type="text/css">
  .chk_brand{
     -ms-transform: scale(2); /* IE */
    -moz-transform: scale(2); /* FF */
    -webkit-transform: scale(2); /* Safari and Chrome */
    -o-transform: scale(2); /* Opera */
  }
</style>
<?php 
$attributes = array('id' =>'frmlanguage' , 'class'=>'form-horizontal' , 'name'=>'frmlanguage' ,'target'=>'_blank' );  
echo form_open_multipart("#",$attributes); ?>
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Language</h4>
      </div>
      <div class="modal-body">
        

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Language</label>
                  <div class="col-md-10 ">
                     <?php    
                      $data = array(
                        'class' =>'form-control' ,                 
                        'id'=>'country_id',                                          
                      );
                      
                      echo form_dropdown('country_id',$countrys , 0 ,$data);
                      
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">meta_title</label>
                  <div class="col-md-10 ">
                    <?php                      
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_title',
                          'id'=>'meta_title',
                          'placeholder' => 'meta_title' ,
                          'value' => set_value('meta_title')?set_value('meta_title'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
               
                <div class="form-group ">
                  <label class="col-md-2 control-label" for="">meta_keyword</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_keyword',
                          'id'=>'meta_keyword',
                          'placeholder' => 'meta_keyword' ,
                          'value' => set_value('meta_keyword')?set_value('meta_keyword'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group <?=$_SESSION["sslevel"]==1?'hide':''?> ">
                  <label class="col-md-2 control-label" for="">meta_description</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'meta_description',
                          'id'=>'meta_description',
                          'placeholder' => 'meta_description' ,
                          'value' => set_value('meta_description')?set_value('meta_description'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>                
               
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">brand_name</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'brand_name',
                          'id'=>'brand_name',
                          'placeholder' => 'brand_name' ,
                          'value' => set_value('brand_name')?set_value('brand_name'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

               <div class="form-group">
                  <label class="col-md-2 control-label" for="">Brand Detail </label>
                    <div class="col-md-10 ">
                    <?php 
                      $data = array(
                        'class' =>'form-control ckeditor' ,                  
                        'name' =>'brand_desc',
                        'id'=>'brand_desc',
                        'placeholder' => 'brand_desc' ,
                        'value' => set_value('brand_desc')?set_value('brand_desc'):'',
                    );
                    echo form_textarea($data); ?>
                    </div>
                </div>

                
      </div>
      <div class="modal-footer">

        <input type="hidden" id="brand_id" name="brand_id" value="<?=$brand_id ?>">
        <input type="hidden" id="language_id" name="language_id" value="">
        <input type="hidden" id="languagemethod" name="languagemethod" value="add">
        <button type="button" onclick="savelanguage()" class="btn btn-sm btn-primary" >Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Modal Language -->
<?php echo form_close(); ?> 

<script type="text/javascript">
  
  function editlanguage(id) {
      $('#languagemethod').val('edit');
      $.getJSON( "<?=base_url("CompanyBrand/getLanguageJson/")?>"+id, function( data ) {       
        $('#country_id').val(data.country_id);
        $('#meta_title').val(data.meta_title);
        $('#meta_keyword').val(data.meta_keyword);
        $('#meta_description').val(data.meta_description);
        $('#brand_name').val(data.brand_name);                  
        $('#brand_desc').val(data.brand_desc);                  
        // CKEDITOR.instances.brand_desc.setData(data.brand_desc);
        
        $('#language_id').val(id);
        $('#myModal').modal("show");
      });
  }
  function deletelanguage(id) {
    if(confirm('Delete this language?')){
      $.get('<?=base_url("CompanyBrand/deletelanguage/")?>' + id,function (data) {        
        window.location.reload();
      });
    }
  }

  function savelanguage() {
    if($('#country_id').val()==0){
        alert('please select language');
        $('#country_id').focus();
        return false;
    }    
    
    var frm = $('#frmlanguage').serialize();
    var brand_desc = CKEDITOR.instances.brand_desc.getData();
    // var com_desc = CKEDITOR.instances.com_desc.getData();
    frm = frm +'&brand_desc='+brand_desc;
    

    $.post('<?=base_url("CompanyBrand/savelanguage")?>',frm,function(data) {
      if(data.indexOf('save complete')>-1){
        alert(data);
        window.location.reload();
      }

    });
  }
  function filtercountry() {
    var cid = $('#countryfillter').val();
    if(cid > 0)
    {
      $('.countryall').hide();
      $('.country' + cid).show();
    }
    else
    {
      $('.countryall').show();
    }
    

  }
  </script>