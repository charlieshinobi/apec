<!-- PROMOCIONES DEL MES -->
<section id="promociones" class="promociones">

  <div class="container clearfix">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="titsection">promociones del mes</div>
      </div>
    </div>
    <div class="row">
      <?php $loop = new WP_Query( array ('post_type' => 'promociones_home', 'orderby' => 'post_date', 'order' => 'ASC') ); ?>
      <?php
        $cont = 0;
      while($loop->have_posts() ) : $loop->the_post();
        $promociones_precio   = get_field('promociones_precio');
        $promociones_link   = get_field('promociones_link');
        $cont++;
        $name_class = "promo".$cont;
      ?>
      <a href="<?php echo $promociones_link;?>"><div class="col-md-4 <?php echo $name_class; ?>">
        <div class="tit"><?php the_title(); ?></div>
        <div class="sub"><?php the_content(); ?></div>
        <div class="precio"><?php echo $promociones_precio; ?></div>
      </div>
    </a>
      <?php endwhile; wp_reset_query();?>
    </div>
  </div>

</section>
