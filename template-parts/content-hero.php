<?php
// $prelaunch_price      = get_post_meta( 9, 'prelaunch_price', true);
// $launch_price      = get_post_meta( 9, 'launch_price', true);
// $final_price      = get_post_meta( 9, 'final_price', true);
?>

<!-- HERO -->
  <section id="hero" data-type="background" data-speed="5">
    <article>
      <div class="container clearfix">
        <div class="row">

          <div class="col-sm-5">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
          </div><!-- col -->

          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name');?></h1>

                <!-- <p class="lead">Somos Revolucionarios, Somos Disruptivos</p> -->

                <div id="price-timeline">
                  <div class="price">
                    <h4>Marketing Digital</h4>
                    <span><a class="nav-link" id="marketing">Go</a></span>
                  </div><!-- end price -->
                  <div class="price">
                    <h4>Web Delopment</h4>
                    <span><a class="nav-link" id="webdelopment">Go</a></span>
                  </div><!-- end price -->
                  <div class="price">
                    <h4>Big Data</h4>
                  <span><a class="nav-link" id="bigdata">Go</a></span>
                  </div><!-- end price -->
                </div><!-- price-timeline -->

                <!-- <p><a class="btn btn-lg btn-danger" href="/" role="button">Cotiza aquí &raquo;</a></p> -->
          </div><!-- col -->

        </div><!-- row -->
      </div><!-- container -->
    </article>
  </section>
  <script>
      jQuery("#marketing").click(function(){
        jQuery("html, body").animate({scrollTop : jQuery("#kudos").offset().top},700);
      });
      jQuery("#webdelopment").click(function(){
        jQuery("html, body").animate({scrollTop : jQuery("#project-features").offset().top},700);
      });
      jQuery("#bigdata").click(function(){
        jQuery("html, body").animate({scrollTop : jQuery("#instructor").offset().top},700);
      });
  </script>
