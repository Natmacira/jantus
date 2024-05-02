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

// Realiza la WP_Query para obtener los videos de la categoría "video"
$args = array(
    'post_type' => 'attachment',
	'post_status' => 'inherit',
	'tax_query' => array(
	    array(
	        'taxonomy' => 'video', // Nombre de la taxonomía personalizada
	        'field'    => 'slug', // Puedes usar 'id', 'slug' o 'name' dependiendo de cómo esté almacenado el término
	        'terms'    => 'video', // Término de la taxonomía personalizada
	    ),
	),
    'posts_per_page' => 5, // Obtener todos los videos de la categoría
);

$query = new WP_Query($args);

// Almacena las URLs de los videos en una variable PHP
$nfts_data = array();
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $nfts_data[] = array(
			'src' => wp_get_attachment_url(get_the_ID()),
			'type' => 'video'
		);
    }
}
wp_reset_postdata(); // Restaurar datos de la consulta original


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
	<button  class="play" id="play-btn">
		<p>play</p>
	</button>
</section>

</main>

<footer class="cybercafe-footer">
	<ul id="rrss">
		<li>
			<a href="https://www.instagram.com/cutreluxorjantus?igsh=MTRzZmtoZHl3MW5idQ==" target="_blank" aria-label="Ir al Instagram de Jantus">
				<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/cybercafe/instagram.png'); ?>" />
			</a>
		</li>
		<li>
			<a href="https://twitter.com/jantus_" target="_blank" aria-label="Ir al perfil de Twitter de Jantus">
				<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/cybercafe/twitter.png'); ?>" />
			</a>
		</li>
		<li>
			<a href="https://www.youtube.com/channel/UCJ9e4sO1nlxais79BWPRJ7g" target="_blank" aria-label="Ir al canal de Youtube de Jantus">
				<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/cybercafe/youtube.png'); ?>" />
			</a>
		</li>
	</ul>

	<a href="https://opensea.io/JANTUS" target="_blank" class="opensea-link">
		OpenSea - Jantus &gt;&gt;&gt;
	</a>
	<a href="https://zora.co/@marcosgcutre" target="_blank" class="opensea-link zora">
		Zora - Jantus &gt;&gt;&gt;
	</a>
</footer>
<?php wp_footer(); ?>
</body>

</html>