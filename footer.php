<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Xtreme Gold Team nas redes sociais</h1>
				<h4>Acompanhe a Xtreme nas redes sociais e confira todas as nossas novidades.</h4>
			</div>
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-12">
				<ul class="redes_sociais_bot">
					<li class="youtube"><a target="_blank" href="#"></a></li>
					<li class="instagram"><a target="_blank" href="#"></a></li>
					<li class="twitter"><a target="_blank" href="#"></a></li>
					<li class="facebook"><a target="_blank" href="#"></a></li>
				</ul>		
			</div>
		</div><!-- .row -->
	</div><br><br><br><br>
	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme3.png"?>" />
					<br>
					<p><strong>Xtreme Gold Team</strong></p>
					<p>A Xtreme Gold Team tem o objetivo de proporcionar aos seus alunos bem estar, saúde e qualidade de vida.<br>
						Atualmente, a academia conta com duas unidades, uma no bairro do Tatuapé e a outra no bairro da Santa Clara,
					 ambas na capital paulista.</p>
					 <p>São equipadas com o que há de mais moderno em sua linha de aparelhos, disponibilizando aos seus alunos um ambiente 
					 	descontraído, sofisticado, com atendimento diferenciado e com várias opções de treinamento para toda a família.</p>
				</div>
				<div class="col-md-3">
					<p><strong>Unidade Tatuapé</strong></p>
					<ul>
					<?php 
						$fotos= get_category_by_slug('fotos');
						$videos= get_category_by_slug('videos');
						$args = array('posts_per_page' => 10, 'category_name' => 'tatuape', 'category__not_in' => array($fotos->term_id,$videos->term_id), 'orderby' => 'rand');
						$query = new WP_Query( $args ); 
						?>	

						<?php if ( $query->have_posts() ) : ?>
							<?php /* Start the Loop */ ?>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<li>
											<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>								
										</li>
							<?php endwhile; ?>
						<?php endif; ?>						
					</ul>
				</div>
				<div class="col-md-3">
					<p><strong>Unidade Santa Clara</strong></p>
					<ul>
					<?php 
						$fotos= get_category_by_slug('fotos');
						$videos= get_category_by_slug('videos');
						$args = array('posts_per_page' => 10, 'category_name' => 'santa-clara', 'category__not_in' => array($fotos->term_id,$videos->term_id), 'orderby' => 'rand');
						$query = new WP_Query( $args ); 
						?>	

						<?php if ( $query->have_posts() ) : ?>
							<?php /* Start the Loop */ ?>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<li>
											<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>								
										</li>
							<?php endwhile; ?>
						<?php endif; ?>						
					</ul>
				</div>
				<div class="col-md-2">
					<ul>
						<li>A Xtreme</li>
						<li>A Xtreme</li>
						<li>A Xtreme</li>
						<li>A Xtreme</li>
						<li>A Xtreme</li>
						<li>A Xtreme</li>
					</ul>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #footer -->
	<div class="copyrino">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					&copy; 2015 Xtreme Gold team | <a href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
				</div>
				<div class="col-md-2">
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-rino.png"?>" />		
				</div>
			</div>	
		</div>	
	</div>
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	var dirbase = "<?php echo dirname( get_bloginfo('stylesheet_url')) ?>";
</script>
<script type="text/javascript" src="<?php echo dirname( get_bloginfo('stylesheet_url')) ?>/js/script-xtreme.js"></script>
<?php wp_footer(); ?>

</body>
</html>
