<?php

/**
 * Jantus Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jantus_Theme
 */

if (!defined('JANTUS_VERSION')) {
	define('JANTUS_VERSION', '1.5.0');
}

function jantus_enqueue_scripts() {
	wp_enqueue_style('jantus', get_stylesheet_directory_uri() . '/style.min.css', array(), JANTUS_VERSION);
	wp_enqueue_script('jantus', get_stylesheet_directory_uri() . '/js/main.js', array(), JANTUS_VERSION);
	wp_enqueue_script('jantus-publications', get_stylesheet_directory_uri() . '/js/publications.js', array(), JANTUS_VERSION);
	wp_enqueue_script('jantus-bundle-min', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), JANTUS_VERSION);
	wp_enqueue_script('jantus-bundle-min-map', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js.map', array(), JANTUS_VERSION);
	wp_enqueue_script('jantus-home', get_stylesheet_directory_uri() . '/js/home.js', array(), JANTUS_VERSION);
}

add_action( 'wp_enqueue_scripts', 'jantus_enqueue_scripts' );

add_action(
	'init',
	function () {
		// all actions related to emojis.
		remove_action('admin_print_styles', 'print_emoji_styles');
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('wp_print_styles', 'print_emoji_styles');

		remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
		remove_filter('the_content_feed', 'wp_staticize_emoji');
		remove_filter('comment_text_rss', 'wp_staticize_emoji');

		// filter to remove TinyMCE emojis.
		add_filter(
			'tiny_mce_plugins',
			function ($plugins) {
				if (is_array($plugins)) {
					return array_diff($plugins, array('wpemoji'));
				} else {
					return array();
				}
			}
		);

		// add action to create a custom post type
		register_post_type(
			'painting',
			array(
				'labels'      => array(
					'name'          => __('Paintings', 'textdomain'),
					'singular_name' => __('Painting', 'textdomain'),
					'add_new_item' => __('Add New Painting'),
					'new_item' => __('New Painting'),
					'edit_item' => __('Edit Painting'),
					'view_item' => __('View Painting'),
					'all_items' => __('All Paintings'),
					'search_items' => __('Search Paintings'),
					'not_found' => __('No Paintings found.'),
				),
				'public'      => true,
				'has_archive' => true,
				'supports'    => array(
					'title',
					'thumbnail'
				),
				//create meta box
				'register_meta_box_cb' => function () {
					add_meta_box(
						'year',                 	// Unique ID
						'Year',      				// Box title
						function($post){
							$year = get_post_meta($post->ID, 'year', true);
							?><input type="text" name="year" id="year" class="postbox" value="<?php echo(esc_attr($year))?>"><?php
						},
						'painting' 					// Post type
					);
					add_meta_box(
						'technique',                 	// Unique ID
						'Technique',      				// Box title
						function($post){
							$technique = get_post_meta($post->ID, 'technique', true);
							?><input type="text" name="technique" id="technique" class="postbox" value="<?php echo(esc_attr($technique))?>"><?php
						},
						'painting' 					// Post type
					);
					add_meta_box(
						'size',                 	// Unique ID
						'Size',      				// Box title
						function($post){
							$size = get_post_meta($post->ID, 'size', true);
							?><input type="text" name="size" id="size" class="postbox" value="<?php echo(esc_attr($size))?>"><?php
						},
						'painting' 					// Post type
					);

				}
			)
		);
		register_post_type(
			'cloth',
			array(
				'labels'      => array(
					'name'          => __('Clothes', 'textdomain'),
					'singular_name' => __('Clothes', 'textdomain'),
					'add_new_item' => __('Add New Cloth'),
					'new_item' => __('New Cloth'),
					'edit_item' => __('Edit Cloth'),
					'view_item' => __('View Cloth'),
					'all_items' => __('All Clothes'),
					'search_items' => __('Search Clothes'),
					'not_found' => __('No Clothes found.'),
				),
				'public'      => true,
				'has_archive' => true,
				'supports'    => array(
					'title',
					'thumbnail'
				),
				//create meta box
				'register_meta_box_cb' => function () {
					add_meta_box(
						'author',                 	// Unique ID
						'Author',      				// Box title
						function($post){
							$author = get_post_meta($post->ID, 'author', true);
							?><input type="text" name="author" id="author" class="postbox" value="<?php echo(esc_attr($author))?>"><?php
						},
						'cloth' 					// Post type
					);
					add_meta_box(
						'year',                 	// Unique ID
						'Year',      				// Box title
						function($post){
							$year = get_post_meta($post->ID, 'year', true);
							?><input type="text" name="year" id="year" class="postbox" value="<?php echo(esc_attr($year))?>"><?php
						},
						'cloth' 					// Post type
					);
					add_meta_box(
						'code',                 	// Unique ID
						'Code',      				// Box title
						function($post){
							$code = get_post_meta($post->ID, 'code', true);
							?><input type="text" name="code" id="code" class="postbox" value="<?php echo(esc_attr($code))?>"><?php
						},
						'cloth' 					// Post type
					);

				}
			)
		);
	}
);

add_action( 'save_post', function($post_id) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( 'painting' !== get_post_type( $post_id ) ) {
		return;
	}

	if ( isset( $_POST['year'] ) ) {
		$year = sanitize_text_field($_POST['year'] );

		update_post_meta( $post_id, 'year', $year );
	}
	if ( isset( $_POST['technique'] ) ) {
		$technique = sanitize_text_field($_POST['technique'] );

		update_post_meta( $post_id, 'technique', $technique );
	}
	if ( isset( $_POST['size'] ) ) {
		$size = sanitize_text_field($_POST['size'] );

		update_post_meta( $post_id, 'size', $size );
	}

} );

add_action( 'save_post', function($post_id) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}


	if ( 'cloth' !== get_post_type( $post_id ) ) {
		return;
	}

	if ( isset( $_POST['year'] ) ) {
		$year = sanitize_text_field($_POST['year'] );

		update_post_meta( $post_id, 'year', $year );
	}

	if ( isset( $_POST['code'] ) ) {
		$code = sanitize_text_field($_POST['code'] );

		update_post_meta( $post_id, 'code', $code );
	}

	if ( isset( $_POST['author'] ) ) {
		$author = sanitize_text_field($_POST['author'] );

		update_post_meta( $post_id, 'author', $author );
	}
} );


add_action(
	'after_setup_theme',
	function () {
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain('jantus', get_template_directory() . '/languages');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Declare Woocommerce compatibilty.
		 */
		add_theme_support('woocommerce');

		add_theme_support('wc-product-gallery-zoom');

		add_theme_support('wc-product-gallery-lightbox');

		add_theme_support('wc-product-gallery-slider');

		register_nav_menus(
			array(
				'header'    => esc_html__('Header Menu', 'jantus'),
				'hamburger' => esc_html__('Hamburger Menu (Mobile)', 'jantus'),
				'footer'    => esc_html__('Footer Menu', 'jantus'),
			)
		);
	}
);

/*
 * Remove filter in order to prevent the unwanted addition of p tags in the frontend.
 */
add_action(
	'template_redirect',
	function () {
		remove_filter('the_content', 'wpautop');
	}
);

add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name'          => 'Jantus',
				'id'            => 'jantus',
				'class'         => '',
				'before_widget' => '<div class="widget jantus">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
			)
		);
	}
);

/**
 * Disabling Gutenberg.
 */
$disable_gutenberg = false;

if ($disable_gutenberg) {
	add_filter('use_block_editor_for_post', '__return_false');
}


/**
 * Returns a menu.
 *
 * @param string $location The menu location.
 *
 * @return array The menu.
 */
function jantus_get_menu($location)
{
	global $wp;
	$menu = null;

	if ($location) {
		$locations = get_nav_menu_locations();

		if (
			$locations &&
			isset($locations[$location])
		) {
			$object = wp_get_nav_menu_object($locations[$location]);

			if ($object) {
				$items = wp_get_nav_menu_items($object->term_id);
				$menu  = array();

				if (!empty($items)) {
					foreach ($items as $item) {
						$menu_item = array();

						$menu_item['item_id'] = $item->ID;
						$menu_item['title']   = $item->title;
						$menu_item['url']     = $item->url;
						$menu_item['target']  = $item->target;
						$menu_item['parent']  = $item->menu_item_parent;
						$menu_item['classes'] = $item->classes;

						$menu_item['classes'][] = 'menu-item';

						if ((home_url($wp->request) . '/') === $item->url) {
							$menu_item['classes'][] = 'current-menu-item';
						}

						$menu_item['submenu'] = array();

						if (isset($menu[$menu_item['parent']])) {
							$menu[$menu_item['parent']]['submenu'][$item->ID] = $menu_item;
						} else {
							$menu[$item->ID] = $menu_item;
						}
					}
				}
			}
		}
	}

	return $menu;
}

/**
 * Returns post excerpt.
 *
 * @param WP_Post $post      Post object.
 * @param int     $num_words Optional. Maximum number of words to return.
 *                           Default 55.
 *
 * @return string Post excerpt.
 */
function jantus_get_excerpt($post, $num_words = 55)
{
	if (!empty($post->post_excerpt)) {
		$excerpt = $post->post_excerpt;
	} else {
		$excerpt = strip_shortcodes($post->post_content);
		$excerpt = wp_strip_all_tags($excerpt);
	}

	$excerpt = wp_trim_words($excerpt, $num_words);

	return $excerpt;
}

/**
 * Prints the menu body class.
 */
function jantus_print_body_class()
{
	global $wp_query;

	$classes = array();

	/*
	*	is_home returns true if it's the blog page
	*/
	if (is_home()) {
		$classes[] = 'page blog-page';
	}

	if (is_category()) {
		$cat = $wp_query->get_queried_object();

		if (isset($cat->term_id)) {
			$classes[] = 'category-' . sanitize_html_class($cat->slug);
		}
	}

	if (is_archive()) {
		$classes[] = 'archive';

		if (is_post_type_archive()) {
			$post_type = get_query_var('post_type');

			if (is_array($post_type)) {
				$post_type = reset($post_type);
			}

			$classes[] = 'archive-' . sanitize_html_class($post_type);
		}
	}

	if (is_page() || is_singular('page_es_es')) {
		global $post;

		$classes[] = 'page page-' . sanitize_html_class($post->post_name);
	}

	if (is_single()) {
		global $post;

		$classes[] = 'single';

		if (isset($post->post_type)) {
			$classes[] = 'single-' . sanitize_html_class($post->post_type, $post->ID);
		}
	}

	if (is_search()) {
		$classes[] = 'search-results';
	}

	if (is_404()) {
		$classes[] = 'page error404';
	}

	echo 'class="' . esc_attr(join(' ', $classes)) . '"';
}

/**
 * The following function takes an id for argument, such as 'main' or 'footer'
 * and outputs them in html, in <ul> and <li> tags.
 *
 * @param int $menu_id The ID identifying the menu.
 */
function jantus_print_menu($menu_id)
{
	$menu   = jantus_get_menu($menu_id);
	$output = '';

	if ($menu) {
		$output  = '<nav id="menu-' . esc_attr($menu_id) . '">';
		$output .= jantus_print_menu_object($menu);
	}

	$output .= '</nav>';

	echo wp_kses_post($output);
}

/**
 * The following function takes a menu array for argument, and recursively
 * concatenates the menus and submenus in a string of html code organized by
 * <ul> and <li> tags.
 *
 * @param array $menu The menu to print.
 *
 * @return string The HTML representing the menu.
 */
function jantus_print_menu_object($menu)
{
	$output = '<ul>';

	foreach ($menu as $item) {
		$output .= '<li';

		if (!empty($item['classes'])) {
			$output .= ' class="' . esc_attr(implode(' ', $item['classes'])) . '"';
		}

		$output .= '>';

		if (!empty($item['url'])) {
			$output .= '<a href="' . esc_url($item['url']) . '"';

			if (!empty($item['target'])) {
				$output .= ' target="' . esc_attr($item['target']) . '"';
			}

			$output .= '>' . esc_html($item['title']) . '</a>';
		} else {
			$output .= esc_html($item['title']);
		}

		if (!empty($item['submenu'])) {
			$output .= jantus_print_menu_object($item['submenu']);
		}

		$output .= '</li>';
	}

	$output .= '</ul>';

	return $output;
}

/**
 * Prints a post.
 *
 * @param int   $post_id Optional. The post to print. If null it will be print
 *                       the current post. Default null.
 * @param array $atts {
 *  Optional. Extra arguments to be sent to the function.
 *
 *  @type string  $thumbnail_size Which thumbnail size to use. Default large.
 *  @type boolean $output         Whether to output the content or not. Default
 *                                true.
 * }
 *
 * @return void|string The HTML representing the post if $atts['output'] is
 *                     true.
 */
function jantus_print_post($post_id = null, $atts = array())
{
	$html = '';

	$atts = shortcode_atts(
		array(
			'thumbnail_size' => 'large',
			'output'         => true,
		),
		$atts
	);

	if (empty($post_id)) {
		$post_id = get_the_ID();
	}

	$post = get_post($post_id);

	if ($post) {
		/* $image = get_the_post_thumbnail( $post_id, $atts['thumbnail_size'] ); */
		$link  = get_permalink($post_id);
		$title = $post->post_title;
		$date  = get_the_date(get_option('date_format'), $post_id);

		$html .= '<article id="article-' . esc_attr($post_id) . '">';

		/* 	if ( ! empty( $image ) ) {
			if ( ! is_single() ) {
				$html .= '<a href="' . esc_url( $link ) . '" title="' . esc_attr( $title ) . '">' . wp_kses_post( $image ) . '</a>';
			} else {
				if ( get_post_type( $post_id ) === 'post' ) {
					$html .= wp_kses_post( $image );
				}
			}
		} */

		if (!is_single()) {
			$html .= '<h2><a href="' . esc_url($link) . '" title="' . esc_attr($title) . '">' . esc_html($title) . '</a></h2>';
		}

		if (get_post_type($post_id) === 'post') {
			$html .= '<div class="toolbar">';
			$html .= '<p> ' . esc_html($date) . '</p>';
			$html .= '</div>';
		}

		if (is_singular(array('post'))) {
			$html .= '<div class="content">';

			$html .= wp_kses_post(apply_filters('the_content', $post->post_content));

			$html .= '</div>';
			$html .= '<div class="tags">';

			the_tags('', '');
			$html .= '</div>';
		} else {
			if ($post->post_excerpt) {
				$html .= '<div class="content">';

				$html .= jantus_print_excerpt($post, 100, false);

				$html .= '<a href="' . esc_url($link) . '" title="' . esc_attr($title) . '" class="read-more">';
				$html .= esc_html__('More', 'jantus') . '</a>';
				$html .= '</div>';
			} elseif ($post->post_content) {
				$html .= '<div class="content">';

				$html .= wp_kses_post(apply_filters('the_content', $post->post_content));

				$html .= '<a href="' . esc_url($link) . '" title="' . esc_attr($title) . '" class="read-more">';
				$html .= esc_html__('More', 'jantus') . '</a>';
				$html .= '</div>';
			}
		}

		$html .= '</article>';
	}

	if ($atts['output']) {
		echo wp_kses_post($html);
	} else {
		return $html;
	}
}

/**
 * Prints current post excerpt.
 *
 * @param WP_Post $post      Post object.
 * @param int     $num_words Optional. Maximum number of words to return.
 *                           Default 100.
 * @param boolean $output    Optional. Whether to output the content or return
 *                           it. Default true.
 *
 * @return void|string Post excerpt if $output is true.
 */
function jantus_print_excerpt($post, $num_words = 100, $output = true)
{
	if ($output) {
		echo esc_html(jantus_get_excerpt($post, $num_words));
	} else {
		return esc_html(jantus_get_excerpt($post, $num_words));
	}
}

add_filter(
	'wp_kses_allowed_html',
	function ($allowed, $context) {
		if ('post' === $context) {
			$allowed['select']   = array(
				'name'     => true,
				'id'       => true,
				'required' => true,
			);
			$allowed['option']   = array(
				'value' => true,
			);
			$allowed['textarea'] = array(
				'name'        => true,
				'placeholder' => true,
				'id'          => true,
				'class'       => true,
				'required'    => true,
			);
			$allowed['input']    = array(
				'type'        => true,
				'name'        => true,
				'placeholder' => true,
				'value'       => true,
				'id'          => true,
				'class'       => true,
				'checked'     => true,
				'required'    => true,
			);

			$allowed['script'] = array(
				'type' => true,
				'src'  => true,
			);

			$allowed['link'] = array(
				'rel'  => true,
				'href' => true,
			);

			$allowed['div']['data-value'] = true;
			$allowed['div']['data-mask']  = true;
			$allowed['div']['onclick']    = true;
			$allowed['a']['download']     = true;

			$allowed['iframe']                = array();
			$allowed['iframe']['class']       = true;
			$allowed['iframe']['width']       = true;
			$allowed['iframe']['height']      = true;
			$allowed['iframe']['frameborder'] = true;
			$allowed['iframe']['src']         = true;
			$allowed['iframe']['scrolling']   = true;
		}

		return $allowed;
	},
	10,
	2
);



