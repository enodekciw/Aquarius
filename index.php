<?php
/**
 * Blog posts archive template.
 *
 * @package WordPress
 * @subpackage Aquarius
 * @since Aquarius 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><?php get_header(); ?>
	<section id="content-main" class="archive-list">
		
		<?php wplovin_archive_header(); ?>
		
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		
			<?php get_template_part( 'content' ); ?>
			
		<?php endwhile; ?>
		
			<?php wplovin_archive_pager(); ?>
			
		<?php else : ?>
		
			<?php get_template_part( 'content', 'none' ); ?>
			
		<?php endif; ?>
		
	</section>
<?php get_footer(); ?>