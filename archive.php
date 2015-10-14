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
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/noticias'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Notícias da Xtreme Gold Team</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/lutas-treinos'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Lutas e Treinos</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/musculacao-fitness'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Musculação e Fitness</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/tatuape'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Unidade Tatuapé</span></a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )).'categoria-blog/santa-clara'; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>"/><span>Unidade Santa Clara</span></a></li>
						</ul>
					</aside>
				</div>
			</div><br><br><br>
			<div class="row blog-articles">
				<div class="col-md-8">

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>
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
