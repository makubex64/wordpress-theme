<?php get_header(); ?>

    <!-- entradas -->
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-lg-9">

    			<!-- entrada loop -->
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<h2><?php the_title(); ?></h2>
    			<div class="card-body">
    			<p class="small mb-0 text-muted">Fecha: <?php the_time('F j, Y');?></p>
    			<p class="small mb-0 text-muted">Autor: <?php the_author(); ?></p>
    			<p class="small mb-0 text-muted">Categorias: <?php the_category(' '); ?></p>

    			<!-- imagenes destacadas -->
    			<?php 
    			if ( has_post_thumbnail() ) {
					    the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid mb-3' ));
					}
				 ?>
				 <!-- end imagenes destacadas -->
						
				<!-- contenido de la entrada en específico wordpress -->
    			<?php the_content(); ?>

                <?php // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                 ?>

                 
                </div>
				<?php endwhile; endif; ?>
    			
    			<!-- end entrada loop -->

    		</div>

            


    	</div>
    </div>

 <?php get_footer(); ?> 
  </body>
</html>