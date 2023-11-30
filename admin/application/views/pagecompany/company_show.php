<section role="main" class="content-body">
    <header class="page-header">
     <h2>Welcome  <span style="color:yellow;"><?php echo $_SERVER['SERVER_NAME'] ?> </span> </h2>
     <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="#">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span> Domains  &nbsp;&nbsp;&nbsp;</span></li>
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
                        Total <b class="text-danger"><?= $total_rows  ?></b> records  <a href="<?php echo base_url('Company/add/') ?>" class="btn btn-sm btn-success" target="_blank">ADD DOMAIN </a>

                    </td>
                </tr>
                <tr align="center" class="bg-info" >
                    <th width="250" class="">Action</th>
                    <th width="315">DOMAIN NAME </th>
                </tr>
                <?php foreach ($company as $key => $company_new) {

                    // print_r($company_new);exit();
                    $languages = $company_new->languages;
                    
                    ?>
                    <tr align="center" >
                        <td align="left" valign="top">
                            <div style="padding: 5px;"> 
                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('Company/edit/'.$company_new->com_id.'') ?>" target="_blanks">edit</a>    
                                <a href="<?php echo base_url('Company/delete/'.$company_new->com_id ); ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure ? ');" target="_blanks" > del</a>

                            </div>
                        </td>
                        <td align="left" >
                            <?=$company_new->com_website?>
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