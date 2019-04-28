<?php $carousel_id = "sj-carousel-" . rand(); ?>


<section class="carouselSection">

  <!-- Carousel -->
  <div class="carousel slide" data-ride="carousel" id="<?php echo $carousel_id ?>">
    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
      <!-- Prev Button -->
      <li
      role="button"
      class= "px-4 text-uppercase" 
      data-slide="prev"
      href="#<?php echo $carousel_id ?>"
      >Prev</li>
      <!-- !Prev Button -->

      <!-- Dynamic Indicator Loop -->
      <?php foreach ( $carousel_options  as $key => $value) { ?> 
        <li
        class="px-1 <?php if($key==0){ echo "active"; } ?>" 
        data-slide-to="<?php echo $key ?>"
        data-target="#<?php echo $carousel_id ?>"
        ><?php echo "0" . ($key + 1) ?></li>
      <?php } ?>
      <!-- !Dynamic Indicator Loop -->

      <!-- Next Button -->
      <li
      class="px-2 text-uppercase" 
      data-slide="next"
      href="#<?php echo $carousel_id ?>"
      role="button"
      >Next</li>
      <!-- !Next Button -->
    </ol> <!-- !Carousel Indicators -->


      <!-- Carousel Inner -->
    <div class="carousel-inner">

      <!-- Dynamic Carousel Item Loop -->
      <?php foreach ( $carousel_options  as $key => $value) {
        ?> 
        <div class="carousel-item <?php if($key==0){ echo "active"; } ?>">
          <img alt="..." class="d-block w-100 img-responsive" src="<?php echo $value['image']; ?>" />
          <div class="carousel-caption d-none d-md-block">
            <h2><?php echo $value['title']; ?></h2>
          </div>
        </div>
      <?php } ?>
       <!-- !Dynamic Carousel Item Loop -->

    </div>  <!-- !Carousel Inner -->
  </div><!-- !Carousel -->

</section>


