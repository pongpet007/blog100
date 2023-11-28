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
                     Total <b class="text-danger"><?=count($newss)?></b> records 
                  </td>
               </tr>
               <tr align="center" class="bg-info" >
                  <th height="25" >
                     <span class=""> </span> 
                     <a href="<?php echo base_url('CompanyNews/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank"> Add News </a>
                  </th>
                  <th>News</th>
                  <th>Active</th>
                  <th>Create</th>
                  <th width="100" class="">Action</th>
               </tr>
               <?php foreach ($newss as $news) { ?>
               <tr align="center"   >
                  <td align="left">
                     <?php 
                        $filepath = "assets/images/news/{$news->news_id}.jpg";
                         if(is_file($filepath)){
                             echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
                         }            
                         
                        ?>
                  </td>
                  <td align="left"><?php echo 'EN : '.$news->news_title; ?><br><?php echo 'TH : '.$news->news_title_th; ?></td>
                  <td align="left"><?php echo $news->is_active==1?'Yes':'No'; ?></td>
                  <td align="left"><?php echo $news->cdate; ?></td>
                  <td align="left">  
                     <a class="btn btn-xs btn-warning" href="<?php echo base_url('customeradmin/CompanyNews/edit/'.$com_id.'/'.$news->news_id) ?>" target="_blank">edit</a>    
                     <a href="<?php echo base_url('customeradmin/CompanyNews/delete/'.$com_id.'/'.$news->news_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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