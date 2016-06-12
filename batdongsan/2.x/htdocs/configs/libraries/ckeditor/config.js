/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	//config.extraPlugins = 'removeformat';
	config.filebrowserBrowseUrl = '../libraies/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '../libraies/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '../libraies/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = '../libraies/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '../libraies/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '../libraies/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	//config.allowedContent=true;
	//config.forcePasteAsPlainText = true;
};
