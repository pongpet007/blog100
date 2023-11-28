
<script src="<? echo base_url() ?>assets_theme_2020_v1/js/popper.js"></script>
<script src="<? echo base_url() ?>assets_theme_2020_v1/js/bootstrap.min.js"></script>
<script src="<? echo base_url() ?>assets_theme_2020_v1/js/ajax-mail.js"></script>
<script src="<? echo base_url() ?>assets_theme_2020_v1/js/plugins.js"></script>
<script src="<? echo base_url() ?>assets_theme_2020_v1/js/main.js?<?=rand()?>"></script>

<script type="text/javascript">
	function changelang(url) {
        $.get(url,function(){
            window.location.reload();
        });            
    }

    function subscription() {
    	var email = $('#email').val();
    	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    	if(re.test(String(email).toLowerCase())){       
    		$.get('<?=base_url("Home/subscription/")?>',{'email':email},function(data){
    			alert(data);
    			$('#email').val('');
    		});
    	}else{
    		alert("invalid email");
    	}
    	return false;
    }
</script>
<?php echo $companyData->google_anlytic ?>