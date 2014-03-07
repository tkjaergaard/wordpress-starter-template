<?php

/*
|--------------------------------------------------------------------------
| Bootstrap application
|--------------------------------------------------------------------------
|
| Setting up the theme architecture and requiring necessary files.
|
*/

require_once(__DIR__.'/app/bootstrap.php');

/*
|--------------------------------------------------------------------------
| Load theme specific components
|--------------------------------------------------------------------------
|
| Autoload theme components.
|
*/

foreach( glob(__DIR__.'/library/components/*.php') as $filename )
{
    if( is_file($filename) AND file_exists($filename) )
        require_once($filename);
}