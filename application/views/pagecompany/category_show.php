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
      Total <b class="text-danger"><?=count($categorys)?></b> records <a href="<?php echo base_url('customeradmin/CompanyCategory/add/'.$com_id) ?>" class="btn btn-success" target="_blank">Add Category </a>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <td></td>
      <!-- <td>Order</td> -->
      <th><span class="">Category </span></th>     
      <th>Active</th>      
      <th width="250" class="">Action</th>
  </tr>
  <?php foreach ($categorys as $category) {  ?>
    <tr align="center" id="tr<?=$category->cat_id ?>"   >
      <td width="60">  <a href="#" onClick="showsubcat('<?=$com_id?>','<?=$category->cat_id ?>');" class="btn  btn-info">view</a></td>
      <!-- <td width="70">
         <a href="<?php echo base_url("customeradmin/CompanyCategory/moveup/$com_id/{$category->orders}") ?>" target="_blank"><i class=" fa fa-arrow-up fa-2x"></i></a>
          <a href="<?php echo base_url("customeradmin/CompanyCategory/movedown/$com_id/{$category->orders}") ?>" target="_blank"><i class=" fa fa-arrow-down fa-2x"></i></a>
      </td> -->
     <?php /*
      <td>
         <?php 

              $cat_id = is_object($category)?$category->cat_id:'';

              $filepath = "../assets/images/category/". $cat_id .'.jpg';

              if(is_file($filepath)){
                  echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:120px;" class="img-responsive"><br>';                
              }
        ?>
      </td>
      */ ?>

      <td align="left"  >
        EN :  <?php echo $category->cat_name; ?><br>
        TH :  <?php echo $category->cat_name_th; ?><br>
      </td>  
      <td align="left"><?php echo $category->is_show==1?'Yes':'No'; ?></td>         
         
      <td align="left" nowrap="">  

        <a class="btn btn-warning" href="<?php echo base_url('customeradmin/CompanyCategory/edit/'.$com_id.'/'.$category->cat_id) ?>" target="_blank">edit</a>             
        <a href="<?php echo base_url('customeradmin/CompanyCategory/delete/'.$com_id.'/'.$category->cat_id ); ?>" class="btn btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        
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