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
                        <form method="get" action="<?=base_url("CompanyProduct/index/$com_id")?>">
                            Total <b class="text-danger"><?= $total_rows  ?></b> records  <a href="<?php echo base_url('CompanyProduct/add/'.$com_id) ?>" class="btn btn-sm btn-success" target="_blank">Add Product </a>
                            <input type="text" class="form-control"  name="keyword" value="<?=$search['keyword']?>" placeholder="keyword" style="width: 250px;display: inline;">
                            <?php 
                                    // Directory
                            $data = array(
                             'class' =>'form-control' ,
                             'style'=>'width: 250px;display: inline;'
                         );

                            echo form_dropdown('cat_id',$categorys,$search['cat_id'],$data); 

                            ?>

                            <?php 
                                    // Directory
                            $data = array(
                             'class' =>'form-control' ,
                             'style'=>'width: 250px;display: inline;'
                         );

                            echo form_dropdown('country_id',$country,$search['country_id'],$data); 

                            ?>
                            <input type="submit" class="btn btn-info" name="btn-submit" value="Search">
                        </form>
                    </td>
                </tr>
                <tr align="center" class="bg-info" >
                    <th width="250" class="">Action</th>
                    <th >Order</th>
                    <th width="315">Picture </th>
                    <th width="300" >Detail</th>
                    <th width="300">Product Language</th>
                    <th >active</th>
                </tr>
                <?php 
                foreach ($products as $pro_id=>$item) {        
                    $languages = $item['languages'];
                    $product = $item['product'];
                    $pictures = $item['pictures'];
                    ?>
                    <tr align="center" >
                        <td align="left" valign="top">
                            <div style="padding: 5px;">
                                <a class="btn btn-sm btn-success" href="<?php echo base_url('CompanyProductPicture/index/'.$product->pro_id) ?>" target="_blanks">Manage Picture </a>  
                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('CompanyProduct/edit/'.$com_id.'/'.$product->pro_id) ?>" target="_blanks">edit</a>    
                                <a class="btn btn-sm btn-default hide" href="<?php echo base_url('CompanyProductSpec/index/'.$com_id.'/'.$product->pro_id) ?>" target="_blanks">Spec</a>  
                                <a class="btn btn-sm btn-success hide " href="<?php echo base_url('CompanyProduct/directory/'.$com_id.'/'.$product->pro_id) ?>" target="_blanks">directory</a>    
                                <a href="<?php echo base_url('CompanyProduct/delete/'.$com_id.'/'.$product->pro_id ); ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="_blanks" > del</a>

                            </div>
                        </td>
                        <td>
                            <div style="padding-top: 50px;">
                                <a href="<?php echo base_url("CompanyProduct/moveup/$com_id/{$product->orders}") ?>" target="_blank"><i class=" fa fa-arrow-up fa-2x"></i></a>
                                <a href="<?php echo base_url("CompanyProduct/movedown/$com_id/{$product->orders}") ?>" target="_blank"><i class=" fa fa-arrow-down fa-2x"></i></a>
                                <?=$product->orders ?>
                            </div>
                        </td>
                        <td align="left" >
                            <ul style="list-style: none;"> 
                                <li style="float : left;text-align: center;">                           
                                    <?php 
                                    $filepath = "../images/product_new/pro_".$product->pro_id.'01.webp';
                                    if(is_file($filepath)){
                                        echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:80px; height:auto;" >';
                                    }
                                    ?>
                                </li>
                                <li style="float : left;text-align: center;"> 
                                    <?php 
                                    $filepath = "../images/product_new/pro_".$product->pro_id.'02.webp';
                                    if(is_file($filepath)){
                                        echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:80px; height:auto;">';
                                    }
                                    ?>
                                </li>
                                <li style="float : left;text-align: center;">                                 
                                    <?php 
                                    $filepath = "../images/product_new/pro_".$product->pro_id.'03.webp';
                                    if(is_file($filepath)){
                                        echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:80px; height:auto;" >';
                                    }
                                    ?>
                                </li>
                            </ul>                                
                            <div class="clearfix"></div>
                            <h4>Picture more view </h4>
                            <ul style="list-style: none;">
                                <?php 
                                foreach ($pictures as $pic) 
                                {
                                    $filepath = "../images/product_new/detail_".$pic->pro_pic_id.'_90.jpg';
                                    if(is_file($filepath)){
                                        echo "<li style='float : left;text-align: center;'>";
                                        echo $pic->color.'<br>';
                                        echo '<img src="'.base_url($filepath).'?'.rand().'" style="width:80px;" >';
                                        echo "</li>";
                                    }
                                }
                                ?>    
                            </ul>
                        </td>  

                        <td align="left">
                            <table class="table table-bordered">  
                                <tr class="warning">
                                    <td >Category </td>
                                </tr>
                                <tr class="">
                                    <td  style="background: white;">
                                        TH : <?=$product->cat_name?>  
                                    </td>
                                </tr>
                                <tr class="danger">
                                    <td >Brand</td>
                                </tr>
                                <tr class="">
                                    <td style="background: white;">
                                        TH : <?=$product->brand_name?>
                                        <?php 

                                        $filepath = "../images/brand/{$product->brand_id}.jpg";
                                        if(is_file($filepath)){
                                            echo "<img src='".base_url($filepath)."'>" ;
                                        }

                                        ?>       
                                    </td>                                   
                                </tr>                               
                            </table>
                        </td>
                        <td align="left" >
                            <?php 

                            foreach ($languages as $language) {             
                              echo "<h6 style='color:orange;font-weight:bold;'>$language->short_name</h6>
                              Name $language->iso2 : <br><b style='color:black;'>$language->pro_name</b> <br> ";
                              echo "TAGS $language->iso2: <br><b style='color:black;'>$language->tags</b> <br> ";
                          }  
                          ?>
                      </td>

                      <td><?=$product->is_active==1?'Yes':'No' ?></td>              

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