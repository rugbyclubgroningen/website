<?php
// Template Name: Teams
?>

<?php get_header(); ?>
<?php the_post(); ?>

    <div class="l-full">
        <?php get_template_part('_subnavigation'); ?>

        <div class="l-three-fourth content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <?php $game_reports = rcg_get_relevant_game_reports(get_the_ID()); if($game_reports->have_posts()): ?>
                <div class="relevant-game-reports">
                    <h2>Wedstrijdverslagen</h2>

                    <ul class="news-archive-list">
                        <?php while($game_reports->have_posts()): $game_reports->the_post(); ?>
                            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if($scorebutton = get_field('scores_button')): ?>
                <a class="button" href="<?php echo $scorebutton; ?>">Bekijk de laatste uitslagen</a>
            <?php endif; ?>
        </div>
    </div>


<?php get_footer(); ?>
