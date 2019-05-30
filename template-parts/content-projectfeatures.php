<?php
$development_body   = get_field('development_body');
$development_title   = get_field('development_title');
?>
<section id="project-features">
  <div class="container">
    <h2><?php echo $development_title; ?></h2>
    <p class="lead"><?php echo $development_body; ?></p>
    <div class="row">
      <?php $loop = new WP_Query( array ('post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
      <?php while($loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-sm-4">
          <?php
              if(has_post_thumbnail()){
                the_post_thumbnail();
              }
          ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div><!-- end col -->
      <?php endwhile; wp_reset_query();?>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- project-features -->
