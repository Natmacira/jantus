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

	</header>
	<main>