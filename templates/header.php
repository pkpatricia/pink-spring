<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
<body <?php body_class(); ?>>
<div class="wrapper" role="document">
    <header class="header-main">
        <div class="header--quicklinks">
            <nav class="nav-quicklinks" role="navigation">
                <?php
                if ( has_nav_menu( 'quicklink_navigation' ) ) :
                    wp_nav_menu(array( 'theme_location' => 'quicklink_navigation', 'menu_class' => 'quicklinks-menu' ) );
                endif;
                ?>
                <?php //the_mtm_social_icons( '' ); ?>
                <?php spring_search_bar(); ?> 
            </nav>
        </div>
        <div class="header--inner">
            <section class="open-button-wrapper">
                <button id="openMainMenu" class="open-main-menu open-button"><span>Open Main Menu</span></button>
                <?php echo spring_sidebar_button(); ?>
            </section>
            <nav class="nav-main" role="navigation">
                <?php
                if ( has_nav_menu( 'primary_navigation' ) ) :
                    wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_class' => 'nav-main--menu' ) );
                endif;
                ?>
                <a id="closeSidebar"> × </a>
            </nav>
            
            <h1 class="header--blog-name">
                <?php the_mtm_header_logo(); ?>
                <?php the_mtm_mobile_logo(); ?>
            </h1>
            <div class="header--extra-text">
                <?php the_mtm_header_text(); ?>
            </div>
        </div>
    </header>