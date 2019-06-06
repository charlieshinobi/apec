<!-- FORMULARIO -->
<?php

$formulario_titulo   = get_field('formulario_titulo');
$formulario_subtitulo   = get_field('formulario_subtitulo');
$formulario_campos   = get_field('formulario_campos');

 ?>
<section id="formulario" class="formulario">

  <div class="container clearfix">
    <div class="row">
      <div class="col-md-12">
        <div class="tit"><?php echo $formulario_titulo; ?></div>
        <div class="sub"><?php echo $formulario_subtitulo; ?></div>
      </div>
    </div>
    <?php echo $formulario_campos; ?>
  </div>

</section>
