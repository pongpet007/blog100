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
            <li><span> Project  &nbsp;&nbsp;&nbsp;</span></li>
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
         <div class="table-responsive">
            <table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >
               <tr>
                  <td colspan="8">
                     Total <b class="text-danger"><?= $total_rows  ?></b> records  <a href="<?php echo base_url('customeradmin/CompanyProject/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank">Add Project  </a>
                  </td>
               </tr>
               <tr align="center" class="bg-info" >
                  <!-- <th height="25" >Order</th> -->
                  <th height="" >Project_id </th>
                  <th height="" >Project_img </th>
                  <th height="" >Project_name  </th>
                  <th width="200" class="">Action</th>
               </tr>
               <?php 
                  foreach ($menuu as $menu1) {        
                  
                  ?>
               <tr align="center"   >
            <td align="left" class=""><? echo $menu1->imgga_id ?></td>
            <td align="left" class="">
               <?php 
                        $filepath = "assets/images/ssimproject/".$menu1->imgga_id.'.jpg';
                        if(is_file($filepath)){
                            echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100px; height:auto;" >';
                        }
                        
                        ?>
            </td>
            <td align="left" class=""><? echo $menu1->gallery_name ?></td>
            <td class=""><a href="<?php echo base_url('customeradmin/CompanyProject/edit/'.$com_id.'/'.$menu1->imgga_id) ?>" class="btn btn-sm btn-warning" target="menu">แก้ไข</a> &nbsp;&nbsp; 
            <? if($row['menu_id']!=1){?>
         <a href="<?php echo base_url('customeradmin/CompanyProject/delete/'.$com_id.'/'.$menu1->imgga_id) ?>" onClick="return confirm('Are u sure? ');" class="btn btn-sm btn-danger" target="menu">ลบ</a> 
            <? } ?>
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