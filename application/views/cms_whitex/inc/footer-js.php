<style type="text/css">
    <?=$companyData->css?>
</style>
<script src="<? echo base_url($theme_assets_path) ?>/js/popper.js"></script>
<script src="<? echo base_url($theme_assets_path) ?>/js/bootstrap.min.js"></script>
<script src="<? echo base_url($theme_assets_path) ?>/js/ajax-mail.js"></script>
<script src="<? echo base_url($theme_assets_path) ?>/js/plugins.js"></script>
<script src="<? echo base_url($theme_assets_path) ?>/js/main.js?<?=rand()?>"></script>

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
    $( "#tagsall" ).click(function() {
        $( "#tags" ).toggleClass( "highlight" );
        $( "#tagsall" ).toggleClass( "hidden" );
        $( "#tagsalla" ).toggleClass( "hidden" );
        
    });
    $( "#tagsalla" ).click(function() {
        $( "#tags" ).toggleClass( "highlight" );
        $( "#tagsall" ).toggleClass( "hidden" );
        $( "#tagsalla" ).toggleClass( "hidden" );
        
    });
    function addquatation(pro_id) {
        $.get('<?=base_url("Favorite/addajax?pro_id=")?>'+pro_id,function(data){
            if(data.indexOf('ok')>-1){
                alert('add complete');
                window.location.reload();
            }
        } );
    }
</script>
<?php echo $companyData->google_anlytic ?>