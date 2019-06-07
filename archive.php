<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoppycharlie
 */

get_header();
?>

<div class="malestares">
<div class="container clearfix">


		<?php if ( have_posts() ) : ?>

			<div class="row">
					<div class="col-md-12">
				<?php
				the_archive_title( '<h3 class="page-title">', '</h3>' );
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
					</div>
				</div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );
				get_template_part( 'template-parts/content', 'categorias' );
				

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>



	</div><!-- #main -->




</div><!-- #primary -->

<?php

get_footer();
