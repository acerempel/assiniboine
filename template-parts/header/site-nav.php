<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav
		id="site-navigation"
		class="primary-navigation small-caps links-no-underline tracking-wider font-medium text-xl"
		role="navigation"
		aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
		<!-- .menu-button-container -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'flex flex-row flex-wrap',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'before' => '<span class="mr-10 py-0.5">',
				'after' => '</span>',
				'link_before' => '<span class="px-1 py-0.5 text-primary">',
				'link_after' => '</span>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
