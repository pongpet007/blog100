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
      
       <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Total <b class="text-danger"><?=count($brands)?></b> records <a href="<?php echo base_url('Brand/add/') ?>" class="btn btn-xs btn-success" target="_blank"> Add Brand </a>
      <?php 

              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'keyword',
                  'id'=>'keyword',
                  'placeholder' => 'Brand name' ,
                  'style'=>'display:inline; width:250px;',
                  'value' => set_value('keyword')?set_value('keyword'):$search['keyword'],
              );
              echo form_input($data); 

              $data = array(
              'class' =>'btn btn-info' ,
              'name' =>'btn_send',
              'id'=>'btn_send',
              'value'=>'Search'
              );
              echo form_submit($data); 
              ?>        
      </form>

    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th height="25" >
      <span class="">Logo </span> 
      </th>     
      <th>Brand</th>      
      <th>Brand Type</th>      
      <th>Active</th>      
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($brands as $brand) { ?>
    <tr align="center"   >
      <td align="left">
          <?php 
           $filepath = "../images/brand/{$brand->brand_id}.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
            }            
            
           ?>
      </td>  
      <td align="left"><?php echo $brand->name_en; ?><br><?php echo $brand->name_th; ?></td>         
      <td align="left"><?php echo $brand->brand_type_id==1?'Company':'Product'; ?></td>                  
      <td align="left"><?php echo $brand->is_active==1?'Yes':'No'; ?></td>                  
      <td align="left">  
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('Brand/edit/'.$brand->brand_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('Brand/delete/'.$brand->brand_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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