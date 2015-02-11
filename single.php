<?php get_header() ?>

<div class="inner">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
	<aside>
		<?php the_post_thumbnail('240x180') ?>
		<div class="tags"><?php the_tags('',' ','') ?></div>
	</aside>
	<article>
		<h1><?php the_title() ?></h1>
		<div class="content"><?php the_content() ?></div>
	</article>
	<?php endwhile; endif; ?>
</div>

<?php get_footer() ?>