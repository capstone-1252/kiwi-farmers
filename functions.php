<?php
function tam_enqueue_styles() {    
     wp_enqueue_style(
        'main-stylesheet',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts','tam_enqueue_styles');

function tam_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','tam_theme_setup');

function tam_register_sidebars() { 
    register_sidebar( array( 
        'name' => 'Sidebar', 
        'id' => 'posts-sidebar', 
        'description' => 'Widgets added here appear in the left sidebar on the pages that use the archive template', 'before_widget' => '<aside id="%1$s" class="di-widget %2$s">', 'after_widget'  => '</aside>', 'before_title'  => '<h3 class="di-widget-title">', 'after_title'   => '</h3>' 
        )
    ); 
} 

add_action( 'widgets_init', 'tam_register_sidebars' ); 

?>

