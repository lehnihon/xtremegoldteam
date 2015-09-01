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

			<?php get_template_part( 'template-parts/menu-principal' ); ?>

			<div class="menu-principal-sub">
				<div class="container">
					<ul class="menu-sub">
						<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Fale Conosco</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."localizacao/"; ?>">Localização</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."fotos/"; ?>">Fotos</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."duvidas/"; ?>">Dúvidas Frequentes</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."modalidades-santa-clara/"; ?>">Hórários</a></li>
						<li><a <?php if(is_page('modalidades-santa-clara')): echo "class='ativo'"; endif; ?> href="<?php echo esc_url( home_url( '/' ))."modalidades-santa-clara/"; ?>">Modalidades</a></li>
						<li><a class="menu-sub-header" href="#">Santa Clara</a></li>
					</ul>
				</div>	
			</div>
			<?php wp_reset_query(); ?>
		</nav>
		<div class="nav-buttons"></div>
	</header><!-- #header -->
