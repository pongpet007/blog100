<style type="text/css">
	body{
		background-color: black;
	}
	.mb-30 {
	    margin-bottom: 60px;
	}
	.product-tab-list::before, .product-tab-list::after {
	    width: 50px;
	}
	<?php if ($this->session->userdata('site_lang') == 'TH') { ?>
		body{
			font-family: 'Mitr', sans-serif !important; 
		}
	<? }else{ ?>
		body{
			font-family: 'Rubik', sans-serif;
		}
		    
	<? } ?>
</style>