<?php
/**
 * Template Name: Page - Clerks
 * Description: 
 *
 * @package WordPress
 * @subpackage Livework
 * @since Boilerplate 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		<article id="page-<?php the_ID(); ?>" class="main clearfix">


			<h1 class="page-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->


			<ul id="people" class="clearfix">

			<?php query_posts(array('post_type' => 'people', 'category_name' => 'clerk', 'posts_per_page' => -1 , 'order' => 'ASC', 'orderby' => 'title', 'paged'=> $paged));
			while(have_posts()) : the_post();  ?>

				<li <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
						<?php if(has_post_thumbnail()) :
						the_post_thumbnail('thumbnail'); 
						endif;?>
						<span><?php the_title(); ?> <?php if( get_field('people-title') ): ?><span><?php the_field('people-title'); ?><?php endif; ?></span></span>
					</a>
				</li>

			<?php endwhile; ?>

			</ul>

			<?php wp_reset_query();?>



			<div id="quote">
				<?php if( get_field('quote-text') ): ?>
				<blockquote>
					<div class="quotation">
						<?php the_field('quote-text'); ?>
					</div>
					<q><?php the_field('quote-attribution'); ?></q>
				</blockquote>
				<?php endif; ?>
			</div>



		</article><!-- #page-## -->


<?php endwhile; ?>



<?php get_footer(); ?>