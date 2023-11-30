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
      
      <form method="get" name="frm" id="frm"  action="<?php echo base_url('Banner/index/') ?>">
      Total <b class="text-danger"><?=count($banners)?></b> records 
      <?php          
          $data = array(
            'class' =>'form-control' ,                 
            'id'=>'position',
            'style'=>'width:120px; display:inline;'
          );

          $options = array('0'=>'All Position',1=>' Banner 1',2=> ' Banner 2', 3=> ' Banner 3',4=> ' Banner 4',5=> ' Banner 5');

          echo form_dropdown('position', $options, $position , $data);
          ?>
          <input type="submit" name="btn" class="btn btn-success" value="Search">
        </form>        
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th height="25" >
      <span class="">Banner </span> 
      <a href="<?php echo base_url('Banner/add/') ?>" class="btn btn-xs btn-success" target="_blank"> Add Banner </a></th>     
      <th>Position</th>      
      <th>Expire</th>      
      <th>Active</th>      
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($banners as $banner) { ?>
    <tr align="center"   >
      <td align="left">
          <?php 
           $filepath = "../images/banner/{$banner->banner_id}.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'"  class="img-responsive"><br>';
            }            

            echo 'URL : '.$banner->link;
           ?>
      </td>  
      <td align="left"> Banner <?php echo $banner->position; ?></td>         
      <td align="left"><?php echo $banner->expire; ?></td>         
      <td align="left"><?php echo $banner->is_active==1?'Yes':'No'; ?></td>                  
      <td align="left">  
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('Banner/edit/'.$banner->banner_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('Banner/delete/'.$banner->banner_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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