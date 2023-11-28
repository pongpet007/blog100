<!doctype html>
<html class="no-js" lang="zxx">
<?php $this->load->view($theme_path.'/inc/header-meta') ?>
<body>

	<?php $this->load->view($theme_path.'/inc/header') ?>

	<div class="breadcrumb-area gray-bg-7">
		<div class="container">
			<div class="breadcrumb-content">
				<ul>
					<li><a href="<?php echo base_url() ?>"><?=lang('Home') ?></a></li>
					<li class="active"><?=lang('Statistic View') ?> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-contain contact-us">
		<!-- Main content -->
		<div id="main-content" class="main-content">
			<section style="margin-bottom: 30px;margin-top: 30px;">
				<div class="container">
					<div class="row" style="min-height: 600px;">
						

						<div class="col-md-12 statcontent text-center">
							<div class="table-responsive">
								<table border="0" cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td align="center">
											<table width="100%" border="0">
												<tr>
													<td>
														<table width="100%" border="0">
															<tr>
																<td align="center">
																	<a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=year">
																		<?=lang('Statistic Year') ?>
																	</a>
																</td>
																<td align="center">
																	<a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=month&amp;y=<?=$y?>">
																		<?=lang('Statistic Month') ?>
																	</a>
																</td>
																<td align="center">
																	<a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=day&amp;y=<?=$y?>&amp;m=<?=$m?>">
																		<?=lang('Statistic Day') ?>
																	</a>
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td>&nbsp;</td>
												</tr>
												<tr>
													<td>
														<?php if($display=="year"){ ?>
															<table width="100%" id="tblYear" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
																<tr class="fontwhite">
																	<th width="50%" align="center" bgcolor="#000000" style="color: white; text-align: center;"><?=lang('Year') ?></th>
																	<th width="50%" align="center" bgcolor="#000000" style="color: white; text-align: center;"><?=lang('count') ?></th>
																</tr>
																<?php foreach ($table as $row){ ?>
																	<tr>
																		<td width="100" align="center">
																			<a href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=month&amp;y=<?=$row->y?>">
																				<?=$row->y?>
																			</a>
																		</td>
																		<td align="center">
																			<?=$row->c?>
																			&nbsp;
																		</td>
																	</tr>
																<?php } ?>
															</table>
														<?php } ?>
														<?php if($display=="month"){ ?>
															<table width="100%" id="tblMonth" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
																<tr class="fontwhite">
																	<th align="center" bgcolor="#000000" style="color: white; text-align: center;" ><?=lang('Month') ?></th>
																	<th align="center" bgcolor="#000000" style="color: white; text-align: center;"><?=lang('count') ?></th>
																</tr>
																<?php foreach ($table as $row){ 
																	$data[$row->m] =$row->c; 
																}

																for($i=0;$i<sizeof($mName);$i++){ 
																	?>
																	<tr>
																		<td align="center">
																			<a href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=day&amp;y=<?=$y?>&amp;m=<?=$i+1?>">
																				<?=$mName[$i]?>
																				<?= $y ?>
																			</a>
																		</td>
																		<td align="center">
																			<?=!isset($data[$i+1])?'0':$data[$i+1]?> 
																			&nbsp;
																		</td>
																	</tr>
																<?php } ?>
															</table>
														<?php } ?>
														<?php if($display=="day"){ 
															$numDay = date('t',strtotime("$y-$m-01"));
															?>
															<table width="100%" id="tblDay" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
																<tr class="fontwhite">
																	<th width="50%" align="center" bgcolor="#000000" style="color: white; text-align: center;"><?=lang('Day') ?></th>
																	<th width="50%" align="center" bgcolor="#000000" style="color: white; text-align: center;"><?=lang('count') ?></th>
																</tr>
																<?php 
																foreach ($table as $row){ 
																	$data[$row->d] = $row->c;
																}

																for($x=0;$x<$numDay;$x++){ ?>
																	<tr>
																		<td align="center"><?=$x+1 ?>
																		<?=$mName[$m-1]?>
																		<?=$y?>
																		&nbsp;
																	</td>
																	<td align="center">
																		<?=!isset($data[$x+1])?'0':$data[$x+1];?>
																		&nbsp;
																	</td>
																</tr>
															<?php } ?>
														</table>
													<?php } ?>                          
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<style type="text/css">
	#map_canvas {
		border: unset;
		width: 100%;
		height: 700px;
		margin: 0 auto;
	}
	.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.item13,.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.item14,.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.item15,.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.item16{
		display: none;
	}
	.table>tbody>tr>td{
		padding:15px;
		border-top: unset;
		font-size: 16px;
		color: #000;
	}
	.link-black a{
		color: #337ab7;
	}
	.link-black a:hover{
		color: #666;
	}
	ul.contact{        
		padding-left: 60px;
		margin-bottom: 20px;
	}
	ul.contact li{
		list-style: circle;
		line-height: 35px;
		font-size: 14px;
	}
	.company-item{
		margin-bottom: 15px;
	}
	.company-item h3{
		color: black;
	}
	.company-item .icon{
		width: 70px;
		height: 70px;
		border-radius: 10px;
		font-size: 36px;
		border: 1px solid #ccc;
		padding: 16px;
		text-align: center;
		margin: auto;
	}
	.common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title {
		padding: 10px 0;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}
	.common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner{
		padding-bottom: unset;
		margin-bottom: unset;
	}
	.common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner{
		border-bottom: 1px solid #eee;
		overflow: hidden;
	}
	.common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner:last-child{
		border-bottom: unset;
	}
	@media(max-width: 768px){
		.company-item .title{
			text-align: center;
		}
			/*.social{
			position: relative;
			right: unset;
			top: unset;
			width: auto;
			}*/
		}
		td, th {
			border: unset;
		}
		table {
			border: unset;
		}
	</style>



	<?php $this->load->view($theme_path.'/inc/footer') ?>

	<?php $this->load->view($theme_path.'/inc/footer-js') ?>

</body>
</html>