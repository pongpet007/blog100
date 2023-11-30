<section role="main" class="content-body">
	<header class="page-header">
		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Page  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
		
	<div class="table-responsive">
		
	<table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >   
		<tr>
			<td colspan="5">
				Total <span style="color:red;"><?php echo count($pages) ?> </span> records <a href="<?php echo base_url('Page/add') ?>" class="btn btn-info " target="dir">Add  </a>
			</td>
		</tr>        	
		<tr >			 	  			   			  
			  <th bgcolor="#CCCCCC" class="">Page</th>			  
			  <th bgcolor="#CCCCCC" class="">Action</th>			  
		</tr>
	       <?php 
	       foreach ($pages as $page) {       	
		?>
	        <tr >
	            <td>	
				   	Title EN : <b><?=$page->title_en?></b> <br>
	              	Title TH : <b><?=$page->title_th?></b>
				   	<h3><?php echo  str_replace('/admin', '', base_url()) ?>cms/<?=$page->url_display?></h3>
				</td>				   
	             
	            <td valign="top"  class="">
	              	<a href="<?php echo base_url('Page/edit/'.$page->page_id) ?>" class="btn btn-sm btn-warning" target="dir">edit</a>

	                <a href="<?php echo base_url('Page/delete/'.$page->page_id) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="dir"> del</a>
	            </td>
	            </tr>
				
	           <? } ?>
				
	  </table>
	</div>
	 
	<!-- end: page -->
</section>
