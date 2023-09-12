<?php
/**
 * The footer template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jantus
 */

?>
		</main>
		<footer  class="site-footer">
			<ul>
				<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('work'))); ?>">Work</a></li>
				<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('exhibitions'))); ?>">Exhibitions</a></li>
				<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('publications'))); ?>">Publications</a></li>
			</ul>
		</footer>
		<!-- <?php wp_footer(); ?> -->
	</body>
</html>
F