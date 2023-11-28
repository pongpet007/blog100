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
<table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    <td colspan="5">
      Total <b class="text-danger"><?=count($slides)?></b> records 
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th height="25" ><span class="">Slide name </span> 
      <a href="<?php echo base_url('customeradmin/CompanySlide/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank">Add Slide </a></th>     
      <th>Active</th>      
      <th width="100" class="">Action</th>
  </tr>
  <?php 
        foreach ($slides as $slide) {        
        
  ?>
    <tr align="center"   >
      <td align="left" bgcolor="#FFFFFF" >
          <?php 
            echo "<h4>1920x550</h4>";

            $filepath = "assets/images/slide/{$slide->slide_id}_1920.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
            }  
            echo "<h4>768x350</h4>";
            $filepath = "assets/images/slide/{$slide->slide_id}_768.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
            }            
            echo 'URL : '.$slide->link;
           ?>
      </td>  
      <td align="left"><?php echo $slide->is_active==1?'Yes':'No'; ?></td>         
         
      <td align="left" valign="top" bgcolor="#FFFFFF" >  

        <a class="btn btn-xs btn-warning" href="<?php echo base_url('customeradmin/CompanySlide/edit/'.$com_id.'/'.$slide->slide_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('customeradmin/CompanySlide/delete/'.$com_id.'/'.$slide->slide_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        
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