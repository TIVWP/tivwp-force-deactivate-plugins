# TIVWP\Force Deactivate Plugins
Automatically disables plugins on production server.

If the WP_LOCAL_DEV define is NOT true, disables plugins that you specify.

> This is the reverse logic of the [CWS_Disable_Plugins_When_Local_Dev](https://gist.github.com/markjaquith/1044546) by Mark Jaquith (@markjaquith).

## To install

- Make sure you have the following settings in your project's `composer.json`:
```json
{
	"require": {
		"composer/installers": "^1.0"
	},
	"extra": {
		"installer-paths": {
			"path/to/mu-plugins/{$name}/": [
				"type:wordpress-muplugin"
			]
		}
	}
}
```

- Run this in your project's root folder: 
```
composer require tivwp/tivwp-force-deactivate-plugins
```

- The plugin files will be installed in the `path/to/mu-plugins/tivwp-force-deactivate-plugins` folder. However, WordPress ignores subfolders in the `mu-plugins`. Therefore, you need to copy the `tivwp-force-deactivate-plugins.php` one level up, to the `mu-plugins`.

## Settings
- Put this to a local config file (excluded from the repo):
```php
define( 'WP_LOCAL_DEV', true );
```

- and this - to the `wp-config.php` (edit, of course):
```php
define( 'TIVWP_LOCAL_DEV_PLUGINS', array(
   'debug-bar/debug-bar.php',
   'query-monitor/query-monitor.php',
   'tivwp-email/tivwp-email.php',
) );
```

## Author
* Gregory Karpinsky (@tivnet)

## License
GPL-3.0
