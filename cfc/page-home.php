<?php
/**
 * Template Name: Page - Home
 * Description: 
 *
 * @package WordPress
 * @subpackage CFC
 * @since Boilerplate 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		<article id="page-<?php the_ID(); ?>" class="main clearfix">


			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			} ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			
			<div id="people-slideshow">
				<ul id="people" class="slideshow clearfix">
	
				<?php query_posts(array('post_type' => 'people', 'category_name' => 'barrister', 'posts_per_page' => -1 , 'order' => 'ASC', 'orderby' => 'title', 'paged'=> $paged));
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

					<li class="more">
						<a href="<?php echo get_page_link(14); ?>" title="See all Cloth Fair Chambers barristers" rel="bookmark">
							See all Barristers&hellip;
						</a>
					</li>
	
				</ul>

				<div class="arrow back off">back</div>
				<div class="arrow forward">forward</div>

			</div><!-- /.people-slideshow -->

			<?php wp_reset_query();?>



		</article><!-- #page-## -->


<?php endwhile; ?>





<?php get_footer(); ?>