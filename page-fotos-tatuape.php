<?php
get_header('tatuape'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container duvidas-pag">
			<div class="row text-left">
				<div class="col-md-12">
					<h4>Fotos da unidade Tatuapé da Xtreme Gold Team.</h4>
					<p>Confira as fotos da nossa unidade que fica no bairro de Tatuapé, bem próximo do shopping Anália Franco e do mêtro Tatuapé.</p>
				</div>
			</div><!-- .row --><br><br>
			<?php 
			$args = array('posts_per_page' => 1,'post_type' => 'fotos', 'localidade' => 'tatuape');
			$query = new WP_Query( $args ); 
			?>	
			<?php if ( $query->have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="row text-left">
					<div class="col-md-12">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php
									the_content();
								?>									
							</div>
						</article><!-- #post-## -->
					</div>
				</div><!-- .row -->
				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/contato'); ?>

	<section class="secao-a">
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<h1>Vídeos Xtreme</h1>
					<h4>Confira outros vídeos da unidade Tatuapé da Xtreme Gold Team</h4>
				</div>
			</div><!-- .row -->
			<br><br>
			<div class="row">
				<?php 
				$args = array('posts_per_page' => 3, 'post_type' => 'videos', 'localidade' => 'tatuape', 'orderby' => 'rand');
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
