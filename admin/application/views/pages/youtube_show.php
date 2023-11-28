<section role="main" class="content-body">
	<header class="page-header">
		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Youtube  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
		
	<div class="table-responsive">
		
	<table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >   
		<tr>
			<td colspan="5">
				Total <span style="color:red;"><?php echo count($youtubes) ?> </span> records <a href="<?php echo base_url('Youtube/add') ?>" class="btn btn-info " target="dir">Add  </a>
			</td>
		</tr>        	
		<tr >			 	  			   			  
			  <th bgcolor="#CCCCCC" class="">Youtube</th>			  
			  <th bgcolor="#CCCCCC" class="">URL</th>			  
			  <th bgcolor="#CCCCCC" class="">Action</th>			  
		</tr>
	       <?php 
	       foreach ($youtubes as $youtube) {       	
		?>
	        <tr >
	            <td>	
				   	Title EN : <b><?=$youtube->title_en?></b> <br>
	              	Title TH : <b><?=$youtube->title_th?></b>
				   	
				</td>		
				<td>
			<?php 
              $url = is_object($youtube)?$youtube->url:'';
              if($url){
              ?>	
              <iframe width="360" height="250" src="<?=$url?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
              <?php }?>
              	<h3><?=$youtube->url ?></h3>
				</td>		   	             
	            <td valign="top"  class="">
	              	<a href="<?php echo base_url('Youtube/edit/'.$youtube->youtube_id) ?>" class="btn btn-sm btn-warning" target="dir">edit</a>

	                <a href="<?php echo base_url('Youtube/delete/'.$youtube->youtube_id) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="dir"> del</a>
	            </td>
	            </tr>
				
	           <? } ?>
				
	  </table>
	</div>
	 
	<!-- end: page -->
</section>
