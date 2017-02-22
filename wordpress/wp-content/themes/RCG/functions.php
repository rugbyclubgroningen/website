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
