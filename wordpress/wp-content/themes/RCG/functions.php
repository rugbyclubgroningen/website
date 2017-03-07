<?php

add_theme_support('post-thumbnails');

// Get news
function rcg_get_posts($amount = -1, $offset = 0) {
    $stickies = get_option('sticky_posts');

    return new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $amount,
        'post__not_in' => array($stickies),
        'offset' => $offset,
    ));
}

// Get sticky news
function rcg_get_sticky_posts() {
    $sticky = get_option('sticky_posts');

    return new WP_Query(array(
        'post_type' => 'post',
        'post__in' => array($sticky),
        'ignore_sticky_posts' => 1,
    ));

}

// Get parent pages for the navigation.
function rcg_get_navigation() {
    $args = array(
       'sort_order' => 'asc',
       'sort_column' => 'menu_order',
       'parent' => 0,
       'post_type' => 'page',
       'post_status' => 'publish'
    );

    return get_pages($args);
}

// Add an option page to maintain sponsors.
if(function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Sponsoren',
		'menu_title'	=> 'Sponsoren',
		'menu_slug' 	=> 'sponsoren',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// Limit the excerpt length for better readability in the design.
function rcg_excerpt_length( $length ) {
	return 35;
} add_filter( 'excerpt_length', 'rcg_excerpt_length', 999 );

// Cleanup the wp_head tag from unnessecary stuff.
function rcg_cleanup_head_tag() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');

    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);

    add_filter('the_generator', '__return_false');

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
} add_action('after_setup_theme', 'rcg_cleanup_head_tag');
