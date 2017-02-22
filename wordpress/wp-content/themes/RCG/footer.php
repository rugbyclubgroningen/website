
<?php if(have_rows('sponsors', 'option') ): ?>
    <div class="l-container is-full-width">
        <div class="l-full sponsorships">
            <h3>Sponsors</h3>

            <ul class="sponsorships-list">
                <?php while (have_rows('sponsors', 'option')) : the_row(); ?>
                    <?php $logo = get_sub_field('logo'); ?>
                    <li>
                        <?php if($url = get_sub_field('website')): ?>
                            <a href="<?php echo $url; ?>">
                                <img src="<?php echo $logo['url']; ?>" alt="<?php the_sub_field('name'); ?>"/>
                            </a>
                        <?php else: ?>
                            <img src="<?php echo $logo['url']; ?>" alt="<?php the_sub_field('name'); ?>"/>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; wp_reset_posdata(); ?>

<!--<?php timer_stop(1);?>-<?php echo get_num_queries();?>q-<?php echo date("d.m.Y-H:i")?>-->
</body>
</html>
