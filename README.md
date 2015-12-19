# Bootstrap Colorpicker for e107

This plugin enables the useage of [bootstrap-colorpicker](https://github.com/mjolnic/bootstrap-colorpicker/) from within e107.

## Utilizing this for your plugin/theme on the frontend

You'll need to perform a check to make sure this is installed and enabled. Maybe like this:

```php
if(e107::isInstalled('bootstrap_colorpicker') && e107::pref('bootstrap_colorpicker', 'enabled'))
{
	// code to generate your form fields using the colorpicker
}
else
{
	// code to generate your form fields without the colorpicker
}
```

##Utilizing this in the Admin Area

You can simply add the `colorpicker` class to any applicable form element and will work out of the box.

If you are using it on the `admin_config.php` page you could do something fancy like:

`'writeParms' => array('class' => 'colorpicker'),`

Obviously if you're already utilizing the `writeParms` parameter you just need to expand on the array:

```php
'writeParms' => array(
	'optArray' => array(
		'hello' => 'Hello',
	),
	'class' => 'colorpicker',
),
```

## Issues? Bugs?

That should be it. Open an issue if this doesn't work as intended. Please direct issues with the actual colorpicker functionality to the above linked repo!
