<?php
/**
 * Single post template.
 *
 * @package WordPress
 * @subpackage Aquarius
 * @since Aquarius 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><?php get_header(); ?>
	<section id="content-main">
	
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		
			<?php get_template_part( 'content', get_post_format() ); ?>
			
		<?php endwhile; else : ?>
		
			<?php get_template_part( 'content', 'none' ); ?>
			
		<?php endif; ?>
		
		<?php comments_template(); ?>
		
	</section>
<?php get_footer(); ?>