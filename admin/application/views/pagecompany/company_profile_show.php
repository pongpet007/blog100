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

<div class="table-responsive">
<table  class="table"  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    <td colspan="5">
      Total <b class="text-danger"><?=count($company_profiles)?></b> records 
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >      
      <th><a href="<?php echo base_url('CompanyProfile/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank"> Add Profile </a> &nbsp; Profile</th>        
      <th>is active</th>        
      <th>Create</th>        
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($company_profiles as $company_profile) { ?>
    <tr align="center"   >      
      <td align="left">
        <div><?php echo $company_profile->profile_en; ?></div>
        <div class="clearfix"></div>
        <div><?php echo $company_profile->profile_th; ?></div>
      </td>
       <td align="left" width="100"><?php echo $company_profile->is_active==1?'Yes':'No'; ?></td>  
      <td align="left" width="100"><?php echo $company_profile->cdate; ?></td>                  
      <td align="left">  
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('CompanyProfile/edit/'.$com_id.'/'.$company_profile->company_profile_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('CompanyProfile/delete/'.$com_id.'/'.$company_profile->company_profile_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        &nbsp;
      </td>          
    </tr>      
  <? } ?>
  </table>
</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>