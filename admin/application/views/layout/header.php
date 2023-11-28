<header class="header" style="background:#e8e8e8;border-top:0px;border-bottom:2px solid #2C6FA5;height:65px;" >
	<div class="logo-container">
		<a href="/admin/" class="logo" >
			<img src="<?php echo base_url('images/brandex_logo.png') ?>" width="165" height="48" alt="" />
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
					<span class="name"><?=$_SESSION["ssfullname"]?></span>				
					<span class="role">Level : <?=$_SESSION["sslevel"]>=2?'Administrator':'User' ?> </span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled">
					<li class="divider"></li>					
					<li>
						<a role="menuitem" tabindex="-1" href="<?php echo base_url('User/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>