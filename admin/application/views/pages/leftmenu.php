<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

	<div class="sidebar-header">
		<div class="sidebar-title">
			Admin Panel Navigation
		</div>
		<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="nano">
		<div class="nano-content">
			<nav id="menu" class="nav-main" role="navigation">
				<ul class="nav nav-main">
					<li class="">
						<a href="<?php echo base_url('Home') ?>">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Home</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('Directory1') ?>">
							<i class="glyphicon glyphicon-list" aria-hidden="true"></i>
							<span>Directory</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('Banner') ?>">
							<i class="glyphicon glyphicon-picture" aria-hidden="true"></i>
							<span>Banner</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('CompanyBrand/index/') ?>">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<span>Brand</span>
						</a>
					</li>				
					<? if($_SESSION["sslevel"]>1){ ?>
					<li class="">
						<a href="<?php echo base_url('Slide') ?>">
							<i class="glyphicon glyphicon-refresh" aria-hidden="true"></i>
							<span>Slide Main Page</span>
						</a>
					</li>
											
					<li class="">
						<a href="<?php echo base_url('Package') ?>">
							<i class="glyphicon  glyphicon-tower" aria-hidden="true"></i>
							<span>Package</span>
						</a>
					</li>
					<li class=" hide">
						<a href="news.php">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>News</span>
						</a>
					</li>
					<li class=" hide">
						<a href="brandex-branner-sponsor.php">
							<i class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></i>
							<span>Our Partners</span>
						</a>
					</li>
					<li class="">
						<a href="<?php echo base_url('Company') ?>">
							<i class="glyphicon glyphicon-knight" aria-hidden="true"></i>
							<span>Company</span>
						</a>
					</li>	
					<? } ?>
					<li class="">
						<a href="<?php echo base_url('Exhibition') ?>">
						<!--<a href="exhibition.php">-->
							<i class="glyphicon glyphicon-share" aria-hidden="true"></i>
							<span>Exhibition</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('Perches') ?>">
						<!--<a href="exhibition.php">-->
							<i class="glyphicon glyphicon-share" aria-hidden="true"></i>
							<span>Perches</span>
						</a>
					</li>	
					<li class="hide">
						<a href="youtube.php">
							<i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i>
							<span>VDO Youtube</span>
						</a>
					</li>	
				</ul>
			</nav>
			
			
		</div>

	</div>

</aside>
<!-- end: sidebar -->
