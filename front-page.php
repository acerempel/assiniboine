<?php

get_header();
?>

<?php if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('full'); ?>

<div class="mt-1lh mx-main-content">
<div class="text-lg flex flex-wrap flex-space-x-4 sm:flex-space-x-8 lg:flex-space-x-16">
	<?php
		$display_title_setting = get_post_custom_values('Display page title');
		if ( null !== $display_title_setting
			&& array_key_exists(0, $display_title_setting)
			&& 0 === strcasecmp('yes', trim($display_title_setting[0]))
		) {
			$display_title = true;
		} else {
			$display_title = false;
		}
	?>
	<section class="w-128 flex-grow min-w-72 mb-1.5lh <?php if ( ! $display_title ) { echo 'mt-0.5lh'; } ?>">
		<article class="entry-content paragraphs">
			<?php
				if ( $display_title ) {
					the_title('<h1 class="text-4xl display font-semibold">', '</h1>');
				}
				the_content();
			?>
		</article>
	</section>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	<?php endif; ?>
</div>
<?php
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post. Only visible to screen readers. */
			esc_html__( 'Edit this page %s', 'twentytwentyone' ),
			'<span class="sr-only">– namely, ' . get_the_title() . '</span>'
		),
		'<p class="edit-link">',
		'</p>'
	);
?>

</div>

<?php endif; ?>

<?php
get_footer();
