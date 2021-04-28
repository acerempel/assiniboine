<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );

$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form
	role="search" method="get"
	<?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
	class="search-form grid grid-cols-auto-2 gap-2"
	action="<?php echo esc_url( home_url( '/' ) ); ?>"
>
	<label
		for="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>"
	><?php _e( 'Search&hellip;', 'twentytwentyone' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>
	<input
		type="search" name="s"
		id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>"
		class="search-field col-start-1"
		value="<?php echo get_search_query(); ?>" />
	<input
		type="submit"
		class="search-submit col-start-2"
		value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?>" />
</form>
