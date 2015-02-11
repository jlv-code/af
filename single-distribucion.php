<?php get_header() ?>

<?php $gallerythumb = explode(',', do_shortcode('[types field="galeria-de-imagenes" separator="," width="100" height="100" url="true"][/types]')) ?>
<?php $galleryfull = explode(',', do_shortcode('[types field="galeria-de-imagenes" separator="," url="true"][/types]')) ?>

<div id="distribution_<?php the_ID() ?>" class="inner">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
	<aside>
		<div class="poster">
			<?php echo types_render_field('poster', array('output' => 'normal', 'width' => '240', 'height' => '387')) ?>
		</div>
		<div class="premier">
			<span><?php echo types_render_field('ano-de-publicacion', array('output' => 'normal')) ?></span>
		</div>
		<div class="trailer">
			<h2>Trailer</h2>
			<?php echo types_render_field('trailer', array('output' => 'normal', 'width' => '240')) ?>
		</div>
		<div class="gallery">
			<h2>Fotogalería</h2>
			<div class="wrapimg">
			<?php for ($i=0; $i < count($gallerythumb); $i++): ?>
				<a class="fb_group_applied" rel="gallery" href="<?php echo $galleryfull[$i] ?>"><img class="aligncenter" src="<?php echo $gallerythumb[$i] ?>" alt="<?php echo $gallerythumb[$i] ?>"></a>
			<?php endfor; ?>
			</div>
		</div>
	</aside>
	<article>
		<h1><?php the_title() ?></h1>
		<div class="content">
			<div class="synopsis">
				<h2>Sinópsis</h2>
				<p><?php echo types_render_field('sinopsis', array('output' => 'normal')) ?></p>
			</div>
			<div class="direction">
				<h2>Información del Director</h2>
				<p><?php echo types_render_field('informacion-del-director', array('output' => 'normal')) ?></p>
			</div>
			<div class="cast">
				<h2>Ficha Artística</h2>
				<p><?php echo types_render_field('ficha-artistica', array('output' => 'normal')) ?></p>
			</div>
			<div class="technique">
				<h2>Ficha Técnica</h2>
				<p><?php echo types_render_field('ficha-tecnica', array('output' => 'normal')) ?></p>
			</div>
		</div>
	</article>
	<?php endwhile; endif; ?>
</div>

<?php get_footer() ?>