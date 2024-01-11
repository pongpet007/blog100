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
              Total <b class="text-danger"><?=count($banners)?></b> records 
            </td>
          </tr>

          <tr align="center" class="bg-info" >
            <th height="25" >
              <span class="">Banner </span> 
              <a href="<?php echo base_url('CompanyBanner/add/') ?>" class="btn btn-xs btn-success" target="_blanks"> Add Banner </a></th>     
              <th>status</th> 
              <th>Position</th>      
              <th>Active</th>      
              <th width="100" class="">Action</th>
            </tr>
            <?php foreach ($banners as $banner) { ?>
              <tr align="center"   >
                <td align="left">
                  <?php 
                  $filepath = "../images/banner/{$banner->banner_id}_mobile.webp";
                  if(is_file($filepath)){
                    echo '<img src="'.base_url($filepath).'?'.rand().'" class="" style="height: 300px;"><br>';
                  }            

                  echo 'URL : '.$banner->link;
                  ?>
                </td>  
                <td align="left"><?php echo $banner->position; ?></td>
                <td align="left"><?php if ($banner->start_date <= date('Y-m-d') and $banner->expire >= date('Y-m-d')) { ?>
                  <p>Not Expired</p>
                <? }else { ?>
                  <p style="color: red;">Expired</p>
                <? } ?></td>  

                <td align="left"><?php echo $banner->is_active==1?'Yes':'No'; ?></td>                  
                <td align="left">  
                  <a class="btn btn-xs btn-warning" href="<?php echo base_url('CompanyBanner/edit/'.$banner->banner_id) ?>" target="_blanks">edit</a>    
                  <a href="<?php echo base_url('CompanyBanner/delete/'.$banner->banner_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blanks" > del</a>
                  &nbsp;
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