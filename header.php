<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

<!-- navigation navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">

<div class="container">
  <a class="navbar-brand text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">Logo Corporativo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



 <!--  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
    </ul>
  
  </div> -->
   <?php
        wp_nav_menu( array(
            'theme_location'    => 'Menu principal',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

        <?php get_search_form(); ?>

        </div>

</nav>
<!-- end navifation navbar -->

<!-- theme glog -->
<div class="container text-center mt-5">
  <h2>Blog personalizado</h2>
</div>