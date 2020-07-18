<?php

namespace cooler\App\Setup;

/*
|-----------------------------------------------------------
| Theme Actions
|-----------------------------------------------------------
|
| This file purpose is to include your custom
| actions hooks, which process a various
| logic at specific parts of WordPress.
|
*/

/**
 * Example action handler.
 *
 * @return integer
 */
function example_action()
{
    //
}
add_filter('excerpt_length', 'cooler\App\Setup\example_action');

function parent_theme_file_path( $file = '' ) {
	$file = ltrim( $file, '/' );

	if ( empty( $file ) ) {
		$path = get_template_directory();
	} else {
		$path = get_template_directory() . '/' . $file;
	}

	/**
	 * Filters the path to a file in the parent theme.
	 *
	 * @since 4.7.0
	 *
	 * @param string $path The file path.
	 * @param string $file The requested file to search for.
	 */
	return apply_filters( $path, $file );
}

function socialmedia() {
    

    if ( get_theme_mod( 'display_social_icons', false ) ) : ?>

            <div class="asocial-area">
            <?php if ( get_theme_mod( 'facebook_url', '' ) ) : ?>
                    <span class="asocial-icon facebook"><a href="<?php echo esc_url ( get_theme_mod( 'facebook_url', '' ) ) ?>" target="_blank"><i class="fa fa-facebook"></i></a></span>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'twitter_url', '' ) ) : ?>
                    <span class="asocial-icon twitter"><a href="<?php echo esc_url ( get_theme_mod( 'twitter_url', '' ) ) ?>" target="_blank"><i class="fa fa-twitter"></i></a></span>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'google_plus_url', '' ) ) : ?>
                    <span class="asocial-icon googleplus"><a href="<?php echo esc_url ( get_theme_mod( 'google_plus_url', '' ) ) ?>" target="_blank"><i class="fa fa-google-plus"></i></a></span>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'linkedin_url', '' ) ) : ?>
                    <span class="asocial-icon linkedin"><a href="<?php echo esc_url ( get_theme_mod( 'linkedin_url', '' ) ) ?>" target="_blank"><i class="fa fa-linkedin"></i></a></span>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'youtube_url', '' ) ) : ?>
                    <span class="asocial-icon youtube"><a href="<?php echo esc_url ( get_theme_mod( 'youtube_url', '' ) ) ?>" target="_blank"><i class="fa fa-youtube"></i></a></span>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'rss_url', '' ) ) : ?>
                    <span class="asocial-icon rss"><a href="<?php echo esc_url ( get_theme_mod( 'rss_url', '' ) ) ?>" target="_blank"><i class="fa fa-rss"></i></a></span>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'instagram_url', '' ) ) : ?>
                    <span class="asocial-icon instagram"><a href="<?php echo esc_url ( get_theme_mod( 'instagram_url', '' ) ) ?>" target="_blank"><i class="fa fa-instagram"></i></a></span>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'flickr_url', '' ) ) : ?>
                    <span class="asocial-icon flickr"><a href="<?php echo esc_url ( get_theme_mod( 'flickr_url', '' ) ) ?>" target="_blank"><i class="fa fa-flickr"></i></a></span>
            <?php endif; ?>
            </div>

    <?php endif;

}
