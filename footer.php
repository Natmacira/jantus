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
			<li><a href="#" class="work-open">Work</a></li>
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('exhibitions'))); ?>">Exhibitions</a></li>
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('publications'))); ?>">Publications</a></li>
		</ul>
		<ul class="work-open-close">
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('paintings'))); ?>">Paintings</a></li>
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('clothes'))); ?>">CLOTHES</a></li>
			<li><a href="<?php echo esc_url(get_permalink(get_page_by_path('cybercafe'))); ?>">Cybercafe</a></li>
			<li><a href="https://www.voxels.com/spaces/f480639a-c4b2-4130-ba2b-8b2671303c42/play">VOXELS</a></li>
		</ul>
	</div>
	<div class="media-div">
		<ul class="ul-mail">
			<li><a href="mailto:jantus@gmail.com">jantus.co@gmail.com</a></li>
		</ul>
		<!-- <ul class="ul-social">
			<li><a href="https://opensea.io/JANTUS" target="_blank"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/home/item-opensee.svg'); ?>" alt="Link to opensee"></a></li>
			<li><a href="https://www.youtube.com/channel/UCJ9e4sO1nlxais79BWPRJ7g" target="_blank"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/home/item-youtube.svg'); ?>" alt="Link to youtube"></a></li>
			<li><a href="https://twitter.com/jantus_art" target="_blank"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/home/item-twiter.svg'); ?>" alt="Link to twitter" class="logo-x"></a></li>
		</ul> -->
	</div>
</footer>
<!-- <?php wp_footer(); ?> -->
</body>

</html>