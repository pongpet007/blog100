<!-- Vendor -->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="<?php echo base_url() ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-appear/jquery.appear.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/raphael/raphael.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/morris/morris.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/liquid-meter/liquid.meter.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/vendor/summernote/summernote.js"></script> -->
<script src="<?php echo base_url() ?>assets/vendor/ckeditor/ckeditor.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url() ?>assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url() ?>assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url() ?>assets/javascripts/theme.init.js"></script>
<script src="<?php echo base_url() ?>assets/javascripts/jquery.selectboxes.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker({format:'yyyy-m-d'});

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
		<?php
			if($this->router->class == 'Company' && $method=='edit'){ ?>
		$('#province_id').change(function(){
				//alert('x');
				//return;
				$("#amphur_id").removeOption(/./);

				$("#amphur_id").ajaxAddOption('<?php echo base_url() ?>Company/getAmphur/'+($('#province_id').val()),{},false,function(){
					$("#amphur_id").selectOptions('<?=(isset($perches) && is_object($perches)&&$perches->amphur_id>0)?$perches->amphur_id:0?>');
				});



		});
		<?php	} ?>
		
		<?php
			if($this->router->class == 'perches' && $method=='edit'){ ?>
				$("#province_id").change();
				$("#province_id").selectOptions('<?=(isset($perches) && is_object($perches)&&$perches->province_id>0)?$perches->province_id:0?>');
		<?php	} ?>
	});

	function showsubdir(dir_id){
		//event.preventDefault()


		if($('#trx'+dir_id).length==0 )
		{

			//alert('x');

			$.post('<?php echo base_url('Directory1/loadSub/') ?>'+ dir_id,{},function(data){
				$('#tr'+dir_id).after(data);
			});
		}
		else{
			$('#trx'+dir_id).remove();
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

</script>
