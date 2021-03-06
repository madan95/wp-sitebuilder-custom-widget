<?php
function my_theme_enqueue_styles() {

    wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/lib/bootstrap/css/bootstrap.css', array(), '', 'all');
    wp_enqueue_script('bootstrap-script', get_stylesheet_directory_uri() .'/lib/bootstrap/js/bootstrap.js', array(), '', true);

    $parent_style = 'twentyseventeen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>