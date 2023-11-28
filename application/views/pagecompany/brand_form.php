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
          <h2 class="panel-title">Brand <?=$method?></h2>
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
      echo form_open_multipart("customeradmin/CompanyBrand/$method/$com_id",$attributes); ?>
          <table class="table table-striped">
            <tr>
              <td colspan="4">             
                  Keyword <input type="text" id="keyword" name="keyword" placeholder="Keyword" class="form-control" style="width: 300px; display: inline;"> <input type="submit" name="btn_submit" value="Search" class="btn btn-success"> 
                
              </td>
            </tr>
            <tr>
              <td align="center">  
                <?php 
              $data = array(
              'class' =>'btn btn-primary' ,
              'name' =>'btn_send',
              'id'=>'btn_send',
              'value'=>'SAVE'
              );
              echo form_submit($data); 
              ?>
</td>
              <td>Brand</td>
              <td>Name EN</td>
              <td>Name TH</td>              
            </tr>
            <?php foreach ($brands as $brand) { ?>
            <tr>
              <td align="center"><input type="checkbox" class="chk_brand" name="chk_brand[]" value="<?=$brand->brand_id ?>"></td>
              <td>
                <?
                  $filepath = "images/brand/{$brand->brand_id}.jpg";
                  if(is_file($filepath))
                    echo '<img src="'.base_url($filepath).'" class"img-responsive">';
                ?>
              </td>
              <td><?=$brand->name_en ?></td>
              <td><?=$brand->name_th ?></td>              
            </tr>
            <?php } ?>
            <tr>
              <td>
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
              </td>
            </tr>
          </table>         
        

      <?php echo form_close(); ?> 
 
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