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
						<a href="<?php echo base_url('customeradmin/Company/edit/'.$com_id) ?>">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>แก้ไขข้อมูลบริษัท</span>
						</a>
					</li>	

					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyProduct/view/'.$com_id) ?>">
							<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
							<span>สินค้าทั้งหมด</span>
						</a>
					</li>	
					
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanySubscription/index/'.$com_id) ?>">
							<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
							<span>อีเมลล์สมัครรับข่าวสาร</span>
						</a>
					</li>	

					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyQuotation/index/'.$com_id) ?>">
							<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
							<span>ผู้ร้องขอใบเสนอราคา &nbsp; <?=(isset($countnew)&&$countnew > 0)?"<span class=\"badge\" style='background-color:#f04336;'>$countnew</span>":' ' ?></span>
						</a>
					</li>	
					
					<!-- <li class="">
						<a href="<?php echo base_url('customeradmin/Namecard/index/'.$com_id) ?>">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>Registered Visitor Database</span>
						</a>
					</li> -->

					<li class="">
						<a href="<?=base_url('customeradmin/User/logout') ?>">
							<i class="fa fa-power-off" aria-hidden="true"></i>
							<span>Log out</span>
						</a>
					</li>	


					<? /*
					<!-- <li class="">
						<a href="<?php echo base_url('customeradmin/CompanyProfile/index/'.$com_id) ?>">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>Company profile</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyAds/index/'.$com_id) ?>">
							<i class="fa fa-bullhorn" aria-hidden="true"></i>
							<span>ADs</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyBrand/index/'.$com_id) ?>">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<span>Brand</span>
						</a>
					</li>		
					<li class="">
						<a href="<?php echo base_url('customeradmin/DirectoryCategory/index/'.$com_id) ?>">
							<i class="glyphicon glyphicon-list" aria-hidden="true"></i>
							<span>Directory with Category</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyCategory/index/'.$com_id) ?>">
							<i class="glyphicon glyphicon-list" aria-hidden="true"></i>
							<span>Category</span>
						</a>
					</li>		
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyProduct/index/'.$com_id) ?>">
							<i class="fa fa-dropbox" aria-hidden="true"></i>
							<span>Products</span>
						</a>
					</li>		
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanySlide/index/'.$com_id) ?>">
							<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
							<span>Slider</span>
						</a>
					</li>	
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyBanner/index/'.$com_id) ?>">
							<i class="fa fa-exchange" aria-hidden="true"></i>
							<span>Banner</span>
						</a>
					</li> -->			
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyNews/index/'.$com_id) ?>">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>News</span>
						</a>
					</li>
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanySubscription/index/'.$com_id) ?>">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>Subscription</span>
						</a>
					</li>

					
					<!-- <li class="">
						<a href="<?php echo base_url('customeradmin/CompanyBlog/index/'.$com_id) ?>">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>Blog</span>
						</a>
					</li>
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyYoutube/index/'.$com_id) ?>">
							<i class="fa fa-youtube" aria-hidden="true"></i>
							<span>Youtube</span>
						</a>
					</li>	 -->
					<?php if ($this->session->userdata('packages') > 17) {
					?>
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyMenu/index/'.$com_id) ?>">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>Menu</span>
						</a>
					</li>
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyContent/index/'.$com_id) ?>">
							<i class="fa fa-youtube" aria-hidden="true"></i>
							<span>Content</span>
						</a>
					</li>
					<li class="">
						<a href="<?php echo base_url('customeradmin/CompanyProject/index/'.$com_id) ?>">
							<i class="fa fa-youtube" aria-hidden="true"></i>
							<span>Project</span>
						</a>
					</li>
					<?
					} 
					*/ 
					?>	

				</ul>
			</nav>
			
			
		</div>

	</div>

</aside>
<!-- end: sidebar -->
