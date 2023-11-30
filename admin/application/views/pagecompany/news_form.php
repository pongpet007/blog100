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
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          News <?=$method?>
        </a>
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
      echo form_open_multipart("CompanyNews/$method/$com_id/$news_id",$attributes); ?>
          
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Picture (370 * 220)</label>
              <div class="col-md-10 ">
              <?php 

              $news_id = is_object($news)?$news->news_id:'';

              $filepath = "../images/news/". $news_id .'.jpg';

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-height:250px;"><br>';                
              }

              $data = array(                 
                  'name' =>'picture',
                  'id'=>'picture',                
              );
              echo form_upload($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">New Type </label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $news_type_id = is_object($news)?$news->news_type_id:set_value('news_type_id');  
                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'news_type_id',
                );

                $options = array(1=>'NEWS',2=> 'BLOG');
                echo form_dropdown('news_type_id', $options , $news_type_id ,$data);
                ?>
              </div>
          </div>

          <div class="form-group">
              <label class="col-md-2 control-label" for="">News URL <span style="color: red">*</span></label>
              <div class="col-md-6">
                <?php 
                  $news_url = is_object($news)?$news->news_url:'';
                  $data = array(
                      'class' =>'form-control' ,
                      'name' =>'news_url',
                      'id'=>'news_url',
                      'placeholder' => 'News URL' ,
                      'value' => set_value('news_url')?set_value('news_url'):$news_url,
                  );
                  echo form_input($data); ?>
              </div>
            </div>

           <div class="form-group ">
            <label class="col-md-2 control-label" for="">News date</label>
              <div class="col-md-3">
              <?php 

              $news_datetime = is_object($news)?$news->news_datetime:'';
              $data = array(
                  'class' =>'form-control datepicker' ,
                  'name' =>'news_datetime',
                  'id'=>'news_datetime',
                  'placeholder' => 'News date' ,
                  'value' => set_value('news_datetime')?set_value('news_datetime'):$news_datetime,
              );
              echo form_input($data); ?>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($news)?$news->is_active:set_value('is_active');  
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
                  <label class="col-md-2 control-label" for="">news_name</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'news_name',
                          'id'=>'news_name',
                          'placeholder' => 'news_name' ,
                          'value' => set_value('news_name')?set_value('news_name'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">news tags</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'news_tags',
                          'id'=>'news_tags',
                          'placeholder' => 'news tags' ,
                          'value' => set_value('news_tags')?set_value('news_tags'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">News detail short</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'rows'=>2,
                          'name' =>'news_desc_short',
                          'id'=>'news_desc_short',
                          'placeholder' => 'news_desc_short' ,
                          'value' => set_value('news_desc_short')?set_value('news_desc_short'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>            

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">News detail</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'news_desc',
                          'id'=>'news_desc',
                          'placeholder' => 'news_desc' ,
                          'value' => set_value('news_desc')?set_value('news_desc'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>        

                <div class="form-group">
                  <label class="col-md-2 control-label" for=""></label>
                  <div class="col-md-10 ">
                    <input type="hidden" id="news_id" name="news_id" value="<?=$news_id ?>">
                    <input type="hidden" id="language_id" name="language_id" value="">
                    <input type="hidden" id="languagemethod" name="languagemethod" value="add">
                    <button type="button" onclick="savelanguage()" class="btn btn-sm btn-primary" >Save changes</button>
                    <button type="button" onclick="window.location.reload();" class="btn  btn-sm btn-warning" >Close</button>
                  </div>
                </div>        

                
      </div>
      
<!-- end Modal Language -->
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
                      <td>News name</td>
                      <td><?=$cl->news_name ?></td>
                    </tr>
                    <tr>
                      <td>News Tags</td>
                      <td><?=$cl->news_tags ?></td>
                    </tr> 
                    <tr>
                      <td>news detail short</td>
                      <td><?=$cl->news_desc_short ?></td>
                    </tr>  
                    <tr>
                      <td>news detail</td>
                      <td><?=$cl->news_desc ?></td>
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

  
 <!-- /.content -->
  </div>
  <!-- end: page -->
</section>



<script type="text/javascript">
  
  function editlanguage(id) {
      $('#languagemethod').val('edit');
      $.getJSON( "<?=base_url("CompanyNews/getLanguageJson/")?>"+id, function( data ) {       
        $('#country_id').val(data.country_id);
        $('#meta_title').val(data.meta_title);
        $('#meta_keyword').val(data.meta_keyword);
        $('#meta_description').val(data.meta_description);
        $('#news_name').val(data.news_name);
        $('#news_tags').val(data.news_tags);                 
        $('#news_desc_short').val(data.news_desc_short);                 
        CKEDITOR.instances.news_desc.setData(data.news_desc);
        $('#language_id').val(id);
        $('#language').show();
        $('#country_id').focus();
      });
  }
  function deletelanguage(id) {
    if(confirm('Delete this language?')){
      $.get('<?=base_url("CompanyNews/deletelanguage/")?>' + id,function (data) {        
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
    var news_desc = encodeURIComponent(CKEDITOR.instances.news_desc.getData());    
    frm = frm +'&news_desc='+news_desc;
    

    $.post('<?=base_url("CompanyNews/savelanguage")?>',frm,function(data) {
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