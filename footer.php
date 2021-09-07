<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<div class="py-6 lg:py-8 px-6 mt-8
		teal border-t-4 border-teal-700">

	<div class="flex flex-wrap justify-between gap-y-6 gap-x-8
		max-w-224 mx-auto">

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer
		id="colophon"
		class="site-footer w-full border-t border-secondary pt-6 mt-2"
		role="contentinfo">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
			<p class="site-name font-semibold">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</p><!-- .site-name -->
			<?php if ( get_theme_mod( 'display_powered_by', true ) ) : ?>
			<p class="powered-by">
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Powered by %s', 'twentytwentyone' ),
					'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
				);
				?>
			</p><!-- .powered-by -->
			<?php endif; ?>
			<?php if ( get_theme_mod( 'display_designer_credit', true ) ) : ?>
				<p>
					Website design by <a href="https://alanrempel.ca">Alan Rempel</a>
				</p>
			<?php endif; ?>
	</footer><!-- #colophon -->

	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
