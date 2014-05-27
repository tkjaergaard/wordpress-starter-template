<?php

/*
|--------------------------------------------------------------------------
| Widget areas
|--------------------------------------------------------------------------
|
| Define widget areas for the website.
|
*/

add_action('widgets_init', function()
{
    register_sidebar(array(
        'name'=> 'Widget name',
        'id' => 'widget id',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

}, 20);