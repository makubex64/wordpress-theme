<div class="col-lg-5 mt-5 img-fluid">
	<!-- <div class="card-body">
        <h4>Publicidad</h4>
        <hr>
     </div> -->

     <!-- dinamic sidebar -->
      <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
	    <?php else : ?>
	        <!-- Time to add some widgets! -->
	    <?php endif; ?>


    			
 </div>

    			