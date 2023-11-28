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
      Total <b class="text-danger"><?=count($categorys)?></b> records  | <a href="<?php echo base_url('CompanyGalleryCategory/add/'.$com_id) ?>" class="btn btn-sm btn-success" target="_blank">Add Gallery Category </a>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th width="250" class="">Action</th>     
      <td>Orders</td>
      <th ><span class="">Category </span> </th>      
      <th>Active</th>      
      <th></th>      
      
  </tr>
  <?php foreach ($categorys as $category) {  ?>
    <tr align="center" id="tr<?=$category->cat_id ?>" >
       <td align="left" valign="top" >  
        <a href="#" onClick="showsubcat('<?=$category->cat_id ?>');" class="btn btn-sm  btn-info">view</a>
        
        <a class="btn btn-sm btn-warning" href="<?php echo base_url('CompanyGalleryCategory/edit/'.$category->cat_id) ?>" target="_blank">edit</a> 

        <a href="<?php echo base_url('CompanyGalleryCategory/delete/'.$category->cat_id ); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        
      </td>          
      
      <td width="70">
         <a href="<?php echo base_url("CompanyGalleryCategory/moveup/{$category->orders}") ?>" target="_blank"><i class=" fa fa-arrow-up fa-2x"></i></a>
          <a href="<?php echo base_url("CompanyGalleryCategory/movedown/{$category->orders}") ?>" target="_blank"><i class=" fa fa-arrow-down fa-2x"></i></a>
      </td> 
      <td align="left"  >
        <?php 
          
          foreach ($category->languages as $language) {
              echo "$language->iso2 : ";
              echo "$language->cat_name <br> ";
            }  
        ?>

        
      </td>  
      <td align="left"><?php echo $category->is_show==1?'Yes':'No'; ?></td>         
      <td style="text-align: left; color: blue;">
        cby : <?=$category->cby ?><br>
        cdate : <?=$category->cdate ?><br>
        uby : <?=$category->uby ?><br>
        udate : <?=$category->cdate ?><br>
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