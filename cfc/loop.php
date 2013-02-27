<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage CFC
 * @since livework 1.0
 */
?>


<?php
	/* Start the Loop.
	 */ 
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>


				<?php if ( get_field('post-url') ) { // external link ?>

				<h2 class="entry-title">
					<a href="<?php the_field('post-url'); ?>" title="<?php printf( __('Read on other website', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
						<span class="post-title"><?php the_title(); ?>&nbsp;<span class="ss">redirect</span></span>
					</a>
				</h2>

				<?php } elseif ( in_category('4') ) { // short ?> 
				
				<h2 class="entry-title">
					<?php the_title(); ?>
				</h2>

				<?php } else { // regular ?> 

				<h2 class="entry-title">
					<a href="<?php the_field('post-url'); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h2>

				<?php } ?>

				<p class="publication-date"><?php the_time('jS F Y') ?></p>

				<?php if($post->post_content=="") : ?>

				<!-- No content -->

				<?php else : ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<?php endif; ?>

						<?php $people = get_field('post-people'); ?>
						<?php if( $people ): ?>

							<ul class="post-people">

								<li>Barristers:</li>

								<?php foreach( $people as $person ): ?>

								<li>

									<a href="<?php echo get_permalink( $person->ID ); ?>">

										<?php
										$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $person->ID ), 'thumbnail', ''  ); // returns an array
										?>
										<img src="<?php echo $image_attributes[0]; ?>" alt="Photo: <?php echo get_the_title( $person->ID ); ?>" />

										<span><?php echo get_the_title( $person->ID ); ?> <?php if( get_field('people-title', $person->ID) ): ?><span><?php the_field('people-title', $person->ID ); ?><?php endif; ?></span>

									</a>

								</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
 

			</div><!-- /#post-n -->


						
	
<?php endwhile; else: ?>
		 <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>




	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>

		<nav class="page-navigation">
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav ss">back</span>Older', 'cfc' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( '<span class="meta-nav ss">forward</span>Newer', 'cfc' ) ); ?></div>
		</nav><!-- .page-navigation -->

	<?php endif; ?>



