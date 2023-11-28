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
      Total <b class="text-danger"><?=count($youtubes)?></b> records <a href="<?php echo base_url('CompanyYoutube/add/'.$com_id) ?>" class="btn btn-sm btn-success" target="_blank"> Add Youtube </a>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th width="150" class="">Action</th>
      <th>Youtube </th>
      <th>Title</th>      
      <th>Active</th>      
      
  </tr>
  <?php foreach ($youtubes as $youtube) { ?>
    <tr align="center"   >
      <td align="left">  
        <a class="btn btn-sm btn-warning" href="<?php echo base_url('CompanyYoutube/edit/'.$com_id.'/'.$youtube->youtube_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('CompanyYoutube/delete/'.$com_id.'/'.$youtube->youtube_id ); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        &nbsp;
      </td>  
      <td align="left" width="400">
          <?php if ($youtube->media_type == 1) { ?>
            <iframe src="<?php echo $youtube->url ?>" width="100%" height="210" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
          <?php } ?>

          <?php if ($youtube->media_type == 2) { ?>
            <iframe width="100%" height="210" src="<?php echo $youtube->url ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <?php } ?>
      </td>  
      <td align="left">
         <?php 
          
          foreach ($youtube->languages as $language) {
              echo "$language->iso2 : ";
              echo "$language->youtube_name <br> ";
            }  
        ?>
        </td>                  
      <td align="left"><?php echo $youtube->is_active==1?'Yes':'No'; ?></td>                  
              
    </tr>      
  <? } ?>
  </table>
</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>