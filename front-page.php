<?php

get_header();
?>

<?php if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('full'); ?>

<div class="mt-1lh mx-main-content">
<div class="text-lg flex flex-wrap flex-space-x-4 sm:flex-space-x-8 lg:flex-space-x-16">
	<section class="w-128 flex-grow min-w-72 mb-1.5lh">
		<article class="entry-content paragraphs">
			<?php the_title('<h1 class="text-4xl display font-semibold">', '</h1>'); ?>
			<?php the_content(); ?>
		</article>
	</section>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	<?php endif; ?>
</div>
</div>

<?php endif; ?>

<?php
get_footer();
