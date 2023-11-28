<section role="main" class="content-body">
	<header class="page-header">
		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Slide  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
		
	<div class="table-responsive">
	<table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >           	
		<tr >
			  <th height="25" bgcolor="#CCCCCC" class="balck14">
			  <a href="<?php echo base_url('Slide/add') ?>" class="btn btn-info btn-sm" target="dir">Add Slide </a>
			  </th>
			  
			  <th height="25" bgcolor="#CCCCCC" class="">hide</th>
			  <th height="25" bgcolor="#CCCCCC" class="">Edit</th>
			  <th height="25" bgcolor="#CCCCCC" class="">Del</th>
		</tr>
	       <?php 
	       foreach ($slides as $slide) {       	
		?>
	            <tr  class="" >
	              <td align="left"  width="" class="">
	              
				  <?
				  	$filepath = "../assets/images/slide/{$slide->slide_id}.jpg";
					if(is_file($filepath))
					echo "<img src='".base_url($filepath).'?'.rand()."' style='width:100%;height:auto'; />";
					echo "<br>Link : $slide->link <br>";
				   ?>
				   </td>
				   
	              <td valign="top"  class=""><? if($slide->is_active==2)echo "Hide"; ?>&nbsp;</td>
	              <td valign="top"  class="">
				  <a href="<?php echo base_url('Slide/edit/'.$slide->slide_id) ?>" class="btn btn-sm btn-warning" target="dir">edit</a></td>
	              <td valign="top"  class="">
	                  <a href="<?php echo base_url('Slide/delete/'.$slide->slide_id) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="dir"> del</a>
	                 
	                &nbsp;</td>
	            </tr>
				
	           <? } ?>
				
	  </table>
	</div>
	 
	<!-- end: page -->
</section>
