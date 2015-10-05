<aside class="col-md-4">
	<?php 
	$args = array(
		'type'                     => 'post',
		'child_of'                 => 0,
		'parent'                   => '',
		'orderby'                  => 'name',
		'order'                    => 'ASC',
		'hide_empty'               => 1,
		'hierarchical'             => 1,
		'exclude'                  => '',
		'include'                  => '',
		'number'                   => '',
		'taxonomy'                 => 'category',
		'pad_counts'               => false 

	); 
	$categories = get_categories( $args ); 
	foreach($categories as $category):
	?> 
		<div class="wrap-mod">
			<div class="cabecalho-mod clearfix">
				<span><?php echo $category->name?></span><img class="botao-efeito closed img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao-mais.png"?>" />
			</div>
			<div class="conteudo-mod tabela text-left" style="display:none">
				<ul>
				<?php 
					$args = array( 'cat' => $category->term_id, 'localidade' => 'santa-clara');
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