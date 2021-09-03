<?php 

if (!function_exists('webitiScripts')) : 

    function webitiScripts()
    {   
        wp_enqueue_style( 
            'bootstrap-icons', 
            'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', 
            [],
            '1.0.0'
        );

        wp_enqueue_style( 
            'fork-awesome', 
            'https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css', 
            [],
            '1.0.0'
        );

        wp_enqueue_style(
            'webiti-style', 
            get_theme_file_uri('/public/css/style.css'),
            [],
            '1.0.0'
        );

        wp_enqueue_script(
            'webiti-app',
            get_theme_file_uri('/public/js/app.js'),
            [],
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'parallax-js',
            get_theme_file_uri('/public/js/parallax.min.js'),
            [],
            '1.0.0',
            true
        );
    }

endif; 

add_action('wp_enqueue_scripts', 'webitiScripts');