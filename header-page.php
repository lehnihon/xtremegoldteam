<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header">
		<?php putRevSlider( "banner-index" ) ?>
		<nav class="menu-aux">
			<div class="container">
				<ul class="redes_sociais_header">
					<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCNkHrw4ujO_bUW7nmrPF1TA"></a></li>
					<li class="instagram"><a target="_blank" href="https://instagram.com/henjioficial"></a></li>
					<li class="twitter"><a target="_blank" href="https://twitter.com/henjioficial"></a></li>
					<li class="facebook"><a target="_blank" href="https://www.facebook.com/henjioficial"></a></li>
				</ul>
			</div><!-- /.container -->
		</nav>
		<nav class="menu-principal" id="menu-principal">
			<div class="container">
				<div class="btn-group botao-menu-responsivo">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."blog/"; ?>">Blog</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."santa-clara/"; ?>">Unidade Santa Clara</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."tatuape/"; ?>">Unidade Tatuapé</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A Xtreme</a></li>	
					</ul>
				</div>
				<span class="pull-left logo-header"><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme1.png"; ?>"/></a></span>

				<ul class="menu-opcoes">
					<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."blog/"; ?>">Blog</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."santa-clara/"; ?>">Unidade Santa Clara</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."tatuape/"; ?>">Unidade Tatuapé</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A Xtreme</a></li>	
				</ul>
			</div><!-- /.container -->
			<?php global $post;
			$slug = get_post( $post )->post_name;
			if(has_category( 'tatuape', $post ) or is_page('tatuape')): 
			?>
			<div class="menu-principal-sub">
				<div class="container">
					<ul class="menu-sub">
						<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Fale Conosco</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."localizacao/"; ?>">Localização</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."fotos/"; ?>">Fotos</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."duvidas/"; ?>">Dúvidas Frequentes</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."horarios/"; ?>">Hórários</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."modalidades/"; ?>">Modalidades</a></li>
						<li><a <?php if($slug == 'tatuape'): echo 'class="ativo"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."tatuape/"; ?>">Unidade Tatuapé</a></li>
					</ul>
				</div>	
			</div>
			<?php 
			elseif(has_category( 'santa-clara', $post ) or is_page('santa-clara')): 
			?>
			<div class="menu-principal-sub">
				<div class="container">
					<ul class="menu-sub">
						<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Fale Conosco</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."localizacao/"; ?>">Localização</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."fotos/"; ?>">Fotos</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."duvidas/"; ?>">Dúvidas Frequentes</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."horarios/"; ?>">Hórários</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."modalidades/"; ?>">Modalidades</a></li>
						<li><a <?php if($slug == 'santa-clara'): echo 'class="ativo"'; endif; ?> href="<?php echo esc_url( home_url( '/' ))."santa-clara/"; ?>">Unidade Santa Clara</a></li>
					</ul>
				</div>	
			</div>
			<?php endif; 
			wp_reset_query();
			?>
		</nav>
		<div class="nav-buttons"></div>
	</header><!-- #header -->
