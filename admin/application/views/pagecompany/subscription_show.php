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
                <table  class="table "  width="100%" border="0" cellpadding="1" cellspacing="1" >
                    <!-- <tr>
                        <td colspan="6">
                          Total <b class="text-danger"><?=count($categorys)?></b> records <a href="<?php echo base_url('customeradmin/CompanyCategory/add/'.$com_id) ?>" class="btn btn-success" target="_blank">Add Category </a>
                        </td>
                        </tr> -->
                    <tr align="center" class="bg-info" >
                        <td>No</td>
                        <th><span class="">E-mail </span></th>
                        <td>Date time</td>
                    </tr>
                    <?php 
                        $count = 1 ;
                        foreach ($subscriptions as $category) {  ?>
                    <tr align="center" >
                        <td>
                            <?=$count++ ?>
                        </td>
                        <td align="left"  >
                            <?php echo $category->email; ?>
                        </td>
                        <td>
                             <?php echo $category->cdate; ?>
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