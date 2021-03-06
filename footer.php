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
					<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/academiaxtremegold"></a></li>
					<li class="instagram"><a target="_blank" href="https://instagram.com/xtremegoldteamct/"></a></li>
					<li class="twitter"><a target="_blank" href="https://twitter.com/xtremegoldteam"></a></li>
					<li class="facebook"><a target="_blank" href="https://www.facebook.com/xtremegoldteam"></a></li>
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
				<div class="col-md-2 col-md-offset-1">
					<p><strong>Unidade Tatuapé</strong></p>
					<ul>
					<?php 
						$args = array('posts_per_page' => 10, 'post_type' => 'post', 'localidade' => 'tatuape', 'orderby' => 'rand');
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
					<p><strong>Unidade Santa Clara</strong></p>
					<ul>
					<?php 
						$fotos= get_category_by_slug('fotos');
						$videos= get_category_by_slug('videos');
						$args = array('posts_per_page' => 10, 'post_type' => 'post', 'localidade' => 'santa-clara', 'orderby' => 'rand');
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
					<p><strong>A Xtreme</strong></p>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A Xtreme</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."tatuape/"; ?>">Unidade Tatuapé</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."santa-clara/"; ?>">Unidade Santa Clara</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Fale Conosco</a></li>
					</ul><br>
					<p><strong>Parceiros</strong></p>
					<ul>
						<li><a href="http://www.kvrastore.com/">KVRA Store</a></li>
					</ul>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
		
		<script type="text/javascript">

		/* <![CDATA[ */

		var google_conversion_id = 953853130;

		var google_custom_params = window.google_tag_params;

		var google_remarketing_only = true;

		/* ]]> */

		</script>

		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

		</script>

		<noscript>

		<div style="display:inline;">

		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/953853130/?value=0&amp;guid=ON&amp;script=0"/>

		</div>

		</noscript>


	</footer><!-- #footer -->
	<div class="copyrino">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					&copy; 2016 Xtreme Gold team | <a href="#">Site desenvolvido pelos Marketeiros Digitais</a>
				</div>
				<div class="col-md-2">
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-rino.png"?>" />		
				</div>
			</div>	
		</div>	
	</div>
</div><!-- #page -->
<script>
	var dirbase = "<?php echo dirname( get_bloginfo('stylesheet_url')) ?>";
</script>
<script type="text/javascript" src="<?php echo dirname( get_bloginfo('stylesheet_url')) ?>/js/script-xtreme.js"></script>
<?php wp_footer(); ?>

</body>
</html>
