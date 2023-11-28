

<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/menumaker.js"></script> <!-- menumaker js -->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/jquery.elevatezoom.js"></script> <!-- product zoom js -->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/theme.js"></script> <!-- custom js -->  

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'th', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

    function triggerHtmlEvent(element, eventName) {
        var event;
        if (document.createEvent) {
            event = document.createEvent('HTMLEvents');
            event.initEvent(eventName, true, true);
            element.dispatchEvent(event);
        }else{
            event = document.createEventObject();
            event.eventType = eventName;
            element.fireEvent('on' + event.eventType, event);
        }
    }

    jQuery('.lang-select').click(function() {
        var theLang = jQuery(this).attr('data-lang');
        jQuery('.goog-te-combo').val(theLang);
        //alert(jQuery(this).attr('href'));
        window.location = jQuery(this).attr('href');
        location.reload();
    });
</script>
<?php echo $companyData->google_anlytic ?>