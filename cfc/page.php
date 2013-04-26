<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage CFC
 * @since Boilerplate 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		<article id="page-<?php the_ID(); ?>" class="main clearfix">


			<h1 class="page-title"><?php the_title(); ?></h1>

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			} ?>

			<div class="entry-content w-sidebar">
				<?php the_content(); ?>
			</div><!-- .entry-content -->


			<?php get_sidebar(); ?>



			<ul id="page-images" class="clearfix">
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-1.jpg" alt="Photo: meeting"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-2.jpg" alt="Photo: architectural detail"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-3.jpg" alt="Photo: architectural detail"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-4.jpg" alt="Photo: notepad"/></li>
			</ul>



		</article><!-- #page-## -->


<?php endwhile; ?>





<?php get_footer(); ?>