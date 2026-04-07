<?php

function mytheme_enqueue_styles() {
    $style_path = get_stylesheet_directory() . '/style.css';
    $version = file_exists($style_path) ? filemtime($style_path) : '1.0';
    wp_enqueue_style( 
        'mytheme-main-style', 
        get_stylesheet_uri(), 
        array(), 
        $version 
    );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );

?>
