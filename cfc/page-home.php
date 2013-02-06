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


			<ul id="people" class="slideshow clearfix">

			<?php query_posts(array('post_type' => 'people', 'posts_per_page' => -1 , 'order' => 'ASC', 'orderby' => 'title', 'paged'=> $paged));
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




		</article><!-- #page-## -->


<?php endwhile; ?>





<?php get_footer(); ?>