<?php

/**
 * The header template.
 *
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- Site favicon -->
	<!-- 		<link rel="icon" href="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/favicon.ico'); ?>" type="image/x-icon"> -->
	<?php wp_site_icon(); ?>
	<?php wp_head(); ?>
</head>

<body class="<?php echo $body_class ?>">
	<header>
		<section class="titles">
			<h1>Cutre Lux Jantus</h1>
			<?php
			$post_type = get_post_type(); // Obtiene el nombre del tipo de entrada personalizada del post actual
			$post_type_object = get_post_type_object($post_type); // Obtiene el objeto del tipo de entrada personalizada

			// Verifica si se encontró el objeto del tipo de entrada personalizada
			if ($post_type_object) {
				$post_type_name = $post_type_object->labels->name; // Obtiene el nombre del tipo de entrada personalizada
				echo '<h2>' . esc_html($post_type_name) . '</h2>';
			}
			?>
		</section>
		<section class="back-btn"><a href="javascript:history.back()"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/iconos/Atras.svg'); ?>" alt="Botón para volver atrás"></a></section>

	</header>
	<main>