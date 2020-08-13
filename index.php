<?php get_header(); ?>

    <!-- entradas -->
    <div class="container mt-5 img-fluid">

    <div class="row img-fluid">
    <div class="col-lg-9 mt-5 img-fluid">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="entradas card" style="width: 35rem;">
            <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid mb-0' ));
                    }
                 ?> 
                 </a>                 
                <div class="entradas-documentacion card-body">
                <p class="small mb-0 text-muted">Fecha: <?php the_time('F j, Y');?></p>
                <p class="small mb-0 text-muted">Categorias: <?php the_category(' '); ?></p>
                <a href="<?php the_permalink(); ?>"><h5  class="card-title"><?php the_title(); ?></h5></a>  
                <p class=" text-muted"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Seguir leyendo...</a>
                </div>
                </div>
                <hr>
						
				<!-- parrafo wordpress -->
				<?php endwhile; endif; ?>
    			
    			<!-- end entrada loop -->

    		</div>
			<!-- sidebar -->
    		<?php get_sidebar(); ?>
    		<!-- end sidebar -->
    	</div>
    </div>


<!-- pagination -->
<div class="container mb-5 py-5">
    <!-- llamar subcarpta -->

    <div class="col-lg-9 float-right mb-5">
        <?php get_template_part('template-parts/content', 'pagination'); ?>

    </div>

</div>
<!-- end pagination -->



 <?php get_footer(); ?> 
  </body>
</html>