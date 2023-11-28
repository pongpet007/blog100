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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">      

    <!-- Main content -->
    <section class="content">
<?php if($this->session->flashdata('msg')){ ?>  
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>                
      </div>
<?php } ?>
<div class="row">
  <?php foreach ($brand_olds as $brand_old) { ?>
  <div class="col-md-2 text-center">
      <?php
          $filepath ="assets/images/brand/{$brand_old->brand_id}.jpg";
          //echo $filepath;
          if(is_file($filepath)){
            echo '<img src="'.base_url($filepath).'"/>';
          }
      ?>

      <br>EN : <?=$brand_old->name_en?><br>
      TH : <?=$brand_old->name_en?><br>
</div>
<?php } ?>
</div>
<div class="table-responsive">

<table  class="table "  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    
    <td colspan="6">
      Total <b class="text-danger"><?=count($brands)?></b> records <a href="<?php echo base_url('CompanyBrand/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank">Add Brand </a>
    </td>
  </tr>
  
  
  <tr class="bg-info" >
      <td></td>
      <th ><span class="">Brand EN</span></th>             
      <th ><span class="">Brand TH</span></th>            
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($brands as $brand) {  ?>
    <tr >
      <td>
        <?
          $filepath = "images/brand/{$brand->brand_id}.jpg";
          if(is_file($filepath))
            echo '<img src="'.base_url($filepath).'" class"img-responsive">';
        ?>
      </td>
      <td><?=$brand->name_en ?></td>
      <td><?=$brand->name_th ?></td>    
         
      <td align="left" valign="top" >     
        <a href="<?php echo base_url('CompanyBrand/delete/'.$com_id.'/'.$brand->company_brand_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        
        &nbsp;</td>          
    </tr>      
  <? } ?>
  </table>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- end: page -->
</section>