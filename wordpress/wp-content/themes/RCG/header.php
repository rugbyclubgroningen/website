<!DOCTYPE HTML>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="theme-color" content="#d82e3a">
    <meta name="msapplication-TileImage" content="favicon-144.png">
    <meta name="msapplication-TileColor" content="#d82e3a">

    <title>Rugby Club Groningen</title>
    <meta name="description" content="De tofste rugby club van Groningen!">
    <meta name="author" content="RCG">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/stylesheets/styles.css">
    <link rel="shortcut icon" href="favicon-32.ico">
    <link rel="apple-touch-icon-precomposed" href="favicon-152.png">
</head>
<body>

    <div class="l-wrapper header <?php if(!is_front_page()):?>page-header<?php endif; ?>" style="background-image: url('/images/header.png');">
        <div class="l-full">
            <div class="logo">
                <img src="/images/logo.svg" alt="Rugby Club Groningen"/>
            </div>

             <a href="#" class="navigation-toggle">
                 <span class="navigation-desc">MENU</span>
                 <div class="navigation-symbol"><span></span><span></span><span></span></div>
             </a>

            <ul class="navigation">
                <li><a href="/">Home</a></li>
                <li><a href="/nieuws">Nieuws</a></li>
                <li><a href="/over-ons">Over ons</a></li>
                <li><a href="/teams">Teams</a></li>
                <li><a href="/sponsoren">Sponsoren</a></li>
                <li class="button nav-cta"><a href="/lid-worden">Lid worden</a></li>
            </ul>
       </div>

       <?php if(is_front_page()): ?>
           <div class="l-full intro-cta">
               <h2>"Rugby is great. The players don't wear helmets or padding; they just beat the living daylights out of each other and then go for a beer. I love that."</h2>
           </div>

           <div class="l-full u-text-center">
               <a href="#" class="button is-cta">Deelnemen aan introductie training</a>
           </div>
        <?php endif; ?>

   </div>