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


			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			} ?>


			<h1 class="page-title"><?php the_title(); ?></h1>

			<?php if($post->post_content=="") : ?>
			<!-- No content -->
			<?php else : ?>
			<div class="entry-content">

				<?php the_content(); ?>

			</div><!-- .entry-content -->
			<?php endif; ?>


			<ul id="clerks" class="clearfix">

			<?php query_posts(array('post_type' => 'people', 'category_name' => 'clerk', 'posts_per_page' => -1 , 'order' => 'ASC', 'orderby' => 'date', 'paged'=> $paged));
			while(have_posts()) : the_post();  ?>

				<li <?php post_class(); ?>>
					<?php if(has_post_thumbnail()) :
						the_post_thumbnail('thumbnail'); 
					endif;?>
					<h3><?php the_title(); ?> <?php if( get_field('people-title') ): ?><span><?php the_field('people-title'); ?><?php endif; ?></span></h3>

					<?php if( get_field('people-telephone') ): ?>
					<p class="telephone"><span class="ss">telephone</span> <?php the_field('people-telephone'); ?></p>
					<?php endif; ?>

					<?php if( get_field('people-telephone2') ): ?>
					<p class="telephone2"><span class="ss">telephone</span> out-of-hours <?php the_field('people-telephone2'); ?></p>
					<?php endif; ?>

					<?php if( get_field('people-email') ): ?>
					<p class="email"><a href="mailto:<?php the_field('people-email'); ?>"><span class="ss">email</span> <?php the_field('people-email'); ?></a></p>
					<?php endif; ?>

					<?php if($post->post_content=="") : ?>
	
					<!-- No content -->
	
					<?php else : ?>
	
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
	
					<?php endif; ?>


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