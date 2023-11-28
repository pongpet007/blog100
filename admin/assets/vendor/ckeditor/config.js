/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.language = 'en';
	 //config.uiColor = '#AADC6E';	
	config.extraPlugins = 'image';
	config.filebrowserUploadUrl = '//' + window.location.hostname +':'+ window.location.port+ '/admin/Filemanage/upload' ;
	config.image_removeLinkByEmptyURL= true;
	config.image_previewText = CKEDITOR.tools.repeat( 'ตัวอย่างรูปภาพ ', 100 );

	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },		
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },		
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	// config.removeButtons = 'About,ShowBlocks,Styles,Font,Format,FontSize,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Anchor,BidiLtr,BidiRtl,Language,CopyFormatting,RemoveFormat,Find,Replace,SelectAll,Scayt,Form,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Checkbox,Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo';
	//config.removeButtons = 'About,ShowBlocks,Styles,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Anchor,BidiLtr,BidiRtl,Language,CopyFormatting,RemoveFormat,Find,Replace,SelectAll,Scayt,Form,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Checkbox,Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo';
};