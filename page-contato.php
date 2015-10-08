<?php
get_header('sem-banner'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h4>Contato</h4>
					<p>Envie suas dúvidas ou sugestões, responderemos em breve!</p>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); } ?>
				</div>
				<div class="col-md-6 text-left">
					<p><strong>Unidade Tatuapé</strong> </p>
					<p>Rua Coelho Lisboa, 675 - Tatuapé</p>
					<p>São Paulo - SP</p>
					<p>11 3232-1732</p><br>
					<p><strong>Unidade Santa Clara</strong> </p>
					<p>Rua Buenópolis, 134 - Santa Clara</p>
					<p>São Paulo - SP</p>
					<p>11 3554-7555</p><br>
					<p><strong>Reclamações</strong> </p>
					<p>ouvidoria@xtremegoldteam.com.br</p>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

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
