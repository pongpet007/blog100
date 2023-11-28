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
  <tr align="center" class="bg-info" >          
      <th>Company</th>      
      <th>Expire</th>      
      <th>Active</th>      
      <th>Info</th>      
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($companys as $company) { ?>
    <tr align="center">     
      <td align="left">
        <?php echo $company->com_name_en; ?><br>
        <?php echo $company->com_name_th; ?>
      </td>         
      <td align="left"><?php echo $company->expire; ?></td>         
      <td align="left"><?php echo $company->is_show==1?'Yes':'No'; ?></td>                  
      <td align="left">
        <small style="color: blue">
          cby : <?=$company->cby; ?><br>          
          cdate : <?=$company->cdate;?><hr  style="margin:0;">
          uby : <?=$company->uby;?><br>
          udate : <?=$company->udate;?><br>
        </small>
      </td>                  
      <td align="left" width="250">  
        <a class="btn btn-warning" href="https://www.brandexdirectory.com/Store/index/<?=$company->com_id?>" target="_blank">View web</a>    
        <a class="btn btn-success" href="<?php echo base_url('Company/edit/'.$company->com_id) ?>" target="_blank">View Admin</a>    
       
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