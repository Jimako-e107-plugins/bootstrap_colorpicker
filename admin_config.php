<?php
/*
 * Bootstrap Colorpicker  - Colorpicker Enabler for e107
 *
 * Copyright (C) 2015 Patrick Weaver (http://trickmod.com/)
 * For additional information refer to the README.md file.
 *
 */
require_once('../../class2.php');
if (!getperms('P'))
{
	header('location:'.e_BASE.'index.php');
	exit;
}

class bootstrap_colorpicker_adminArea extends e_admin_dispatcher
{
	protected $modes = array(
		'main'	=> array(
			'controller' 	=> 'bootstrap_colorpicker_ui',
			'path' 			=> null,
			'ui' 			=> 'bootstrap_colorpicker_form_ui',
			'uipath' 		=> null
		),
	);

	protected $adminMenu = array(
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'
	);

	protected $menuTitle = 'Bootstrap Colorpicker';
}

class bootstrap_colorpicker_ui extends e_admin_ui
{
	protected $pluginTitle		= 'Bootstrap Colorpicker';
	protected $pluginName		= 'bootstrap_colorpicker';
	protected $table			= '';
	protected $pid				= '';
	protected $perPage			= 10;
	protected $batchDelete		= true;
	protected $listOrder		= ' DESC';
	protected $fields 		= NULL;
	protected $fieldpref = array();

	protected $prefs = array(
		'enabled' => array(
			'title' => 'Enabled Bootstrap Colorpicker?',
			'type' => 'boolean',
			'data' => 'str',
			'help' => 'Enable to load the required files to utlize the colorpicker form element.'
		),
		'admincss' => array(
			'title' => 'Admin Inline css',
			'type' => 'textarea',
			'data' => 'str',
			'writeParms'  =>  array('size'=> 'block-level'),
			'help' => 'custom css for colorpicker'
		),
	);

	public function init()
	{
	}

	public function beforeCreate($new_data)
	{
		return $new_data;
	}

	public function afterCreate($new_data, $old_data, $id)
	{
	}

	public function onCreateError($new_data, $old_data)
	{
	}

	public function beforeUpdate($new_data, $old_data, $id)
	{
		return $new_data;
	}

	public function afterUpdate($new_data, $old_data, $id)
	{
	}

	public function onUpdateError($new_data, $old_data, $id)
	{
	}
}

class bootstrap_colorpicker_form_ui extends e_admin_form_ui
{
}

new bootstrap_colorpicker_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;
