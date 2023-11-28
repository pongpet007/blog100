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
            <li><span> Product  &nbsp;&nbsp;&nbsp;</span></li>
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
                     Total <b class="text-danger"><?= $total_rows  ?></b> records  <a href="<?php echo base_url('customeradmin/CompanyMenu/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank">Add Product </a>
                  </td>
               </tr>
               <tr align="center" class="bg-info" >
                  <!-- <th height="25" >Order</th> -->
                  <th height="25" >Menu </th>
                  <th height="25" >display url  </th>
                  <th height="25" >Type</th>
                  <th height="25" >Top</th>
                  <th height="25" >Bottom</th>
                  <th height="25" >Position</th>
                  <th height="25">Active</th>
                  <th width="200" class="">Action</th>
               </tr>
               <?php 
                  foreach ($menuu as $menu1) {        
                  
                  ?>
               <tr align="center"   >
            <td align="left" class=""><? echo $menu1->menu_name ?><br/><? echo $menu1->menu_name_th ?></td>
            <td align="left" class=""><? echo $menu1->menu_url ?></td>
            <td align="" class=""><?= $row['menu_type']==1?"URL":"Content" ?></td>
            <td align="" class=""><?= $row['top']==1?"Yes":"No" ?></td>
            <td align="" class=""><?= $row['bottom']==1?"Yes":"No" ?></td>
            <td align="" class="">
            <a href="menu-action.php?type=orders&move=up&parent_id=<?=$row['menu_parent'];?>&position=<?=$row['position']?>"  target="menu"><i class="fa fa-level-up"></i> Up</a> &nbsp; 
            <a href="menu-action.php?type=orders&move=down&parent_id=<?=$row['menu_parent'];?>&position=<?=$row['position']?>" target="menu"><i class="fa fa-level-down"></i> Down</a></td>
            <td align="center" class=""><?= $row['is_active']==1 ? "Yes":"No"  ?></td>
            <td class=""><a href="<?php echo base_url('customeradmin/CompanyMenu/edit/'.$com_id.'/'.$menu1->menu_id) ?>" class="btn btn-sm btn-warning" target="menu">แก้ไข</a> &nbsp;&nbsp; 
            <? if($row['menu_id']!=1){?>
         <a href="<?php echo base_url('customeradmin/CompanyMenu/delete/'.$com_id.'/'.$menu1->menu_id) ?>" onClick="return confirm('Are u sure? ');" class="btn btn-sm btn-danger" target="menu">ลบ</a> 
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