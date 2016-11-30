<section class="secao-sobre">
	<div class="sobre-vf container">
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="sobre-left-top">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme2.png"?>" />
				</div>	
			</div>
			<div class="col-md-6">
				<div class="sobre-right">
					<h2 class="text-center">Agende sua visita!</h2>
					<p class="text-center">Prencha o formulário abaixo e agende sua visita agora!</p>
					<div class="text-left"><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); } ?></div>
				</div>					
			</div>
		</div>
	</div>
</section>