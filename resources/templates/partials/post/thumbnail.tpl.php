<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( is_singular() and has_post_thumbnail() ) :
			?>

			<div class="post-thumbnail"> 
				<?php the_post_thumbnail('custom-thumbnail'); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>"  aria-hidden="true">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().  ?>
    <time><?php the_date(); ?></time>
    <div class="post__content">
	<header class="entry-header">
                <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
                $length_setting = get_theme_mod('length_setting');
                if ( 'excerpt' === $length_setting ) {
                    the_excerpt();
                } 
		?>
	
                <div class="continue-reading">
                    <?php
                        $read_more_link = sprintf(  /* translators: %s: Name of current post. Only visible to screen readers */
                                wp_kses(__( 'Continue reading %s ' ), array( 'span' => array( 'class' => array() ) ) ),
                                the_title( '<span class="screen-reader-text">"', '"</span>', false)

                        );
                    ?>
                    <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
                        <?php echo $read_more_link; ?>
                    </a>
                </div><!-- .continue-reading -->
        </div><!-- .entry-content -->
    </div><!-- .post__content -->
</article><!-- #post-##-->