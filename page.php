
<?php get_header(); ?>

    <!-- entradas -->
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-lg-12">

    			<!-- entrada loop -->
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<h2 class="page-h2-title"><?php the_title(); ?></h2>
                <div class="card-body">
                <!-- imagenes destacadas -->
    			<?php 
    			if ( has_post_thumbnail() ) {
					    the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid mb-3' ));
					}
                ?>
                <!-- end imagenes destacadas -->
			    <!-- contenido de la entrada en específico wordpress -->
                <?php the_content(); ?>
                    
                </div>
				<?php endwhile; endif; ?>
    			
    			<!-- end entrada loop -->

    		</div>

			 
    	</div>
    </div>

 <?php get_footer(); ?> 
  </body>
</html>