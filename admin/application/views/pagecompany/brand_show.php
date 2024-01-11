<section role="main" class="content-body">
	<header class="page-header">
		 <h2>Welcome  <span style="color:yellow;"><?php echo $company->com_name ?> expire :<?php echo $company->expire ?> </span> </h2>
	
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

<div class="table-responsive">
<table  class="table "  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    
    <td colspan="6">
      Total <b class="text-danger"><?=count($brands)?></b> records <a href="<?php echo base_url('CompanyBrand/add') ?>" class="btn btn-sm btn-success" target="_blank">Add Brand </a>
    </td>
  </tr>
  
  
  <tr class="bg-info" >
      <th width="250" class="" style="text-align:center;">ACTION</th>
      <td style="text-align:center;">IMAGE</td>
      <th style="text-align:center;"><span class="">COMPANY NAME </span></th>            
      <th style="text-align:center;">STATUS</th>         
      <th style="text-align:center;">IS_ACTIVE</th>         
      
  </tr>
  <?php foreach ($brands as $brand) {  ?>
    <tr >
      <td align="left" style="text-align:center;">    
        <a href="<?php echo base_url('CompanyBrand/edit/'.$brand->brand_id ); ?>" class="btn btn-sm btn-warning" target="_blank" > edit</a>
        <a href="<?php echo base_url('CompanyBrand/delete/'.$brand->brand_id ); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        
        &nbsp;</td>     
      <td style="text-align:center;">
        <?
          $filepath = "../images/brand/{$brand->brand_id}.jpg";
          if(is_file($filepath))
            echo '<img src="'.base_url($filepath).'?'.rand().'" class"img-responsive" style="max-width: 300px;">';
        ?>
      </td>
      <td style="text-align:center;">
       <?php 
          
          foreach ($brand->languages as $language) {
              echo "$language->iso2 : ";
              echo "$language->brand_name <br> ";
            }  
        ?>
      </td>
      
                      <td align="left" style="text-align:center;"><?php if ($brand->start_date <= date('Y-m-d') and $brand->end_date >= date('Y-m-d')) { ?>
                          <p>Not Expired</p>
                      <? }else { ?>
                          <p style="color: red;">Expired</p>
                          <? } ?></td>
      <td style="text-align:center;"><?=$brand->is_active==1?'Yes':'No' ?></td> 
           
    </tr>      
  <? } ?>
  </table>
</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>