<div class="container">
	<div class="btn-group botao-menu-responsivo">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
		</button>
		<ul class="dropdown-menu">
			<li><a <?php if(is_page('sobre')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A Xtreme</a></li>
			<li><a <?php if(is_page('tatuape')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."tatuape/"; ?>">Unidade Tatuapé</a></li>
			<li><a <?php if(is_page('santa-clara')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."santa-clara/"; ?>">Unidade Santa Clara</a></li>
			<li><a href="<?php echo esc_url( home_url( '/' ))."blog/"; ?>">Blog</a></li>
			<li><a <?php if(is_page('contato')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
		</ul>
	</div>
	<span class="pull-left logo-header"><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme1.png"; ?>"/></a></span>

	<ul class="menu-opcoes">
		<li><a <?php if(is_page('contato')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ))."blog/"; ?>">Blog</a></li>
		<li><a <?php if(is_page('santa-clara')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."santa-clara/"; ?>">Unidade Santa Clara</a></li>
		<li><a <?php if(is_page('tatuape')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."tatuape/"; ?>">Unidade Tatuapé</a></li>
		<li><a <?php if(is_page('sobre')): echo 'class="ativob"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A Xtreme</a></li>			
	</ul>
</div><!-- /.container -->

