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
				
				<?php $posts = get_field('post-people');
				if( $posts ): ?>
					<ul>
					<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
					    <li>
					    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					    </li>
					<?php endforeach; ?>
					</ul>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			
				<?php the_content(); ?>
				
			</div> <!-- /.entry-content -->


		</article>


<?php endwhile; ?>


<?php get_footer(); ?>
