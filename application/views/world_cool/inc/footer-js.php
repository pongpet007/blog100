<?php $this->load->view('/world_cool/inc/button-social') ?>
<?php $this->load->view('/world_cool/inc/modal') ?>
<style type="text/css">
    <?=$companyData->css?>
</style>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<? echo base_url($theme_assets_path) ?>/js/popper.js"></script>
<?/*?>
<script src="<? echo base_url($theme_assets_path) ?>/js/bootstrap.min.js"></script>
<?*/?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<? echo base_url($theme_assets_path) ?>/js/ajax-mail.js"></script>
<script src="<? echo base_url($theme_assets_path) ?>/js/plugins.js"></script>
<script src="<? echo base_url($theme_assets_path) ?>/js/main.js?<?=rand()?>"></script>

<script src="<? echo base_url($theme_assets_path) ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js" ></script>

<script type="text/javascript">
    $('.grids').isotope({
        itemSelector: '.grid-item',
        
    });
</script>
<script>
  AOS.init();
</script>
<script type="text/javascript">
	function changelang(url) {
        $.get(url,function(){
            alert(url);
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
    function DateThai($strDate){
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));

        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear";
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