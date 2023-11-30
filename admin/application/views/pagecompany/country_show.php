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
        <table  class="table"  width="100%" border="0" cellpadding="1" cellspacing="1" >
          <tr>
            <td colspan="5">
              Total <b class="text-danger"><?=count($newss)?></b> records 
            </td>
          </tr>
          <tr align="center" class="bg-info" >
            <th>country id</th>
            <th>iso2</th>
            <th>name</th>
            <th>active</th>
          </tr>
          <?php foreach ($country as $countrys) { ?>
          <tr >
            <td align="left">  
              <?=$countrys->country_id?>
            </td>
            <td align="left" width="250">
              <?=$countrys->iso2?>
            </td>
            <td align="left">
              short_name: <?=$countrys->short_name?><br>
              long_name : <?=$countrys->long_name?>
            </td>
            <td align="left">
              <? if ($countrys->is_active==1) { ?>
                <a href="<?=base_url()?>Country/chang_active/<?=$countrys->country_id?>"><p>On</p>
              <? }else{  ?>
                <a href="<?=base_url()?>Country/chang_active/<?=$countrys->country_id?>"><p>Off</p></a>
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