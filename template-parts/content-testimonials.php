<?php

$marketing_title   = get_field('marketing_title');

?><!-- MARKETING DIGITAL -->

<section id="kudos">
  <div class="container">
    <div class="row">

      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php echo $marketing_title; ?></h2>

        <?php $loop = new WP_Query( array ('post_type' => 'marketing_digital', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

        <?php while($loop->have_posts() ) : $loop->the_post(); ?>

          <div class="row testimonial">
            <div class="col-sm-4">
              <?php the_post_thumbnail(); ?>
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                <?php the_content(); ?>
                <cite><?php the_title(); ?></cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->

        <?php endwhile; wp_reset_query();?>

      </div><!-- end col -->

    </div><!-- row -->
  </div><!-- container -->
</section><!-- kudos -->
