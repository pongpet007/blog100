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
      Total <b class="text-danger"><?=count($activitiess)?></b> records 
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th height="25" >
      <span class="">Logo </span> 
      <a href="<?php echo base_url('Activities/add/') ?>" class="btn btn-xs btn-success" target="_blank"> Add Activities </a></th>     
      <th>Year</th>      
      <th>Title</th>      
      <th>Active</th>      
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($activitiess as $activities) { ?>
    <tr align="center"   >
      <td align="left" width="500">
          <?php 
           $filepath = "../images/activities/activities{$activities->id}_s.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
            }            
            for ($i=1; $i <=8 ; $i++) { 
              $filepath = "../images/activities/activities{$activities->id}_$i.jpg";
              if(is_file($filepath)){
                  echo '<a href="'.base_url($filepath).'" target="_blank"><img src="'.base_url($filepath).'?'.rand().'" style="width:100px; float:left;margin:2px;" class="img-responsive"></a> ';
              }            
            }
           ?>
      </td>  
      <td><?=$activities->year?></td>
      <td align="left">
        Title TH : <b style="color: black;"><?php echo $activities->title_th; ?></b><br>
        Title EN : <b style="color: black;"><?php echo $activities->title_en; ?></b><hr>
        Date EN : <b style="color: black;"><?php echo $activities->showdate_en; ?></b><br>
        Date TH : <b style="color: black;"><?php echo $activities->showdate_th; ?></b><hr>
        Place EN : <b style="color: black;"><?php echo $activities->place_en; ?></b><br>
        Place TH : <b style="color: black;"><?php echo $activities->place_th; ?></b><hr>
        

      </td>         
      <td align="left"><?php echo $activities->is_active==1?'Yes':'No'; ?></td>                  
      <td align="left">  
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('Activities/edit/'.$activities->id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('Activities/delete/'.$activities->id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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