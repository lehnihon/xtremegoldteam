<?php
/**
 * Template part for displaying single posts.
 *
 * @package site
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && !is_search() ) { ?>
			<?php the_post_thumbnail('detalhes', array(
				'class' => "img-responsive",
			)); ?>
		<?php } ?>
		<div class="slider1">	
		<?php
	    if ( get_post_gallery() ) :
	    $gallery = get_post_gallery( get_the_ID(), false );
	        foreach( $gallery['src'] as $src ) : 
		?>
			<div class="slide"><a data-lightbox="prod" href="<?php echo $src; ?>"><img src="<?php echo $src; ?>"></a></div>
		<?php
            endforeach;
        endif;
		?>
		</div>		
		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php echo strip_shortcodes(wpautop( get_the_content() )); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<script>
$('.slider1').bxSlider({
    slideWidth: 200,
    minSlides: 2,
    maxSlides: 4,
    infiniteLoop: false,
    slideMargin: 10,
    controls:false,
	onSliderLoad: function(){
	    $(".bx-clone").children().removeAttr("data-lightbox");
	}
});

</script>
