<?php get_header() ?>

<div class="inner">
	<h1>Noticias</h1>
	<div class="entry">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
		<div class="article">
			<div class="inner">
				<div class="date"><?php the_time('j/M Y') ?></div>
				<a class="article-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail('240x180') ?></a>
				<a class="article-title" href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
				<div class="excerpt"><?php the_excerpt() ?></div>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
	<div class="pag">
		<?php post_paging() ?>
	</div>
</div>

<?php get_footer() ?>