<!DOCTYPE HTML>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="theme-color" content="#d82e3a">
    <meta name="msapplication-TileImage" content="/favicon-144.png">
    <meta name="msapplication-TileColor" content="#d82e3a">

    <title>Rugby Club Groningen | <?php the_title(); ?></title>
    <meta name="description" content="<?php (get_field('short_meta_description') ? the_field('short_meta_description') : 'De tofste rugby club van Groningen!') ?>">
    <meta name="author" content="RCG">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <?php wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all'); ?>
    <?php wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.css', array('font-awesome'), '1.0', 'all'); ?>

    <link rel="shortcut icon" href="/favicon-32.ico">
    <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $('document').ready(function() {
            $('.navigation-toggle').on('click', function() {
                $('body').toggleClass('nav-open');
                $('.navigation-symbol').toggleClass('nav-open');
                return false;
            });
        });
    </script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-93018253-1', 'auto');
	  ga('send', 'pageview');

	</script>
    <?php wp_head(); ?>
</head>
<body>

    <?php if($header_image_arr = get_field('header_image')): ?>
        <?php $header_image = $header_image_arr['sizes']['large']; ?>
    <?php else: ?>
        <?php $header_image = get_template_directory_uri() . '/images/header.png'; ?>
    <?php endif; ?>

    <div class="l-wrapper header <?php if(!is_front_page()):?>page-header<?php endif; ?>" style="background-image: url('<?php echo $header_image; ?>');">
        <div class="l-full">
            <div class="logo">
                <a href="/"><img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="Rugby Club Groningen"/></a>
            </div>

             <a href="#" class="navigation-toggle">
                 <span class="navigation-desc">MENU</span>
                 <div class="navigation-symbol"><span></span><span></span><span></span></div>
             </a>

            <?php if($pages = rcg_get_navigation()): ?>
                <ul class="navigation">
                    <?php foreach($pages as $page): ?>
                        <li<?php if($page->ID === 13): ?> class="button nav-cta"<?php endif; ?>>
                            <a <?php if(get_the_ID() === $page->ID || wp_get_post_parent_id(get_the_ID()) === $page->ID): ?>class="active"<?php endif; ?> href="<?php echo get_permalink($page->ID); ?>">
                                <?php echo $page->post_title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="social-media">
                <ul>
                    <li><a class="twitter" href="https://twitter.com/RCGroningen"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="facebook" href="https://www.facebook.com/rcgroningen"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://teamer.net"><img src="<?php echo get_template_directory_uri() . '/images/teamer.png'; ?>" /></a></li>
                    <li><a href="http://teamers.com"><img src="<?php echo get_template_directory_uri() . '/images/teamers.png'; ?>" /></a></li>
                </ul>
            </div>

       </div>

       <?php if(is_front_page()): ?>
           <?php if($intro = get_field('intro')): ?>
               <div class="l-full intro-cta">
                   <h2><?php echo $intro; ?></h2>
               </div>
           <?php endif; ?>

           <?php if(get_field('intro_button_text') && get_field('intro_button_link')): ?>
               <div class="l-full u-text-center">
                   <a href="<?php the_field('intro_button_link'); ?>" class="button is-cta"><?php the_field('intro_button_text'); ?></a>
               </div>
           <?php endif; ?>
        <?php endif; ?>

   </div>
