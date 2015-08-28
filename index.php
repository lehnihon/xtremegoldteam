<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<main id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Xtreme Gold Team</h1>
					<p>Conheça nossas unidades</p>
				</div>
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-6">
					<h2>Academia no Tatuapé</h2>
				</div>
				<div class="col-md-6">
					<h2>Academia na Santa Clara</h2>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<section class="secao-sobre">
		<div class="sobre-vf container">
			<div class="row">
				<div class="col-md-6 sobre-right text-center">
					<img style="display:none" class="fade-effect-a" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-extreme2.png"?>" />
				</div>
				<div class="col-md-6 sobre-left">
					<h1 style="display:none" class="text-center fade-effect-b">V&F Arquitetura e Design de Interiores</h1><br>
					<p style="display:none" class="fade-effect-c"><strong>A V&F Arquitetura surgiu da união entre o arquiteto Renato Furlanis e a designer Vivian Furlanis.</strong></p>
					<p style="display:none" class="fade-effect-d">Formados pela Universidade Anhembi Morumbi e Panamericana de Arte e Design, atuam no mercado de arquitetura e design de interiores, realizando projetos residenciais e comerciais.</p>
					<p style="display:none" class="fade-effect-e">De perfil contemporâneo, procuram criar espaços confortáveis, sofisticados e sobretudo funcionais, predominando a harmonia e elegância, trabalhando sempre com a fantasia e sonho do cliente.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Unidade de Tatuapé</h1>
					<p>Conheça algumas das modalidades que você vai encontrar na academia do Tatuapé</p>
				</div>
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-4">
					<h2>Academia no Tatuapé</h2>
				</div>
				<div class="col-md-4">
					<h2>Academia na Santa Clara</h2>
				</div>
				<div class="col-md-4">
					<h2>Academia na Santa Clara</h2>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
</main><!-- #content -->

<?php get_footer(); ?>
