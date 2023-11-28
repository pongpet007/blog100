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
      Total <b class="text-danger"><?=count($blogs)?></b> records <a href="<?php echo base_url('CompanyBlog/add/'.$com_id) ?>" class="btn btn-sm btn-success" target="_name"> Add Blog </a>
    </td>
  </tr>
  
  <tr align="left" class="bg-info" >
      <th width="150" >Action</th>
      <th >Picture</th>              
      <th>Title</th>      
      <th>Position</th>      
      <th>Active</th>      
      <th></th>
      
  </tr>
  <?php foreach ($blogs as $blog) { ?>
    <tr >
      <td align="left">  
        <a class="btn btn-sm btn-warning" href="<?php echo base_url("CompanyBlog/edit/$com_id/".$blog->blog_id) ?>" target="_name">edit</a>    
        <a href="<?php echo base_url("CompanyBlog/delete/$com_id/".$blog->blog_id ); ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="_name" > del</a>
        &nbsp;
      </td> 
      <td align="left" width="300">
          <?php 
            $filepath = "../images/blog/blog{$blog->blog_id}_s.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:200px;" class="img-responsive"><br>';
            }

            // $filepath = "../images/blog/blog{$blog->blog_id}_l.jpg";
            // if(is_file($filepath)){
            //     echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:300px;" class="img-responsive"><br>';
            // }            
           

           ?>
      </td>       
      <td align="left">
        <?php 
          
          foreach ($blog->languages as $language) {
              echo "$language->iso2 : ";
              echo "$language->blog_name <br> ";
            }  
        ?>

      </td>  
      <td>
        <?php echo $blog->pos; ?>
      </td>       
      <td align="left"><?php echo $blog->is_active==1?'Yes':'No'; ?></td>  
      <td>
         <small style="color: blue">
          cby : <?=$blog->cby; ?><br>          
          cdate : <?=$blog->cdate;?><hr style="margin:0;">
          uby : <?=$blog->uby;?><br>
          udate : <?=$blog->udate;?><br>
        </small>
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