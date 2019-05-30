<!-- SIGN UP -->
<?php
$cotiza_title   = get_field('cotiza_title');
$cotiza_frase   = get_field('cotiza_frase');
$cotiza_boton   = get_field('cotiza_boton');
$cotiza_link   = get_field('cotiza_link');
?>
<section id="signup" data-type="background" data-speed="4">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2><?php echo $cotiza_title; ?> <strong><?php echo $cotiza_frase; ?></strong></h2>
        <p><a href="<?php echo $cotiza_link; ?>" class="btn btn-lg btn-block btn-success"><?php echo $cotiza_boton; ?></a></p>
      </div><!-- end col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- signup -->
