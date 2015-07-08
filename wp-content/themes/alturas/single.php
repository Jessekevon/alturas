<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

				<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				$image = $image[0]; ?>

					<div class="landing-background-image" style="background: url('<?php echo $image; ?>') no-repeat 50% 50%; background-size:cover">
					</div>

				<?php endif; ?>


					<div class="single-background">
					  <div class="single-image-content-wrapper">
					    <h1><?php the_title(); ?></h1>
					    <p>Sawtooth Mountains, Idaho</p>
					    <button><p>View Images</p></button>
					  </div>
					</div>

					<div class="overlay">
						<img class="close" src="http://cdn.flaticon.com/png/256/8915.png" alt="" />
						<div class="slider fade">
							<?php foreach ($cfs->get('single_post_slider') AS $sps): ?> <!-- open external loop -->
								<div>
									<div class="image"><img src="<?php echo $sps['single_post_slider_image']?>"/></div>
									<p><?php echo $sps['single_post_slider_title']?></p>
									<div class="slider-info">
										<p><?php echo $sps['single_post_slider_location']?></p>
										<p><?php echo $sps['single_post_slider_year']?></p>
									</div>
								</div>
								<?php endforeach ?>
							</div>
					</div>

					<div class="wrap body-content">
					  <div class="intro">
					    <div class="intro-content">
					      <h2><?php the_title(); ?></h2>
					    </div>
					  </div>
					  <div class="overview">
					  	<h3>Overview</h3>
						  	<?php the_content( $more_link_text, $stripteaser ); ?>
					  	</div>
					  <div class="sidebar">
					  	<h3>Updates</h3>
					  	<h6>Tom Otterness opens 25 year retrospective at The Institute of Contemporary Art, Boston.</h6>
					  	<h6>Tom Otterness opens 25 year retrospective at The Institute of Contemporary Art, Boston.</h6>
					  	<h6>Tom Otterness opens 25 year retrospective at The Institute of Contemporary Art, Boston.</h6>
					  	<h6>Tom Otterness opens 25 year retrospective at The Institute of Contemporary Art, Boston.</h6>
					  </div>
					</div>






				<?php endwhile;
			?>

<?php
get_footer();
