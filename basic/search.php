<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>


		<article id="page-search" class="main clearfix">


			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'cfc' ), '' . get_search_query() . '' ); ?></h1>

			<div class="entry-content">
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
			</div><!-- .entry-content -->


		</article><!-- #page-## -->


<?php else : ?>

		<article id="page-search" class="main clearfix">

			<h1 class="page-title"><?php _e( 'Nothing Found', 'cfc' ); ?></h1>

			<div class="entry-content">
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'boilerplate' ); ?></p>
					<?php get_search_form(); ?>
			</div><!-- .entry-content -->

		</article><!-- #page-search -->


<?php endif; ?>


<?php get_sidebar(); ?>


<?php get_footer(); ?>
