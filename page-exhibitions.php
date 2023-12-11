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
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/USA.svg'); ?>" alt="Clickeable map usa" class="usa solo">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/extra-big-mobile.svg'); ?>" alt="empty map" class="extra-big">
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/mobile/Spain.svg'); ?>" alt="Clickeable map spain" class="spain solo">

    </article>

    <article class="desktop group-dk">
        <ul class="menu-countrys">
            <li class="usa">usa</li>
            <li class="spain">spain</li>
            <li class="arg">argentina</li>
            <li class="japan">japan</li>
            <li class="kr">korea</li>
            <li class="br">brazil</li>
            <li class="finlandia">finland</li>
            <li class="uk">uk</li>
        </ul>
        <div class="container-jpn japan">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/japan.svg'); ?>" alt="Clickeable map Japan" class="japan dkp">
        </div>
        <div class="container-kr kr">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/Kr.svg'); ?>" alt="Clickeable map Kr" class="kr dkp">
        </div>
        <div class="container-usa usa">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/USA.svg'); ?>" alt="Clickeable map usa" class="usa dkp">
        </div>
        <div class="container-extra">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/Extra.svg'); ?>" alt="empty map" class="extra dkp">
        </div>
        <div class="container-br br">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/Br.svg'); ?>" alt="Clickeable map br" class="br dkp">
        </div>
        <div class="container-uk uk">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/Uk.svg'); ?>" alt="Clickeable map U K" class="uk dkp">
        </div>
        <div class="container-arg arg">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/Arg.svg'); ?>" alt="Clickeable map argentina" class="arg dkp">
        </div>
        <div class="container-fin finlandia">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/Finland.svg'); ?>" alt="Clickeable map finland" class="finlandia dkp">
        </div>
        <div class="container-spn spain">
            <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/mapas/desktop/Spain.svg'); ?>" alt="Clickeable map spain" class="spain dkp">
        </div>
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
                    <span>Enokojima Art, Culture and Creative Center</span>
                    <strong></strong>
                    <p>Osaka, Japan.</p>
                    <p>/ 2022</p>
                </div>
                <div class="modal-inner-info">
                    <span>Tokyo International Art Fair 2018</span>
                    <strong>Bellesalle Ropong</strong>
                    <p>Tokio, Japan.</p>
                    <p>/ 2018</p>
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
                    <p>Gyeonggi-do, South Korea.</p>
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
                    <span>Art Lab (Tucker Eason)</span>
                    <strong></strong>
                    <p>Nueva York, USA.</p>
                    <p>/ 2018</p>
                </div>
                <div class="modal-inner-info">
                    <span>Greenpoint Gallery</span>
                    <strong></strong>
                    <p>Nueva York, USA.</p>
                    <p>/ 2018</p>
                </div>
                <div class="modal-inner-info">
                    <span>ArtExpo New York</span>
                    <strong>Pier 95</strong>
                    <p>Nueva York, USA.</p>
                    <p>/ 2018</p>
                </div>
                <div class="modal-inner-info">
                    <span>30 Under 30</span>
                    <strong>Viridian Artists</strong>
                    <p>Nueva York, USA.</p>
                    <p>/ 2018</p>
                </div>
            </div>
        </div>

        <div class="modal-usa-solo">
            <div class="modal-title">
                <button class="close-usa-solo">
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
                    <span>L´enfant Brut</span>
                    <strong>Chashama</strong>
                    <p>Nueva York, USA.</p>
                    <p>/ 2018</p>
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
                    <span>Fabrica Bhering</span>
                    <strong></strong>
                    <p>Rio de Janeiro, Brazil</p>
                    <p>/2022</p>
                </div>
                <div class="modal-inner-info">
                    <span>BELA Biennial</span>
                    <strong>Cidade das Artes</strong>
                    <p>Rio de Janeiro, Brazil</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>Casa França Brasil</span>
                    <strong></strong>
                    <p>Rio de Janeiro, Brazil</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>Centro Cultural dos Correios</span>
                    <strong></strong>
                    <p>Rio de Janeiro, Brazil</p>
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
                    <p>London, United Kingdom.</p>
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
                    <span>Muestra de Arte Joven</span>
                    <strong>Museo Fundación Romulo Raggio</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2022</p>
                </div>
                <div class="modal-inner-info">
                    <span>Anábasis</span>
                    <strong>Galería Buenos Aires Sur & pantanosumpf</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2020</p>
                </div>
                <div class="modal-inner-info">
                    <span>Muestra de Arte Joven</span>
                    <strong>Museo Fundación Romulo Raggio</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>Ausdrücke</span>
                    <strong>Amuleto & pantanosumpf</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2019</p>
                </div>
                <div class="modal-inner-info">
                    <span>Muestra de Arte Joven </span>
                    <strong>Museo Fundación Romulo Raggio</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2017</p>
                </div>
                <div class="modal-inner-info">
                    <span>LIX Salón de Artes Plásticas Manuel Belgrano </span>
                    <strong>Museo Eduardo Sívori</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2014</p>
                </div>
                <div class="modal-inner-info">
                    <span>“Beluga”</span>
                    <strong>Elsi del Río</strong>
                    <p>Buenos Aires, Argentina.</p>
                    <p>/2013</p>
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
                    <span>Varkaus stadsbibliotek</span>
                    <strong></strong>
                    <p>Varkaus, Finland</p>
                    <p>/ 2022</p>
                </div>
                <div class="modal-inner-info">
                    <span>Kaapelitehdas</span>
                    <strong></strong>
                    <p>Helsinki, Finland</p>
                    <p>/ 2019</p>
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
                    <span>Porta'ns l’art</span>
                    <strong>Centre Civic Can Verdaguer</strong>
                    <p>Barcelona, Spain</p>
                    <p>/ 2018</p>
                </div>
            </div>
        </div>


        <div class="modal-spain-solo">
            <div class="modal-title">
                <button class="close-spain-solo">
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
                    <span>Jantus</span>
                    <strong>Amuleto Gallery</strong>
                    <p>Barcelona, Spain</p>
                    <p>/ 2018</p>
                </div>
            </div>
        </div>
    </article>

</section>


<?php


require_once 'footer.php';

?>