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
						<a href="<?php echo base_url('Brand') ?>">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<span>Brand</span>
						</a>
					</li>						
					<? if($_SESSION["sslevel"]>1){ ?>
					<li class="hide">
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
					
					<li class="">
						<a href="<?php echo base_url('Page') ?>">
							<i class="glyphicon glyphicon-file" aria-hidden="true"></i>
							<span>Page content</span>
						</a>
					</li>

					<li class="">
						<a href="<?php echo base_url('News') ?>">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>Brandex News & Exhibition </span>
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
					<li class="">
						<a href="<?php echo base_url('Myqrcode') ?>">
							<i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i>
							<span>Qr Code</span>
						</a>
					</li>
					<? } ?>
					<li class="">
						<a href="<?php echo base_url('Activities') ?>">
							<i class="glyphicon glyphicon-share" aria-hidden="true"></i>
							<span>Activities</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('Blog') ?>">
							<i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
							<span>We Blog</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('Splash') ?>">
						<!--<a href="exhibition.php">-->
							<i class="glyphicon glyphicon-asterisk" aria-hidden="true"></i>
							<span>Splash</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('Youtube') ?>">
							<i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i>
							<span>Brandex Youtube</span>
						</a>
					</li>
					<li class="nav-parent nav-expanded">
						<a>
							<i class="fa fa-copy" aria-hidden="true"></i>
							<span>Check lastupdate</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a href="<?php echo base_url('Check/Company') ?>">
									 Company
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('Check/Product') ?>">
									 Products
								</a>
							</li>							
						</ul>
					</li>
				</ul>
			</nav>
			
			
		</div>

	</div>

</aside>
<!-- end: sidebar -->
