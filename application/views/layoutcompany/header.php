<header class="header" style="background:#000;border-top:0px;border-bottom:3px solid #FF5722;height:65px;" >
	<div class="logo-container">
		<a href="<?=base_url("customeradmin/Company/edit/$com_id")?>" class="logo" >
			<img src="<?php echo base_url("images/logo/logo{$com_id}long.jpg") ?>"  height="50" alt="" />
		</a>
		<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<!-- start: search & user box -->
	<div class="header-right">		
    	<ul class="notifications">
			<li class="">
				<a class="notification-icon" href="#" >
					<i class="fa fa-user"></i>				
				</a>			
			</li>
		</ul>
		<div id="userbox" class="userbox" >
			<a href="#" data-toggle="dropdown">	       
				<div class="profile-info" data-lock-name="" data-lock-email="">
					<span class="name" style="color: white;"><? echo $this->session->userdata('company_login_com_name_en'); ?><? echo $this->session->userdata('company_login_com_id'); ?></span>									
				</div> 

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu" style="top: 30px; padding-top: 10px;">
				<ul class="list-unstyled">
					<li><a href="<?=base_url("customeradmin/Company/edit/$com_id")?>">Control panel</a></li>
					<li class="divider"></li>					
					<li>
						<a role="menuitem" tabindex="-1" href="<?php echo base_url('Storeadmin/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>