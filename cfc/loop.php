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


				<?php if ( get_field('post-url') ) { ?>

				<h2 class="entry-title"><a href="<?php the_field('post-url'); ?>" title="<?php printf( __('Read on other website', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
					<span class="post-title"><span>globe</span> <?php the_title(); ?></span>
				</a></h2>

				<?php } else { ?>

				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
					<span class="post-title"><?php the_title(); ?></span>
				</a></h2>

				<?php } ?>

				<span class="publication-date"><?php the_time('jS F Y') ?></span>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>



		
			</div><!-- /#post-n -->


						
	
<?php endwhile; else: ?>
		 <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>




	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>

			<nav id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older', 'livework' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer<span class="meta-nav">&rarr;</span>', 'livework' ) ); ?></div>
			</nav><!-- #nav-above -->

	<?php endif; ?>



