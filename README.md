# TIVWP\Force Deactivate Plugins
Automatically disables plugins on production server.

If the WP_LOCAL_DEV define is NOT true, disables plugins that you specify.

> This is the reverse logic of the [CWS_Disable_Plugins_When_Local_Dev](https://gist.github.com/markjaquith/1044546) by Mark Jaquith (@markjaquith).

## To install
	composer require tivwp/tivwp-force-deactivate-plugins

## Instructions
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
