<?php
/**
 * The Template for displaying all single blog posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		<article id="single-<?php the_ID(); ?>" class="main clearfix">


			<h1 class="page-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				<?php the_content(); ?>
			</div> <!-- /.entry-content -->


		</article>


<?php endwhile; ?>


<?php get_footer(); ?>
