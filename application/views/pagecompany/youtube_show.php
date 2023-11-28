<section role="main" class="content-body">
<header class="page-header">
   <h2>Welcome  <span style="color:yellow;">Brandexdirectory.com</span> System</h2>
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
                     Total <b class="text-danger"><?=count($youtubes)?></b> records 
                  </td>
               </tr>
               <tr align="center" class="bg-info" >
                  <th height="25" >
                     <span class="">Youtube </span> 
                     <a href="<?php echo base_url('customeradmin/CompanyYoutube/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank"> Add Youtube </a>
                  </th>
                  <th>Active</th>
                  <th width="100" class="">Action</th>
               </tr>
               <?php foreach ($youtubes as $youtube) { ?>
               <tr align="center"   >
                  <td align="left">
                     <?php 
                        $filepath = "assets/images/youtube/{$youtube->youtube_id}.jpg";
                         if(is_file($filepath)){
                             echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
                         }            
                        
                         //echo 'URL : '.$youtube->url;
                        ?>
                     <iframe width="380" height="200" frameborder="0" replaced="true" s4016599499163682188="true" allowfullscreen="" src="<?php echo $youtube->url ?>?rel=0&wmode=opaque"></iframe>
                  </td>
                  <td align="left"><?php echo $youtube->is_active==1?'Yes':'No'; ?></td>
                  <td align="left">  
                     <a class="btn btn-xs btn-warning" href="<?php echo base_url('customeradmin/CompanyYoutube/edit/'.$com_id.'/'.$youtube->youtube_id) ?>" target="_blank">edit</a>    
                     <a href="<?php echo base_url('customeradmin/CompanyYoutube/delete/'.$com_id.'/'.$youtube->youtube_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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