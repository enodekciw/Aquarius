<?php
/**
 * 'NOT FOUND' content template.
 *
 * @package WordPress
 * @subpackage Aquarius
 * @since Aquarius 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="inside full-padding">
			
		<section class="entry-content">
		
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p><?php printf( __( 'No posts published so far. <a href="%1$s">Ready to speak out?</a>.', WPLOVIN_THEME_SLUG ), admin_url( 'post-new.php' ) ); ?></p>
			<?php elseif ( is_search() ) : ?>
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', WPLOVIN_THEME_SLUG ); ?></p>
				<?php get_search_form(); ?>
			<?php else : ?>
				<p><?php _e( 'Ooops.. Perhaps searching can help?', WPLOVIN_THEME_SLUG ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
			
		</section>

	</div>
</article>
