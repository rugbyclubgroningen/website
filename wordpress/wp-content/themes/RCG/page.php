<?php get_header(); ?>
<?php the_post(); ?>

<div class="l-container is-full-width">
    <div class="l-full content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
