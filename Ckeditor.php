<?php

namespace B2;

class Ckeditor
{
	static function appear($element, $params = array())
	{
		bors_use('/_bower-assets/ckeditor/ckeditor.js');

		template_js('
$().ready(function() {
	$("'.$element.'").ckeditor({
	 	skin : "/xx/v3",
	 	autoParagraph : false,
	});
})');
}
