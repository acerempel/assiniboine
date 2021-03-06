<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// Don't show the title if the post-format is `aside` or `status`.
$post_format = get_post_format();
if ( 'aside' === $post_format || 'status' === $post_format ) {
	return;
}
?>

<header class="entry-header">
	<?php
	$prefix = '<h2 class="entry-title default-max-width">';
	$suffix = '</h2>';
	if ( get_post_type_object( get_post_type() )->links_to_individual_pages ?? true ) {
		$prefix .= sprintf( '<a href="%s">', esc_url( get_permalink() ) );
		$suffix = '</a>' . $suffix;
	}
	the_title( $prefix, $suffix );
	twenty_twenty_one_post_thumbnail();
	?>
</header><!-- .entry-header -->
