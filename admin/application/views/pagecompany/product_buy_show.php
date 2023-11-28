<section role="main" class="content-body">
    <header class="page-header">
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
                            <form method="get" action="<?=base_url("ProductBuy/index/$com_id")?>">
                                Total <b class="text-danger"><?= $total_rows  ?></b> records  <a href="<?php echo base_url('ProductBuy/add/'.$com_id) ?>" class="btn btn-xs btn-success" target="_blank">Add Product </a>
                                <input type="text" class="form-control"  name="keyword" value="<?=$search['keyword']?>" placeholder="keyword" style="width: 250px;display: inline;">
                                <?php 
                                    // Directory
                                     $data = array(
                                       'class' =>'form-control' ,
                                       'style'=>'width: 250px;display: inline;'
                                     );
                                    
                                    echo form_dropdown('cat_id',$categorys,$search['cat_id'],$data); 
                                    
                                    ?>
                                <input type="submit" class="btn btn-info" name="btn-submit" value="Search">
                            </form>
                        </td>
                    </tr>
                    <tr align="center" class="bg-info" >                                              
                        <th >Product Name</th>
                        <th >Category</th>
                        <th >active</th>
                        <th >Remark</th>
                        <th >Action</th>
                    </tr>
                    <?php foreach ($products as $pro_id=>$product) { ?>
                    <tr align="center"   >
                       
                        <!-- <td align="left" >
                            <?php 
                                $filepath = "../images/product_new/pro_".$product->pro_id.'01.jpg';
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100px; height:auto;" >';
                                }
                                ?>
                            <?php 
                                $filepath = "../images/product_new/pro_".$product->pro_id.'02.jpg';
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100px; height:auto;">';
                                }
                                ?>
                            <?php 
                                $filepath = "../images/product_new/pro_".$product->pro_id.'03.jpg';
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100px; height:auto;" >';
                                }
                                ?>
                        </td>
                        <td>
                            <?php 
                                //$filepath = "../images/product/pro_".$product->pro_id.'01.jpg';
                                $filepath = "../images/product/pro_pic".$product->pro_id.'.jpg';
                                //echo $filepath;
                                if(is_file($filepath)){
                                    echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:100px; height:auto;" >';
                                }
                                ?>        
                        </td> -->
                        <td align="left">
                            TH : <?=$product->pro_name_th?><br>
                            EN : <?=$product->pro_name_en ?>
                        </td>
                        <td align="left">
                            TH :  <?=$product->cat_name_th?>  <br>
                            EN :  <?=$product->cat_name ?> 
                        </td>                       
                        <td align="left"><?=$product->is_active==1?'Yes':'No' ?></td>                        
                        <td align="left"><?=$product->remark?></td>
                        <td align="left" width="13%" valign="top">
                            <div style="padding: 5px;">
                                <a class="btn btn-xs btn-warning" href="<?php echo base_url('ProductBuy/edit/'.$com_id.'/'.$product->pro_id) ?>" target="_blank">edit</a>                                   
                                <a href="<?php echo base_url('ProductBuy/delete/'.$com_id.'/'.$product->pro_id ); ?>"  class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
                            </div>
                        </td>
                    </tr>
                    <? } ?>
                    <tr>
                        <td colspan="9">
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