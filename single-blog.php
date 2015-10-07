<?php
get_header('blog'); ?>
</header><!--#header-->
<div id="content">
	<section class="secao-a">
		<div class="container">
			<div class="row blog-articles">
				<div class="col-md-8">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>	
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
