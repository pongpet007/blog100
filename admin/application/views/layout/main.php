<!doctype html>
<html class="fixed">
	<head>
		<?php $this->load->view('layout/header-css'); ?>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
				<?php $this->load->view('layout/header'); ?>
			<!-- end: header -->

			
			<div class="inner-wrapper">
				<?php $this->load->view('layout/leftmenu'); ?>
				
				<?php $this->load->view($contentview); ?>
				
			</div>

		</section>

		<?php $this->load->view('layout/footer-js'); ?>
	</body>
</html>