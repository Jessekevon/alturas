<?php if (has_post_thumbnail( $post->ID ) ):
  $imagebottom = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $imagebottom = $imagebottom[0]; 
  endif; ?>


<div class="col2 image-block">
        <a href="<?php the_permalink(); ?>">
          <div class="image-block-background-image-wrapper">
            <div class="image-block-background-image" style="background: url('<?php echo $imagebottom; ?>') no-repeat 50% 50%; background-size:cover">
            </div>

          </div>
      </a>
        <div class="image-block-content">
          <div class="image-block-content-inner">
            <h3><?php the_title(); ?></h3>
            <p>2013 - 2014</p>
          </div>
        </div>
    </div>