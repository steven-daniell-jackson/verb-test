<?php /* Template Name: Privacy Policy Page */ 

 get_template_part('inc/partials/header'); 
get_header();

while ( have_posts() ) : the_post(); 
?>
<main>
<section class="sj-block m-5"><div class="container"><div class="row"><div class="col text-left"><?php the_content() ?></div></div></div></section>
</main>
<?php 
endwhile; 
get_footer(); 
?>