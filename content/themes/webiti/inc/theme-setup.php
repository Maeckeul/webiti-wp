<?php 

if (!function_exists('webitiSetup')):

    function webitiSetup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
    }

endif; 

add_action('after_setup_theme', 'webitiSetup');