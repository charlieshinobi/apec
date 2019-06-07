<!-- MALESTARES -->

<section id="malestares" class="malestares">

<div class="espacio-linea"></div>
  <div class="container clearfix">

    <div class="row">
      <div class="col-md-12">
        <div class="tit">Encuentra un malestar con la primera letra de su nombre</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="txt"><a href="#">a</a></div>
        <div class="txt"><a href="#">b</a></div>
        <div class="txt"><a href="#">c</a></div>
        <div class="txt"><a href="#">d</a></div>
        <div class="txt"><a href="#">e</a></div>
        <div class="txt"><a href="#">f</a></div>
        <div class="txt"><a href="#">g</a></div>
        <div class="txt"><a href="#">h</a></div>
        <div class="txt"><a href="#">i</a></div>
        <div class="txt"><a href="#">j</a></div>
        <div class="txt"><a href="#">k</a></div>
        <div class="txt"><a href="#">l</a></div>
        <div class="txt"><a href="#">m</a></div>
        <div class="txt"><a href="#">n</a></div>
        <div class="txt"><a href="#">o</a></div>
        <div class="txt"><a href="#">p</a></div>
        <div class="txt"><a href="#">q</a></div>
        <div class="txt"><a href="#">r</a></div>
        <div class="txt"><a href="#">s</a></div>
        <div class="txt"><a href="#">t</a></div>
        <div class="txt"><a href="#">u</a></div>
        <div class="txt"><a href="#">v</a></div>
        <div class="txt"><a href="#">w</a></div>
        <div class="txt"><a href="#">x</a></div>
        <div class="txt"><a href="#">y</a></div>
        <div class="txt"><a href="#">z</a></div>

      </div>
    </div>

    <?php $loop = new WP_Query( array ('post_type' => 'malestar_home', 'orderby' => 'post_date', 'order' => 'ASC', 'posts_per_page' => '3') ); ?>
    <?php
      $cont = 0;
    while($loop->have_posts() ) : $loop->the_post();
      $malestar_link   = get_field('malestar_link');

    ?>

    <div class="row malestar">
      <div class="col-md-3 img-malestar">
        <?php
            if(has_post_thumbnail()){
              the_post_thumbnail();
            }
        ?>
      </div>
      <div class="col-md-9">
          <div class="titmal"><?php the_title(); ?></div>
          <div class="descmal"><?php the_content(); ?></div>
          <div class="btnmal"><a href="<?php echo $malestar_link; ?>">Ver más</a></div>
      </div>
    </div>
    <?php endwhile; wp_reset_query();?>




  </div>
  <div class="espacio-linea"></div>
</section>
