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


			<h1 class="page-title"><?php the_title(); ?></h1>
			<p class="publication-date"><?php the_time('F Y') ?></p>

			<?php if ( has_post_thumbnail() ) { ?>

			<a href="<?php the_field('publication-file'); ?>" class="publication-image">
				<?php the_post_thumbnail('medium'); ?>
				<span class="download">View &lsquo;<?php the_title(); ?> [PDF] &rsquo;</span>
			</a>

			<?php } ?>



			<div class="entry-content">

				<h3>Excerpt:</h3>
				
				<?php the_content(); ?>

				<p><a href="<?php the_field('publication-file'); ?>" class="download">View &lsquo;<?php the_title(); ?> [PDF] &rsquo;</a></p>

			</div> <!-- /.entry-content -->


		</article>


<?php endwhile; ?>


<?php get_footer(); ?>
