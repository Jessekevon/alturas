<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<div class="landing">
  
  <div class="slider fade1">
    <?php $posts_left = $cfs->get('homepage_gallery_left'); ?>
    <?php foreach ($posts_left as $post_id_left) : ?>
    <?php $background_left = wp_get_attachment_image_src( get_post_thumbnail_id($post_id_left), 'full' ); ?>
    <?php $post_left = get_post( $post_id_left ); ?>
    <div class="landing-background-image" style="background: url(<?php echo $background_left['0']?>) no-repeat 50% 50%; background-size:cover">
      <div class="image-content-wrapper">
        <h2><?php echo get_the_title($post_id_left); ?></h2>
        <p>Artist In Residence</p>
      </div>
    </div>
  <?php endforeach; ?>
  </div>

  <div class="slider fade2">
    <?php $posts_right = $cfs->get('homepage_gallery_right'); ?>
    <?php foreach ($posts_right as $post_id_right) : ?>
    <?php $background_right = wp_get_attachment_image_src( get_post_thumbnail_id($post_id_right), 'full' ); ?>
    <?php $post_right = get_post( $post_id_right ); ?>
    <div class="landing-background-image" style="background: url(<?php echo $background_right['0']?>) no-repeat 50% 50%; background-size:cover">
      <div class="image-content-wrapper">
        <h2><?php echo get_the_title($post_id_right); ?></h2>
        <p>Artist In Residence</p>
      </div>
    </div>
  <?php endforeach; ?>
  </div>

</div>

<?php
get_footer();
