<?php
/**
 * Main post content template.
 *
 * Used for all post formats.
 *
 * @package WordPress
 * @subpackage Aquarius
 * @since Aquarius 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="inside full-padding">
	
		<?php if ( get_the_title() || has_post_thumbnail() ) : ?>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
				
					<?php if ( is_singular() ) : ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php else : ?>
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>" title="<?php echo sprintf( __( 'Continue reading %s', WPLOVIN_THEME_SLUG ), get_the_title() ); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
					<?php endif; ?>
					
				<?php endif; ?>
				
				<h1>
				
					<?php if ( is_singular() ) : ?>
						<?php the_title(); ?>
					<?php else : ?>
						<a href="<?php the_permalink(); ?>" title="<?php echo sprintf( __( 'Continue reading %s', WPLOVIN_THEME_SLUG ), get_the_title() ); ?>">
							<?php the_title(); ?>
						</a>
					<?php endif; ?>
					
				</h1>
			</header>
		<?php endif; ?>
		
		<section class="entry-content">
			<?php the_content( __( 'Read more', WPLOVIN_THEME_SLUG ) ) ; ?>
		</section>
				
		<footer class="entry-meta">
			<?php if ( !is_page() ) wplovin_post_meta(); ?>
			<?php edit_post_link( __( 'Edit', WPLOVIN_THEME_SLUG ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?>
		</footer>
		
	</div>
	<?php if ( is_singular() ) : ?>
		<?php wp_link_pages( array( 
			'before'   =>   '<div class="page-links"><div class="faux-top-border">' . __( 'Continue reading &rarr;', WPLOVIN_THEME_SLUG ), 
			'after'    =>   '<i class="fa ' . apply_filters( 'wplovin_pager_icon', 'fa-book' ) . '"></i></div></div>' ) 
		); ?>
	<?php endif; ?>
	
	<?php if ( get_post_format() && !is_sticky() ) : ?>
		<i class="fa icon-<?php echo get_post_format(); ?> post-format-icon"></i>
	<?php elseif ( is_sticky() ) : ?>
		<i class="fa icon-sticky post-format-icon"></i>
	<?php endif; ?>
</article>
