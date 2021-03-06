<?php get_header(); ?>

    <!-- entradas -->

    <div class="row img-fluid mt-5">
    <div class="col-lg-7 mt-5 img-fluid">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container">
        <div class="entradas card mb-3 shadow p-3 mb-5 bg-white rounded" style="
        width: 32rem;
        margin-left: 5px;
        ">
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
                </div>

                <?php endwhile; endif; ?>


                <hr>
              </div>
            <?php get_sidebar(); ?>


            </div>
            <!-- pagination -->
            <div class="container mb-5 py-5">
                <!-- llamar subcarpta -->
                <div class="col-lg-11 float-right mb-5">
                <?php get_template_part('template-parts/content', 'pagination'); ?>
                </div>

            </div>
            <!-- end pagination -->

    	</div>
    </div>



<?php get_footer(); ?> 
</body>
</html>