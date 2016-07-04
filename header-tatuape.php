<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<ul class="redes_sociais_header">
					<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/academiaxtremegold"></a></li>
					<li class="instagram"><a target="_blank" href="https://instagram.com/xtremegoldteamct/"></a></li>
					<li class="twitter"><a target="_blank" href="https://twitter.com/xtremegoldteam"></a></li>
					<li class="facebook"><a target="_blank" href="https://www.facebook.com/xtremegoldteam"></a></li>
				</ul>
			</div><!-- /.container -->
		</nav>
		<nav class="menu-principal pos-fix" id="menu-principal">

			<?php get_template_part( 'template-parts/menu-principal' ); ?>

			<div class="menu-principal-sub">
				<div class="container">
					<ul class="menu-sub">
						<li><a <?php if(is_page('fale-conosco-tatuape')): echo "class='ativo'"; endif; ?>  href="<?php echo esc_url( home_url( '/' ))."fale-conosco-tatuape/"; ?>">Fale Conosco</a></li>
						<li><a <?php if(is_page('localizacao-tatuape')): echo "class='ativo'"; endif; ?> href="<?php echo esc_url( home_url( '/' ))."localizacao-tatuape/"; ?>">Localização</a></li>
						<li><a <?php if(is_page('fotos-tatuape')): echo "class='ativo'"; endif; ?>  href="<?php echo esc_url( home_url( '/' ))."fotos-tatuape/"; ?>">Fotos</a></li>
						<li><a <?php if(is_page('duvidas-tatuape')): echo "class='ativo'"; endif; ?> href="<?php echo esc_url( home_url( '/' ))."duvidas-tatuape/"; ?>">Dúvidas Frequentes</a></li>
						<li><a <?php if(is_page('modalidades-tatuape')): echo "class='ativo'"; endif; ?> href="<?php echo esc_url( home_url( '/' ))."modalidades-tatuape/"; ?>">Modalidades e Horários</a></li>			
						<li><a class="menu-sub-header" href="#">Tatuapé</a></li>
					</ul>
				</div>	
			</div>
			<?php wp_reset_query(); ?>
		</nav>
	</header><!-- #header -->
