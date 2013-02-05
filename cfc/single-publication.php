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



		<article id="single-<?php the_ID(); ?>" class="main clearfix">


			<p class="page-title"><a href="<?php echo get_page_link(16); ?>">Publications</a></p>
			<h1 class="page-title"><?php the_title(); ?></h1>

			<?php if ( has_post_thumbnail() ) { ?>

			<a href="<?php the_field('publication-file'); ?>" class="publication-image">
				<?php the_post_thumbnail('medium'); ?>
				<span>Download &lsquo;<?php the_title(); ?>&rsquo;</span>
			</a>

			<?php } ?>



			<div class="entry-content">

				<p class="publication-excerpt"><?php the_excerpt(); ?></p>

				<p class="publication-date"><?php the_time('F Y') ?></p>

				<?php the_content(); ?>

				<p class="download"><a href="<?php the_field('publication-file'); ?>">Download &lsquo;<?php the_title(); ?>&rsquo;</a></p>

			</div> <!-- /.entry-content -->




		</article>


<?php endwhile; ?>


<?php get_footer(); ?>
