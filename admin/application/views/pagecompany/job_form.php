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
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">job <?=$method?></a>
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
      echo form_open_multipart("CompanyJob/$method/$com_id/$job_id",$attributes); ?>
          <div class="form-group">
            <label class="col-md-2 control-label" for="">Salary</label>
              <div class="col-md-3">
              <?php 
              $salary = is_object($job)?$job->salary:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'salary',
                  'id'=>'salary',
                  'placeholder' => 'Salary' ,
                  'value' => set_value('salary')?set_value('salary'):$salary,
              );
              echo form_input($data); ?>
              </div>
          </div>        
       
        

           <div class="form-group">
            <label class="col-md-2 control-label" for="">IS Active</label>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <?php 
                $is_active = is_object($job)?$job->is_active:set_value('is_active');  
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
            <label class="col-md-2 control-label" for="">Picture Small (500 x 313)</label>
              <div class="col-md-10 ">
              <?php 
               $id = is_object($job)?$job->job_id:'';
               $filepath = "../images/job/job{$id}_s.jpg";

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
                  echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-danger btn-xs">Delete File</a>';
              }

              $data = array(                 
                  'name' =>'picture_s',
                  'id'=>'picture_s',                
              );
              echo form_upload($data); ?>
              </div>
          </div>

           <div class="form-group hide">
            <label class="col-md-2 control-label" for="">Picture Full ( 1000 x 625 )</label>
              <div class="col-md-10 ">
              <?php 
               $id = is_object($job)?$job->job_id:'';
               $filepath = "../images/job/job{$id}_l.jpg";

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
                  echo '<a href="'.base_url("Filemanage/delete?filepath=$filepath").'" class="btn btn-danger btn-xs">Delete File</a>';
              }

              $data = array(                 
                  'name' =>'picture_l',
                  'id'=>'picture_l',                
              );
              echo form_upload($data); ?>
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
              <input type="hidden" name="id" value="<?=$job_id?>">
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
                  <label class="col-md-2 control-label" for="">job_name</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'name' =>'job_name',
                          'id'=>'job_name',
                          'placeholder' => 'job_name' ,
                          'value' => set_value('job_name')?set_value('job_name'):'',
                      );
                      echo form_input($data); ?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-2 control-label" for="">job detail short</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control' ,
                          'rows'=>2,
                          'name' =>'job_desc_short',
                          'id'=>'job_desc_short',
                          'placeholder' => 'job_desc_short' ,
                          'value' => set_value('job_desc_short')?set_value('job_desc_short'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>            

                <div class="form-group">
                  <label class="col-md-2 control-label" for="">job detail</label>
                  <div class="col-md-10 ">
                    <?php 
                     
                      $data = array(
                          'class' =>'form-control ckeditor' ,
                          'rows'=>2,
                          'name' =>'job_desc',
                          'id'=>'job_desc',
                          'placeholder' => 'job_desc' ,
                          'value' => set_value('job_desc')?set_value('job_desc'):'',
                      );
                      echo form_textarea($data); ?>
                  </div>
                </div>       

                <div class="form-group">
                  <label class="col-md-2 control-label" for=""></label>
                  <div class="col-md-10 ">
                  <input type="hidden" id="job_id" name="job_id" value="<?=$job_id ?>">
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
                      <td>job name</td>
                      <td><?=$cl->job_name ?></td>
                    </tr> 
                    <tr>
                      <td>job detail short</td>
                      <td><?=$cl->job_desc_short ?></td>
                    </tr>  
                    <tr>
                      <td>job detail</td>
                      <td><?=$cl->job_desc ?></td>
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
      $.getJSON( "<?=base_url("CompanyJob/getLanguageJson/")?>"+id, function( data ) {       
        $('#country_id').val(data.country_id);
        $('#meta_title').val(data.meta_title);
        $('#meta_keyword').val(data.meta_keyword);
        $('#meta_description').val(data.meta_description);
        $('#job_name').val(data.job_name);                 
        $('#job_desc_short').val(data.job_desc_short);                 
        CKEDITOR.instances.job_desc.setData(data.job_desc);
        $('#language_id').val(id);
        $('#language').show();
        $('#country_id').focus();
      });
  }
  function deletelanguage(id) {
    if(confirm('Delete this language?')){
      $.get('<?=base_url("CompanyJob/deletelanguage/")?>' + id,function (data) {        
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
    var job_desc = CKEDITOR.instances.job_desc.getData();    
    frm = frm +'&job_desc='+job_desc;
    

    $.post('<?=base_url("CompanyJob/savelanguage")?>',frm,function(data) {
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