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

$limit_description = substr($que_descripcion,0,140);

?>


<div class="col-sm-12 col-md-6">
	<div class="row malestar">
			<div class="col-md-12">
				<?php
						if(has_post_thumbnail()){
							the_post_thumbnail();
						}
				?>
			</div>
			<div class="col-md-12">
					<div class="titmal"><?php the_title(); ?></div>
					<div class="descmal"><?php echo $limit_description."..."; ?></div>
					<div class="btnmal"><a href="<?php the_guid(); ?>">Ver más</a></div>
			</div>
		</div>
</div>




<!-- #post-<?php the_ID(); ?> -->
