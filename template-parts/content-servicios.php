<!-- NUESTROS SERVICIOS -->

<section id="servicios" class="servicios">

  <div class="container clearfix">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="titsection">nuestros servicios</div>
      </div>
    </div>
    <div class="row">

      <?php $loop = new WP_Query( array ('post_type' => 'servicios_home', 'orderby' => 'post_date', 'order' => 'ASC') ); ?>
      <?php
        $cont = 0;
      while($loop->have_posts() ) : $loop->the_post();

        $servicios_link   = get_field('servicios_link');
        $cont++;
        $name_class = "serv".$cont;
      ?>
      <a href="<?php echo $servicios_link;?>">

        <div class='col-md-4 <?php echo $name_class; ?>'>
          <?php the_post_thumbnail();?>
          <div class="tit"><?php the_title(); ?></div>
        </div>
      </a>

      <?php endwhile; wp_reset_query();?>

    </div>
  </div>

</section>
