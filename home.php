<?php

/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jantus
 */

$body_class = "page-home";
require_once 'header.php';
?>
<section class="home">
    <p>
        Cutre Luxor Jantus (Buenos Aires, 1994) is a global visual artist based in Argentina.
        This site offers you an interactive experience where you can discover his art, publications about his work, and learn about his
        main exhibitions in: Argentina, Brazil, United States, Spain, Finland, the UK, South Korea and Japan. He studied at the National
        University of the Arts (UNA, 2014-2017) and the Fine Arts Program at the Kunstgut Fine Arts Academy of Berlin, Germany (2014),
        and took courses with different artistic references. Jantus employs processes of pixelation, layers, and saturations as a play
        between the analog and the digital to address the overstimulation of the contemporary world.

    </p>
</section>
    <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/home/logo.png'); ?>" alt="Jantus logo" id="reboteImg">
<?php

get_sidebar();
get_footer();
