<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ie=edge" http-equiv="X-UA-Compatible" />
<title><?php the_title() ?></title>
<?php wp_head(); ?>
  </head>
  <body>

  	<!-- Header -->
<!-- Top Nav -->
<div class="viewport-wrapper">
  <header>
   <?php  include( locate_template( 'inc/partials/common/nav-main-navigation.php', false, false ) ); ?>
 </header>
 <!-- Top Nav -->
 <!-- !Header -->