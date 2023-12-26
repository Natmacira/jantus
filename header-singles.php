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
	<?php $favicon_folder_url = get_stylesheet_directory_uri() . '/img/favicon/'; ?>
	<link rel="shortcut icon" href="<?php echo esc_url( $favicon_folder_url ); ?>favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( $favicon_folder_url ); ?>apple-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo esc_url( $favicon_folder_url ); ?>favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo esc_url( $favicon_folder_url ); ?>android-icon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo esc_url( $favicon_folder_url ); ?>favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo esc_url( $favicon_folder_url ); ?>favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo esc_url( $favicon_folder_url ); ?>manifest.json">	<?php wp_site_icon(); ?>
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