<?php
/**
 * The Template for displaying all single blog posts.
 *
 * @package WordPress
 * @subpackage CFC
 * @since Boilerplate 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



		<article id="publication-<?php the_ID(); ?>" class="single-publication main clearfix">


			<h1 class="page-title"><?php the_title(); ?> <?php the_field('people-title'); ?></h1>

			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail('medium'); ?>
			<?php } ?>


			<div class="people-content">

				<?php if($post->post_content=="") : ?>
				<!-- No content -->
				<?php else : ?>
				<?php the_content(); ?>
				<?php endif; ?>

			</div> <!-- /.people-content -->



			<ul class="people-details-nav">
				<?php if (get_field('people-directories_information')): ?><li><a href="#people-directories_information">Directories Information</a></li><?php endif; ?>
				<?php if (get_field('people-area_of_practice')): ?><li><a href="#people-area_of_practice">Areas of Practice</a></li><?php endif; ?>
			</ul>



			<div class="people-details">


				<?php if (get_field('people-directories_information')): ?>
				<div id="people-directories_information">
					<h2>Directories Information</h2>
					<?php the_field('people-directories_information'); ?>
				</div>
				<?php endif; ?>


				<?php if (get_field('people-area_of_practice')): ?>
				<div id="people-area_of_practice">
					<h2>Areas of Practice</h2>
					<?php the_field('people-area_of_practice'); ?>
				</div>
				<?php endif; ?>


			</div> <!-- /.people-details -->



		</article>


<?php endwhile; ?>


<?php get_footer(); ?>
