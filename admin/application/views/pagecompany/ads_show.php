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
<table  class="table"  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    <td colspan="5">
      Total <b class="text-danger"><?=count($adss)?></b> records 
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th height="25" >
      <span class="">PORTFORIO  </span> 
      <a href="<?php echo base_url('CompanyAds/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank"> ADD PORTFORIO  </a></th>   
      <th>Active</th>      
      <th>show indwx</th>      
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($adss as $ads) { ?>
    <tr align="center"   >
      <td align="left">
          <?php 
           $filepath = "../images/cover/{$ads->company_ads_id}.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive" style="max-width:300px;"><br>';
            }            
           
           ?>
      </td>  
      
      <td align="left"><?php echo $ads->is_active==1?'Yes':'No'; ?></td>                  
      <td align="left"><?php echo $ads->show_index==1?'Yes':'No'; ?></td>                  
      <td align="left">  
        <!-- <a class="btn btn-xs btn-success" href="<?php echo base_url('CompanyAds/export/'.$com_id.'/'.$ads->company_ads_id) ?>" target="_blank" style="margin-bottom: 5px;">Export working</a>  --> 
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('CompanyAds/edit/'.$com_id.'/'.$ads->company_ads_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('CompanyAds/delete/'.$com_id.'/'.$ads->company_ads_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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