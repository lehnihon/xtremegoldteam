<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="usse4VgqPcst66cKY_G5zefAoj03phScqcpeOpcqD8Q" />

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54638902-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header">
		<nav class="menu-aux pos-fix">
			<div class="container">
				<span class="pull-left logo-header"><a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme1.png"; ?>"/></a></span>
			</div><!-- /.container -->
		</nav>
		<nav class="menu-principal pos-fix" id="menu-principal">

			<?php get_template_part( 'template-parts/menu-principal' ); ?>

			<div class="menu-principal-sub">
				<div class="container">
					<ul class="menu-sub">
						<li><a <?php if(is_page('fale-conosco-santa-clara')): echo "class='ativo'"; endif; ?> href="<?php echo esc_url( home_url( '/' ))."fale-conosco-santa-clara/"; ?>">Fale Conosco</a></li>
						<li><a <?php if(is_page('localizacao-santa-clara')): echo "class='ativo'"; endif; ?> href="<?php echo esc_url( home_url( '/' ))."localizacao-santa-clara/"; ?>">Localização</a></li>
						<li><a <?php if(is_page('fotos-santa-clara')): echo "class='ativo'"; endif; ?>  href="<?php echo esc_url( home_url( '/' ))."fotos-santa-clara/"; ?>">Fotos</a></li>
						<li><a <?php if(is_page('duvidas-santa-clara')): echo "class='ativo'"; endif; ?> href="<?php echo esc_url( home_url( '/' ))."duvidas-santa-clara/"; ?>">Dúvidas Frequentes</a></li>
						<li><a <?php if(is_page('modalidades-santa-clara')): echo "class='ativo'"; endif; ?> href="<?php echo esc_url( home_url( '/' ))."modalidades-santa-clara/"; ?>">Modalidades e Horários</a></li>
						<li><a class="menu-sub-header" href="#">Santa Clara</a></li>
					</ul>
				</div>	
			</div>
			<?php wp_reset_query(); ?>
		</nav>
	</header><!-- #header -->
