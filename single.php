<?php
get_header('page'); ?>

<div id="content">
	<div class="container modalidades-pag">
		<div class="row">
			<?php 
			if(has_category( 'tatuape', $post )):
				get_template_part('template-parts/esportes-aside-tatuape');
			else:
				get_template_part('template-parts/esportes-aside-santa-clara');
			endif;
			?>

			<main class="col-md-8 text-left">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<?php endwhile; // End of the loop. ?>
			</main><!-- #main -->

		</div><!-- .row -->
	</div><!-- .container -->

	<?php get_template_part( 'template-parts/contato'); ?>
	
	<section class="secao-a">
		<div class="container">	
			<?php global $post;
			if(has_category( 'tatuape', $post )): 
			?>
				<div class="row">
					<div class="col-md-12">
						<h1>Vídeos Xtreme - Unidade Tatuapé</h1>
						<h4>Confira os vídeos da unidade Tatuapé da Xtreme Gold Team</h4>
					</div>
				</div><br><br>
				<div class="row">
					<?php 
					$args = array('posts_per_page' => 3, 'category_name' => 'videos+tatuape', 'orderby' => 'rand');
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
			<?php
			elseif(has_category( 'santa-clara', $post )): 
			?>
				<div class="row">
					<div class="col-md-12">
						<h1>Vídeos Xtreme - Unidade Santa Clara</h1>
						<h4>Confira os vídeos da unidade Santa Clara da Xtreme Gold Team</h4>
					</div>
				</div><br><br>
				<div class="row">
					<?php 
					$args = array('posts_per_page' => 3, 'category_name' => 'videos+santa-clara', 'orderby' => 'rand');
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
			<?php endif ?>
		</div><!-- .container -->
	</section>
</div><!-- #content -->

<?php get_footer(); ?>
