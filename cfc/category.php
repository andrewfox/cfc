<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>


		<article class="main">

			<h1 class="page-title">
				<?php
					printf( __( '%s <span class="catarchives">Category Archives</span>', 'livework' ), '' . single_cat_title( '', false ) . '' );
				?>
			</h1>


			<?php get_sidebar( 'archives' ); ?>

				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop' );
				?>


		</article>


<?php get_footer(); ?>
