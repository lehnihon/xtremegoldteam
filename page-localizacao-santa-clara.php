<?php
get_header('santa-clara'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<h4>Localização da unidade de Santa Clara da Xtreme Gold Team</h4>
					<br><br>
					<div class="videoWrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.8164960745917!2d-46.5641101!3d-23.575033200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5c30a3c18955%3A0x84504872b8ad4291!2sR.+Buen%C3%B3polis%2C+134+-+Vila+Santa+Clara%2C+S%C3%A3o+Paulo+-+SP%2C+03161-010!5e0!3m2!1spt-BR!2sbr!4v1441396999925" width="1170" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><br><br>
					<p><strong>Endereço da unidade Santa Clara:</strong></p>
					<p>Rua Buenópolis, 134 - Santa Clara</p>
					<p>São Paulo - SP</p><br>
					<p><strong>Telefone Xtreme Santa Clara</strong></p>
					<p>11 3554-7555</p>
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
