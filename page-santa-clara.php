<?php
get_header('santa-clara'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Unidade de Santa Clara</h1>
					<h4>Conheça algumas das modalidades que você vai encontrar na academia de Santa Clara</h4>
				</div>
			</div><!-- .row -->
			<br><br>
			<div class="row">

				<?php 
					$fotos= get_category_by_slug('fotos');
					$videos= get_category_by_slug('videos');
				?>
				<?php 
				$args = array('posts_per_page' => 3, 'category_name' => 'tatuape', 'category__not_in' => array($fotos->term_id,$videos->term_id), 'orderby' => 'rand');
				$query = new WP_Query( $args ); 
				?>	

				<?php if ( $query->have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-md-4">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="entry-header">
									<?php if ( has_post_thumbnail() && !is_search() ) { ?>
										<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
											<?php the_post_thumbnail('home-thumb-quadrado', array(
												'class' => "img-responsive",
											)); ?>
										</a>
									<?php } ?>
								</div><!-- .entry-header -->
								<div class="entry-content">
									<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
									<?php
										the_excerpt();
									?>
									<a class="saiba-mais" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
										saiba+
									</a>									
								</div>
							</article><!-- #post-## -->
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	
	<?php get_template_part( 'template-parts/contato'); ?>

	<section class="secao-a">
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<h1>Vídeos Xtreme</h1>
					<h4>Confira outros vídeos da unidade Santa Clara da Xtreme Gold Team</h4>
				</div>
			</div><!-- .row -->
			<br><br>
			<div class="row">
				<?php 
				$args = array('posts_per_page' => 3, 'category_name' => 'videos', 'orderby' => 'rand');
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
