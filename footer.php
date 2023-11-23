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
	<ul class="main-menu">
		<li><a href="#" class="work-open">Work</a></li>
		<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('exhibitions'))); ?>">Exhibitions</a></li>
		<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('publications'))); ?>">Publications</a></li>
	</ul>
	<ul class="work-open-close">
		<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('paintings'))); ?>">Paintings</a></li>
		<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('clothes'))); ?>">CLOTHES</a></li>
		<li><a href="https://jantus.co/">Cybercafe</a></li>
		<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('clothes'))); ?>">VOXELS</a></li>
	</ul>
</footer>
<!-- <?php wp_footer(); ?> -->
</body>

</html>