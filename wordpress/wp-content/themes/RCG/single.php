<?php get_header(); ?>
<?php the_post(); ?>

<div class="l-container is-full-width">
    <div class="l-full content">
        <h1><?php the_title(); ?></h1>

        <div class="l-two-third content">
            <?php the_content(); ?>
        </div>


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

    </div>
</div>

<?php get_footer(); ?>
