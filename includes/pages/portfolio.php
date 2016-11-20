<section class="portfolio">
	<div class="container">
		
		<?php query_posts('post_type=post'); ?>
		<ul>
			
			<?php while(have_posts()): the_post(); ?>
				<li>
					<figure class="imghvr-hinge-right">
						<img src="<?php the_post_thumbnail_url('portfolio-thumb'); ?>" alt="Thumb">
						<figcaption>
							<a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="roadtrip" data-title="<?php the_content(); ?>">
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
							</a>
							<div class="overlay"></div>
						</figcaption>
					</figure>
				</li>
			<?php endwhile; ?>

		</ul>
		<?php wp_reset_query(); ?>
	</div>
</section>