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
$medicos_titulo   = get_field('medicos_titulo');
$medicos_descripcion   = get_field('medicos_descripcion');
$servicios_titulo   = get_field('servicios_titulo');
$servicios_descripcion   = get_field('servicios_descripcion');


?>
<script>
function mostrar(respuesta){
	if ( $( respuesta ).is( ":hidden" ) ) {
		$( respuesta ).slideDown( "slow" );
	} else {
		$( respuesta ).slideUp();
	}
}
</script>
<div class="container clearfix">

	<div class="row padecimientos">
		<div class="col-md-6 bkg-padecimientos">
			ESPECIALIDADES
			<?php the_title( '<h3 class="entry-title">', '</h1>' ); ?>
		</div>

		<div class="col-md-6 img-padecimientos">
			<?php if (has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
		</div>

	</div>

	<div class="row">
		<div class="col-md-6">
			<h3 onclick="mostrar('#que');" class="padtit"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-plus.png" /> <?php echo $que_titulo; ?></h3>
			<div id="que" class="res"><?php echo $que_descripcion; ?></div>
		</div>
		<div class="col-md-6">
			<h3 onclick="mostrar('#medicos');" class="padtit"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-plus.png" /> <?php echo $medicos_titulo; ?></h3>
			<div id="medicos" class="res"><?php echo $medicos_descripcion; ?></div>
		</div>

		<div class="col-md-6">
			<h3 onclick="mostrar('#servicios');" class="padtit"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-plus.png" /> <?php echo $servicios_titulo; ?></h3>
			<div id="servicios" class="res"><?php echo $servicios_descripcion; ?></div>
		</div>


</div>

</div>


<!-- #post-<?php the_ID(); ?> -->
