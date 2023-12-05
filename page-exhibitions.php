<?php

$body_class = "page-exhibitions";
require_once 'header.php';

?>

<section class="main-exhibitions">

    <article class="mobile group">
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
    <article class="mobile solo">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/USA.svg'); ?>" alt="Clickeable map usa" class="usa">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/extra-big-mobile.svg'); ?>" alt="empty map" class="extra-big">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Spain.svg'); ?>" alt="Clickeable map spain" class="spain">

    </article>

    <article class="switch-btn">
        <button>Solo</button>
        <button>Group</button>
    </article>

    <article class="modals-inner-container">
        <div class="modal-japan">
            <div class="modal-title">
                <button class="close-japan"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/close-map-location.svg'); ?>"></button>
                <p>jpn</p>
            </div>
            <div class="modal-youtube">
                <a href="https://www.youtube.com/"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/youtube-player.svg'); ?>" alt="youtube player"></a>
                <p>WATCH SOME OF <br>
                    MY MEMORIES</p>
            </div>
            <div class="modal-info">
                <div class="modal-inner-info">
                    <span>Tokyo International Art Fair 2018</span>
                    <strong>Bellesalle Ropong</strong>
                    <p>Tokio, Japón.</p>
                    <p>/ 2018</p>
                </div>
                <div class="modal-inner-info">
                    <span>AVA Art Festival</span>
                    <strong>Enoco,</strong>
                    <p>Osaka, Japón.</p>
                    <p>/ 2019</p>
                </div>
            </div>
        </div>
        <div class="modal-kr">
            <div class="modal-title">
                <button class="close-kr"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/close-map-location.svg'); ?>"></button>
                <p>kr</p>
            </div>
            <div class="modal-youtube">

            </div>
            <div class="modal-info">
                <div class="modal-inner-info">
                    <span>What We Eat and Wear</span>
                    <strong>CICA Museum</strong>
                    <p>Gimpo, Corea del Sur.</p>
                    <p>/ 2019</p>
                </div>
            </div>
        </div>

        <div class="modal-usa">
            <div class="modal-title">
                <button class="close-usa">
                    <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/close-map-location.svg'); ?>"></button>
                <p>usa</p>
            </div>
            <div class="modal-youtube">
                <a href="https://www.youtube.com/"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/youtube-player.svg'); ?>" alt="youtube player"></a>
                <p>WATCH SOME OF <br>
                    MY MEMORIES</p>
            </div>

            <div class="modal-info">
                <div class="modal-inner-info">
                    <span>New York Art</span>
                    <strong>104 Gallery, Nueva York,</strong>
                    <p>Estados Unidos.</p>
                    <p>/ 2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>Greenpoint Gallery</span>
                    <strong>Nueva York,</strong>
                    <p>Estados Unidos.</p>
                    <p>/ 2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>ArtExpo New York</span>
                    <strong>Nueva York,</strong>
                    <p>Estados Unidos.</p>
                    <p>/ 2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>“30 Under 30”</span>
                    <strong>Viridian Gallery, Nueva York,</strong>
                    <p>Estados Unidos.</p>
                    <p>/ 2019</p>
                </div>
            </div>
        </div>
        </div>

        <div class="modal-br">
            <div class="modal-title">
                <button class="close-br">
                    <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/close-map-location.svg'); ?>"></button>
                <p>br</p>
            </div>
            <div class="modal-youtube">
                <a href="https://www.youtube.com/"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/youtube-player.svg'); ?>" alt="youtube player"></a>
                <p>WATCH SOME OF <br>
                    MY MEMORIES</p>
            </div>
            <div class="modal-info">
                <div class="modal-inner-info">
                    <span>New York Art</span>
                    <strong>104 Gallery, Nueva York,</strong>
                    <p>Estados Unidos.</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>Greenpoint Gallery</span>
                    <strong>Nueva York,</strong>
                    <p>Estados Unidos.</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>ArtExpo New York</span>
                    <strong>Nueva York,</strong>
                    <p>Estados Unidos.</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>“30 Under 30”</span>
                    <strong>Viridian Gallery, Nueva York,</strong>
                    <p>Estados Unidos.</p>
                    <p>/2019</p>
                </div>
            </div>
        </div>
        <div class="modal-uk">
            <div class="modal-title">
                <button class="close-uk">
                    <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/close-map-location.svg'); ?>"></button>
                <p>uk</p>
            </div>
            <div class="modal-youtube">
             
            </div>
            <div class="modal-info">
                <div class="modal-inner-info">
                    <span>Parallax Art Fair 2018</span>
                    <strong>Kensington Town Hall</strong>
                    <p>Londres, Reino Unido.</p>
                    <p>/2018</p>
                </div>
            </div>
        </div>
        <div class="modal-arg">
            <div class="modal-title">
                <button class="close-arg">
                    <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/close-map-location.svg'); ?>"></button>
                <p>arg</p>
            </div>
            <div class="modal-youtube">
                <a href="https://www.youtube.com/"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/youtube-player.svg'); ?>" alt="youtube player"></a>
                <p>WATCH SOME OF <br>
                    MY MEMORIES</p>
            </div>
            <div class="modal-info">
                <div class="modal-inner-info">
                    <span>“Beluga”</span>
                    <strong>Elsi del Río</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2013</p>
                </div>
                <div class="modal-inner-info">
                    <span>MAJO 2022</span>
                    <strong>Museo Fundación Romulo Raggio</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2022</p>
                </div>
                <div class="modal-inner-info">
                    <span>MAJO 2019</span>
                    <strong>Museo Fundación Romulo Raggio</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>MAJO</span>
                    <strong>Museo Fundación Romulo Raggio</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2017</p>
                </div>
                <div class="modal-inner-info">
                    <span>“Anábasis”</span>
                    <strong>Galería Buenos Aires Sur</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2020</p>
                </div>
                <div class="modal-inner-info">
                    <span>Espacio Cultural Fraternitas</span>
                    <strong></strong>
                    <p>Rosario, Argentina.</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>Salón Manuel Belgrano</span>
                    <strong>Museo Eduardo Sívori</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2014</p>
                </div>
                <div class="modal-inner-info">
                    <span>“Ausdrücke”</span>
                    <strong>Amuleto,</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2019</p>
                </div>
            </div>
        </div>
        <div class="modal-finlandia">
            <div class="modal-title">
                <button class="close-finlandia">
                    <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/close-map-location.svg'); ?>"></button>
                <p>fi</p>
            </div>
            <div class="modal-youtube">
                
            </div>
            <div class="modal-info">
                <div class="modal-inner-info">
                    <span>BELA Biennial 2018</span>
                    <strong>Kaapelitehdas</strong>
                    <p>Helsinki, Finlandia</p>
                    <p>/ 2018</p>
                </div>
            </div>
        </div>
        <div class="modal-spain">
            <div class="modal-title">
                <button class="close-spain">
                    <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/close-map-location.svg'); ?>"></button>
                <p>spn</p>
            </div>
            <div class="modal-youtube">
                <a href="https://www.youtube.com/"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/youtube-player.svg'); ?>" alt="youtube player"></a>
                <p>WATCH SOME OF <br>
                    MY MEMORIES</p>
            </div>
            <div class="modal-info">
                <div class="modal-inner-info">
                    <span>“Jantus face a face Rose Madone”</span>
                    <strong>Galería Cor (Amuleto), Barcelona,</strong>
                    <p>España</p>
                    <p>/ 2018</p>
                </div>
                <div class="modal-inner-info">
                    <span>Porta'ns l’art</span>
                    <strong>Centre Civic Can Verdaguer, BCN,</strong>
                    <p>España</p>
                    <p>/ 2018</p>
                </div>
            </div>
        </div>
    </article>

</section>


<?php


require_once 'footer.php';

?>