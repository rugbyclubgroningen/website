<?php $sticky_news = rcg_get_sticky_posts(); if($sticky_news->have_posts()): $i = 0;?>

    <div class="news-container-two-third">

        <?php while($sticky_news->have_posts()): $sticky_news->the_post(); ?>

            <a href="<?php echo get_permalink(); ?>">
                <div class="news-block">
                    <?php if(get_the_post_thumbnail()): ?>
                        <div class="news-block-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); "></div>
                    <?php endif; ?>
                    <?php if($i === 0): ?>
                        <h3>Uitgelicht nieuws</h3>
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

    </div>

<?php endif; ?>
