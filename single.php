<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hoppycharlie
 */

get_header();
?>

<!-- MAIN CONTENT
================================================== -->
<div class="container">
	<div class="row" id="primary">

		<main id="content" class="col-sm-8">

		<?php
		while ( have_posts() ) :
			the_post();

			$categoria_post_princ = get_the_category();
			//echo get_category_parents( $categoria_post, true, ' &raquo; ' );

		 	$parentcat = get_cat_name($categoria_post_princ[0]->category_parent);
			$categoria_post = $categoria_post_princ[0]->cat_name;
			$categoria_post = strtolower($categoria_post);
			$parentcat = strtolower($parentcat);

			//get_template_part( 'template-parts/content', get_post_type() );
			//echo $categoria_post_princ[0]->category;
			
			if($parentcat == 'padecimientos'){
					get_template_part( 'template-parts/content', 'padecimientos' );
			}
			else if($categoria_post == 'especialidades'){
					get_template_part( 'template-parts/content', 'especialidades' );
			}
			else{

			}



			//


			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #content -->



	</div><!-- #primary -->
</div><!-- #container -->

<?php

get_footer();
