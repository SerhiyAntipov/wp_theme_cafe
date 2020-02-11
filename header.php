<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content='true' name='HandheldFriendly' />
    <meta content='width' name='MobileOptimized' />
    <meta content='yes' name='apple-mobile-web-app-capable' />
    <meta name="description" content="cafe restaurant food">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/favicon.png" type="image/png">
    <?php wp_head(); ?>
</head>

<!-- <?php
require_once 'connect-database.php';
?> -->

<body>
    <div class="wrapper" id="wrapper">
        <header class="main-header" id="main-header">
            <nav class="main-nav">
                <div class="container main-nav__wrapper">
                    <a href="<?php echo home_url()?>" class="main-nav__logo-link">
                        <h2 class="main-nav__logo"><?php bloginfo( 'name' ); ?></h2>
                    </a>
                    <input type="checkbox" id="main-nav-call">
                    <label class="main-nav-burger" for="main-nav-call">
                        <span></span>
                    </label>
                    <?php
					wp_nav_menu( array(
						'container'       => false, 
						'menu_class'      => 'main-nav__ul', 
						'menu_id'        => 'primary-menu',
					) );
					?>
                    <!-- <ul class="main-nav__ul">
                        <li><a href="#about-us" class="main-nav__link main-nav__link-active" data-main-nav-id="0">About
                                Us</a>
                        </li>
                        <li><a href="#our-menu" class="main-nav__link" data-main-nav-id="1">Menu</a></li>
                        <li><a href="#reservations" class="main-nav__link" data-main-nav-id="2">Reservations</a></li>
                        <li><a href="#main-footer" class="main-nav__link" data-main-nav-id="3">Contacts</a></li>
                    </ul> -->
                </div>
            </nav>
        </header>
        <section class="slider-header" id="slider-header">
            <h2 class="hidden">HEADER SLIDER</h2>
            <?php echo do_shortcode('[slick-slider  design="design-2" image_fit="true" category="2" speed="4000" show_content="true"]'); ?>
            <!-- HEADER SLIDER render js slider  -->
            <!-- <div class="slider-header__slide">
                <img src="img/header-slider/header-slider_01.jpg" alt="slider_01 img">
                <div class="container slider-header__text-container">
                    <div class="slider-header__text">
                        <h2 class="slider-header__title c-mongoose">Beautiful Food</h2>
                        <h5 class="slider-header__sub-title">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Dignissimos sit repellendus omnis totam.</h5>
                        <a href="#" class="btn btn-slider">See More</a>
                    </div>
                </div>
            </div>
            </div> -->
        </section>
       