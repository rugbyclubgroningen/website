<div class="l-full">
    <ul class="sm-footer">
        <li><a class="twitter" href="https://twitter.com/RCGroningen"><i class="fa fa-twitter"></i></a></li>
        <li><a class="facebook" href="https://www.facebook.com/rcgroningen"><i class="fa fa-facebook"></i></a></li>
        <li><a href="http://teamer.net"><img src="/images/teamer.png" /></a></li>
        <li><a href="http://teamers.com"><img src="/images/teamers.png" /></a></li>
    </ul>
</div>

<?php if(have_rows('sponsors', 'option') ): ?>
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
<?php endif; wp_reset_postdata(); ?>

<!--<?php timer_stop(1);?>-<?php echo get_num_queries();?>q-<?php echo date("d.m.Y-H:i")?>-->
</body>
</html>
