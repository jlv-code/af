<?php get_header() ?>

<?php 

	if ( have_posts() ) : while ( have_posts() ) : the_post();

		$title = get_the_title();
		$poster = types_render_field('poster', array('output' => 'normal', 'width' => '240', 'height' => '387'));
		$apublicacion = types_render_field('ano-de-publicacion', array('output' => 'normal'));
		$trailer = types_render_field('trailer', array('output' => 'normal', 'width' => '240'));
		$gallerythumb = explode(',', do_shortcode('[types field="galeria-de-imagenes" separator="," width="100" height="100" url="true"][/types]'));
		$galleryfull = explode(',', do_shortcode('[types field="galeria-de-imagenes" separator="," url="true"][/types]'));
		$sinopsis = types_render_field('sinopsis', array('output' => 'normal'));
		$director = types_render_field('informacion-del-director', array('output' => 'normal'));
		$fartistica = types_render_field('ficha-artistica', array('output' => 'normal'));
		$ftecnica = types_render_field('ficha-tecnica', array('output' => 'normal'));

	endwhile; endif;

?>

<div id="distribution_<?php the_ID() ?>" class="inner">
	<aside>
		<div class="poster"><?php echo $poster ?></div>
		<div class="premier"><span><?php echo $apublicacion ?></span></div>
		<div class="trailer">
			<h2>Trailer</h2>
			<?php echo $trailer ?>
		</div>

		<?php if (count($gallerythumb)>1): ?>
		<div class="gallery">
			<h2>Fotogalería</h2>
			<div class="wrapimg">
			<?php for ($i=0; $i < count($gallerythumb); $i++): ?>
				<a class="fb_group_applied" rel="gallery" href="<?php echo $galleryfull[$i] ?>"><img class="aligncenter" src="<?php echo $gallerythumb[$i] ?>" alt="<?php echo $gallerythumb[$i] ?>"></a>
			<?php endfor; ?>
			</div>
		</div>
	<?php endif; ?>
	</aside>
	<article>
		<h1><?php echo $title ?></h1>
		<div class="content">
			<div class="synopsis">
				<h2>Sinópsis</h2>
				<p><?php echo $sinopsis ?></p>
			</div>
			<?php if ($director!=''): ?>
			<div class="direction">
				<h2>Información del Director</h2>
				<p><?php echo $director ?></p>
			</div>
			<?php endif; ?>
			<?php  if ($fartistica!=''): ?>
			<div class="cast">
				<h2>Ficha Artística</h2>
				<p><?php echo $fartistica ?></p>
			</div>
			<?php endif; ?>
			<div class="technique">
				<h2>Ficha Técnica</h2>
				<p><?php echo $ftecnica ?></p>
			</div>
		</div>
	</article>
</div>

<?php get_footer() ?>