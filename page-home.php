<?php

// Template Name: Home Page

get_header();

?>

<?php get_template_part( 'template-parts/content', 'banners' ); ?>
<?php get_template_part( 'template-parts/content', 'promociones' ); ?>
<?php get_template_part( 'template-parts/content', 'malestares' ); ?>
<?php get_template_part( 'template-parts/content', 'servicios' ); ?>
<?php get_template_part( 'template-parts/content', 'formulario' ); ?>

<?php get_footer(); ?>
