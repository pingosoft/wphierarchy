<?php

//Add Theme Support
add_theme_support('title_tag');
add_theme_support('post-thumbnails');  //featured images
add_theme_support('post_format', [
    'aside', 'gallery', 'link', 'image', 'quote',
    'status', 'video', 'audio', 'chat'
]);

add_theme_support('hmtl5');
add_theme_support('automatic_feed_links'); //metadata
//customizer related
add_theme_support('custom background');
add_theme_support('custom header');
add_theme_support('custom logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content '); //preview a theme helper


add_theme_support('portfolio');
add_theme_support('post-thumbnails', array('page', 'post', 'movie')); // Posts and Movies
//get_the_post_thumbnail();
//wp_get_attachment_image();
// the_post_thumbnail( array( 100, 100 ) ); // Other resolutions (height, width)

//Load in our CSS
function wphierarchy_enqueue_styles()
{
    wp_enqueue_style('main-css', ' get_stylesheet_directory_uri(  )' . '/style.css', [], time(), 'all'); // array of dependencies
}
add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_styles');
