<?php get_header(); ?>

    <!-- entradas -->
   <!-- buscador del formulario -->
   <!-- buscador del formulario -->


               

    			<!-- entrada loop -->
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                

    			<a href=" <?php the_permalink(); ?> "><h2><?php the_title(); ?></h2></a>
    			<div class="card-body">
    			
				<!-- imagenes destacadas -->
    			<?php 
    			if ( has_post_thumbnail() ) {
					    the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid mb-3' ));
					}
				 ?>
				 <!-- end imagenes destacadas -->
						
				<!-- parrafo wordpress -->
    			<?php the_excerpt(); ?>
    			<a href="<?php the_permalink(); ?>" class="btn btn-info mb-5">Seguír leyendo...</a>
    			</div>
				<?php endwhile;  ?>

                <!-- sin resultados -->
                <?php else : ?>

                <nav class="mb-5" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Sin resultados
                        <?php printf(esc_html('%s'), get_search_query()) ?></li>
                  </ol>
                </nav>

                <?php endif; ?>


    			
    			<!-- end entrada loop -->

    		</div>
			<!-- sidebar -->
    		<?php get_sidebar(); ?>
    		<!-- end sidebar -->
    	

<!-- pagination -->
<div class="card-body">
	<!-- llamar subcarpta -->
	<?php get_template_part('template-parts/content', 'pagination'); ?>
</div>
<!-- end pagination -->



 <?php get_footer(); ?> 
  </body>
</html>