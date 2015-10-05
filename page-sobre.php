<?php
get_header('sem-banner');  ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>A Xtreme Gold Team</h1>
				</div>
			</div><!-- .row --><br><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p>A Xtreme Gold Team foi fundada em fevereiro de 2003 pelo lutador de Jiu Jitsu Fabiano Victorino, conhecido como "Pedra", com o ojetivo de proporcionar aos seus alunos bem estar, saúde e qualidade de vida.</p>					
					<p>Atualmente, a academia conta com duas unidades, uma no bairro do Tatuapé e a outra no bairro da Santa Clara, ambas na capital paulista.</p>
					<p>As duas unidades são equipadas com o que há de mais moderno em sua linha de aparelhos, disponibilizando aos seus alunos um ambiente descontraído, sofisticado, com atendimento diferenciado e com varias opções de treinamento para toda a família.</p>
					<p>A Xtreme Gold Team também oferece aos seus alunos um completo centro de lutas, equipados com tatames e um octógono para a prática de MMA.</p>
					<p>Uma das grandes novidades é o novo centro de treinamento de Cross Training, equipado com as útlimas novidades do mundo do fitness.</p>
					<p>Venha para Xtreme Gold Team e experimente a sensação de estar de bem com a vida.</p>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/contato'); ?>

	<section class="secao-a">
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<h1>Vídeos Xtreme</h1>
					<h4>Confira outros vídeos e conheça um pouco mais sobre a Xtreme</h4>
				</div>
			</div><!-- .row -->
			<br><br>
			<div class="row">
				<?php 
				$args = array('posts_per_page' => 3, 'post_type' => 'videos', 'orderby' => 'rand');
				$query = new WP_Query( $args ); 
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-md-4">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="entry-content videoWrapper">
									<?php
										the_content();
									?>									
								</div>
							</article><!-- #post-## -->
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
</main><!-- #content -->

<?php get_footer(); ?>
