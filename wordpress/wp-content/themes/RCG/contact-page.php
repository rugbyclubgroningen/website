<?php
    // Template Name: Contact
?>

<?php get_header(); ?>
<?php the_post(); ?>

    <div class="l-full content">
        <div class="l-half-contact">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

        <div class="l-half">
            <h2>Adresgegevens</h2>

            <ul class="address-list">
                <li>Clubhuis:</li>
        		<li>Sportpark Esserberg</li>
        		<li>Rijksstraatweg 16</li>
                <li>9752 AD Haren</li>
                <li>tel: <a href="tel:0031507521211">050 75 21 211</a></li>
                <li>email: <a href="mailto:info@rugbyclubgroningen.nl">info@rugbyclubgroningen.nl</a></li>

                <br />

                <li>Postadres:<li>
                <li>Postbus 6224</li>
                <li>9702 HE Groningen</li>
                <li>Wedstrijdsecretaris: <a href="tel:0031613157778">06 13 15 77 78</a></li>
            </ul>

        </div>
    </div>


<?php get_footer(); ?>
