<section class="secao-sobre">
	<div class="sobre-vf container">
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="sobre-left-top">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme2.png"?>" />
				</div>	
				<div class="sobre-left-bot text-left">
					<div>
						<p><strong>Unidade Tatuapé</strong></p>
						<p>Rua Azevedo Soares, 675 - Tatuapé<br>
							11 3232-1732</p>	
						<br>
						<p><strong>Unidade Santa Clara</strong></p>
						<p>Rua Buenópolis, 134 - Santa Clara<br>
							11 3554-7555</p>							
					</div>		
				</div>			
			</div>
			<div class="col-md-6">
				<div class="sobre-right">
					<h2 class="text-center">Chegou a hora de entrar em forma.</h2><br>
					<p class="text-center"><strong>Preencha o formulário abaixo, que entraremos em contato o mais breve.</strong></p>
					<p><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); } ?></p>
				</div>					
			</div>
		</div>
	</div>
</section>