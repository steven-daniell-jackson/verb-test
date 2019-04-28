<?php /* Template Name: Careers Page */ 

 get_template_part('inc/partials/header'); 
get_header();

while ( have_posts() ) : the_post(); 
?>
<main>
<section class="sj-block m-5"><div class="container"><div class="row justify-content-center"><div class="col col-md-8 text-center"><h1>Prototype Blocks</h1><p class="lead"> <?php the_content(); ?> </p></div></div></div></section>

<section class="sj-block m-5"><div class="container"><div class="row justify-content-center pb-5"><div class="col-12 text-center"><h1>Prototype Blocks</h1></div></div><div class="row text-left align-items-center pt-5 pb-md-5"><div class="col-4 col-md-5"><img alt="image" class="img-fluid" src="https://via.placeholder.com/440x320"></div><div class="col-12 col-md-5 m-md-auto"><h2><strong>Feature One</strong></h2><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p><p><a href="#">Learn More <i class="fas fa-angle-right"></i></a></p></div></div><div class="row text-left align-items-center pt-5 pb-md-5"><div class="col-4 col-md-5 m-md-auto order-md-5"><img alt="image" class="img-fluid" src="https://via.placeholder.com/440x340"></div><div class="col-12 col-md-5"><h2><strong>Feature Two</strong></h2><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit it is an almost unorthographic life Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p><p><a href="#">Learn More <i class="fas fa-angle-right"></i></a></p></div></div><div class="row text-left align-items-center pt-5"><div class="col-4 col-md-5"><img alt="image" class="img-fluid" src="https://via.placeholder.com/440x320"></div><div class="col-12 col-md-5 m-md-auto"><h2><strong>Feature Three</strong></h2><p class="lead">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around. </p><p><a href="#">Learn More <i class="fas fa-angle-right"></i></a></p></div></div></div></section>
</main>
<?php 
endwhile; 
get_footer(); 
?>