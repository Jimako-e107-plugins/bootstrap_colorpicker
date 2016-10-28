<?php
/*
 * Bootstrap Colorpicker  - Colorpicker Enabler for e107
 *
 * Copyright (C) 2015 Patrick Weaver (http://trickmod.com/)
 * For additional information refer to the README.md file.
 *
 */
if(!defined('e107_INIT')){ exit; }

if(e107::pref('bootstrap_colorpicker', 'enabled') == true)
{
	e107::js('bootstrap_colorpicker', 'js/bootstrap-colorpicker.min.js');
	e107::js('bootstrap_colorpicker', 'js/script.js');
	e107::css('bootstrap_colorpicker', 'css/bootstrap-colorpicker.min.css');
	
	$inlinecss = e107::pref('bootstrap_colorpicker', 'admincss');
	e107::css('inline', $inlinecss);
 
}
