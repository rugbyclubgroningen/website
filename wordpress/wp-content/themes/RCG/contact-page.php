<?php
    // Template Name: Contact
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div class="l-container is-full-width">
    <div class="l-full content">
        <div class="l-half">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

        <div class="l-half">
            <h2>Adresgegevens</h2>
            <ul class="address-list">
                <li>Rijksstraatweg 16</li>
                <li>9752 AD Haren</li>
                <li>PR: <a href="tel:0031651865675">06 51 86 56 75</a></li>
                <li>Wedstrijdsecretaris: <a href="tel:0031613157778">06 13 15 77 78</a></li>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>
