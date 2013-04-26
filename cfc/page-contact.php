<?php
/**
 * Template Name: Page - Contact
 * Description: 
 *
 * @package WordPress
 * @subpackage Livework
 * @since Boilerplate 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		<article id="page-<?php the_ID(); ?>" class="main clearfix">


			<h1 class="page-title"><?php the_title(); ?></h1>

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			} ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			<ul id="contact-list">

					<li class="contact-address">
					<h3>Address</h3>
					<p>39-40 Cloth Fair,</p>
					<p>London</p>
					<p>EC1A 7NT</p>
					<p>United Kingdom</p>
				</li>

				<li class="contact-address">
					<h3>Contact</h3>
					<p><a href=""><span class="ss">telephone</span> 020 7710 6444</a></p>
					<p><a href=""><span class="ss">email</span> senior clerk</a></p>
					<p><a href=""><span class="ss">email</span> office manager</a></p>
				</li>

			</ul>



			<ul id="page-images" class="clearfix">
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-1.jpg" alt="Photo: meeting"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-2.jpg" alt="Photo: architectural detail"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-3.jpg" alt="Photo: architectural detail"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-4.jpg" alt="Photo: notepad"/></li>
			</ul>



		</article><!-- #page-## -->


<?php endwhile; ?>





<?php get_footer(); ?>
<?php get_footer(); ?>