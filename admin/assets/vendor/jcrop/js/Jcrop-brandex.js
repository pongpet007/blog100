;(function($){
	
	var defaults = {
			'width':100,
			'height':100,
			'urlfilename':'url1',
	};
	
	$.fn.brandexJcrop = function(options){		
		var opts = $.extend(defaults, options);
		//console.log(opts);		
  
		return this.each(function(index, element ){
			//alert(opts.urlfilename);
			$(this).append('<div class="brandexJcropResult"></div>');
			$(this).append('<input type="file" class="brandexJcropfile" name="file1" id="file1"/>');
			$(this).append('<input type="hidden" name="'+opts.urlfilename+'" id="'+opts.urlfilename+'" class="brandexJcropUrl"/>');
			$(this).append('<input type="hidden" name="filename1" id="filename1" class="brandexJcropFilename" />');
			$(this).append('<input type="hidden" name="brandexJcropW" id="brandexJcropW" class="brandexJcropW" value="'+ opts.width +'" />');
			$(this).append('<input type="hidden" name="brandexJcropH" id="brandexJcropH" class="brandexJcropH" value="'+ opts.height +'" />');
			
			
			// console.log(element);
			// console.log($(this).find('.brandexJcropfile').length);
			// console.log($(this).find(':file').attr('name'));
			var $thisElement = $(this);
			var $divResult = $(this).find('.brandexJcropResult');
			var $inputFile = $(this).find('.brandexJcropfile');
			var $url = $(this).find('.brandexJcropUrl');
			var $filename = $(this).find('.brandexJcropFilename');
			var $jcropimgold = $(this).find('.jcropimgold');
			
			
			
			//console.log(opts.width);
			//console.log(opts.height);				
			
			$inputFile.on("change",function(){
				if($inputFile.val()){
					
					$divResult.html('<img src="../../img_new/loader.gif" >Please wait....');
					
					var dataFile = new FormData();	
					dataFile.append('type','upload');
					dataFile.append('file1',$inputFile[0].files[0]);
										
					$.ajax({
					url: 'crop-image-action.php',
					type: 'POST',
					data: dataFile,
					cache: false,
					dataType: 'json',
					processData: false, // Don't process the files
					contentType: false, // Set content type to false as jQuery will tell the server its a query string request
					success: function(data, textStatus, jqXHR)
					{
						if(typeof data.error === 'undefined')
						{
							$divResult.html('<img src="'+data.url+'" id="target1" class="target" /><br/><div class="inline-labels"><label>X1 <input type="text" size="4" id="file1x1" name="file1x1" /></label><label>Y1 <input type="text" size="4" id="file1y1" name="file1y1" /></label><label>X2 <input type="text" size="4" id="file1x2" name="file1x2" /></label><label>Y2 <input type="text" size="4" id="file1y2" name="file1y2" /></label><label>W <input type="text" size="4" id="file1w" name="file1w" /></label>   <label>H <input type="text" size="4" id="file1h" name="file1h" /></label><input type="button" name="btnSave1" id="btnSave1" value="Save" class="btn btn-success brandexbtnSave" /></div> ');
							
							$jcropimgold.hide();
							$url.val(data.url);
							$filename.val(data.filename);
							
							var $btnSave = $thisElement.find('.brandexbtnSave');		
							var $target  = $thisElement.find('.target');
							var $inputW = $thisElement.find('.brandexJcropW').val();
							var $inputH = $thisElement.find('.brandexJcropH').val();
							//alert($target.length);
							// console.log($target);
							console.log($inputW);
							console.log($inputH);
							// Start Jcrop
							$target.Jcrop({
								onChange:   function(c){
									
									$thisElement.find('#file1x1').val(c.x);
									$thisElement.find('#file1y1').val(c.y);
									$thisElement.find('#file1x2').val(c.x2);
									$thisElement.find('#file1y2').val(c.y2);
									$thisElement.find('#file1w').val(c.w);
									$thisElement.find('#file1h').val(c.h);
								},
								onSelect:   function(c){
									$thisElement.find('#file1x1').val(c.x);
									$thisElement.find('#file1y1').val(c.y);
									$thisElement.find('#file1x2').val(c.x2);
									$thisElement.find('#file1y2').val(c.y2);
									$thisElement.find('#file1w').val(c.w);
									$thisElement.find('#file1h').val(c.h);
								},
								aspectRatio: $inputW / $inputH ,
							});
							
							// Start Save
							$btnSave.click(function(){
								
								if($thisElement.find('#file1x1').val()=='')
								{
									alert('Please make selecttion in picture ');
									return false;
								}
								
								var params = {
									"type":"resizeSave",
									"savewidth1":$inputW,
									"saveheight1":$inputH,
									"file1x1":$thisElement.find('#file1x1').val(),
									"file1y1":$thisElement.find('#file1y1').val(),
									"file1w":$thisElement.find('#file1w').val(),
									"file1h":$thisElement.find('#file1h').val(),
									"url1":$url.val(),
									"filename1":$filename.val(),
									
								};
								//$thisElement.serialize();
								// params = params + "&type=resizeSave";
								// params = params + "&savewidth1=" + $inputW;
								// params = params + "&saveheight1=" + $inputH;
								
								//console.log(params);
								//alert(params);						
								//return;
								$.post('crop-image-action.php',params,function(data){
									$divResult.html('<img src="'+data+'" />');
									$url.val(data);								
								});
								
							});
							
						}
						else
						{
							// Handle errors here							
							console.log('ERRORS: ' + data.error);
						}
					},
					error: function(jqXHR, textStatus, errorThrown)
					{
						// Handle errors here
						console.log('ERRORS: ' + textStatus);
						// STOP LOADING SPINNER
					}
				});// End ajax
										
				}// End if !empty value
			});// 
		});	
	
	}
		
})(jQuery);