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


			<h1 class="page-title"><?php the_title(); ?> <?php the_field('people-title'); ?></h1>

			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail('medium'); ?>
			<?php } ?>


			<div class="people-content">

				<?php if($post->post_content=="") : ?>
				<!-- No content -->
				<?php else : ?>
				<?php the_content(); ?>
				<?php endif; ?>

			</div> <!-- /.people-content -->



			<ul class="people-details-nav">
				<?php if (get_field('people-directories_information')): ?><li><a href="#people-directories_information">Directories Information</a></li><?php endif; ?>
				<?php if (get_field('people-area_of_practice')): ?><li><a href="#people-area_of_practice">Areas of Practice</a></li><?php endif; ?>
				<li><a href="#people-case_news"><?php the_title(); ?> Case News &amp; Press</a></li>
			</ul>



			<div class="people-details">


				<?php if (get_field('people-directories_information')): ?>
				<div id="people-directories_information" class="people-tab">
					<h2 class="tab-title">Directories Information</h2>
					<?php the_field('people-directories_information'); ?>
				</div>
				<?php endif; ?>


				<?php if (get_field('people-area_of_practice')): ?>
				<div id="people-area_of_practice" class="people-tab">
					<h2 class="tab-title">Areas of Practice</h2>
					<?php the_field('people-area_of_practice'); ?>
				</div>
				<?php endif; ?>


				<div id="people-case_news" class="people-tab">
					<h2 class="tab-title"><?php the_title(); ?> Case News &amp; Press</h2>
					<?php
						$news = get_posts(array(
							'post_type' => 'post',
							'meta_query' => array(
								array(
									'key' => 'post-people', // name of custom field
									'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							)
						));
					?>
					<?php if( $news ): ?>
						<ul>
						<?php foreach( $news as $new ): ?>
							<li>
							<?php if ( get_field('post-url', $new->ID) ) { // external link ?>
			
								<a href="<?php the_field('post-url',$new->ID); ?>" rel="bookmark">
									<span class="post-title"><?php echo get_the_title( $new->ID ); ?>&nbsp;<span class="ss">redirect</span></span>
								</a>
			
							<?php } elseif ( in_category('4', $new->ID) ) { // short ?> 
							
								<?php echo get_the_title( $new->ID ); ?>
			
							<?php } else { // regular ?> 
			
								<a href="<?php echo get_permalink( $new->ID ); ?>" rel="bookmark">
									<?php echo get_the_title( $new->ID ); ?>
								</a>
			
							<?php } ?> 
							</li>
						<?php endforeach; ?>








						</ul>
					<?php endif; ?>
				</div>


			</div> <!-- /.people-details -->




		</article>


<?php endwhile; ?>


<?php get_footer(); ?>
