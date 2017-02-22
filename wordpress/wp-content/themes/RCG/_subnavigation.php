<div class="l-one-fourth">
    <?php $active_id = get_the_ID(); ?>
    <?php
        if ( is_page() && $post->post_parent ) {
            $post_parent = wp_get_post_parent_id($active_id);
        } else {
            $post_parent = get_the_ID();
        }
    ?>
    <?php if($children = get_children(array('post_parent' => $post_parent, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC'))): ?>
        <ul class="subnavigation">
            <?php foreach($children as $child): ?>
                <li>
                    <a <?php if($active_id === $child->ID): ?>class="active"<?php endif; ?> href="<?php echo get_permalink($child->ID); ?>">
                        <?php echo $child->post_title; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
