<section role="main" class="content-body">
	<header class="page-header">
	
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Company  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
		<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Main content -->
    <section class="content">
<?php if($this->session->flashdata('msg')){ ?>  
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>                
      </div>
<?php } ?>
<?php if($this->session->flashdata('errors')){ ?>  
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('errors') ?></h4>                
      </div>
<?php } ?>

<div class="table-responsive">
<table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    <td colspan="5">
      Total <b class="text-danger"><?=$total_rows?></b> records 
      <form method="get" action="<?php echo base_url('Company/index') ?>" class="form-inline">
        <div class="form-group">
          <label for="email">Keyword:</label>
          <input type="text" name="keyword" class="form-control" id="keyword" placeholder="keyword" value="<?=(isset($search['keyword']))?$search['keyword']:''?>">
        </div>
        <div class="form-group">
          <label for="pwd">Type:</label>
          <?php 
            // Type
            $data = array('class' =>'form-control' ,
            );
         
           echo form_dropdown('comtype_id',$companytypes,$search['comtype_id'],$data); 

            // Directory
            $data = array('class' =>'form-control' ,
            );
         
           echo form_dropdown('dir_id',$directorys,$search['dir_id'],$data); 

           ?>
        </div>       
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th height="25" ><span class="">Company </span> 
      <a href="<?php echo base_url('Company/add') ?>" class="btn btn-xs btn-success" target="_blank">Add Company </a></th>
      
      <th height="25" class="">Type</th>   
      <th height="25" class="">Expire</th>   
      <th height="25" class="">Action</th>
  </tr>
  <?php 
        foreach ($companys as $company) {        
        
  ?>
    <tr align="left">
      <td align="left" bgcolor="#FFFFFF" >         
                <?=$company->com_name_en ?><br>
                <?=$company->com_name_th ?>           
      </td>     
      <td align="left" valign="top" bgcolor="#FFFFFF" ><?=($company->comtype_name) ?>&nbsp;</td>     
      <td align="left" valign="top" bgcolor="#FFFFFF" ><?=($company->expire) ?>&nbsp;</td>     
      <td align="left" valign="top" bgcolor="#FFFFFF" >
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('Company/edit/'.$company->com_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('Company/delete/'. $company->com_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        <a class="btn btn-xs btn-success" href="https://www.brandexdirectory.com/Store/index/<?=$company->com_id?>" target="_blank">View</a>    
        &nbsp;</td>          
    </tr>      
  <? } ?>
    <tr>
      <td colspan="10">
      <div class="pull-right">
      <?php echo $links; ?>
      <div>
      </td>
    </tr>
  </table>
</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>

