<section role="main" class="content-body">
	<header class="page-header">
		<h2>Welcome  <span style="color:yellow;">Brandexdirectory.com</span> System</h2>
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Product  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">
<?php if($this->session->flashdata('msg')){ ?>  
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>                
      </div>
<?php } ?>

<div class="table-responsive">
<table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    <td colspan="8">
      Total <b class="text-danger"><?= sizeof($specs)  ?></b> records  <a href="<?php echo base_url("CompanyProductSpec/add/$com_id/$pro_id/") ?>" class="btn btn-xs btn-success" target="_blank">Add Spec </a>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th height="25" >Spec</th>     
      <th width="100" class="">Action</th>
  </tr>
  <?php 
        foreach ($specs as $spec) {       
       
  ?>
    <tr align="center"   >               
      <td align="left" >
        EN : <?=$spec->label_en ?> = <?=$spec->value_en ?><br>
        TH : <?=$spec->label_th ?> = <?=$spec->value_th ?>        
      </td>        
           
           
      <td align="left" valign="top">  
        <div style="padding: 5px;">
        <a class="btn btn-xs btn-warning" href="<?php echo base_url("CompanyProductSpec/edit/$com_id/$spec->pro_id/$spec->spec_id") ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url("CompanyProductSpec/delete/$com_id/$spec->pro_id/$spec->spec_id"); ?>"  class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
		
        </div>
        
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