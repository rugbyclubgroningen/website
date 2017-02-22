<?php get_header(); ?>
<?php the_post(); ?>

<div class="l-container is-full-width">
    <div class="l-full">
        <div class="sub-container">
            <?php get_template_part('_subnavigation'); ?>

            <div class="l-three-fourth content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
