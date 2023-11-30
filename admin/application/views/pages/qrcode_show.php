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
	        <h2 class="panel-title">Qrcode Generator</h2>
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
      echo form_open_multipart("Myqrcode/index",$attributes); ?>
          <div class="table-responsive">
          		<table class="table table-striped">
          			<tr>
          				<td colspan="8">
          					<a href="<?php echo base_url('Myqrcode/add/') ?>" class="btn btn-success" target="_blank"> Add </a>
          	<div class="form-group">
          		<label for="email">Keyword:</label>
          		<input type="text" name="keyword" class="form-control" id="keyword" placeholder="keyword" value="<?=(isset($search['keyword']))?$search['keyword']:''?>" style="width: 350px;">
	        </div>
	        <div class="form-group">	          
	          	<?php
               $qrcode_type_id = (isset($search['qrcode_type_id']))?$search['qrcode_type_id']:'';
              $data = array('class' =>'form-control' ,
              'id'=>'qrcode_type_id', );
             
              echo form_dropdown('qrcode_type_id',$qrcode_types,$qrcode_type_id,$data); ?>
              </div>
	        </div>       
        <button type="submit" class="btn btn-default">Search</button>
          				</td>
          			</tr>
          			<tr>
                  <td>NO</td>
                  <td>QR CODE MD5</td>
                  <td>QR CODE URL</td>
          				<td>Title</td>   
                  <td>ADS or PRODUCT</td>
          				<td>Book</td>                 
                  <td>Company</td>
                  <td>Pro_id</td>          				
          				
          				<td>Action</td>
          			</tr>
					<?php 
                $c=1;
                foreach ($qrcodes as $qrcode) { ?>					
          			<tr>
                  <td><?=$c++ ?></td>
                  <td><span style="color:black">
                  <img src="<?=base_url("Myqrcode/qr/".$qrcode->md5_encode)?>" /><br>
                  <?=$qrcode->md5_encode?>
                 </span></td>
          				<td>
                  <?
                    if($qrcode->qrcode_type_id==1){
                      if($qrcode->com_id > 0){
                        $url = 'https://www.brandexdirectory.com/Store/index/'.$qrcode->com_id;
                      }
                      else{
                        $url = "";
                      }
                      
                    }elseif($qrcode->qrcode_type_id==2){
                        if($qrcode->com_id > 0){
                          $url = 'https://www.thailandpocketpages.com/Store/index/'.$qrcode->com_id;
                        }
                        else{
                          $url = "";
                        }
                     
                    }elseif($qrcode->qrcode_type_id==3){
                        if($qrcode->com_id > 0){
                          $url = 'https://www.aecgateway.com/Landing/CompanyProfile/'.$qrcode->com_id;
                        }
                        else{
                          $url = "";
                        }
                     
                    }
                     

                  ?>           
                  <?php if($url != ''){ 

                    ?>
                      <img src="<?=base_url("Myqrcode/qrbyurl/?url=$url")?>" /><br>
                  <?php } ?>
                  <?=$url?><br>       
                  </td> 
                  <td>
                    <?=$qrcode->title?><hr>
                  <small>
                  Create : <?=$qrcode->cby?> : <?=$qrcode->cdate?><br> 
                  Update : <?=$qrcode->uby?> : <?=$qrcode->udate?><br>
                  </small>
                  </td> 
                  <td><?=$qrcode->ads_product==1?'ADS':'PRODUCT'?></td>
          				<td><?=$qrcode->qrcode_type_name?></td>                  
                  <td><?=$qrcode->com_id?></td>
                  <td><?=$qrcode->ads_product==1?'':$qrcode->pro_id ?></td>          				
          				
          				<td> 
          					<a class="btn btn-warning" href="<?php echo base_url('Myqrcode/edit/'.$qrcode->qrcode_id) ?>" target="_blank">edit</a>
										<a class="btn btn-info" href="<?php echo base_url('MyqrcodeVoice/index/'.$qrcode->qrcode_id) ?>" target="_blank">add voice</a>
                  <?php if($_SESSION['ssid']==12){ ?>
        					<a href="<?php echo base_url('Myqrcode/delete/'.$qrcode->qrcode_id); ?>" class="btn btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
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