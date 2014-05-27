Wordpress Starter Template
==========================

Simple starter template for Wordpress.

## Installation

clone this repository to `wp-content/themes/`

    git clone git@github.com:tkjaergaard/wordpress-starter-template.git your-theme-name

Edit the style.css file to match your information.

## Usage

All core files are located within the `app/` directory, you should not change anything here, use the library folder instead to store your theme specific files like assets, helper function, post-type creation etc.

Take a quick browse through the `app/` directory to see what it does.

## Definitions

`THEME_URL` url to the theme folder.

`LIBRARY_URL` url to the library folder.

`ASSETS_URL` url to the assets folder.

`LIBRARY_PATH` path to the library folder.

## Helper functions

**get_thumb_url**
this method allows you the retrive the url of
a thumbnail associated to a post.

    echo get_thumb_url();

    echo get_thumb_url($size='thumbnail',$id=null)


## Contribute

The goal of the theme is to keep it simple, and just provide basic functionality and enhancements.

**No markup specific pull-requests will be merged.**

## Author
Thomas Kjaergaard
*Denmark*

[Twitter](http://twitter.com/t_kjaergaard)
