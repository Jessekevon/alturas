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
      <h1><?php the_title(); ?></h1>
      <h5><?php echo $cfs->get('post_type_page_template_intro_text'); ?></h5>
    </div>
  </div>
</div>

<?php
  $args = array(
    'post_type' => 'artist_residence',
    'posts_per_page' => 5,
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
        <p><?php $post_type = get_post_type_object( get_post_type($post_id_left) );

        echo $post_type->label ; ?></p>
          <a class="button" href="<?php the_permalink(); ?>"><p>View More</p></a>
        </div>
      </div>
      <div class="col2 feature-block fadeIn" style="background: url('<?php echo $imagetop; ?>') no-repeat 50% 50%; background-size:cover">
      </div>
  </div>
</div>
<div class="wrap bottom-feature">
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
        <a href="<?php the_permalink(); ?>">
          <div class="image-block-background-image-wrapper">
            <div class="image-block-background-image fadeIn" style="background: url('<?php echo $cfs->get('grid_item_featured_image'); ?>') no-repeat 50% 50%; background-size:cover">
            </div>

          </div>
      </a>
        <div class="image-block-content">
          <div class="image-block-content-inner">
            <h3><?php the_title(); ?></h3>
            <p><?php echo $cfs->get('project_year'); ?></p>
          </div>
        </div>
    </div>


  <?php   } ?>


<?php endwhile;?>


<!-- Begin Load More Posts -->
<!-- Offset by 5 so we can load the first seven quering the 'featured post' on top. Then calling up the posts to be displayed after the first seven. -->
    <?php echo do_shortcode('[ajax_load_more post_type="artist_residence" order="ASC" offset="5" posts_per_page="2" pause="true" scroll="false" transition="fade"]'); ?>

</div>


<?php
get_footer();
