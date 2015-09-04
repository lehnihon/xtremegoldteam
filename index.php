<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Xtreme Gold Team</h1>
					<h4>Conheça nossas unidades</h4>
				</div>
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-6">
					<h2>Academia no Tatuapé</h2>
					<?php 
					$args = array('posts_per_page' => 1, 'category_name' => 'tatuape+fotos', 'orderby' => 'rand');
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php if ( has_post_thumbnail() && !is_search() ) { ?>
										<a href="<?php echo esc_url( home_url( '/' ))."fotos-tatuape/"; ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
											<?php the_post_thumbnail('home-thumb-paisagem', array(
												'class' => "img-responsive",
											)); ?>
										</a>
									<?php } ?>

								</header><!-- .entry-header -->
							</article><!-- #post-## -->
						<?php endwhile; ?>
					<?php endif; ?>
					<div class="detalhes-unidade text-left clearfix">
						<div class="detalhe-unidade-esq">
							<p><strong>Unidade Tatuapé</strong></p>
							<p>Rua Coelho Lisboa, 675 - Tatuapé<br>
								11 3232-1732</p>
						</div>
						<div class="detalhe-unidade-dir">
							<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h2>Academia na Santa Clara</h2>
					<?php 
					$args = array('posts_per_page' => 1, 'category_name' => 'santa-clara+fotos', 'orderby' => 'rand');
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php if ( has_post_thumbnail() && !is_search() ) { ?>
										<a href="<?php echo esc_url( home_url( '/' ))."fotos-santa-clara/"; ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
											<?php the_post_thumbnail('home-thumb-paisagem', array(
												'class' => "img-responsive",
											)); ?>
										</a>
									<?php } ?>

								</header><!-- .entry-header -->
							</article><!-- #post-## -->
						<?php endwhile; ?>
					<?php endif; ?>
					<div class="detalhes-unidade text-left clearfix">
						<div class="detalhe-unidade-esq">
							<p><strong>Unidade Santa Clara</strong></p>
							<p>Rua Buenópolis, 134 - Santa Clara<br>
								11 3554-7555</p>
						</div>
						<div class="detalhe-unidade-dir">
							<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/>
						</div>
					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<section class="secao-sobre">
		<div class="sobre-vf container">
			<div class="row">
				<div class="col-md-6 text-center">
					<div class="sobre-left-top">
						<img style="display:none" class="fade-effect-a" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme2.png"?>" />
					</div>	
					<div class="sobre-left-bot text-left">
						<div class="fade-effect-b" style="display:none">
							<p><strong>Unidade Tatuapé</strong></p>
							<p>Rua Azevedo Soares, 675 - Tatuapé<br>
								11 3232-1732</p>	
							<br>
							<p><strong>Unidade Santa Clara</strong></p>
							<p>Rua Buenópolis, 134 - Santa Clara<br>
								11 3554-7555</p>							
						</div>		
					</div>			
				</div>
				<div class="col-md-6">
					<div class="sobre-right">
						<h2 style="display:none" class="text-center fade-effect-c">Chegou a hora de entrar em forma.</h2><br>
						<p style="display:none" class="fade-effect-c"><strong>Preencha o formulário abaixo, que entraremos em contato o mais breve.</strong></p>
						<p style="display:none" class="fade-effect-d">formulario</p>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<section class="secao-a">
		<div class="container modalidades">
			<div class="row">
				<div class="col-md-12">
					<h1>Unidade de Tatuapé</h1>
					<h4>Conheça algumas das modalidades que você vai encontrar na academia do Tatuapé</h4>
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
	<section class="secao-b">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens.png"?>" />
				</div>
			</div>
		</div>
	</section>
	<section class="secao-a">
		<div class="container modalidades">
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
				$args = array('posts_per_page' => 3, 'category_name' => 'santa-clara', 'category__not_in' => array($fotos->term_id,$videos->term_id), 'orderby' => 'rand');
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
		</div><br><br>
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
