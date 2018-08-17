/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	//config.entities_latin = false
	config.entities = true;
	config.basicEntities = true;

	config.entities_greek = false;
	config.entities_latin = false;

	config.forcePasteAsPlainText = true;

	config.enterMode = CKEDITOR.ENTER_BR;
	config.htmlEncodeInput = false;
	//config.entities = false;
	//config.basicEntities = false;
	//config.entities_greek = false;
	//config.entities_latin = false;
	//config.allowedContent = true;
	//config.filebrowserBrowseUrl = 'http://localhost/petlovershow/assets/3rf3rf3rf3editor/elfinder/elfinder.html';	
	config.extraPlugins = 'youtube';
	config.toolbar_Basic =
	[
		['Source','Bold', 'Italic']
	];	
	config.toolbar = [
	    { name: 'clipboard', items: [ 'Cut', 'Copy', 'PasteText', '-', 'Undo', 'Redo' ] },
	    { name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
	    { name:'link', items: ['Link', 'Unlink', 'Anchor'] },
	    { name:'styles', items: ['Styles', 'Format'] },
	    { name:'document', items: ['Source'] },
	    { name:'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
	    { name:'paragraph', items: ['Numberedlist', 'BulletedList', '-','Outdent','Indent','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock']},
	    {name: 'insert', items: ['Image', 'Youtube']}
	];	
	// '/',

	//config.filebrowserBrowseUrl = 'http://www.misticadigital.com/py_logrosperu/assets/mainpanel/ckeditor/elfinder/elfinder.html';
	config.filebrowserBrowseUrl = 'http://localhost/logrosperu/assets/mainpanel/ckeditor/elfinder/elfinder.html';

};