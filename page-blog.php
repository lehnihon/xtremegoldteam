<?php
get_header('blog'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row blog-articles">
				<div class="col-md-8">
					<?php putRevSlider( "banner-blog" ) ?>
				</div>
				<div class="col-md-4">
					<aside>
						<ul class="menu-blog text-left">
							<li><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Notícias da Xtreme Gold Team</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Lutas e Treinos</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Musculação e Fitness</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Unidade Tatuapé</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Unidade Santa Clara</span></a></li>
						</ul>
					</aside>
				</div>
			</div><br><br><br>
			<div class="row blog-articles">
				<div class="col-md-8">
					<?php 
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					$fotos= get_category_by_slug('fotos');
					$videos= get_category_by_slug('videos');

					$args = array(
						'post_type' => 'blog',
						'posts_per_page' => 3,
					    'orderby' => 'post_date',
					    'order' => 'DESC',
					    'paged' => $paged);
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>

							<?php

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
							?>

						<?php endwhile; ?>
						<div class="paginacao">
						<?php
						$big = 999999999; // need an unlikely integer
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $query->max_num_pages
						) );
						?>
						</div>
					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
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
