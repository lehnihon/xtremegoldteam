<aside class="col-md-4">
	<?php 
	$Esportes = get_category_by_slug( 'esportes' );
	$categories = get_categories(array('child_of' => $Esportes->term_id, 'hide_empty'=> 0));
	foreach($categories as $category):
	?> 
		<div class="wrap-mod">
			<div class="cabecalho-mod clearfix">
				<span><?php echo $category->name?></span><img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" />
			</div>
			<div class="conteudo-mod tabela text-left" style="display:none">
				<ul>
				<?php 
					$args = array( 'cat' => $category->term_id);
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li>
								<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>								
							</li>
						<?php endwhile; ?>
					<?php endif; ?>						
				</ul>
			</div>
		</div>
	<?php endforeach;
	wp_reset_query();
	?>		
</aside>