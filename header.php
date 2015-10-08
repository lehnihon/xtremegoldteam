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
					<li class="youtube"><a target="_blank" href="#"></a></li>
					<li class="instagram"><a target="_blank" href="#"></a></li>
					<li class="twitter"><a target="_blank" href="#"></a></li>
					<li class="facebook"><a target="_blank" href="#"></a></li>
				</ul>
			</div><!-- /.container -->
		</nav>
		<nav class="menu-principal" id="menu-principal">

			<?php get_template_part( 'template-parts/menu-principal' ); ?>
			
		</nav>
		<div class="nav-buttons"></div>
	</header><!-- #header -->

