<?php

if ( ! isset( $content_width ) ) {
    $content_width = 660;
}
function basicTheme_setup (){
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    // Register Custom Navigation Walker
    require_once('wp_bootstrap_navwalker.php');
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'basicTheme' ),
    ));
}
add_action('after_setup_theme', 'basicTheme_setup');
function basicTheme_scripts (){
    /* add styles */
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');
    /* add scripts */
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jQuery.min.js', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true);
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'basicTheme_scripts');

/**
 * Filter the excerpt "read more" string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function frontPageFeaturedBody(){
    if(is_front_page()){
        _e(" id='front-page'");
    }
}
?>