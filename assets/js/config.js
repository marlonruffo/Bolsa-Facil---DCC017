/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	
	// %REMOVE_START%
	// The configuration options below are needed when running CKEditor from source files.
	//config.plugins = 'dialogui,dialog,about,basicstyles,clipboard,button,toolbar,enterkey,entities,floatingspace,wysiwygarea,indent,indentlist,fakeobjects,link,list,undo,print,panel,floatpanel,listblock,richcombo,font,menu,menubutton,language,table,contextmenu,tabletools,tableresize,texttransform,autocorrect,divarea,forms,htmlwriter,htmlbuttons,justify,liststyle,panelbutton,quicktable,save';
	//config.plugins = 'a11yhelp,about,basicstyles,bidi,tab,table,toolbar,wysiwygarea,undo,blockquote,wsc,tabletools,scayt,templates,pastetext,smiley,sourcearea,stylescombo,specialchar,showborders,showblocks,selectall,removeformat,save,resize,preview,print,pastefromword,floatingspace,link,maximize,newpage,pagebreak,magicline,liststyle,list,justify,language,htmlwriter,iframe,image,indentblock,indentlist,format,horizontalrule,forms,font,flash,clipboard,colorbutton,colordialog,contextmenu,dialogadvtab,div,elementspath,enterkey,entities,filebrowser,find';
	config.plugins = 'colordialog,basicstyles,table,toolbar,wysiwygarea,undo,preview,tabletools,print,list,justify,htmlwriter,indentblock,format,horizontalrule,forms,font,colorbutton,image,pastetext,pastefromword';
	//config.skin = 'moono';
	// %REMOVE_END%

	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for a single toolbar row.
	config.toolbarGroups = [
		//{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'document',	   groups: ['mode','document', 'doctools'] },
		{ name: 'clipboard',   groups: [ 'clipboard' ] },
		//{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		//{ name: 'forms' },
		//{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'undo' ] },
		//{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'align' ] },
		//{ name: 'links' },
		{ name: 'insert' },
		{ name: 'styles' },
		{ name: 'colors' },
		//{ name: 'tools' },
		//{ name: 'others' },
		//{ name: 'about' }
	];

	// The default plugins included in the basic setup define some buttons that
	// are not needed in a basic editor. They are removed here.
	config.removeButtons = 'Cut,Copy,Anchor,Strike,Subscript,Superscript,Flash,NewPage,Iframe,Smiley,PageBreak,SpecialChar';

	// Dialog windows are also simplified.
	config.removeDialogTabs = 'link:advanced';
};

