<?php
/**
 * Template Name: Page - Home
 * Description: 
 *
 * @package WordPress
 * @subpackage CFC
 * @since Boilerplate 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		<article id="page-<?php the_ID(); ?>" class="main clearfix">


			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			} ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			
			<div id="people-slideshow">
				<ul id="people" class="slideshow clearfix">
	
				<?php query_posts(array('post_type' => 'people', 'category_name' => 'barrister', 'posts_per_page' => -1 , 'order' => 'ASC', 'orderby' => 'title', 'paged'=> $paged));
				while(have_posts()) : the_post();  ?>
	
					<li <?php post_class(); ?>>
						<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
							<?php if(has_post_thumbnail()) :
							the_post_thumbnail('thumbnail'); 
							endif;?>
							<span><?php the_title(); ?> <?php if( get_field('people-title') ): ?><span><?php the_field('people-title'); ?><?php endif; ?></span></span>
						</a>
					</li>
	
				<?php endwhile; ?>

					<li class="more">
						<a href="<?php echo get_page_link(14); ?>" title="See all Cloth Fair Chambers barristers" rel="bookmark">
							See all Barristers&hellip;
						</a>
					</li>
	
				</ul>

				<div class="arrow back off">back</div>
				<div class="arrow forward">forward</div>

			</div><!-- /.people-slideshow -->

			<?php wp_reset_query();?>






			<div id="homepage-lists">

				<div class="column">

					<h2><a href="<?php echo get_page_link(16); ?>">Publications</a></h2>
	
					<ul id="publications" class="clearfix">
	
					<?php query_posts(array('post_type' => 'publication', 'posts_per_page' => 2 , 'order' => 'DESC', 'orderby' => 'date', 'paged'=> $paged));
					while(have_posts()) : the_post();  ?>
		
						<li <?php post_class(); ?>>
							<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
								<?php if(has_post_thumbnail()) :
								the_post_thumbnail('medium'); 
								endif;?>
								<span class="publication-title"><?php the_title(); ?></span>
								<span class="publication-date"><?php the_time('F Y') ?></span>
							</a>
						</li>
	
					<?php endwhile; ?>
	
					</ul>
	
					<?php wp_reset_query();?>
				
				</div><!-- /.column -->


				<div class="column">

					<h2><a href="<?php echo get_page_link(8); ?>">Case News <em>&amp;</em> Press</a></h2>
	
					<ul id="news-list" class="clearfix">
	
					<?php query_posts(array('post_type' => 'post', 'posts_per_page' => 4 , 'order' => 'DESC', 'orderby' => 'date', 'paged'=> $paged));
					while(have_posts()) : the_post();  ?>
		
						<li <?php post_class(); ?>>

							<?php if ( get_field('post-url') ) { ?>

							<a href="<?php the_field('post-url'); ?>" title="<?php printf( __('Read on other website', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
								<span class="post-title"><span>globe</span> <?php the_title(); ?></span>
							</a>

							<?php } else { ?>

							<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
								<span class="post-title"><?php the_title(); ?></span>
							</a>

							<?php } ?>

								<span class="publication-date"><span>time</span> <?php the_time('F Y') ?></span>

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
 

						</li>
	
					<?php endwhile; ?>
	
					</ul>
	
					<?php wp_reset_query();?>

				</div><!-- /.column -->


				<div class="column">

					<h2><a href="<?php echo get_page_link(18); ?>">Contact details</a></h2>

					<ul id="contact-list" class="clearfix">

						<li class="contact-newsletter">
							<h3>Sign-up to the newsletter</h3>
							<p><input type="text" /> <input type="submit"/></p>
						</li>

						<li class="contact-address">
							<h3><span>location</span> Address</h3>
							<p>39-40 Cloth Fair,</p>
							<p>London</p>
							<p>EC1A 7NT</p>
							<p>United Kingdom</p>
						</li>

						<li class="contact-address">
							<h3>Contact</h3>
							<p><a href=""><span>telephone</span> 020 7710 6444</a></p>
							<p><a href=""><span>email</span> senior clerk</a></p>
							<p><a href=""><span>email</span> office manager</a></p>
						</li>

					</ul>

				</div><!-- /.column -->

			</div> <!-- /#homepage-lists -->





		</article><!-- #page-## -->


<?php endwhile; ?>





<?php get_footer(); ?>