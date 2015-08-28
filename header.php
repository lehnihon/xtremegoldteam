<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
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
						<li><a href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A HENJI</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."/produtos/"; ?>">PRODUTOS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."parceiros/"; ?>">PARCEIROS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."blog/"; ?>">BLOG</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">CONTATO</a></li>
					</ul>
				</div>
		    	<span class="pull-left logo-header"><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme1.png"; ?>"/></a></span>

				<ul class="menu-opcoes">
					<li><a href="<?php echo esc_url( home_url( '/' ))."sobre/"; ?>">A HENJI</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."/produtos/"; ?>">PRODUTOS</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."parceiros/"; ?>">PARCEIROS</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."blog/"; ?>">BLOG</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">CONTATO</a></li>
				</ul>
		  </div><!-- /.container -->
		</nav>
	</header><!-- #header -->

