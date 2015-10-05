<?php
get_header('tatuape'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container duvidas-pag">
			<div class="row">
				<div class="col-md-12">
					<div class="wrap-duv">
						<div class="cabecalho-duv clearfix text-left">
							<img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" /><span>Quem treina na unidade Tatuapé, pode treinar na unidade Santa Clara também?</span>
						</div>
						<div class="conteudo-duv tabela text-left" style="display:none">
							Apenas para as pessoas que fecharam o plano anual.
						</div>
					</div>
					<div class="wrap-duv">
						<div class="cabecalho-duv clearfix text-left">
							<img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" /><span>Quanto custa para treinar na Xtreme?</span>
						</div>
						<div class="conteudo-duv tabela text-left" style="display:none">
							Nossa média mensal para fechar um plano anual é a partir de R$ 74.
						</div>
					</div>
					<div class="wrap-duv">
						<div class="cabecalho-duv clearfix text-left">
							<img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" /><span>Posso fazer todas as modalidades que quiser?</span>
						</div>
						<div class="conteudo-duv tabela text-left" style="display:none">
							Sim, para todos os planos.
						</div>
					</div>
					<div class="wrap-duv">
						<div class="cabecalho-duv clearfix text-left">
							<img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" /><span>Tenho auxilio de um personal trainer na Xtreme?</span>
						</div>
						<div class="conteudo-duv tabela text-left" style="display:none">
							O Personal trainer é particular, mas você tem auxílio de um professor especialista.
						</div>
					</div>
					<div class="wrap-duv">
						<div class="cabecalho-duv clearfix text-left">
							<img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" /><span>Posso fazer minha avaliação física na Xtreme?</span>
						</div>
						<div class="conteudo-duv tabela text-left" style="display:none">
							Sim, fazemos avaliação física.
						</div>
					</div>
					<div class="wrap-duv">
						<div class="cabecalho-duv clearfix text-left">
							<img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" /><span>Tem estacionamento?</span>
						</div>
						<div class="conteudo-duv tabela text-left" style="display:none">
							A Xtreme possui estacionamento conveniado e você tem desconto no pagamento do mesmo.
						</div>
					</div>
					<div class="wrap-duv">
						<div class="cabecalho-duv clearfix text-left">
							<img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" /><span>Qual é o endereço da unidade Tatuapé?</span>
						</div>
						<div class="conteudo-duv tabela text-left" style="display:none">
							Ficamos localizado na Rua Coelho Lisboa 675, no Tatuapé.
						</div>
					</div>
					<div class="wrap-duv">
						<div class="cabecalho-duv clearfix text-left">
							<img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" /><span>Como posso dar uma sugestão ou fazer uma reclamação?</span>
						</div>
						<div class="conteudo-duv tabela text-left" style="display:none">
							Envie sua sugestão ou reclamação para ouvidoria@xtremegoldteam.com.br, mantemos sigilo com suas informações.
						</div>
					</div>
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
					<h4>Confira outros vídeos da unidade Tatuapé da Xtreme Gold Team</h4>
				</div>
			</div><!-- .row -->
			<br><br>
			<div class="row">
				<?php 
				$args = array('posts_per_page' => 3,'post_type' => 'videos', 'localidade' => 'tatuape', 'orderby' => 'rand');
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
