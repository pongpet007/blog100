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
                     Total <b class="text-danger"><?= $total_rows  ?></b> records  <a href="<?php echo base_url('customeradmin/CompanyProduct/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank">Add Product </a>
                  </td>
               </tr>
               <tr align="center" class="bg-info" >
                  <!-- <th height="25" >Order</th> -->
                  <th height="25" >Picture </th>
                  <th height="25" >Detail</th>
                  <th height="25" >Directory</th>
                  <th height="25" >Tags</th>
                  <th height="25" >active</th>
                  <th height="25" >Specification</th>
                  <th width="200" class="">Action</th>
               </tr>
               <?php 
                  foreach ($products as $pro_id=>$item) {        
                  $product = $item['product'];
                  $directorys = $item['directory'];
                  $specs = $item['specs'];
                  ?>
               <tr align="center"   >
                  <!-- <td>
                     <div style="padding-top: 50px;">
                        <a href="<?php echo base_url("customeradmin/CompanyProduct/moveup/$com_id/{$product->orders}") ?>" target="_blank"><i class=" fa fa-arrow-up fa-2x"></i></a>
                        <a href="<?php echo base_url("customeradmin/CompanyProduct/movedown/$com_id/{$product->orders}") ?>" target="_blank"><i class=" fa fa-arrow-down fa-2x"></i></a>
                     </div>
                  </td> -->
                  <td align="left" >
                     <?php 
                        $filepath = "assets/images/product/pro_".$product->pro_id.'01.jpg';
                        if(is_file($filepath)){
                            echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100px; height:auto;" >';
                        }
                        ?>
                     <?php 
                        $filepath = "assets/images/product/pro_".$product->pro_id.'02.jpg';
                        if(is_file($filepath)){
                            echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100px; height:auto;">';
                        }
                        ?>
                     <?php 
                        $filepath = "assets/images/product/pro_".$product->pro_id.'03.jpg';
                        if(is_file($filepath)){
                            echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100px; height:auto;" >';
                        }
                        ?>
                  </td>
                  <td align="left">
                     <table class="table table-bordered">
                        <tr class="success">
                           <td colspan="2">Product Name</td>
                        </tr>
                        <tr class="" >
                           <td colspan="2" style="background: white;"><?=$product->pro_name_th?><br><?=$product->pro_name_en ?></td>
                        </tr>
                        <tr class="warning">
                           <td colspan="2">Category </td>
                        </tr>
                        <tr class="">
                           <td colspan="2" style="background: white;"><?=$product->cat_name_th?> <br><?=$product->cat_name ?> </td>
                        </tr>
                        <tr class="danger">
                           <td colspan="2">Brand</td>
                        </tr>
                        <tr class="">
                           <td style="background: white;">
                              <?=$product->name_th?><br><?=$product->name_en ?>
                           </td>
                           <td style="background: white;"> 
                              <?php $filepath = "images/brand/{$product->brand_id}.jpg";
                                 if(is_file($filepath))
                                 echo "<img src='".base_url($filepath)."'>" 
                                 ?>                  
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td align="left" nowrap="">
                     <?php foreach ($directorys as $directory) {
                        echo ' - '.$directory->dir_name_th."<br><br>";
                        } ?>
                  </td>
                  <td align="left" width="200" >
                     EN : <?=$product->tags_en ?>
                     <hr>
                     TH : <?=$product->tags_th ?>
                  </td>
                  <td><?=$product->is_active==1?'Yes':'No' ?></td>
                  <td align="left"><?
                     $stren = $strth = '';
                     foreach ($specs as $key => $spec) {
                       $stren .="$spec->label_en : $spec->value_en <br>";
                       $strth .="$spec->label_th : $spec->value_th <br>";
                     }
                     // echo "EN<br>";
                     echo $stren;
                     echo "<hr>";
                     // echo "TH<br>";
                     echo $strth;
                     ?></td>
                  <td align="left" valign="top">
                     <div style="padding: 5px;">
                        <a class="btn btn-xs btn-warning" href="<?php echo base_url('customeradmin/CompanyProduct/edit/'.$com_id.'/'.$product->pro_id) ?>" target="_blank">edit</a>
                        <a class="btn btn-xs btn-default" href="<?php echo base_url('customeradmin/CompanyProductSpec/index/'.$com_id.'/'.$product->pro_id) ?>" target="_blank">Spec</a>    
                        <a href="<?php echo base_url('customeradmin/CompanyProduct/delete/'.$com_id.'/'.$product->pro_id ); ?>"  class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
                        <a href="https://www.thailandpocketpages.com/Store/ProductDetail/<?=$com_id?>/<?=$product->pro_id ?>"  class="btn btn-xs btn-success" target="_blank" > view </a>
                     </div>
                     <!-- <div style="padding: 5px;">
                        <a href="<?php echo base_url("customeradmin/CompanyProduct/exportWebboard/$product->pro_id") ?>" onclick="return confirm('คุณต้องการส่งข้อมูลออก ?');" class="btn btn-xs btn-info" target="product">export webboard </a><br/>
                     </div> -->
                     <!-- <div style="padding: 5px;">
                        <form name="frm<?=$product->pro_id?>" id="frm<?=$product->pro_id?>" action="<?php echo base_url("CompanyProduct/exportWebpost/$product->pro_id") ?>" target="_blank">
                           <select name="grouppost" id="grouppost">
                              <option value="">--Select Group--</option>
                              <?php 
                                 $wppost = array('ยานยนต์','ก่อสร้าง','อิเล็กทรอนิกส์','ขนส่งของเหลว ปั้ม วาล์ว',
                                         'เครื่องจักรกล','ลำเลียงวัสดุ','บรรจุภัณฑ์','พลาสติกเคมีภัณฑ์',
                                         'เครื่องทำความร้อน-เย็น','เหล็ก แร่ธาตุ','เครื่องมือ เครื่องวัด','สินค้าอุปโภคบริโภค',
                                         'อุตสาหกรรม อาหาร เครื่องดื่ม','ธุรกิจบริการ');
                                 for($g=1;$g<=14;$g++): ?>
                              <option value="tab<?=$g?>"><?=$wppost[$g-1] ?></option>
                              <?php endfor;?>
                           </select>
                           <button type="submit"  class="btn btn-xs btn-info" target="product">export webpost </button>
                        </form>
                     </div> -->
                     &nbsp;
                  </td>
               </tr>
               <? } ?>
               <tr>
                  <td colspan="8">
                     <div><?= $links ?></div>
                  </td>
               </tr>
            </table>
         </div>
      </section>
      <!-- /.content -->
   </div>
   <!-- end: page -->
</section>