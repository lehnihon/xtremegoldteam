<?php
/**
 * Template part for displaying posts.
 *
 * @package site
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && !is_search() ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
				<?php the_post_thumbnail('home-thumb', array(
					'class' => "img-responsive",
				)); ?>
			</a>
		<?php } ?>

	</header><!-- .entry-header -->
</article><!-- #post-## -->
