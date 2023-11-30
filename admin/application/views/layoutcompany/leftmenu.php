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
					<?php foreach ($menu_admins as $menu_admin) { ?>												
					<li class="nav-parent <?=isset($menuselected) && $menu_admin->menu_admin_type_id==$menuselected->menu_admin_type_id?'nav-expanded':''?>">
						<a>
							<i class="<?=$menu_admin->iconclass?>" aria-hidden="true"></i>
							<span><?=$menu_admin->menu_admin_type_name ?></span>
						</a>
						<ul class="nav nav-children">
							<?php foreach ($menu_admin->menu as $menu) { ?>
							<li class="<?=isset($menuselected) && $menu->menu_id==$menuselected->menu_id?'nav-active':''?>">
								<a href="<?php echo base_url($menu->url) ?>?menuselected=<?=$menu->menu_id ?>">
									<i class="<?=$menu->iconclass?>" aria-hidden="true"></i>
									<?=$menu->menu_en ?>
								</a>
							</li>
							<?php } ?>				
						</ul>
					</li>
					<?php } ?>	
				</ul>

			</nav>
			
			
		</div>

	</div>

</aside>
<!-- end: sidebar -->
