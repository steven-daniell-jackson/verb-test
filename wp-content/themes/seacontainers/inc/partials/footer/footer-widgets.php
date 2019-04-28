
<div class="row footer-widgets no-gutters address">
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 text-md-center text-sm-center text-lg-left text-sm-left">
    <h4><strong class="text-uppercase">Address</strong></h4>
    <p>
      20 Upper Ground<br />
      London, SE19PD<br />
      44 (0) 20 3747 1000
    </p>
    <a class="icon-spacing-right" href="#"
    ><i class="fab fa-instagram"></i></a
    ><a class="icon-spacing-right" href="#"
    ><i aria-hidden="true" class="fab fa-facebook"></i></a
    ><a class="icon-spacing-right" href="#"
    ><i aria-hidden="true" class="fab fa-twitter"></i></a
    ><a class="" href="#"
    ><i class="fab fa-tripadvisor"></i></a
    >
  </div>
  <div
  class="col-12 col-sm-12 col-md-6 col-lg-3 mt-sm-0 text-sm-center text-md-center text-lg-left text-sm-left information"
  >
  <h4><strong class="text-uppercase">Information</strong></h4>
  <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>

</div>
<div class="col-12 col-md-6 col-lg-3 text-sm-center text-md-center text-lg-left mt-md-0 subscribe">
  <h4><strong class="text-uppercase">Subscribe</strong></h4>
  <p>
    We've got plenty of news, be the first to read all about it.
  </p>

  <div class="row">
    <?php  get_template_part( 'inc/partials/footer/footer', 'mailchimp-form') ?>
  </div>
</div>
<div class="col-12 col-lg-2 col-md-6 offset-lg-1 text-sm-center text-md-center text-lg-left mt-lg-0 footer-logo">
  <img class="img-fluid" alt="..." src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/uploads/2019/04/footer-logo.png" />
</div>
</div>