<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$content_classes = is_front_page() ? '' : 'mt-8 mx-main-content';

$main_classes = 'site-main';

if ( is_home() || is_search() || is_archive() ) {
	$main_classes .= ' max-w-prose mx-auto';
	if ( ! is_archive() ) { $main_classes .= ' p-space-y-8 space-y-8 divide-y divide-secondary'; }
} else if ( is_single() ) {
	$main_classes .= ' space-y-1.5lh';
}
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
	<a class="sr-only focus:not-sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="<?php echo $content_classes; ?>">
			<main id="main" class="<?php echo $main_classes; ?>" role="main">
