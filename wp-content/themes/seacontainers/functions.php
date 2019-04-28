<?php 
function enqueue_seacontainers_theme_styles() {

	// Enqueue Theme Styles
	wp_register_style( 'theme-css', get_template_directory_uri() . '/assests/theme/theme.css', array(), false, 'all');
	wp_enqueue_style( 'theme-css');

	// Enqueue Styles
	wp_register_style( 'theme-css', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style( 'style-css');
}

add_action( 'wp_enqueue_scripts', 'enqueue_seacontainers_theme_styles', 99);

function enqueue_seacontainers_theme_scripts() {

	// Enqueue Theme scripts
wp_register_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery'), false, true);
wp_enqueue_script( 'theme-js');
}


add_action( 'wp_enqueue_scripts', 'enqueue_seacontainers_theme_scripts', 99);


function enqueue_seacontainers_additional_styles() {

	// Check Bootstrap stylesheet file exists or use CDN
	$located = locate_template( '/assests/bootstrap-4.3.1/css/bootstrap.min.css' );
	if ($located != '' ) {
		wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assests/bootstrap-4.3.1/css/bootstrap.min.css', array(), false, 'all');
	} else {
		wp_register_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), false, 'all');
	}
	wp_enqueue_style( 'bootstrap-css');

	// Check Font Awesome stylesheet file exists or use CDN
	$located = locate_template( '/assests/fontawesome-free-5.8.1-web/css/all.min.css' );
	if ($located != '' ) {
		wp_register_style( 'fontawesome-css', get_template_directory_uri() . '/assests/fontawesome-free-5.8.1-web/css/all.min.css', array(), false, 'all');
	} else {
		wp_register_style( 'fontawesome-css', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), false, 'all');
	}
	wp_enqueue_style( 'fontawesome-css');
}

add_action( 'wp_enqueue_scripts', 'enqueue_seacontainers_additional_styles', 1);


function enqueue_seacontainers_additional_theme_scripts() {

	// Check Bootstrap bundle file exists or use CDN
	$located = locate_template( '/assests/bootstrap-4.3.1/js/bootstrap.bundle.min.js' );
	if ($located != '' ) {
		wp_register_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/assests/bootstrap-4.3.1/js/bootstrap.bundle.min.js', array('jquery'), false, true);
	} else {
		wp_register_script( 'bootstrap-bundle-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js', array('jquery'), false, true);
	}

	wp_enqueue_script( 'bootstrap-bundle-js');
}
add_action( 'wp_enqueue_scripts', 'enqueue_seacontainers_additional_theme_scripts', );


// Register Theme Menus
function register_seacontainer_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_seacontainer_menus' );


/* Custom Post Type Start */
function custom_post_type_offers() {
register_post_type( 'offers',
array(
  'labels' => array(
   'name' => __( 'Offers' ),
   'singular_name' => __( 'Offers' )
  ),
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'offers'),
 )
);
}
add_action( 'init', 'custom_post_type_offers' );
/* Custom Post Type End */


?>