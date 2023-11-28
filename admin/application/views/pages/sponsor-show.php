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
  <!--<tr>
    <td colspan="5">
      
      <form method="get" name="frm" id="frm"  action="<?php echo base_url('Banner/index/') ?>">
      Total <b class="text-danger"><?=count($banners)?></b> records 
      <?php          
          $data = array(
            'class' =>'form-control' ,                 
            'id'=>'position',
            'style'=>'width:120px; display:inline;'
          );

          $options = array('0'=>'All Position',1=>'1',2=> '2', 3=> '3',4=> '4',5=> '5',
                           6=> '6',7=> '7',8=> '8');

          echo form_dropdown('position', $options, $position , $data);
          ?>
          <input type="submit" name="btn" class="btn btn-success" value="Search">
        </form>        
    </td>
  </tr>-->
  
  <tr align="center" class="bg-info" ><a href="<?php echo base_url('Exhibition/add/') ?>" class="btn btn-xs btn-success" target="_blank"> Add Exhibittion </a></th>
      
      <th height="25" >
      Exhibition 
      </th>     
	  <th class=""><center><input type="button" name="btn_pos_update" id="btn_pos_update" value="update POS" class="btn btn-info"> </center>
      <th>Text</th>      
      <th>Url</th>      
      <th>Status</th>      
      <th>Expire</th> 
      <th>Start Date</th> 
      <th>End Date</th>
      <th width="100" class="">Action</th>
  </tr>
  <?php 

  foreach ($exhibittion as $ban_id) { 

  	?>
    <tr align="center"   >
      <td align="left">
      	 
          <?php 
           $filepath = "../assets/images/exhibition/banner{$ban_id->ban_id}.gif";
           //echo ($filepath);
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'"  class="img-responsive"><br>';
            }            

            // echo 'URL : '.$ban_id->link;
           ?>
      </td>  
      <td align="center" valign="top" >
			  <input type="text" name="pos[]" value="" size="1">
			  <input type="hidden" name="ban_id[]" value="1107" size="1">
			  &nbsp;</td>
      <td align="left"><?php echo $ban_id->ban_text; ?></td> 
      <td align="left"><?php echo $ban_id->ban_url; ?></td>  
      <td align="left"><?php echo $ban_id->ban_showhide; ?></td>     
      <td align="left"><?php echo $ban_id->expire; ?></td>    
      <td align="left"><?php echo $ban_id->start_date; ?></td> 
      <td align="left"><?php echo $ban_id->end_date; ?></td>  
      <!-- <td align="left"><?php echo $ban_id->ban_cat==1?'Yes':'No'; ?></td> -->                  
      <td align="left">  
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('exhibition/edit/'.$ban_id->ban_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('exhibition/delete/'.$ban_id->ban_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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