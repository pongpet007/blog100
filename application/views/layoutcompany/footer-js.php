<!-- Vendor -->
<script src="<?php echo base_url() ?>admin/assets/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/libs/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/jquery-appear/jquery.appear.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/raphael/raphael.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/morris/morris.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/liquid-meter/liquid.meter.js"></script>
<script src="<?php echo base_url() ?>admin/assets/vendor/select2/select2.js"></script>


<!-- <script src="<?php echo base_url() ?>assets/vendor/summernote/summernote.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets/vendor/summernote-upload.js"></script> -->
<script src="<?php echo base_url() ?>admin/assets/vendor/ckeditor/ckeditor.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url() ?>admin/assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url() ?>admin/assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url() ?>admin/assets/javascripts/theme.init.js"></script>
<script src="<?php echo base_url() ?>admin/assets/javascripts/jquery.selectboxes.js"></script>

<script type="text/javascript">
	$(document).ready(function(){



  if($('#province_id').val()>0){
			$("#amphur_id").ajaxAddOption("<?php echo base_url('customeradmin/Namecard/getJSON') ?>", {"province_id" : $('#province_id').val()}, false, function(data){
				$("#amphur_id").selectOptions($('#hidamphur_id').val()); 
				$('#s2id_amphur_id > .select2-choice > .select2-chosen ').html($("#amphur_id option:selected").html());
			});
		}

		$('#province_id').change(function(){
			$('#s2id_amphur_id > .select2-choice > .select2-chosen ').html('');
			$('#amphur_id').removeOption(/./);
			$("#amphur_id").ajaxAddOption("<?php echo base_url('customeradmin/Namecard/getJSON') ?>", {"province_id" : $('#province_id').val()}, false, function(data){
				$("#amphur_id").selectOptions(0); 
			});
		});

		if($( ".typeahead" ).length >0 ){


		$( ".typeahead" ).autocomplete({
                  source: '<?=base_url("customeradmin/Namecard/getjson")?>'               
                  
            }).data("ui-autocomplete")._renderItem = function (ul, item) {
                 var x = item.label.replace(/\[/g,'<b style="color:red;">').replace(/\]/g,'</b>');
                 return $("<li class=\"ui-menu-item\"></li>")
                     .data("item.autocomplete", item)
                     .append('<a id="ui-id-' + item.id + '" class="ui-corner-all" tabindex="-1">' + x + '</a>')
                     .appendTo(ul);
            };
		}
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker({format:'yyyy-m-d'});
		if($(".select2").length>0){
		 	$(".select2").select2();	
		 }
		$('.colorpicker').colorpicker();

		// $('.summernote').summernote({
	 //        height: 200,
	 //        "codemirror": { "theme": "ambiance" },
	       
	 //       	 callbacks: {
	 //       	 		onInit: function() {
		// 	      	var name = $(this).attr('id');
		// 	     	$(this).parent().find( "textarea").attr('name',name);
		// 	    },
		// 	    	onChange: function(contents, $editable) {
		// 	      	var name = $(this).attr('id');
		// 	      	$(this).parent().find( "textarea").attr('name',name).val(contents);			      
		// 	    },
		// 	    	onImageUpload: function(files, editor, welEditable) {
	 //           	 	sendFile(files[0], $(this), welEditable);
	 //          	}		

		// 	  }
			   
	 //    });

	});
	
	function showsubcat(com_id,cat_id){		
		//event.preventDefault()


		if($('#trx'+cat_id).length==0 )
		{	
			$.post('<?php echo base_url('CompanyCategory/loadSub/') ?>/'+com_id+'/'+cat_id,{},function(data){				
				$('#tr'+cat_id).after(data);
			});					
		}
		else{
			$('#trx'+cat_id).remove();
		}	
		
	}

	function sendFile(file, editor, welEditable) {    

		data = new FormData();
	    data.append("file", file);
	    //data.append('com_id',$('#com_id').val());
	    $.ajax({
	        data: data,
	        type: "POST",
	        url: '<?php echo base_url('Summernote/upload') ?>',
	        cache: false,
	        contentType: false,
	        processData: false,
	        success: function(url) {
	        	 editor.summernote('insertImage', url);
	        }
	    });
	}		


	function clonedir()
	{
		
		// if($("select[name^='dir_id']").length==1)
		// var x = $("select[name^='dir_id']").clone().css('margin-top','5px');
		// else
		// var x = $("select[name^='dir_id']").first().clone().css('margin-top','5px');		
		// $(x).appendTo('#dir');		

		var x = $('#master').clone().css('display','block');		
		$(x).appendTo('#datagroup');
	}

	function removecat(id){
		if(confirm('Delete ? ')){
			$.get('<?php echo base_url('DirectoryCategory/directoryRemove/') ?>'+id,function(data){
				//alert(data);				
				window.location.reload();
			});
		}
	}
</script>
 
