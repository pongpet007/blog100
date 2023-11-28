<section role="main" class="content-body">
	<header class="page-header">
		

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



  <tr align="center" class="bg-info" ><a href="<?php echo base_url('Perches/add/') ?>" class="btn btn-xs btn-success" target="_blank"> Add Perches </a></th>

      <th height="25" >
      Perches
      </th>

      <th>จังหวัด</th>
      <th>อำเภอ</th>

      <th width="100" class="">Action</th>
  </tr>
  <?php

  foreach ($Perches as $perches_id) {

  	?>
    <tr align="center"   >
      <td align="left">

          <?php
           $filepath = "../assets/images/perches/Perches{$perches_id->perches_id}.png";
           // echo ($filepath);
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'"  class="img-responsive"><br>';
            }

            // echo 'URL : '.$ban_id->link;
           ?>
      </td>

      <td align="left"><?php echo $perches_id->province_name; ?></td>
      <td align="left"><?php echo $perches_id->amphur_name; ?></td>


      <td align="left">
        <a class="btn btn-xs btn-warning" href="<?php echo base_url('perches/edit/'.$perches_id->perches_id) ?>" target="_blank">edit</a>
        <a href="<?php echo base_url('perches/delete/'.$perches_id->perches_id ); ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        &nbsp;
      </td>
    </tr>
  <? } ?>
  </table>



</div >
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>
