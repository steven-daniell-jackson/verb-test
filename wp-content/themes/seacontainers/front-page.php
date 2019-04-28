
<?php 
get_header(); 
get_template_part('inc/partials/common/header'); 


// Top Banner 
if(get_field('page_heading') || get_field('first_content_block')){  

  $content_block_heading = get_field('top_banner_image');
  include( locate_template( 'inc/partials/images/images-banner.php', false, false ) ); 
} 
// !Top Banner 

// Check In CTA 
get_template_part( 'inc/partials/cta/cta', 'checkin' ); 
// !Check In CTA 


// Wordpress Loop
while ( have_posts() ) : the_post(); 

// Content Block Heading and Text. 12 Grid 
// Check if content block has heading or content
  if(get_field('page_heading') || get_field('first_content_block')){  

    $content_block_heading = get_field('page_heading');
    $content_block_text = get_field('first_content_block');
    include( locate_template( 'inc/partials/content-blocks/content-block-heading-text-12.php', false, false ) ); 
  } 
  // !Content Block Heading and Text. 12 Grid 


  // Carousel 
// Would use ACF Repeaters, but I do not have premium ACF
  if(get_field('first_carousel')) {

    $carousel_image = get_field('first_carousel');

    $carousel_options = array(
      0 => array(
        'title' => 'Our Rooms',
        'image' => $carousel_image['url']
      ),
      1 => array(
        'title' => 'Second Slide',
        'image' => $carousel_image['url']
      ),
      2 => array(
        'title' => 'Third Slide',
        'image' => $carousel_image['url']
      ),
      3 => array(
        'title' => 'Fourth Slide',
        'image' => $carousel_image['url']
      ),
    );
    include( locate_template( 'inc/partials/images/images-carousel.php', false, false ) ); 
  }
  // !Carousel 


  // Content Block 6 and 6 Grid
  // Check if either content block has content
  if(get_field('second_content_block_left') || get_field('second_content_block_right')){

    $link = get_field('second_content_block_link');
    $block_options = array(
      'content_block_left' => get_field('second_content_block_left'),
      'content_block_right' => get_field('second_content_block_right'),
      'content_block_link_title' => $link['title'],
      'content_block_link_url' => $link['url']
    );
    include( locate_template( 'inc/partials/content-blocks/content-block-6x6-with-button.php', false, false ) ); 
  }
  // !Content Block 6 and 6 Grid


  // Carousel 
// Would use ACF Repeaters, but I do not have premium ACF
  if(get_field('second_carousel')) {

    $carousel_image = get_field('second_carousel');

    $carousel_options = array(
      0 => array(
        'title' => 'Food & Drink',
        'image' => $carousel_image['url']
      ),
      1 => array(
        'title' => 'Second Slide',
        'image' => $carousel_image['url']
      ),
      2 => array(
        'title' => 'Third Slide',
        'image' => $carousel_image['url']
      ),
      3 => array(
        'title' => 'Fourth Slide',
        'image' => $carousel_image['url']
      ),
    );
    include( locate_template( 'inc/partials/images/images-carousel.php', false, false ) ); 
  }

  // !Carousel 


  // Content Block 6 and 6 Grid
  // Check if either content block has content
  if(get_field('third_content_block_left') || get_field('third_content_block_right')){

    $link = get_field('third_content_block_link');
    $block_options = array(
      'content_block_left' => get_field('third_content_block_left'),
      'content_block_right' => get_field('third_content_block_right'),
      'content_block_link_title' => $link['title'],
      'content_block_link_url' => $link['url']
    );
    include( locate_template( 'inc/partials/content-blocks/content-block-6x6-with-button.php', false, false ) ); 
  } 
 // !Content Block 6 and 6 Grid


  // Post Type - Offers  ?>
  <div class="container homepage__offers">
    <div class="row  no-gutters">
      <h3 class="text-uppercase">Offers</h3>
    </div>
    <div class="no-gutters row">
      <?php
      $args = array( 'post_type' => 'offers', 'posts_per_page' => 2 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
        $post_options = array(
          'title' =>  get_the_title(),
          'short_description' =>  get_field('short_description'),
          'post_offers_image' => get_field('post_offers_image'),
          'permalink' => get_the_permalink()
        );
        include( locate_template( 'inc/partials/post-types/post-type-offers.php', false, false ) );
      endwhile; ?>
    </div>
  </div>
  <?php  
 // !Post Type - Offers 

  // Masonry Grid 
  include( locate_template( 'inc/partials/images/images-masonry-grid.php', false, false ) );  
  // !Masonry Grid 

  endwhile; // !Wordpress Loop
  get_footer(); ?>