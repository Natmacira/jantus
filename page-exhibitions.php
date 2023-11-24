<?php

$body_class = "page-exhibitions";
require_once 'header.php';

?>

<section class="main-exhibitions">

    <article class="mobile">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/japan.svg'); ?>" alt="Clickeable map Japan" class="japan">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Kr.svg'); ?>" alt="Clickeable map Kr" class="kr">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/USA.svg'); ?>" alt="Clickeable map usa" class="usa">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Extra.svg'); ?>" alt="empty map" class="extra">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Br.svg'); ?>" alt="Clickeable map br" class="br">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Uk.svg'); ?>" alt="Clickeable map U K" class="uk">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Arg.svg'); ?>" alt="Clickeable map argentina" class="arg">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Finland.svg'); ?>" alt="Clickeable map finland" class="finlandia">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Spain.svg'); ?>" alt="Clickeable map spain" class="spain">

    </article>

    <article class="modals-inner-container">
        <div class="modal-japan">
            <p>japón</p> <button class="close-japan"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
        <div class="modal-kr">
            <p>kr</p> <button class="close-kr"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
        <div class="modal-usa">
            <p>usa</p> <button class="close-usa"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
        <div class="modal-extra">
            <p>extra</p> <button class="close-extra"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
        <div class="modal-br">
            <p>br</p> <button class="close-br"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
        <div class="modal-uk">
            <p>uk</p> <button class="close-uk"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
        <div class="modal-arg">
            <p>arg</p> <button class="close-arg"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
        <div class="modal-finlandia">
            <p>finlandia</p> <button class="close-finlandia"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
        <div class="modal-spain">
            <p>spain</p> <button class="close-spain"><?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/close-map-location.svg'); ?></button>
        </div>
    </article>

</section>


<?php


require_once 'footer.php';

?>