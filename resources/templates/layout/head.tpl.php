<!doctype html>
<html class="no-js no-svg" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
            <header>

                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                            <h1 class="site-title">
                                <a href="#" class="intro-banner-vdo-play-btn pinkBg" target="_blank">
                                    <span class="ripple pinkBg"></span>
                                    <span class="ripple pinkBg"></span>
                                    <span class="ripple pinkBg"></span>   
                                </a>
                                <a class="banner-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <?php bloginfo( 'name' ); ?>
                                </a>
                            </h1>
                    <?php else : ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                    endif; ?>
            </header>><!-- .site-branding -->
            <header id="masthead" class="site-header" role="banner">
                <nav id="site-navigation" class="main-navigation" role=" navigation">
                        <button class="menu-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><?php esc_html_e( 'Menu'); ?></span>
                        </button>
                        
                            <?php   
                            if (false === ($menu = get_transient('p_menu'))){
                                ob_start();
                                wp_nav_menu( array(
                                        'theme_location'    => 'primary',
                                        'depth'             => 3,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'navbarNavDropdown',
                                        'menu_class'        => 'nav navbar-nav',
                                        'menu_id'           => 'primary-menu',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                                $menu = ob_get_clean();
                                set_transient( 'p_menu', $menu, DAY_IN_SECONDS );
                            }
                            echo $menu;
                            ?>    
                </nav><!-- #site-navigation -->  
            <span class="main-bg"></span>
            </header>
            <br><br>
        <main id="app" class="app container h-100">    
