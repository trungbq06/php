/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	//config.extraPlugins = 'removeformat';
	config.filebrowserBrowseUrl = '../libraries/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '../libraries/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '../libraries/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = '../libraries/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '../libraries/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '../libraries/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	//config.allowedContent=true;
	//config.forcePasteAsPlainText = true;
};
