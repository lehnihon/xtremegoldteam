<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && !is_search() ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
				<?php the_post_thumbnail('home-thumb', array(
					'class' => "e-cinza img-responsive",
				)); ?>
			</a>
		<?php } ?>

		<?php if ( is_single() ) { ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php }
		else { ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
		<?php } // is_single() ?>
	</header> <!-- /.entry-header -->
	
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div> <!-- /.entry-summary -->

</article> <!-- /#post -->