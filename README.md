# Bootstrap Colorpicker for e107

This plugin enables the useage of [bootstrap-colorpicker](https://github.com/mjolnic/bootstrap-colorpicker/) from within e107.

## Utilizing this for your plugin/theme

You'll need to perform a check to make sure this is installed and enabled. Maybe like this:

```php
if(e107::isInstalled('bootstrap-colorpicker') && e107::pref('bootstrap-colorpicker', 'enabled))
{
	// code to generate your form fields using the colorpicker
}
else
{
	// code to generate your form fields without the colorpicker
}
```

That should be it. Open an issue if this doesn't work as intended. Please direct issues with the actual colorpicker functionality to the above linked repo!
