<?php

/*
|--------------------------------------------------------------------------
| Clean up
|--------------------------------------------------------------------------
|
| Clean up the Wordpress application to make it less clumsy and
| more secure against hacking/malware.
|
*/

require_once(__DIR__."/core/cleanup.php");

/*
|--------------------------------------------------------------------------
| Paths
|--------------------------------------------------------------------------
|
| Load path definitions for easy refering to paths in the application.
|
*/

require_once(__DIR__."/paths.php");

/*
|--------------------------------------------------------------------------
| Add thumbnail support
|--------------------------------------------------------------------------
|
| Add support for thumbnails in the theme.
|
*/

add_theme_support('post-thumbnails');

/*
|--------------------------------------------------------------------------
| Helper functions
|--------------------------------------------------------------------------
|
| Load helper functions to perform common tasks.
|
*/

require_once(__DIR__."/core/helpers.php");