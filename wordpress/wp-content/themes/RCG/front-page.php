<?php
// Template Name: Frontpage
?>

<?php get_header(); ?>

<div class="l-container is-full-width">
    <div class="l-full sponsorships">
        <h3>Sponsors</h3>

        <ul class="sponsorships-list">
            <li><img src="images/spindle.png" alt="Devhouse Spindle"/></li>
            <li><img src="images/wysz_fysio.png" alt="WYSZ Fysiotherapie" /></li>
        </ul>
    </div>
</div>

<div class="l-container is-full-width">
    <div class="l-full news-container">
        <div class="news-container-two-third">

            <?php $news = rcg_get_posts(4); if($news->have_posts()): $i = 0;?>

                <?php while($news->have_posts()): $news->the_post(); ?>

                    <a href="<?php echo get_permalink(); ?>">
                        <div class="news-block">
                            <?php if(get_the_post_thumbnail()): ?>
                                <div class="news-block-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); "></div>
                            <?php endif; ?>
                            <?php if($i === 0): ?>
                                <h3>Nieuws</h3>
                            <?php endif; ?>
                            <span class="news-date"><?php the_date('d M Y'); ?></span>
                            <div class="news-block-content">
                                <h4><?php the_title(); ?></h4>

                                <?php if(get_field('is_game_report')): ?>
                                    <div class="scoreboard">
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
                                <?php else: ?>
                                    <?php the_excerpt(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>

                <?php $i++; endwhile; wp_reset_postdata(); ?>

            <?php endif; ?>

            <div class="news-block filler"></div>

            <div class="news-block filler"></div>
        </div>

        <div class="agenda-container">
            <h3>Agenda</h3>

            <div class="agenda-list">
                <?php echo do_shortcode('[calendar id="64"]'); ?>
            </div>

            <!-- <div class="agenda-list-events">
                <h3>Agenda</h3>

                <div class="agenda-list">
                    <h4>Tuesday 5 dec 2016</h4>
                    <ul>
                        <li>
                            <span class="agenda-time">19:00 PM</span>
                            <span class="agenda-item">Sinterklaas celebrations</span>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>



<?php get_footer(); ?>
