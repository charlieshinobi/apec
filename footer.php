<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoppycharlie
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER -->

<section id="footer" class="footer">

  <div class="container clearfix">
    <div class="row">
      <div class="col-md-4">
        <div class="tit"><a href="#">nosotros</a></div>
      </div>
      <div class="col-md-4">
        <div class="tit"><a href="#">contacto</a></div>
      </div>
      <div class="col-md-4">
        <div class="tit"><a href="#">aviso de privacidad</a></div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="sub">©2019 APEC. Asociación para Evitar la Ceguera en México I.A.P. Hospital Dr. Luis Sánchez Bulnes.<br> Todos los derechos reservados. Aviso de privacidad.</div>
        </div>
    </div>
  </div>

</section>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script>

$('#link-catarata').click(function() {
  window.open("http://www.adioscatarata.com");
  return false;
});
$('#link-hospitalizacion').click(function() {
  window.open("#");
  return false;
});
$('#link-optica').click(function() {
  window.open("#");
  return false;
});
$('#link-valoracion').click(function() {
  window.open("#");
  return false;
});

</script>

</body>
</html>
