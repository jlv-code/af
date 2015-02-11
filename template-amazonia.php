<?php /* Template Name: Página Amazonia */ ?>
<?php get_header() ?>

<div class="inner">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
	<h1><?php the_title() ?></h1>
	<section>
		<div class="content">
			<div class="us">
				<span>¿Quienes Somos?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat risus id sem vehicula volutpat. Sed nulla velit, aliquet interdum dignissim quis, fermentum non augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat risus id sem vehicula volutpat. Sed nulla velit, aliquet interdum dignissim quis, fermentum non augue</p>
			</div>
			<div class="filosophy">
				<div class="mission">
					<span>Misión</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat risus id sem vehicula volutpat. Sed nulla velit, aliquet interdum dignissim quis, fermentum non augue</p>
				</div>
				<div class="vision">
					<span>Visión</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat risus id sem vehicula volutpat. Sed nulla velit, aliquet interdum dignissim quis, fermentum non augue</p>
				</div>
				<div class="values">
					<span>Valores</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat risus id sem vehicula volutpat. Sed nulla velit, aliquet interdum dignissim quis, fermentum non augue</p>
				</div>
			</div>
			<div class="contact">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3923.1043591186935!2d-66.831426!3d10.492439000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a59caa10f371d%3A0xef3ed9bf513fc293!2sDistribuidora+Nacional+de+Cine+Amazonia+Films!5e0!3m2!1ses-419!2sve!4v1419915049845" width="600" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="info">
					<span>Información de Contácto</span>
					<p>Avenida 1, Edificion Amazonia Films</p>
					<p>Caracas - Venezuela</p>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
</div>

<?php get_footer() ?>