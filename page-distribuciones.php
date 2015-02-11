<?php /* Template Name: Catálogo - Distribuciones */ ?>
<?php get_header() ?>

<div class="inner">
	<h1>Catalogo</h1>
	<div class="entry">
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $d = new WP_Query(array('post_type' => 'distribucion','paged' => $paged)); ?>
		<?php if ($d->have_posts()): while ($d->have_posts()): $d->the_post(); ?>
		<div class="article">
			<div class="inner">
				<a class="article-img" href="<?php the_permalink() ?>"><?php echo types_render_field('poster', array('output' => 'normal', 'width' => '250', 'height' => '390')) ?></a>
				<a class="article-title" href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
	<div class="pag">
		<?php post_paging($d) ?>
	</div>
</div>

<?php get_footer() ?>