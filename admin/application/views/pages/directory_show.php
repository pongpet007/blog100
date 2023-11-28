<section role="main" class="content-body">
	<header class="page-header">
		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Direcotry  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
		
	<div class="table-responsive">
		<a href="<?php echo base_url('Directory1/add') ?>" class="btn btn-info " target="dir">Add Directory </a>
	<table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >           	
		<tr >
			  <th height="25" bgcolor="#CCCCCC" class="balck14">
			  Total <span style="color:red;"><?php echo count($directorys) ?> </span> records
			  
			  </th>
			  <th bgcolor="#CCCCCC" >Dirid</th>		  
			  <th bgcolor="#CCCCCC" >Directory</th>		  
			  <th bgcolor="#CCCCCC" >Subdomain</th>		  
			  <th height="25" bgcolor="#CCCCCC" class="">hide</th>
			  <th height="25" bgcolor="#CCCCCC" class="">show index page</th>
			  <th height="25" bgcolor="#CCCCCC" class="">Edit</th>
			  <th height="25" bgcolor="#CCCCCC" class="">Del</th>
		</tr>
	       <?php 
	       foreach ($directorys as $directory) {       	
		?>
	            <tr  id="tr<?=$directory->dir_id ?>" class="" >
	              <td align="left"  width="" class="">
	               <a href="#" onClick="showsubdir('<?=$directory->dir_id ?>');" class="btn btn-xs btn-info">view sub</a>
				  <?
				  	$filepath = "../images/directory/{$directory->dir_id}.jpg";
					if(is_file($filepath))
					echo "<img src='".base_url($filepath).'?'.rand()."' style='width:80px;height:auto'; />";
				   ?>
				   </td>
				   <td><?=$directory->dir_id ?></td>
				   <td align="left"  class="">
				  <?=$directory->dir_name_th ?><br><?=$directory->dir_name_en ?><br/>
				  <?
				 //  	$filepath = "../images/directory/{$directory->dir_id}ads1.jpg";
					// if(is_file($filepath))
					// echo "<img src='".base_url($filepath).'?'.rand()."' style='width:350px;height:auto'; /><br>";
					// echo "Link banner1 : $directory->url1 <br>";


				 //  	$filepath = "../images/directory/{$directory->dir_id}ads2.jpg";
					// if(is_file($filepath))
					// echo "<img src='".base_url($filepath).'?'.rand()."' style='width:350px;height:auto'; /><br>";
					// echo "Link banner2 : $directory->url2<br>";
				   ?>

				  </td> 
				  <td><?=$directory->subdomain?></td>          
	              <td valign="top"  class=""><? if($directory->is_show==2)echo "Hide"; ?>&nbsp;</td>
	              <td valign="top"  class=""><? if($directory->show_index==1)echo "Yes"; ?>&nbsp;</td>
	              <td valign="top"  class="">
				  <a href="<?php echo base_url('Directory1/edit/'.$directory->dir_id) ?>" class="btn btn-sm btn-warning" target="dir">edit</a></td>
	              <td valign="top"  class=""><?
		if($directory->ct == 0){
		?>
	                  <a href="<?php echo base_url('Directory1/delete/'.$directory->dir_id) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="dir"> del</a>
	                  <? } ?>
	                &nbsp;</td>
	            </tr>
				
	           <? } ?>
				
	  </table>
	</div>
	 
	<!-- end: page -->
</section>
