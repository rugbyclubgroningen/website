<?php get_header(); ?>
<?php the_post(); ?>


<div class="l-full content">
    <small>Geplaatst op <?php the_date(); ?> door <?php the_author(); ?></small>
    <h1><?php the_title(); ?></h1>

    <div class="l-two-third content">
        <?php the_content(); ?>
    </div>

    <?php if(get_field('is_game_report')): ?>
        <div class="scoreboard single">
            <div class="team">
                <div class="team-name"><?php the_field('hometeam_name'); ?></div>
                <div class="team-score home-team">
                    <?php the_field('hometeam_score'); ?>
                </div>
            </div><div class="team">
                <div class="team-name"><?php the_field('outteam_name'); ?></div>
                <div class="team-score">
                    <?php the_field('outteam_score'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>


<?php get_footer(); ?>
