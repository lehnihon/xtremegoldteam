<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header">
		<nav class="menu-aux pos-fix">
			<div class="container">
				<ul class="redes_sociais_header">
					<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCNkHrw4ujO_bUW7nmrPF1TA"></a></li>
					<li class="instagram"><a target="_blank" href="https://instagram.com/henjioficial"></a></li>
					<li class="twitter"><a target="_blank" href="https://twitter.com/henjioficial"></a></li>
					<li class="facebook"><a target="_blank" href="https://www.facebook.com/henjioficial"></a></li>
				</ul>
			</div><!-- /.container -->
		</nav>
		<nav class="menu-principal pos-fix" id="menu-principal">

			<?php get_template_part( 'template-parts/menu-blog' ); ?>
			
		</nav>
	</header><!-- #header -->

