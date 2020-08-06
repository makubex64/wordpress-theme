<?php get_header(); ?>

    <!-- entradas -->
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-lg-9 border border-secondary bg-light">

    			<!-- entrada loop -->
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<a href=" <?php the_permalink(); ?> "><h2><?php the_title(); ?></h2></a>
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
						
				<!-- parrafo wordpress -->
    			<?php the_excerpt(); ?>
    			<a href="<?php the_permalink(); ?>" class="btn btn-info mb-5">Seguír leyendo...</a>
    			</div>
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