	<section class="sobre">
		<div class="container">
			<div class="textos">
				<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Aut in laborum, quos corrupti omnis ipsum reiciendis? Aspernatur, sequi eius! Nobis veniam eius autem dolores, doloribus deserunt est ex ea voluptatem.</p>
			</div>

			<?php query_posts('post_type=habilidades&post_per_page=-1'); ?>
<ul class="habilidades">
				<?php if(have_posts()): ?>

					<?php while(have_posts()): the_post(); ?>

				<li class="habilidade-<?php the_field('nivel'); ?>">
					<h2>
						<style>
							.<?php the_field('icone'); ?> {
								<?php if(get_field('cor_do_icone')): ?>
									color: <?php the_field('cor_do_icone'); ?>;
								<?php else : ?>
									color: #000;
								<?php endif; ?>
							}
						</style>
						<i class="fa <?php the_field('icone'); ?>"></i> <strong><?php the_title(); ?></strong> // <?php the_field('nivel') ?>0%
						<div class="barra"><span></span></div>
					</h2>
				</li>

				<?php endwhile; ?>

				<?php else : ?>
					Não há habilidades cadastradas...

				<?php endif; ?>

				</ul>

			<?php wp_reset_query(); ?>


			<a href="#" class="botao medio"><i class="fa fa-picture-o"></i> Acessar Portfolio</a>
		</div>
	</section>