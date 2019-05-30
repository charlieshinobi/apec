<?php
$bigdata_title   = get_field('bigdata_title');
$bigdata_body   = get_field('bigdata_body');
$bigdata_type1   = get_field('bigdata_type1');
$bigdata_type2   = get_field('bigdata_type2');
$bigdata_type3   = get_field('bigdata_type3');
?>
<section id="instructor">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-lg-8">
            <h2><?php echo $bigdata_title; ?></h2>
          </div><!-- end col -->
        </div><!-- row -->
        <p class="lead"><?php echo $bigdata_body; ?><p>
        <hr>
        <div class="row">
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                <?php echo $bigdata_type1; ?>
              </div><!-- num-content -->
            </div><!-- num -->
          </div><!-- end col -->
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                <?php echo $bigdata_type2; ?>
              </div><!-- num-content -->
            </div><!-- num -->
          </div><!-- end col -->
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                <?php echo $bigdata_type3; ?>
              </div><!-- num-content -->
            </div><!-- num -->
          </div><!-- end col -->
        </div><!-- row -->
      </div><!-- end col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- instructor -->
