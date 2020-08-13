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

<div class="card mb-3 img-fluid" style="max-width: 540px; max-height: 150px;">
  <div class="row no-gutters bg-primary">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8" style="max-height: 100px;">
      <div class="card-body bg-success" style=" max-height: 100px;">
        <h5 class="small card-title">Card title</h5>
        <p class=" small card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <p class="small card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    			
 </div>

    			