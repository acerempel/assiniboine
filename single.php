<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}

	// Previous/next post navigation.
	$twentytwentyone_next_icon = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
	$twentytwentyone_prev_icon = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

	$assiniboine_next_label     = esc_html__( 'Next post', 'twentytwentyone' );
	$assiniboine_prev_label = esc_html__( 'Previous post', 'twentytwentyone' );

	$assnbn_prevnext_classes =
		'grid grid-cols-auto-2 items-center gap-x-2'
		. ' p-2 bg-cyan-50 border-2 border-blue-500 rounded hover:bg-cyan-100 hover:border-blue-600';

	$assiniboine_next = '<span class="' . $assnbn_prevnext_classes . ' pl-3 justify-items-end">';
	$assiniboine_next .= '<span class="underline text-cyan-700">' . $assiniboine_next_label . '</span>';
	$assiniboine_next .= '<span class="row-span-2 text-cyan-700">' . $twentytwentyone_next_icon . '</span>';
	$assiniboine_next .= '<span class="font-semibold text-xl text-secondary">%title</span>';
	$assiniboine_next .= '</span>';

	$assiniboine_prev = '<span class="' . $assnbn_prevnext_classes . ' pr-3 justify-items-start">';
	$assiniboine_prev .= '<span class="row-span-2 text-cyan-700">' . $twentytwentyone_prev_icon . '</span>';
	$assiniboine_prev .= '<span class="underline text-cyan-700">' . $assiniboine_prev_label . '</span>';
	$assiniboine_prev .= '<span class="font-semibold text-xl text-secondary">%title</span>';
	$assiniboine_prev .= '</span>';

	the_post_navigation(
		array(
			'next_text' => $assiniboine_next,
			'prev_text' => $assiniboine_prev,
		)
	);

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile; // End of the loop.

get_footer();
