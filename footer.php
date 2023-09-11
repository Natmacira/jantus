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
		<footer id="colophon" class="site-footer">
<?php
jantus_print_menu( 'footer' );
?>
			<a class="theme-author" href="https://altcooperativa.com" target="_blank">
				powered by ALT <img src="<?php echo esc_attr( get_stylesheet_directory_uri() . '/img/alt-logo.svg' ); ?>" alt="Ir a la página de Cooperativa ALT">
			</a>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
