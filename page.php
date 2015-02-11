<?php get_header() ?>

<div class="inner">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
	<h1><?php the_title() ?></h1>
	<section>
		<div class="content"><?php the_content() ?></div>
	</section>
	<?php endwhile; endif; ?>
</div>

<?php get_footer() ?>