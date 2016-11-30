<?php
get_header('sem-banner'); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Chegou a hora de entrar em forma.</h1>
					<p>Prencha o formulário abaixo e agenda sua aula experimental agora mesmo! </p><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 22 ); } ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

</main><!-- #content -->

<?php get_footer(); ?>
