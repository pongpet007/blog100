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
                        <td colspan="9">
                            <form method="get" action="<?=base_url("CompanyProductPicture/index/$com_id")?>">
                                Total <b class="text-danger"><?= sizeof($pictures)  ?></b> records  <a href="<?php echo base_url('CompanyProductPicture/add/'.$pro_id) ?>" class="btn btn-xs btn-success" target="_blank">Add Picture </a>
                               
                            </form>
                        </td>
                    </tr>
                    <tr align="center" class="bg-info" >                        
                        <th style="text-align:center;width: 100px;">Picture 90x90 </th>  
                        <th style="text-align:center;width: 150px;">Picture 300x300 </th>
                        <th style="text-align:center;width: 150px;">Picture 300x300 webP </th>                      
                        <th style="text-align:center;width: 200px;">Picture 570x570 </th>                        
                        <th style="text-align:center;width: 250px;">Picture 1200 x 1200 </th>                        
                        <th >Color</th>                     
                        <th >Action</th>
                    </tr>
                    <?php 
                        foreach ($pictures as $picture) {                                
                    ?>
                    <tr align="center">                       
                        <td align="left">
                            <?php 
                                $filepath = "../images/product_new/detail_".$picture->pro_pic_id.'_90.jpg';
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:100px;" >';
                                }
                                ?>
                        </td>
                        <td align="left">
                            <?php 
                                $filepath = "../images/product_new/detail_".$picture->pro_pic_id.'_300.jpg';
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:150px;" >';
                                }
                                ?>
                        </td>
                        <td align="left">
                            <?php 
                                $filepath = "../images/product_new/detail_".$picture->pro_pic_id.'_300.webp';
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:150px;" >';
                                }
                                ?>
                        </td>
                        <td align="left">
                            <?php 
                                $filepath = "../images/product_new/detail_".$picture->pro_pic_id.'_570.jpg';
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:250px;" >';
                                }
                                ?>
                        </td>
                        <td align="left">
                            <?php 
                                $filepath = "../images/product_new/detail_".$picture->pro_pic_id.'_1200.jpg';
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="max-width:350px;" >';
                                }
                                ?>
                        </td>                                             
                        <td align="left" >
                            <?=$picture->color ?>
                        </td>
                        <td align="left" width="13%" valign="top">
                            <div style="padding: 5px;">
                                <a class="btn btn-xs btn-warning" href="<?php echo base_url('CompanyProductPicture/edit/'.$picture->pro_id.'/'.$picture->pro_pic_id) ?>" target="_blank">edit</a>    
                                <a href="<?php echo base_url('CompanyProductPicture/delete/'.$picture->pro_pic_id ); ?>"  class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
                               
                            </div>
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