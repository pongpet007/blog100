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
      Total <b class="text-danger"><?=count($gallerys)?></b> records <a href="<?php echo base_url('CompanyGallery/addimageadd/'.$com_id.'/'.$gallery_id) ?>" class="btn btn-sm btn-success" target="_blank"> Add Gallery </a>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th width="150">Action</th>
      <th >Gallery</th>
      <th>Title</th>      
      <th>Position</th>            
  </tr>
  <?php foreach ($gallerys as $gallery) { ?>
    <tr align="center">
      <td align="left">  
        <a class="btn btn-sm btn-warning" href="<?php echo base_url('CompanyGallery/addimageedit/'.$com_id.'/'.$gallery->image_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('CompanyGallery/addimagedelete/'.$com_id.'/'.$gallery->image_id ); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        &nbsp;
      </td> 
      <td align="left" width="400">
          <?php 
            $filepath = "../images/gallery_images/".$gallery->image_id.'.jpg';
            if(is_file($filepath)){
              echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100%;" >';
            }
          ?>
      </td>  
      <td align="left">
           <?php           
          foreach ($gallery->languages as $language) {
              echo "$language->iso2 : ";
              echo "$language->image_name <br> ";
            }  
        ?>
      </td>                  
      <td align="left"><?php echo $gallery->position; ?></td>                  
               
    </tr>      
  <? } ?>
  </table>
</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>