<div class="container">
  <nav class="navbar no-gutters navbar-light">

    <div class="col-12 col-md-2 text-center text-sm-center text-md-center order-2 ">
      <button aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler text-uppercase" data-target="#top-nav" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>Menu
      </button>

     <!-- Collect the nav links, forms, and other content for toggling -->
  
    </div>
    <!-- Logo -->
    <div class="col-12 col-md-8 text-center text-sm-center text-md-center order-lg-6 order-md-6 order-1 nav-logo-image">
      <a href="<?php echo bloginfo( 'wpurl' ) ?>"><img alt="image" class="img-fluid" src="<?php echo bloginfo( 'wpurl' ) ?>/wp-content/uploads/2019/04/logo-white.png"></a>
    </div>
    <!-- !Logo -->
   
    <!-- Book Now -->
    <div class="col text-right order-lg-6 order-md-7">
      <ul class="navbar-nav justify-content-end col-sm-12 order-lg-12 d-none d-md-flex book-now">
        <li class="nav-item">
          <a class="text-uppercase" href="#">Book Now</a>
        </li>
      </ul>
    </div><!-- !Book Now -->
  </nav>
   <!-- Nav -->
    <div class="collapse navbar-collapse text-center" id="top-nav">
       <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
    <!-- !Nav -->
</div><!-- !Nav -->