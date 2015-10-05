<?php
get_header('tatuape'); ?>

<div id="content">
	<section class="secao-a">
		<div class="container modalidades-pag">
			<div class="row">

				<?php get_template_part('template-parts/modalidades-aside-tatuape') ?>

				<main class="col-md-8 text-left">
					<h2>Modalidades da Unidade de Tatuapé</h2>
				</main><!-- #main -->

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<?php get_template_part( 'template-parts/contato'); ?>
	
	<section class="secao-a">
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<h1>Vídeos Xtreme - Unidade Tatuapé</h1>
					<h4>Confira os vídeos da unidade Tatuapé da Xtreme Gold Team</h4>
				</div>
			</div><br><br>
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
</div><!-- #content -->

<?php get_footer(); ?>
