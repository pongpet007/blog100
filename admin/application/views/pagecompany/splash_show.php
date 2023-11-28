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
      Total <b class="text-danger"><?=count($splashs)?></b> records <a href="<?php echo base_url('SplashPage/add') ?>" class="btn btn-xs btn-success" target="_blank"> Add splash </a>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th >Action</th>
      <th >
      Splash Page
      </th>
      <th>Title</th>      
      <th>Start Date</th>      
      <th>End Date</th>      
      
  </tr>
  <?php foreach ($splashs as $splash) { ?>
    <tr align="center"   >
      <td align="left">        
        <a class="btn btn-sm btn-warning" href="<?php echo base_url('SplashPage/edit/'.$splash->splash_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('SplashPage/delete/'.$splash->splash_id ); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        &nbsp;
      </td> 
      <td align="left" width="500">
          <?php 
            $filepath = "../images/splash/".$splash->splash_id.'.jpg';
            if(is_file($filepath)){

              echo '<a href="'.base_url($filepath).'?'.rand().'" target="_blank"><img src="'.base_url($filepath).'?'.rand().'" style="width:500px;" ></a>';

            }
          ?>
      </td>  
      <td align="left">
          <?php echo $splash->splash_name; ?>
        </td>                  
      <td align="left"><?php echo $splash->date_start ?></td>                  
      <td align="left"><?php echo $splash->date_end ?></td>                  
               
    </tr>      
  <? } ?>
  </table>
</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>