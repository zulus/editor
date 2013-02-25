<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'default_driver'  => 'elrte',

	'drivers'         => array(
		'TinyMCE'         => array(
			'js_path'        => 'media/editor/tinymce/js/',
			'options'        => array(
				'theme'         => 'advanced',
			),
		),
		'Elrte'           => array(
			'css_path'       => 'media/editor/elrte/css/',
			'js_path'        => 'media/editor/elrte/js/',
		),
		'CKEditor'         => array(
			'js_path'         => 'media/editor/ckeditor/',
		),
		'MarkitUp'         => array(
			'js_path'         => 'media/editor/markitup/',
			// no css_path, only skins&sets here!
			'skin_path'       => 'media/editor/markitup/skins/',
			'set_path'        => 'media/editor/markitup/sets/',
		),
	),

	'custom'          => array(
		'test'           => array(
			'driver'        => 'TinyMCE',
			'options'       => array(
				'width'        => 700,
				'height'       => 300,
				'theme_advanced_toolbar_location' => "top",
			),
		)
	)
);