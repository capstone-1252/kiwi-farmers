<?php

function mytheme_enqueue_styles() {
    // Enqueue the main theme stylesheet (style.css in the theme root)
    wp_enqueue_style( 'mytheme-main-style', get_stylesheet_uri() );

    // Enqueue an additional custom stylesheet (e.g., in a 'css' subfolder)
    wp_enqueue_style( 'mytheme-custom-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );

?>
