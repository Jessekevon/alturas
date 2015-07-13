<?php
/**
 * Template Name: Exhibition Support
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="gray-background">
  <div class="wrap">
    <div class="intro">
      <div class="intro-content">
        <h1><?php the_title(); ?></h1>
        <h5><?php echo $cfs->get('post_type_page_template_intro_text'); ?></h5>
      </div>
    </div>
  </div>
</div>

<div class="wrap">
  <div class="intro secondary">
    <div class="intro-content">
      <h1>Exhibitions</h1>
    </div>
  </div>

<?php
  $args = array(
    'post_type' => 'exhibition_support',
    'posts_per_page' => 7,
    'orderby' => 'date',
    'order' => 'asc',
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
    );
  query_posts($args);
  while(have_posts()): the_post(); ?>
  
  <?php if (has_post_thumbnail( $post->ID ) ):
  $imagebottom = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $imagebottom = $imagebottom[0]; 
  endif; ?>

  <div class="col2 image-block">
      <a href="<?php the_permalink(); ?>">
        <div class="image-block-background-image-wrapper">
          <div class="image-block-background-image fadeIn" style="background: url('<?php echo $imagebottom; ?>') no-repeat 50% 50%; background-size:cover">
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

<?php endwhile;?>

</div>


<?php
get_footer();
