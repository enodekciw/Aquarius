<?php
/**
 * Faux sidebar template.
 *
 * This is sidebar area which won't be visible on the front-end.
 * Basically, this is just a holder for the content which will be pulled into Sidr.
 * Include it with get_sidebar();
 *
 * @package WordPress
 * @subpackage Aquarius
 * @since Aquarius 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<section id="sidebar-main">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</section>
<?php } ?>