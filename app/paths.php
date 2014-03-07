<?php

/*
|--------------------------------------------------------------------------
| Theme url
|--------------------------------------------------------------------------
|
| Set the url for the theme.
|
*/
defined('THEME_URL') or define('THEME_URL',  get_stylesheet_directory_uri());

/*
|--------------------------------------------------------------------------
| Library url
|--------------------------------------------------------------------------
|
| Set the url for the library folder.
|
*/
defined('LIBRARY_URL') or define('LIBRARY_URL',  THEME_URL."/library");

/*
|--------------------------------------------------------------------------
| Library path
|--------------------------------------------------------------------------
|
| Set the path to the library folder.
|
*/
defined('LIBRARY_PATH') or define('LIBRARY_PATH',  dirname(dirname(__DIR__))."/library");

/*
|--------------------------------------------------------------------------
| Assets url
|--------------------------------------------------------------------------
|
| Set the url to the assets folder.
|
*/

defined('ASSETS_URL') or define('ASSETS_URL',  LIBRARY_URL."/assets");
