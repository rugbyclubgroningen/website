<?php

add_theme_support('post-thumbnails');

// Get news
function rcg_get_posts($amount = -1, $offset = 0) {
    return new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $amount,
        'offset' => $offset,
    ));
}
