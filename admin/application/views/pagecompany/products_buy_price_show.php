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
<table  class="table "  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    
    <td colspan="6">
      Total <b class="text-danger"><?=count($prices)?></b> records  | <a href="<?php echo base_url('ProductBuyPrice/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank">Add  </a>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >     
      <!-- <td>Orders</td> -->
      <th ><span class="">Date </span> </th>     
      <th>Remark</th>      
      <th>Active</th> 
      <th>Action</th>
  </tr>
  <?php foreach ($prices as $price) {  ?>
    <tr align="center" >
      
     <!--  <td width="70">
         <a href="<?php echo base_url("ProductBuyPrice/moveup/$com_id/{$price->orders}") ?>" target="_blank"><i class=" fa fa-arrow-up fa-2x"></i></a>
          <a href="<?php echo base_url("ProductBuyPrice/movedown/$com_id/{$price->orders}") ?>" target="_blank"><i class=" fa fa-arrow-down fa-2x"></i></a>
      </td>  -->
      <td align="left"  >
       <?php echo $price->pp_date; ?><br>       
      </td>      

      <td align="left"><?php echo $price->comment ?></td>         
      <td align="left"><?php echo $price->is_show==1?'Yes':'No'; ?></td>         
     
      <td align="left" valign="top" >  
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('ProductBuyPrice/edit/'.$com_id.'/'.$price->pbp_id) ?>" target="_blank">edit</a> 

        <a href="<?php echo base_url('ProductBuyPrice/delete/'.$com_id.'/'.$price->pbp_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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