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
  <section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Qrcode with Voice</h2>
		</header>
		<div class="panel-body">
			<?php if($this->session->flashdata('msg')){ ?>  
			      <div class="alert alert-success alert-dismissible">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			        <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>                
			      </div>
			<?php } ?>
			<?php if($this->session->flashdata('errors')){ ?>  
			      <div class="alert alert-danger alert-dismissible">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			        <h4><i class="icon fa fa-ban"></i> มีช้อผิดพลาด</h4>   
			        <small><?=$this->session->flashdata('errors') ?></small>
			      </div>
			<?php } ?>

    <?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-inline' , 'name'=>'frm' );  
      echo form_open_multipart("Myqrcodevoice/index",$attributes); ?>
          <div class="table-responsive">
          		<table class="table table-striped">
          			<tr>
          				<td colspan="8">
          					<a href="<?php echo base_url('MyqrcodeVoice/add/'.$qrcode_id) ?>" class="btn btn-success" target="_blank"> Add </a>
          
          				</td>
          			</tr>
          			<tr>
                        <td>Title</td>
          		        <td>URL</td>   
          		        <td></td>   
          		        <td>Action</td>   
                  	</tr>
					<?php foreach ($voices as $voice) { ?>					
          			<tr>                
          				<td>
                          EN : <?=$voice->title_en?><br>
                          TH : <?=$voice->title_th?>
                        </td>                 
          				<td><?=$voice->url?></td>                  
                        <td>
                            Create : <?=$voice->cby?> : <?=$voice->cdate?><br> 
                            Update : <?=$voice->uby?> : <?=$voice->udate?><br>
                        </td>                  
          				<td> 
          					<a class="btn btn-warning" href="<?php echo base_url("MyqrcodeVoice/edit/{$voice->qrcode_id}/".$voice->qrcodevoice_id) ?>" target="_blank">edit</a>
                            <?php if($_SESSION['ssid']==12){ ?>
                                        <a href="<?php echo base_url('MyqrcodeVoice/delete/'.$voice->qrcode_id.'/'.$voice->qrcodevoice_id); ?>" class="btn btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
                            <?php } ?>
    					</td>
          			</tr>
					<?php } ?>
          		</table>
          </div>
      <?php echo form_close(); ?> 
 
		</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>