<?php

/*
|--------------------------------------------------------------------------
| Remove the generator
|--------------------------------------------------------------------------
|
| Remove the meta tag applied to the header by Wordpress.
|
*/

add_filter('the_generator', function(){ return ''; });

remove_action('wp_head', 'wp_generator');

/*
|--------------------------------------------------------------------------
| Remove Windows Live Writer manifest
|--------------------------------------------------------------------------
|
| Remove the link tag applied to the header by Wordpress.
| The wlwmainifest enabels tagging for WLW. We don't need that.
|
*/

remove_action('wp_head', 'wlwmanifest_link');

/*
|--------------------------------------------------------------------------
| Remove Really Simple Discovery
|--------------------------------------------------------------------------
|
| Remove the link to the Really Simple Discovery service endpoint,
| EditURI link.
|
*/

remove_action('wp_head', 'rsd_link');

/*
|--------------------------------------------------------------------------
| Remove Admin Bar
|--------------------------------------------------------------------------
|
| Remove the Admin Bar from the frontend.
|
*/

show_admin_bar(false);