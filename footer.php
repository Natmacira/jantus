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
<footer class="site-footer">
	<div>
		<ul class="main-menu">
			<li><a href="#12" class="work-open">Work</a></li>
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('exhibitions'))); ?>">Exhibitions</a></li>
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('publications'))); ?>">Publications</a></li>
			<li><a href="mailto:jantus.co@gmail.com">jantus.co@gmail.com</a></li>
		</ul>
		<ul class="work-open-close">
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('paintings'))); ?>">Paintings</a></li>
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('clothes'))); ?>">CLOTHES</a></li>
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('cybercafe'))); ?>">Cybercafe</a></li>
			<li><a href="https://www.voxels.com/spaces/f480639a-c4b2-4130-ba2b-8b2671303c42/play">VOXELS</a></li>
		</ul>
	</div>
	
</footer>
<!-- <?php wp_footer(); ?> -->
</body>

</html>