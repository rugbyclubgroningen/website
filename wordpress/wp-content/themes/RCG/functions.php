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
