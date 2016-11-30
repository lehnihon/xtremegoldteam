<?php
get_header('sem-banner'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Reclamações e Sugestões</h1>
					<p>Seus relatos são de extreme importância para melhorar e manter a qualidade da nossa academia!</p><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>


</main><!-- #content -->

<?php get_footer(); ?>
