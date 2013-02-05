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
					<a href="">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/historyx2.jpg" alt="photo: Cloth Fair Chambers - a History" />
						Cloth Fair Chambers - A History
					</a>
				</h3>
				<p>Duis semper viverra neque, in commodo nisi malesuada nec. Fusce tincidunt venenatis est, id luctus lorem rhoncus nec. Nulla sed erat lacus. <a href="">More&hellip;</a></p>
			</div>

			<div id="quote">
				<?php if( get_field('quote-text') ): ?>
				<blockquote>
					<div><?php the_field('quote-text'); ?></div>
					<div><?php the_field('quote-attribution'); ?></div>
				</blockquote>
				<?php endif; ?>
			</div>

		</aside>
