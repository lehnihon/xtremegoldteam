<?php
get_header('page'); ?>

<div id="content">
	<div class="container">
		<div class="row">
			<aside class="col-md-4">
				<div class="cabecalho-mod clearfix">
					<span class="pull-left">Modalidades</span><img class="botaoa closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" />
				</div>
				<div class="conteudo-mod tabelaa" style="display:none">
					<ul>
					<?php 
						$args = array('posts_per_page' => 10, 'category_name' => 'tatuape', 'orderby' => 'rand');
						$query = new WP_Query( $args ); 
						?>	

						<?php if ( $query->have_posts() ) : ?>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<li>
									<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>								
								</li>
							<?php endwhile; ?>
						<?php endif; 
						wp_reset_query();
						?>						
					</ul>
				</div>
			</aside>
			<main class="col-md-8">

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
