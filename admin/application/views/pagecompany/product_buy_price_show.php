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
                <form method="get" action="<?=base_url("ProductBuy/index/$com_id")?>">
                <table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >
                    <tr>
                        <td colspan="9">
                            
                                Total <b class="text-danger"><?= $total_rows  ?></b> records  
                                <input type="text" class="form-control datepicker"  name="keyword" value="<?=$search['keyword']?>" placeholder="Date price" autocomplete="off" style="width: 250px;display: inline;">
                                <?php 
                                    // Directory
                                     $data = array(
                                       'class' =>'form-control ' ,
                                       'style'=>'width: 250px;display: inline;'
                                     );
                                    
                                    // echo form_dropdown('cat_id',$categorys,$search['cat_id'],$data); 
                                    
                                    ?>
                                <input type="submit" class="btn btn-info" name="btn-submit" value="Save">                           
                        </td>
                    </tr>
                    <tr align="center" class="bg-info" >                                              
                        <th >Product Name</th>
                        <th >Category</th>
                        <th >active</th>
                        <th >Remark</th>
                        <th >Price</th>
                    </tr>
                    <?php foreach ($products as $pro_id=>$product) { ?>
                    <tr align="center"   >
                       
                      
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
                            <input type="text" class="form-control" name="price[]" value="0" />  
                            <input type="hidden" id="pro_id" name="pro_id[]" value="$pro_id">
                        </td>
                    </tr>
                    <? } ?>
                    
                    <tr>
                        <td colspan="9">
                            <div><?= $links ?></div>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- end: page -->
</section>