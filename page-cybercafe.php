<?php

/**
 * The template for displaying "cybercafe" page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jantus
 */

remove_action('wp_enqueue_scripts', 'jantus_enqueue_scripts');
$body_class = "page page-cybercafe";


$nfts_data = array(
	array(
		'src' => get_stylesheet_directory_uri() . '/img/cybercafe/cybercafe-video-1.mp4',
		'type' => 'video'
	),
	array(
		'src' => get_stylesheet_directory_uri() . '/img/cybercafe/cybercafe-video-2.mp4',
		'type' => 'video'
	),
	array(
		'src' => get_stylesheet_directory_uri() . '/img/cybercafe/cybercafe-video-3.mp4',
		'type' => 'video'
	),
	array(
		'src' => get_stylesheet_directory_uri() . '/img/cybercafe/cybercafe-video-4.mp4',
		'type' => 'video'
	),
	array(
		'src' => get_stylesheet_directory_uri() . '/img/cybercafe/cybercafe-video-5.mp4',
		'type' => 'video'
	),
	array(
		'src' => get_stylesheet_directory_uri() . '/img/cybercafe/cybercafe-video-6.mp4',
		'type' => 'video'
	),
	array(
		'src' => get_stylesheet_directory_uri() . '/img/cybercafe/cybercafe-video-7.mp4',
		'type' => 'video'
	)
);


wp_enqueue_script('cybercafe', get_stylesheet_directory_uri() . '/js/cybercafe.js', array(), '1.0.0', true);
wp_localize_script('cybercafe', 'nfts_data', $nfts_data);

wp_enqueue_style('cybercafe_css', get_stylesheet_directory_uri() . '/css/cybercafe.min.css', array(), '1.0.0', 'all');

get_header();

?>
<h1>cybercafe</h1>
<h2 id="loading-message">Loading...</h2>
<div id="layer-hue">
	<div id="layer-brightness">
		<div id="layer-blur">
			<section id="nft"></section>
		</div>
	</div>
</div>

<section id="controls">
	<article id="control-panel">
		<button id="hide-controls" class="show-hide-controls">hide controls</button>
		<button id="random-btn">next</button>

		<label for="hue-control">Color
			<input id="hue-control" type="range" min="0" max="300" value="0" />
		</label>
		<label for="brightness-control">Brillo
			<input id="brightness-control" type="range" step="0.1" min="0.3" max="1.2" value="1" />
		</label>
		<label for="blur-control">Blur
			<input id="blur-control" type="range" min="0" max="8" value="0" />
		</label>
		<label for="volume-control">
			Volumen
			<input id="volume-control" type="range" step="0.1" min="0" max="1" value="1" />
		</label>

		<a href="https://opensea.io/JANTUS" target="_blank" rel="noopener noreferrer" id="opensea-link">opensea</a>
	</article>
	<button class="show-hide-controls chevron-button" aria-label="Mostrar controles">
		<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/cybercafe/show-controls.png'); ?>">
	</button>
</section>

</main>

<footer class="cybercafe-footer">
	<ul id="rrss">
		<!-- <li>
			<a href="https://www.instagram.com/jantus_" target="_blank" aria-label="Ir al Instagram de Jantus">
				<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/cybercafe/instagram.png'); ?>" />
			</a>
		</li>
		<li>
			<a href="https://twitter.com/jantus_art" target="_blank" aria-label="Ir al perfil de Twitter de Jantus">
				<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/cybercafe/twitter.png'); ?>" />
			</a>
		</li> -->
		<li>
			<a href="https://www.youtube.com/channel/UCJ9e4sO1nlxais79BWPRJ7g" target="_blank" aria-label="Ir al canal de Youtube de Jantus">
				<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/cybercafe/youtube.png'); ?>" />
			</a>
		</li>
	</ul>

	<a href="https://opensea.io/JANTUS" target="_blank" class="opensea-link">
		OpenSea - Jantus &gt;&gt;&gt;
	</a>
</footer>
<?php wp_footer(); ?>
</body>

</html>