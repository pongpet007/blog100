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
      
      <form method="get" name="frm" id="frm"  action="<?php echo base_url('Packages/index/') ?>">
      Total <b class="text-danger"><?=count($packages)?></b> records       
        </form>        
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th height="25" >
      <span class="">Packages </span> 
      <a href="<?php echo base_url('Perches/add/') ?>" class="btn btn-xs btn-success" target="_blank"> Add Packages </a></th>     
      <th>Name</th>      
      <th>Price</th>            
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($packages as $package) { ?>
    <tr align="center"   >
      <td align="left">
          <?php 
           $filepath = "../images/package/{$package->package_id}.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:300px" class="img-responsive"><br>';
            }            

           ?>
      </td>  
      <td align="left"><?php echo $package->name; ?></td>         
      <td align="left"><?php echo $package->price; ?></td>               
      <td align="left">  
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('Package/edit/'.$package->package_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('Package/delete/'.$package->package_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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