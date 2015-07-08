<?php
/**
 * Template Name: Artists in Residence
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="wrap">
  <div class="intro">
    <div class="intro-content">
      <h1>Artists in Residence</h1>
      <h5>The Artist in Residence Program selects artists to explore and reflect their vision of American culture. Alturas Foundation grants support to one artist or artist collective at a time enabling them to examine in-depth their new ideas and creative process.</h5>
    </div>
  </div>
</div>

<?php
  $args = array(
    'post_type' => 'artist_residence',
    'posts_per_page' => 7,
    'orderby' => 'date',
    'order' => 'asc',
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
    );
  query_posts($args);
  while(have_posts()): the_post();

  if( $wp_query->current_post == 0 && !is_paged() ) { ?>
  <?php if (has_post_thumbnail( $post->ID ) ):
  $imagetop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $imagetop = $imagetop[0]; 

  endif; ?>


<div class="gray-background">
  <div class="wrap feature">
      <div class="col2 feature-block">
        <div class="feature-block-content">
          <h2><?php the_title(); ?></h2>
          <p>Artist In Residence</p>
          <a class="button" href="<?php the_permalink(); ?>"><p>View More</p></a>
        </div>
      </div>
      <div class="col2 feature-block" style="background: url('<?php echo $imagetop; ?>') no-repeat 50% 50%; background-size:cover">
      </div>
  </div>
</div>
<div class="wrap">
  <div class="intro secondary">
    <div class="intro-content">
      <h1>Previous Artists</h1>
    </div>
  </div>
  
  <?php } else { ?>
  <?php if (has_post_thumbnail( $post->ID ) ):
  $imagebottom = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $imagebottom = $imagebottom[0]; 
  endif; ?>

    <div class="col2 image-block">
        <div class="image-block-background-image" style="background: url('<?php echo $imagebottom; ?>') no-repeat 50% 50%; background-size:cover">
        </div>
        <div class="image-block-content">
          <div class="image-block-content-inner">
            <h3><?php the_title(); ?></h3>
            <p>2013 - 2014</p>
          </div>
        </div>
    </div>


  <?php   } ?>


<?php endwhile;?>

</div>


<?php
get_footer();
