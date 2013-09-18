<?php
/**
 * Template Name: Page - Publications
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


			<ul id="publications" class="clearfix">

			<?php query_posts(array('post_type' => 'publication', 'posts_per_page' => 6 , 'order' => 'DESC', 'orderby' => 'date', 'paged'=> $paged));
			while(have_posts()) : the_post();  ?>

				<li <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
						<?php if(has_post_thumbnail()) :
						the_post_thumbnail('medium'); 
						endif;?>
						<span class="publication-text">
							<span class="publication-title"><?php the_title(); ?></span>
							<!-- <span class="publication-excerpt"><?php the_excerpt(); ?></span> -->
							<span class="publication-date"><?php the_time('F Y') ?></span>
						</span>
					</a>
				</li>

			<?php endwhile; ?>

			</ul>

			<?php wp_reset_query();?>


		</article><!-- #page-## -->


<?php endwhile; ?>



<?php get_footer(); ?>