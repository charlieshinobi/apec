<?php
$banner_principal   = get_field('imagen');
$horario_titulo   = get_field('horario_titulo');
$horario_txt_1   = get_field('horario_txt_1');
$horario_tiempo_1   = get_field('horario_tiempo_1');
$horario_txt_2   = get_field('horario_txt_2');
$horario_tiempo_2   = get_field('horario_tiempo_2');
$atencion_txt   = get_field('atencion_txt');
$atencion_hora   = get_field('atencion_hora');

$emergencias_titulo   = get_field('emergencias_titulo');
$emergencias_telefono   = get_field('emergencias_telefono');

$contactanos_titulo   = get_field('contactanos_titulo');
$contactanos_telefono   = get_field('contactanos_telefono');
$contactanos_fax   = get_field('contactanos_fax');
$contactanos_email   = get_field('contactanos_email');
$contactanos_facebook   = get_field('contactanos_facebook');
$contactanos_instagram   = get_field('contactanos_instagram');
$contactanos_twitter   = get_field('contactanos_twitter');
$contactanos_youtube   = get_field('contactanos_youtube');

?>

<!-- BANNERS PRINCIPALES -->

<section id="banners">
  <div class="container clearfix">
    <div class="row">
      <div class="col-md-6 banprincipal">
        <!-- BACKGROUND IMG -->
        	<img src="<?php echo $banner_principal['url']; ?>" alt="<?php echo $banner_principal['alt']; ?>">
      </div>
      <div class="col-md-6">
        <div class="row">
            <div class="col-md-6 ban01">
              <div class="tit"><?php echo $horario_titulo; ?></div>
              <div class="sub"><?php echo $horario_txt_1; ?></div>
              <div class="txt"><?php echo $horario_tiempo_1; ?></div>
              <div class="sub"><?php echo $horario_txt_2; ?></div>
              <div class="txt"><?php echo $horario_tiempo_1; ?></div>
              <div class="sub"><?php echo $atencion_txt; ?></div>
              <div class="txt"><?php echo $atencion_hora; ?></div>
            </div>
            <div class="col-md-6 ban02">
                <div class="tit"><?php echo $emergencias_titulo; ?></div>
                <div class="sub"><a href="tel:<?php echo $emergencias_telefono; ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/ico-phone.png" /><?php echo $emergencias_telefono; ?></a></div>
                <div class="boton"><a href="tel:<?php echo $emergencias_telefono; ?>">Llamar</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ban03">
              <div class="tit"><?php echo $contactanos_titulo; ?></div>
              <div class="sub">Tel: <a href="tel:<?php echo $contactanos_telefono; ?>"><?php echo $contactanos_telefono; ?></a></div>
              <div class="sub">Fax: <?php echo $contactanos_fax; ?></a></div>
              <div class="sub"><a href="mailto:<?php echo $contactanos_email; ?>" target="_blank"><?php echo $contactanos_email; ?></a></div>
              <div class="linea"></div>
              <div class="iconos-redes">
                <a href="<?php echo $contactanos_facebook; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-facebook.png" class="redes" /></a>
                <a href="<?php echo $contactanos_instagram; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-instagram.png" class="redes" /></a>
                <a href="<?php echo $contactanos_twitter; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-twitter.png" class="redes" /></a>
                <a href="<?php echo $contactanos_youtube; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-youtube.png" class="redes" /></a>
              </div>
            </div>
            <div class="col-md-6 ban04">
              <div class="tit">&#161;DONA AHORA!</div>
              <div class="sub">Tú puedes iluminar miles de vidas en México</div>
              <div class="boton"><a href="http://apec.org.mx/donativos/index.html" target="_blank">Donar</a></div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
