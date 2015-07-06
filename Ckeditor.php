<?php

class Ckeditor
{
	static function appear($element, $params = array())
	{
		template_js('
$().ready(function() {
	$("'.$element.'").ckeditor({
	 	skin : "/xx/v3",
	 	autoParagraph : false,
	});
})');
}
