<?php
/*
 * Bootstrap Colorpicker  - Colorpicker Enabler for e107
 *
 * Copyright (C) 2015 Patrick Weaver (http://trickmod.com/)
 * For additional information refer to the README.md file.
 *
 */
if(!defined('e107_INIT'])){ exit; }

if(e107::pref('bootstrap-colorpicker', 'enabled') == true)
{
	e107::js('bootstrap-colorpicker', 'js/boostrap-colorpicker.min.js', 'jquery');
	e107::js('bootstrap-colorpicker', 'css/bootstrap-colorpicker.min.css');
}
