<div class="container">
	<div class="btn-group botao-menu-responsivo">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
		</button>
		<ul class="dropdown-menu">
			<li><a <?php if(is_page('sobre')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A Xtreme</a></li>
			<li><a <?php if(is_page('contato')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Reclamações e Sugestões</a></li>
			<li><a href="<?php echo esc_url( home_url( '/' ))."freepass/"; ?>">FreePass</a></li>
			<li><a <?php if(is_page('agendamento')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."agendamento/"; ?>">Agendar Aula Experimental</a></li>
			<li><a <?php if(is_page('tatuape')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."tatuape/"; ?>">Unidade Tatuapé</a></li>
			<li><a <?php if(is_page('santa-clara')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."santa-clara/"; ?>">Unidade Santa</a></li>
		</ul>
	</div>

	<ul class="menu-opcoes">
		<li class="esq"><a <?php if(is_page('sobre')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A Xtreme</a></li>
		<li class="esq"><a <?php if(is_page('contato')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Reclamações e Sugestões</a></li>
		<li class="esq"><a <?php if(is_page('agendamento')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."agendamento/"; ?>">Agendar Aula Experimental</a></li>
		<li class="esq"><a href="<?php echo esc_url( home_url( '/' ))."freepass/"; ?>">FreePass</a></li>
		<li class="dir"><a <?php if(is_page('santa-clara')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."santa-clara/"; ?>">Unidade Santa Clara</a></li>
		<li class="dir"><a <?php if(is_page('tatuape')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."tatuape/"; ?>">Unidade Tatuapé</a></li>
	</ul>
</div><!-- /.container -->

