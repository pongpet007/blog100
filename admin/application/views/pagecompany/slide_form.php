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
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Slide <?=$method?></a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
        echo form_open_multipart("CompanySlide/$method/$com_id/$slide_id",$attributes); ?>
      <div class="form-group">
        <label class="col-md-2 control-label" for="">Picture</label>
        <div class="col-md-10 ">
          <?php 
            $slide_id = is_object($slide)?$slide->slide_id:'';
            
            $filepath = "../images/slide/". $slide_id .'.jpg';
            
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
        <label class="col-md-2 control-label" for="">IS Active</label>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <?php 
            $is_active = is_object($slide)?$slide->is_active:set_value('is_active');  
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
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Language</a>
        <a href="#" onclick="$('#language').show();$('#country_id').focus();" class="btn  btn-sm btn-success">Add language</a>
           Filter Language : <?php    
              $data = array(
                'class' =>'form-control' ,                 
                'id'=>'countryfillter',
                'style'=>'width:300px;display:inline;',
                'onchange'=>'filtercountry()'
              );
              
              echo form_dropdown('countryfillter',$countrys , 0 ,$data);
              
            ?>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">


<?php 
$attributes = array('id' =>'frmlanguage' , 'class'=>'form-horizontal' , 'name'=>'frmlanguage' ,'target'=>'_blank' );  
echo form_open_multipart("#",$attributes); ?>

      <div id="language" style="display: none;">
        

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
                  <label class="col-md-2 control-label" for="">slide_name</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'slide_name',
                          'id'=>'slide_name',
                          'placeholder' => 'slide_name' ,
                          'value' => set_value('slide_name')?set_value('slide_name'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">slide detail short</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ' ,
                          'rows'=>2,
                          'name' =>'slide_desc_short',
                          'id'=>'slide_desc_short',
                          'placeholder' => 'slide_desc_short' ,
                          'value' => set_value('slide_desc_short')?set_value('slide_desc_short'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>       

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">slide detail</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'slide_desc',
                          'id'=>'slide_desc',
                          'placeholder' => 'slide_desc' ,
                          'value' => set_value('slide_desc')?set_value('slide_desc'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>       
                <div class="form-group">
                  <label class="col-md-2 control-label" for=""></label>
                  <div class="col-md-10 ">
                    <input type="hidden" id="slide_id" name="slide_id" value="<?=$slide_id ?>">
                    <input type="hidden" id="language_id" name="language_id" value="">
                    <input type="hidden" id="languagemethod" name="languagemethod" value="add">
                    <button type="button" onclick="savelanguage()" class="btn btn-sm btn-primary" >Save changes</button>
                    <button type="button" onclick="window.location.reload();" class="btn  btn-sm btn-warning" >Close</button>
                  </div>
                </div>               
                
      </div>
     
<?php echo form_close(); ?> 
        <?php foreach ($languages as $language) { 
             
            if(sizeof($language->languages) >0 ){
           
              foreach ($language->languages as $cl) {
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
                      <td>slide name</td>
                      <td><?=$cl->slide_name ?></td>
                    </tr> 
                     <tr>
                      <td>slide detail short</td>
                      <td><?=$cl->slide_desc_short ?></td>
                    </tr>  
                    <tr>
                      <td>slide detail</td>
                      <td><?=$cl->slide_desc ?></td>
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
    </div>
  </div>
  
</div>

  </div>
  <!-- end: page -->
</section>



<script type="text/javascript">
  
  function editlanguage(id) {
      $('#languagemethod').val('edit');
      $.getJSON( "<?=base_url("CompanySlide/getLanguageJson/")?>"+id, function( data ) {     
        console.log(data);  
        $('#country_id').val(data.country_id);
        $('#meta_title').val(data.meta_title);
        $('#meta_keyword').val(data.meta_keyword);
        $('#meta_description').val(data.meta_description);
        $('#slide_name').val(data.slide_name);                 
        $('#slide_desc_short').val(data.slide_desc_short);                 
        CKEDITOR.instances.slide_desc.setData(data.slide_desc);
        $('#language_id').val(id);
        $('#language').show();
        $('#country_id').focus();
      });
  }
  function deletelanguage(id) {
    if(confirm('Delete this language?')){
      $.get('<?=base_url("CompanySlide/deletelanguage/")?>' + id,function (data) {        
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
    var slide_desc = CKEDITOR.instances.slide_desc.getData();    
    frm = frm +'&slide_desc='+slide_desc;
    

    $.post('<?=base_url("CompanySlide/savelanguage")?>',frm,function(data) {
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