<br><br><br><br><br>
                <footer id="colophon" class="site-footer">
                            <div class="site-footer__wrap">
                            <?php
                            // Make sure there is a social menu to display.
                            if ( has_nav_menu( 'social' ) ) { ?>
                            <nav class="social-menu"> 
                                <?php
                                wp_nav_menu( array(
                                        'theme_location' => 'social',
                                        'menu_class'     => 'social-links-menu',
                                        'depth'          => 1,
                                        'link_before'    => '<span class="screen-reader-text">',
                                        'link_after'     => '</span>' . we_get_svg( array( 'icon' => 'chain' ) ),

                                ) );
                            ?>
                            </nav><!-- .social-menu -->
                    <?php } ?>
                    </div><!-- .site-footer__wrap -->
                </footer><!-- #colophon -->
                <div class="space"></div>
        </main>
        <?php wp_footer(); ?>
    </body>
</html>
