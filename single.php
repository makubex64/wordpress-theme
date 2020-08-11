<?php get_header(); ?>

    <!-- entradas -->
    	<div class="row" style="

        padding: 120px;

       background: #141E30;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to top, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */




        ">
    		<div class="single-div col-lg-6">

    			<!-- entrada loop -->
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<h2 class="text-white"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>

    			<div class="card-body">
    			<p class="small mb-0 text-muted">Fecha: <?php the_time('F j, Y');?></p>
    			<p class="small mb-0 text-muted">Categorias: <?php the_category(' '); ?></p>

    			
						
				

                 
                </div>
    			
    			<!-- end entrada loop -->

    		</div>
            <div class="col-lg-6">
                <!-- imagenes destacadas -->
                <?php 
                if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnails', 
                            array( 'class' => 'img-fluid mb-3' ));
                    }
                 ?>
                 <!-- end imagenes destacadas -->
            </div>
        </div>
    
        <div class="contenido-pro container mt-5">
            <div class="contenido-pro-row row">
            <div class="contenido-pro-col col-lg-12 text-justify ">
                <!-- contenido de la entrada en específico wordpress -->
                <?php the_content(); ?>

                <?php // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                 ?>
                
            </div>
        </div>
        </div>
        <?php endwhile; endif; ?>

 <?php get_footer(); ?> 
  </body>
</html>