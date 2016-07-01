<?php
get_header('sem-banner'); ?>

<main id="content">
	<section class="secao-a freepass">
		<div class="container">
			<div class="row fundo">
				<div class="col-md-8 col-md-offset-2 text-center">
					<img  class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-freepass.png"; ?>"/>
				</div>
			</div><!-- .row --><br><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<h1>Chegou a hora de entrar em forma.</h1>
					<h4>Prencha o formulário abaixo e garanta o seu Free Pass agora mesmo! </h4><br>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 19 ); } ?>
				</div>
			</div><!-- .row --><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<h4>Regras gerais para o uso do Free Pass da Xtreme Gold Team</h4><br>
					<p>
						O FreePass da Xtreme Gold Team tem validade de 15 dias a partir da emissão. A ativação ocorre apenas mediante a apresentação de documento com foto para cadastro na recepção da unidade Tatuapé. O Free Pass e é válido para ser usado durante 7 dias consecutivos na unidade Tatuapé da Xtreme Gold Team.
					</p>
					<p>
						É concedido apenas 1 (um) Free Pass por CPF. Ação não cumulativa. Deve-se ter pelo menos 18 anos de idade ou ir acompanhado por responsável legal para usufruir do
						benefício. O usuário deve assinar o termo de responsabilidade na primeira visita e fazer um cadastro na recepção da unidade Tatuapé da Xtreme Gold Team.
					</p>
					<p>
						Não válido para revenda ou transferência, o mesmo não é concedido para clientes. Nenhum valor em dinheiro está envolvido. A oferta pode expirar sem aviso prévio. O usuário só poderá fazer uma nova emissão após 90 dias da última visita a Xtreme Gold Team.
					</p>
					<p>
						<strong>O aluno da Xtreme Gold Team também pode participar da promoção Free Pass Xtreme, basta indicar um amigo (não aluno) para usar o Free Pass, caso o amigo indicado faça a matrícula na academia em até 30 dias após o uso do Free Pass, o aluno que indicou ganha mais 1 (um) mês de graça em seu plano atual.</strong>
					</p>
					<p>
						Ao fornecer suas informações de contato pessoal, você está dando seu consentimento expresso para ser contatado e/ou receber comunicação de marketing por e-mail, mala direta, telefone, mensagem de texto, mensagens instantâneas e outros meios em nome da Xtreme Gold Team.
					</p>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
</main><!-- #content -->

<?php get_footer(); ?>
