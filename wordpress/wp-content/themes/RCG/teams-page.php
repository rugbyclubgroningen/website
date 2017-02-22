<?php
// Template Name: Teams
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div class="l-container is-full-width">
    <div class="l-full">
        <div class="sub-container">
            <?php get_template_part('_subnavigation'); ?>

            <div class="l-three-fourth content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

                <?php if($scorebutton = get_field('scores_button')): ?>
                    <a class="button" href="<?php echo $scorebutton; ?>">Bekijk de laatste uitslagen</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
