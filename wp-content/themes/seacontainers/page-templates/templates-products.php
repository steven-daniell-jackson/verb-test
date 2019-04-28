<?php /* Template Name: Products Page */ 

 get_template_part('inc/partials/header'); 
get_header();

while ( have_posts() ) : the_post(); 
?>
<main>
	
<style type="text/css">
	.sj-block .sj-box {
    background: #ffffff;
    padding: 3.75rem 2.5rem;
    overflow: hidden;
    color: #444444;
    border-radius: 0.25rem;
    box-shadow: 0 0.3125rem 0.875rem 0 rgba(129, 129, 129, 0.2) !important;
}
</style>

<section class="sj-block m-5"><div class="container"><div class="row"><div class="col-12 text-center"><h1>Features</h1></div></div><div class="row text-left justify-content-center pt-5"><div class="col-12 col-md-6 col-lg-5 m-auto"><h3><strong>Feature One</strong></h3><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p></div><div class="col-12 col-md-6 col-lg-5 m-auto pt-3 pt-md-0"><h3><strong>Feature Two</strong></h3><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit it is an almost unorthographic life One day however a small line.</p></div></div><div class="row text-left justify-content-center pt-lg-4"><div class="col-12 col-md-6 col-lg-5 m-auto pt-3 pt-lg-0"><h3><strong>Feature Three</strong></h3><p class="lead">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit, that where it came from it would have been rewritten a thousand times.</p></div><div class="col-12 col-md-6 col-lg-5 m-auto pt-3 pt-lg-0"><h3><strong>Feature Four</strong></h3><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p></div></div></div></section>

	<section  class="sj-block m-5"><div  class="container"><div  class="row text-right align-items-center"><div  class="col-12 col-lg-6 col-xl-5 m-lg-auto text-left"><h1 >Features</h1><p  class="h3 pb-xl-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p><div  class="row pt-5"><div  class="col-3"><img  alt="image" class="img-fluid" src="https://via.placeholder.com/50x50"></div><div  class="col-9"><p >Lorem ipsum dolor sit amet, consectetur adipiscing elit with the necessary regelialia. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div></div><div  class="row pt-5"><div  class="col-9 text-right"><p >Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div><div  class="col-3"><img  alt="image" class="img-fluid" src="https://via.placeholder.com/50x50"></div></div></div><div  class="col-7 col-sm-4 m-auto pt-5 pt-md-0"><img  alt="image" class="img-fluid" src="https://via.placeholder.com/340x680"></div></div></div></section>


<section class="sj-block m-5" style="background-image: url(https://via.placeholder.com/525x300);"><div class="container"><div class="row text-center"><div class="col"><h1 class="text-white">Pricing</h1></div></div><div class="row mt-5 align-items-center"><div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center"><div class="sj-box p-4"><h2>Hobby</h2><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, far from the countries Vokalia.</p><p class="h1 mt-5 mb-5">$99</p><p><a class="btn btn-dark" href="#">Buy Now</a></p></div></div><div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0"><div class="sj-box px-4 pt-5"><h2>Advanced</h2><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit right at the coast, a large language ocean.</p><p class="h1 mt-5 mb-5">$299</p><p><a class="btn btn-secondary" href="#">Buy Now</a></p></div></div><div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0"><div class="sj-box p-4"><h2>Business</h2><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit it is an almost life.</p><p class="h1 mb-5 mt-5">$799</p><p><a class="btn btn-dark" href="#">Buy Now</a></p></div></div></div></div></section>

</main >
<?php 
endwhile; 
get_footer(); 
?>