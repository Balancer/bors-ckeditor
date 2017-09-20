<?php

namespace B2;

class Ckeditor
{
	static function appear($element, $params = array())
	{
		self::load();

		template_js('
$().ready(function() {
	$("'.$element.'").ckeditor({
	 	skin : "/xx/v3",
	 	autoParagraph : false,
	});
})');

	}

	static function load()
	{
		\B2\jQuery::load();

		if(empty(\bors::$bower_asset_packages['bower-asset/ckeditor']))
			bors_use('https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js');
		else
			bors_use(\B2\cfg('bower-asset.path', '/bower-asset').'/ckeditor/ckeditor.js');
	}
}
