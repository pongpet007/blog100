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
	        <h2 class="panel-title">Category <?=$method?> 
          <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal">Add language</a>
           Filter Language : <?php    
              $data = array(
                'class' =>'form-control' ,                 
                'id'=>'countryfillter',
                'style'=>'width:300px;display:inline;',
                'onchange'=>'filtercountry()'
              );
              
              echo form_dropdown('countryfillter',$countrys , 0 ,$data);
              
            ?></h2>
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
      echo form_open_multipart("CompanyCategory/$method/$cat_id",$attributes); ?>
          

          <div class="form-group">
            <label class="col-md-2 control-label" for="">Picture </label>
              <div class="col-md-10">
              <?php 

              $cat_id = is_object($category)?$category->cat_id:'';

              $filepath = "../images/category/". $cat_id .'_mobile.webp';

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
            <label class="col-md-2 control-label" for="">Parent Category</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $cat_ref = is_object($category)?$category->cat_ref:set_value('cat_ref');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'cat_ref',
                );

                echo form_dropdown('cat_ref', $parents , $cat_ref ,$data);
                ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_show = is_object($category)?$category->is_show:set_value('is_show');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'is_show',
                );

                $options = array(1=>'Yes',2=> 'No');
                echo form_dropdown('is_show', $options , $is_show ,$data);
                ?>
              </div>
          </div>

          <div class="form-group">
                  <label class="col-md-2 control-label" for="">Position</label>
                  <div class="col-md-10 ">
                    <?php 
                      $orders = is_object($category)?$category->orders:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'orders',
                          'id'=>'orders',
                          'placeholder' => 'orders' ,
                          'value' => set_value('orders')?set_value('orders'):$orders,
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">Catetgory URL <span style="color: red;">*</span></label>
                  <div class="col-md-10 ">
                    <?php 
                      $cat_url = is_object($category)?$category->cat_url:'';
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'cat_url',
                          'id'=>'cat_url',
                          'placeholder' => 'cat_url' ,
                          'value' => set_value('cat_url')?set_value('cat_url'):$cat_url,
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
              'class' =>'btn btn-sm btn-primary' ,
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
             
            if(sizeof($language->category_languages) >0 ){
           
              foreach ($language->category_languages as $cl) {
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
                      <td>Category</td>
                      <td><?=$cl->cat_name ?></td>
                    </tr> 
                    <tr>
                      <td>Category short</td>
                      <td><?=$cl->cat_short_name ?></td>
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
                  <label class="col-md-2 control-label" for="">cat_name</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'cat_name',
                          'id'=>'cat_name',
                          'placeholder' => 'cat_name' ,
                          'value' => set_value('cat_name')?set_value('cat_name'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">cat_short_name</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'cat_short_name',
                          'id'=>'cat_short_name',
                          'placeholder' => 'cat_short_name' ,
                          'value' => set_value('cat_short_name')?set_value('cat_short_name'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>               
                
      </div>
      <div class="modal-footer">

        <input type="hidden" id="cat_id" name="cat_id" value="<?=$cat_id ?>">
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
      $.getJSON( "<?=base_url("CompanyCategory/getLanguageJson/")?>"+id, function( data ) {       
        $('#country_id').val(data.country_id);
        $('#meta_title').val(data.meta_title);
        $('#meta_keyword').val(data.meta_keyword);
        $('#meta_description').val(data.meta_description);
        $('#cat_name').val(data.cat_name);
        $('#cat_short_name').val(data.cat_short_name);             
        $('#language_id').val(id);
        $('#myModal').modal("show");
      });
  }
  function deletelanguage(id) {
    if(confirm('Delete this language?')){
      $.get('<?=base_url("CompanyCategory/deletelanguage/")?>' + id,function (data) {        
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
    // var com_desc_short = CKEDITOR.instances.com_desc_short.getData();
    // var com_desc = CKEDITOR.instances.com_desc.getData();
    // frm = frm +'&com_desc='+com_desc+'&com_desc_short='+com_desc_short;
    

    $.post('<?=base_url("CompanyCategory/savelanguage")?>',frm,function(data) {
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