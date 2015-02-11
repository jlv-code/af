<?php get_header() ?>

<div class="inner">
	<div id="slider" class="slider">
		<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
	</div>
	<div class="distributions">
		<div class="lastest-movies">
			<div class="inner">
				<?php $d = new WP_Query(array('post_type' => 'distribucion', 'posts_per_page' => '6',)); ?>
				<?php if ($d->have_posts()): while ($d->have_posts()): $d->the_post(); ?>
				<div class="movie">
					<div class="inner-movie">
						<?php echo types_render_field("poster", array('output' => 'normal', 'width' => '155', 'height' => '250')) ?>
						<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
						<span><?php echo types_render_field("ano-de-publicacion", array('output'=>'raw')); ?></span>
					</div>
				</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<div class="general-info">
		<div class="lastest-news">
			<div class="inner">
				<?php $args = array ('category_name' => 'noticias', 'posts_per_page' => '2',) ?>
				<?php $query = new WP_Query( $args ) ?>
				<?php if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post() ?>
				<div class="post">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('240x180') ?></a>
					<span><?php the_time('j/m/Y') ?></span>
					<a class="title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
				</div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata() ?>
			</div>
		</div>
		<div class="social">
			<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/amazoniafilms" data-widget-id="549400618809716736">Tweets por el @amazoniafilms.</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
	</div>
</div>

<?php get_footer() ?>