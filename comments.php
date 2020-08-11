
<h5 class="text-muted mt-5"><?php comments_number( 'sin comentarios', 'un comentario', '% comentarios' ); ?>.
</h5>
<hr>

<!-- add form comments -->
<?php comment_form(); ?>

<!-- add avatar comments -->
<?php
wp_list_comments( array(
  'callback' => function($comment, $args, $depth){?>
<div class="media">
  <div class="mr-3">
    <?php 
    if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            ?>
  </div>
  <div class="media-body mb-4">
    <h5 class="mt-0"><?php printf( __( '<cite class="fn">%s</cite> <span class="says">dice:</span>' ), get_comment_author_link() ); ?></h5>
    
    <?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em><?php _e( 'esperando para aprobar tu comentario' ); ?></em><br/><?php 
        } ?>

        <?php comment_text(); ?>

        <span>
          <?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'reply_text' => 'Responder', 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>



        </span>

        <span>
          <?php 
            edit_comment_link( __( 'Editar' ), '  ', '' ); ?>
       </span>

   
  </div>
</div>

  <?php }
 ));
?>