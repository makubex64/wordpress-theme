<?php 

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// scripts and styles
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'bootswatch', get_template_directory_uri() . '/css/bootstrap.min.css');

  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array ( 'jquery' ), '3.5', true);

  wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ( 'popper' ), '4.5', true);
 
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/app.js', array ( 'bootstrap-js' ), '1.0', true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


 
function tema_makubex_setup(){
  // soporte de imagenes
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );

  }
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'tema_makubex_setup' );


 // sidebars
 function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="card-body sidebar-class text-muted">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5><hr>',
    ));
     register_sidebar( array(
        'name'          => __( 'Sidebar form', 'theme_name' ),
        'id'            => 'sidebar-search',
        'before_widget' => '<div class="card-body sidebar-class text-muted">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5><hr>',
    ));

}
add_action( 'widgets_init', 'themename_widgets_init' );




// register navmenú ---navigations
function register_my_menus() {
  register_nav_menus(
    array(
      'Menu principal' => __( 'Menú Barra de Navegación' )

     )
   );
 }
 add_action( 'init', 'register_my_menus' );
