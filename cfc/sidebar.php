<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage CFC
 * @since Boilerplate 1.0
 */
?>


		<aside>
		
			<div id="history-ad">
				<h3>
					<a href="<?php echo get_page_link(62); ?>">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/historyx2.jpg" alt="photo: Cloth Fair Chambers - a History" />
						Cloth Fair Chambers - A History
					</a>
				</h3>
				<p>Duis semper viverra neque, in commodo nisi malesuada nec. Fusce tincidunt venenatis est, id luctus lorem rhoncus nec. Nulla sed erat lacus. <a href="<?php echo get_page_link(62); ?>">More&hellip;</a></p>
			</div>

			<div id="quote">
				<?php if( get_field('quote-text') ): ?>
				<blockquote>
					<div class="quotation">
						<?php the_field('quote-text'); ?>
					</div>
					<q><?php the_field('quote-attribution'); ?></q>
				</blockquote>
				<?php endif; ?>
			</div>

		</aside>
