<?php get_header(); ?>
<?php the_post(); ?>

<div class="l-container is-full-width">
    <div class="l-full content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>

<div class="l-container is-full-width">
    <div class="l-full sponsorships">
        <h3>Sponsors</h3>

        <ul class="sponsorships-list">
            <li><img src="/images/spindle.png" alt="Devhouse Spindle"/></li>
            <li><img src="/images/wysz_fysio.png" alt="WYSZ Fysiotherapie" /></li>
        </ul>
    </div>
</div>

<?php get_footer(); ?>
