<?php

get_header();
?>

<div class="text-lg flex flex-wrap flex-space-x-16">
	<section class="w-prose flex-shrink flex-grow-2 min-w-72 mb-2lh">
		<?php while ( have_posts() ) : the_post(); ?>
		<article class="entry-content paragraphs">
			<?php the_content(); ?>
		</article>
		<?php endwhile; ?>
	</section>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<section class="mb-2lh flex-shrink-2 flex-grow min-w-64 grid grid-cols-w72 gap-y-2lh gap-x-8">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</section>
	<?php endif; ?>
</div>

<?php
get_footer();
