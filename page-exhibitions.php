<?php

$body_class = "page-exhibitions";
require_once 'header.php';

?>

<section class="main-exhibitions">

    <article class="mobile">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/japan.svg'); ?>" alt="Clickeable map Japan">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Kr.svg'); ?>" alt="Clickeable map Kr">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/USA.svg'); ?>" alt="Clickeable map usa">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Extra.svg'); ?>" alt="empty map" class="extra">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Br.svg'); ?>" alt="Clickeable map br" class="br">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Uk.svg'); ?>" alt="Clickeable map U K" class="uk">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Arg.svg'); ?>" alt="Clickeable map argentina" class="arg">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Finland.svg'); ?>" alt="Clickeable map finland" class="finlandia">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Spain.svg'); ?>" alt="Clickeable map spain" class="spain">

    </article>

</section>


<?php


require_once 'footer.php';

?>