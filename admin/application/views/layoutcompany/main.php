<!doctype html>
<html class="fixed">
	<head>
		<?php $this->load->view('layoutcompany/header-css'); ?>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
				<?php $this->load->view('layoutcompany/header'); ?>
			<!-- end: header -->

			
			<div class="inner-wrapper">
				<?php $this->load->view('layoutcompany/leftmenu'); ?>
				
				<?php $this->load->view($contentview); ?>
				
			</div>

		</section>

		<?php $this->load->view('layoutcompany/footer-js'); ?>
	</body>
</html>