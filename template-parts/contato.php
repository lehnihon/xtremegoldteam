<section class="secao-sobre">
	<div class="sobre-vf container">
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="sobre-left-top">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme2.png"?>" />
				</div>	
				<div class="sobre-left-bot text-center">
					<div>
						<p><strong style="font-size:16px">Unidade Tatuapé</strong></p>
						<p>Rua Coelho Lisboa, 675 - Tatuapé<br>
							11 3232-1732</p>	
						<br>
						<p><strong style="font-size:16px">Unidade Santa Clara</strong></p>
						<p>Rua Buenópolis, 134 - Santa Clara<br>
							11 3554-7555</p>							
					</div>		
				</div>			
			</div>
			<div class="col-md-6">
				<div class="sobre-right">
					<h3 class="text-center">Agende sua visita e participa da promoção.</h3><br>
					<div class="text-center"><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); } ?></div>
				</div>					
			</div>
		</div>
	</div>
</section>