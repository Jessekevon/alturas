<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php
  // Start the Loop.
  while ( have_posts() ) : the_post(); ?>
<div class="background-color">
  <div class="about-header fadeIn" style="background: url(<?php echo $cfs->get('about_page_header_image'); ?>) no-repeat 50% 90%; background-size:cover">
    <div class="wrap about-header-content">
      <h1><?php echo $cfs->get('about_page_header_text'); ?></h1>
      <p><?php echo $cfs->get('about_page_location_text'); ?></p>
    </div>
  </div>
</div>

<div class="wrap bottom-feature">

  <div class="intro about-intro">
    <div class="intro-content">
      <h2>Overview</h2>
      <?php echo get_the_content() ?>
    </div>
  </div>

    <?php endwhile;
  ?>


  <div class="intro secondary-intro">
    <div class="intro-content">
      <h2>Recent Projects</h2>
    </div>
  </div>

  <?php
    $args = array(
      'post_type' => array( 'artist_residence', 'public_installations', 'exhibition_support'),
      'posts_per_page' => 12,
      'orderby' => 'date',
      'order' => 'asc',
      'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
      );
    query_posts($args);
    while(have_posts()): the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ):
    $imageabout = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $imageabout = $imageabout[0]; 
    endif; ?>

<div class="recent-projects">
  <div class="col3 image-block">
    <a href="<?php the_permalink(); ?>">
    <div class="image-block-background-image-wrapper">
      <div class="image-block-background-image fadeIn" style="background: url('<?php echo $imageabout; ?>') no-repeat 50% 50%; background-size:cover">
      </div>
    </div>
  </a>
      <div class="image-block-content">
        <div class="image-block-content-inner">
          <h3><?php the_title(); ?></h3>
        </div>
      </div>
  </div>
</div>


  <?php endwhile;?>

</div>

<?php
get_footer();
