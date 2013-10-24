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
					<p><a href="https://mapsengine.google.com/map/edit?mid=z3NW8LAfVifg.kSEcrw6Jz5DI"><span class="ss">map</span> View on Google Maps</a></p>
					<p>DX: 321 Chancery Lane</p>
				</li>

				<li class="contact-details">
					<h3>Contact</h3>
					<p><a href=""><span class="ss">telephone</span> 020 7710 6444</a></p>
					<p><a href=""><span class="ss">email</span> senior clerk</a></p>
					<p><a href=""><span class="ss">email</span> office manager</a></p>
				</li>

				<li class="contact-map">
					<iframe src="http://mapsengine.google.com/map/embed?mid=z3NW8LAfVifg.kSEcrw6Jz5DI&z=4"></iframe>
				</li>

			</ul>



			<ul id="page-images" class="clearfix">
				<li><img src="<?php the_field('global-img-1', 'option'); ?>" /></li>
				<li><img src="<?php the_field('global-img-2', 'option'); ?>" /></li>
				<li><img src="<?php the_field('global-img-3', 'option'); ?>" /></li>
				<li><img src="<?php the_field('global-img-4', 'option'); ?>" /></li>
			</ul>



		</article><!-- #page-## -->


<?php endwhile; ?>





<?php get_footer(); ?>
<?php get_footer(); ?>