<?php
get_header('tatuape'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h4>Fale Conosco | Unidade Tatuapé</h4>
					<p>Envie suas dúvidas ou sugestões, responderemos em breve!</p>
					<p>form</p>
				</div>
				<div class="col-md-6 text-left">
					<div class="videoWrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.512220262545!2d-46.571646100000045!3d-23.5500402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e968b7599f7%3A0xdcd2807d8e528abe!2sR.+Coelho+Lisboa%2C+675+-+Tatuap%C3%A9%2C+S%C3%A3o+Paulo+-+SP%2C+03323-040!5e0!3m2!1spt-BR!2sbr!4v1441396493804" width="585" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><br>
					<p><strong>Unidade Tatuapé</strong> </p>
					<p>Rua Coelho Lisboa, 675 - Tatuapé</p>
					<p>São Paulo - SP</p>
					<p>11 3232-1732</p><br>
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
