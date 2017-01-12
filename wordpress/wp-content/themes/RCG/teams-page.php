<?php
// Template Name: Teams
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div class="l-container is-full-width">
    <div class="l-full">
        <div class="team-container">
            <div class="l-one-fourth">
            <?php $active_id = get_the_ID(); ?>
            <?php if($children = get_children(array('post_parent' => 9, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC'))): ?>
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
            <div class="l-three-fourth content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
