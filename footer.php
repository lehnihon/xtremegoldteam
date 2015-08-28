<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'site' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'site' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'site' ), 'site', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #footer -->
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo dirname( get_bloginfo('stylesheet_url')) ?>/js/script-xtreme.js"></script>
<?php wp_footer(); ?>

</body>
</html>
