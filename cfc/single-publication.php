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



			<ul id="publications" class="mini clearfix">

			<?php query_posts(array('post_type' => 'publication', 'posts_per_page' => -1 , 'order' => 'DESC', 'orderby' => 'date', 'paged'=> $paged));
			while(have_posts()) : the_post();  ?>

				<li <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
						<span class="publication-title"><?php the_title(); ?></span>
						<span class="publication-date"><?php the_time('F Y') ?></span>
					</a>
				</li>

			<?php endwhile; ?>

			</ul>




		</article>


<?php endwhile; ?>


<?php get_footer(); ?>
