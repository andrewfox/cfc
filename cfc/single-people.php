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



			<div class="entry-content">

				<p class="publication-excerpt"><?php the_excerpt(); ?></p>

				<?php the_content(); ?>

				<div class="people-directories_information">
					<h2>Directories Information</h2>
					<?php the_field('people-directories_information'); ?>
				</div>

				<div class="people-area_of_practice">
					<h2>Areas of Practice</h2>
					<?php the_field('people-area_of_practice'); ?>
				</div>


			</div> <!-- /.entry-content -->


		</article>


<?php endwhile; ?>


<?php get_footer(); ?>
