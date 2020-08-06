<?php get_header(); ?>

<div class="jumbotron">
  <h1 class="display-4"><?php _e('Oops, página no encontrada :(','blogger') ?></h1>
  <p class="lead"><?php _e('intenta buscar otra cosa','blogger') ?></p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button">Página principal</a>
</div>

<?php get_footer(); ?>