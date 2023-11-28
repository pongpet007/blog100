<!-- Vendor -->

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
<script src="<?php echo base_url() ?>assets/vendor/bootstrap-typeahead/bootstrap3-typeahead.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/select2/select2.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/raphael/raphael.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/morris/morris.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/liquid-meter/liquid.meter.js"></script>

<!-- <script src="<?php echo base_url() ?>assets/vendor/summernote/summernote.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets/vendor/summernote-upload.js"></script> -->
<script src="<?php echo base_url() ?>assets/vendor/ckeditor/ckeditor.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url() ?>assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url() ?>assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url() ?>assets/javascripts/theme.init.js"></script>
<script src="<?php echo base_url() ?>assets/javascripts/jquery.selectboxes.js"></script>
<script src="<?php echo base_url() ?>assets/cropper/js/cropper.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker({format:'yyyy-m-d'});
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
	 if($(".select2").length>0){
	 	$(".select2").select2();	
	 }

<?php if($this->router->class == 'CompanyCategory' && ($this->router->method=='edit' ||$this->router->method=='add')){ ?>
				
		$.get('<?=base_url("CompanyCategory/getIndexTH")?>',{},function(data){	
			var arr = [];	
			for(var x in data){
			  arr.push(data[x]);
			}	
			$('#index_th').typeahead({source:arr,items:8,autoSelect:true});

			$.get('<?=base_url("CompanyCategory/getIndexEN")?>',{},function(data){	
				var arr = [];	
				for(var x in data){
				  arr.push(data[x]);
				}	
				$('#index_en').typeahead({source:arr,items:8,autoSelect:true});
				
			},'JSON');
			
		},'JSON');

		
			
		// $('.typeahead').change(function() {
		// 	var current = $(this).typeahead("getActive");
		// 	if (current) {
		// 		// Some item from your model is active!
		// 		if (current.name == $(this).val()) {
		// 			// This means the exact match is found. Use toLowerCase() if you want case insensitive match.
		// 		} else {
		// 			// This means it is only a partial match, you can either add a new item 
		// 			// or take the active if you don't want new items
		// 		}
		// 	} else {
		// 		// Nothing is active so it is a new value (or maybe empty value)
		// 	}
		// });
<?php } ?>




	 <?php
			if($this->router->class == 'Company' && $this->router->method=='edit'){ ?>
		$('#province_id').change(function(){
				// alert('x');
				// return;
				$("#amphur_id").removeOption(/./);

				$("#amphur_id").ajaxAddOption('<?php echo base_url() ?>Company/getAmphur/'+($('#province_id').val()),{},false,function(){
					$("#amphur_id").selectOptions('<?=(isset($company) && is_object($company)&&$company->amphur_id>0)?$company->amphur_id:0?>');
				});



		});
		<?php	} ?>

	});

	function showsubcat(cat_id){		
		//event.preventDefault()

		if($('#trx'+cat_id).length==0 )
		{	
			$.post('<?php echo base_url('CompanyCategory/loadSub/') ?>'+cat_id,{},function(data){					
				$('#tr'+cat_id).after(data);
			});					
		}
		else{
			$('#trx'+cat_id).remove();
		}	
		
	}
	
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


	function clonedir()
	{
		
		if($("select[name^='dir_id']").length==1)
		var x = $("select[name^='dir_id']").clone().css('margin-top','5px');
		else
		var x = $("select[name^='dir_id']").first().clone().css('margin-top','5px');		
		$(x).appendTo('#dir');			
		return false;	
	}

	function removecat(id){
		if(confirm('Delete ? ')){
			$.get('<?php echo base_url('DirectoryCategory/directoryRemove/') ?>'+id,function(data){
				//alert(data);				
				window.location.reload();
			});
		}
	}
	
	function removedir(id,id2){

		$.get('<?php echo base_url('CompanyProduct/directoryRemove/') ?>'+id2,function(data){
			alert(data);
			$(id).remove();
			window.location.reload();
		});
		
		
	}

<?php if($this->router->class == 'CompanyProduct' && ($this->router->method=='edit' ||$this->router->method=='add')){ ?>
$(function () {

  'use strict';

  var console = window.console || { log: function () {} };
  var $image = $('#image');
  var $download = $('#download');
  var $dataX = $('#dataX');
  var $dataY = $('#dataY');
  var $dataHeight = $('#dataHeight');
  var $dataWidth = $('#dataWidth');
  var $dataRotate = $('#dataRotate');
  var $dataScaleX = $('#dataScaleX');
  var $dataScaleY = $('#dataScaleY');
  var options = {
        aspectRatio: 850 / 1036,
        preview: '.img-preview',
        crop: function (e) {
          // $dataX.val(Math.round(e.x));
          // $dataY.val(Math.round(e.y));
          // $dataHeight.val(Math.round(e.height));
          // $dataWidth.val(Math.round(e.width));
          // $dataRotate.val(e.rotate);
          // $dataScaleX.val(e.scaleX);
          // $dataScaleY.val(e.scaleY);
        }
      };


  // Tooltip
  // $('[data-toggle="tooltip"]').tooltip();


  // Cropper
  $image.on({
    // 'build.cropper': function (e) {
    //   console.log(e.type);
    // },
    // 'built.cropper': function (e) {
    //   console.log(e.type);
    // },
    // 'cropstart.cropper': function (e) {
    //   console.log(e.type, e.action);
    // },
    // 'cropmove.cropper': function (e) {
    //   console.log(e.type, e.action);
    // },
    // 'cropend.cropper': function (e) {
    //   console.log(e.type, e.action);
    // },
    // 'crop.cropper': function (e) {
    //   console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
    // },
    // 'zoom.cropper': function (e) {
    //   console.log(e.type, e.ratio);
    // }
  }).cropper(options);


  // Buttons
  if (!$.isFunction(document.createElement('canvas').getContext)) {
    $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
  }

  if (typeof document.createElement('cropper').style.transition === 'undefined') {
    $('button[data-method="rotate"]').prop('disabled', true);
    $('button[data-method="scale"]').prop('disabled', true);
  }


  // Download
  if (typeof $download[0].download === 'undefined') {
    $download.addClass('disabled');
  }


  // // Options
  // $('.docs-toggles').on('change', 'input', function () {
  //   var $this = $(this);
  //   var name = $this.attr('name');
  //   var type = $this.prop('type');
  //   var cropBoxData;
  //   var canvasData;

  //   if (!$image.data('cropper')) {
  //     return;
  //   }

  //   if (type === 'checkbox') {
  //     options[name] = $this.prop('checked');
  //     cropBoxData = $image.cropper('getCropBoxData');
  //     canvasData = $image.cropper('getCanvasData');

  //     options.built = function () {
  //       $image.cropper('setCropBoxData', cropBoxData);
  //       $image.cropper('setCanvasData', canvasData);
  //     };
  //   } else if (type === 'radio') {
  //     options[name] = $this.val();
  //   }

  //   $image.cropper('destroy').cropper(options);
  // });


  // Methods
  $('.docs-buttons').on('click', '[data-method]', function () {
    var $this = $(this);
    var data = $this.data();
    var $target;
    var result;

    if ($this.prop('disabled') || $this.hasClass('disabled')) {
      return;
    }

    if ($image.data('cropper') && data.method) {
      data = $.extend({}, data); // Clone a new one

      if (typeof data.target !== 'undefined') {
        $target = $(data.target);

        if (typeof data.option === 'undefined') {
          try {
            data.option = JSON.parse($target.val());
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      if (data.method === 'rotate') {
        $image.cropper('clear');
      }

      result = $image.cropper(data.method, data.option, data.secondOption);

      if (data.method === 'rotate') {
        $image.cropper('crop');
      }

      switch (data.method) {
        case 'scaleX':
        case 'scaleY':
          $(this).data('option', -data.option);
          break;

        case 'getCroppedCanvas':
          if (result) {
            result.toBlob(function (blob) {
                var form_data = new FormData();
                form_data.append('croppedCanvas', blob);
                form_data.append('filename', '<?=$filename ?>');
              
                $.ajax('<?=base_url("Filemanage/cropperupload")?>', {
                    type: "POST",
                    data : form_data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    mimeType:"multipart/form-data"
                }).done(function(res) {
                	console.log(res);
                	window.location='<?=current_url()?>';
                    //console.log('Upload success');
                });

            });

            // console.log(result);
            // return false;
            // // Bootstrap's Modal
            // $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

            // if (!$download.hasClass('disabled')) {
            //   $download.attr('href', result.toDataURL('image/jpeg'));
            // }



          }

          break;
      }

      if ($.isPlainObject(result) && $target) {
        try {
          $target.val(JSON.stringify(result));
        } catch (e) {
          console.log(e.message);
        }
      }

    }
  });


  // Keyboard
  $(document.body).on('keydown', function (e) {

    if (!$image.data('cropper') || this.scrollTop > 300) {
      return;
    }

    switch (e.which) {
      case 37:
        e.preventDefault();
        $image.cropper('move', -1, 0);
        break;

      case 38:
        e.preventDefault();
        $image.cropper('move', 0, -1);
        break;

      case 39:
        e.preventDefault();
        $image.cropper('move', 1, 0);
        break;

      case 40:
        e.preventDefault();
        $image.cropper('move', 0, 1);
        break;
    }

  });


  // Import image
  var $inputImage = $('#inputImage');
  var URL = window.URL || window.webkitURL;
  var blobURL;

  if (URL) {
    $inputImage.change(function () {
      var files = this.files;
      var file;

      if (!$image.data('cropper')) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
          blobURL = URL.createObjectURL(file);
          $image.one('built.cropper', function () {

            // Revoke when load complete
            URL.revokeObjectURL(blobURL);
          }).cropper('reset').cropper('replace', blobURL);
          $inputImage.val('');
        } else {
          window.alert('Please choose an image file.');
        }
      }
    });
  } else {
    $inputImage.prop('disabled', true).parent().addClass('disabled');
  }

});

		
<?php } ?>
</script>