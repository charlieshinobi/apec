<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoppycharlie
 */

$que_titulo   = get_field('que_titulo');
$que_descripcion   = get_field('que_descripcion');
$sintomas_titulo   = get_field('sintomas_titulo');
$sintomas_descripcion   = get_field('sintomas_descripcion');
$factores_titulo   = get_field('factores_titulo');
$factores_descripcion   = get_field('factores_descripcion');
$tipos_titulo   = get_field('tipos_titulo');
$tipos_descripcion   = get_field('tipos_descripcion');
$diagnostico_titulo   = get_field('diagnostico_titulo');
$diagnostico_descripcion   = get_field('diagnostico_descripcion');
$tratamiento_titulo   = get_field('tratamiento_titulo');
$tratamiento_descripcion   = get_field('tratamiento_descripcion');

?>

<div class="container clearfix">

	<div class="row padecimientos">
		<div class="col-md-6 bkg-padecimientos">
			PADECIMIENTOS <br>FRECUENTES<br>
			<?php the_title( '<h3 class="entry-title">', '</h1>' ); ?>
		</div>

		<div class="col-md-6 img-padecimientos">
			<?php if (has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
		</div>

	</div>

	<div class="row">


		<div class="col-md-12">
			<h3><?php echo $que_titulo; ?></h3>
			<?php echo $que_descripcion; ?>
		</div>
		<div class="col-md-12">
			<h3><?php echo $sintomas_titulo; ?></h3>
			<?php echo $sintomas_descripcion; ?>
		</div>
		<div class="col-md-12">
			<h3><?php echo $factores_titulo; ?></h3>
			<?php echo $factores_descripcion; ?>
		</div>
		<div class="col-md-12">
			<h3><?php echo $tipos_titulo; ?></h3>
			<?php echo $tipos_descripcion; ?>
		</div>
		<div class="col-md-12">
			<h3><?php echo $diagnostico_titulo; ?></h3>
			<?php echo $diagnostico_descripcion; ?>
		</div>
		<div class="col-md-12">
			<h3><?php echo $tratamiento_titulo; ?></h3>
			<?php echo $tratamiento_descripcion; ?>
		</div>
	</div>
</div>

<!-- #post-<?php the_ID(); ?> -->
