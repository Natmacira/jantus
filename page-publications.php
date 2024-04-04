<?php

$body_class = "page-publications";
require_once 'header.php';

?>


<section class="library">
    <!-- <div> -->
    <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/libro_publications.png'); ?>" alt="Book Publications" class="book-publications">
    <!-- </div> -->
    
<?php
$query = new WP_Query(array('post_type' => 'publication'));
foreach ($query->posts as $publication) {

?>

<article class="library-inner-element">
        <div class="book-content one-book-content">
            <div class="titles-inner-container">
                <h3><?php echo esc_html($publication->post_title); ?></h3>
            </div>
            <div class="info-book-inner-container">
            <?php echo wp_kses_post($publication->post_content); ?>
            </div>
        </div>
        <div class="book-title one-book-title">
            <p><span><?php echo get_post_meta($publication->ID, 'year', true); ?></span><?php echo esc_html($publication->post_title); ?></p>
        </div>
    </article>
<?php
}?>
    
    <article class="library-inner-element">
        <div class="book-content two-book-content">
            <div class="titles-inner-container">
                <h3>Flamantes #12</h3>
            </div>
            <div class="info-book-inner-container">
                <p>Web: <br>
                    <a href="https://bit.ly/Flamantes12_Jantus" target="_blank"> https://bit.ly/Flamantes12_Jantus</a>
                </p>
                <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/flamantes.jpg'); ?>" alt="Portada del sitio web donde se presenta la obra de arte." class="portada">

                <p class="pdf-link"><a href="https://drive.google.com/file/d/13fmAJ_TtMZ35fl_z46pp2GvAm3MB28DM/view?usp=drive_link" target="_blank">PDF LINK</a></p>

                <p>Video: <br>
                    <a href="https://bit.ly/Video_Flamantes12_Lectura" target="_blank"> https://bit.ly/Video_Flamantes12_Lectura</a>
                </p>
            </div>
        </div>
        <div class="book-title two-book-title">
            <p><span>18</span> Flamantes #12</p>
        </div>
    </article>


    <article class="library-inner-element">
        <div class="book-content three-book-content">
            <div class="titles-inner-container">
                <h3>Flamantes #13</h3>
            </div>
            <div class="info-book-inner-container">
                <p>Web: <br>
                    <a href="https://bit.ly/Flamantes_13_Web" target="_blank"> https://bit.ly/Flamantes_13_Web</a>
                </p>
                <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/flamantes_13.jpg'); ?>" alt="Portada del sitio web donde se presenta la obra de arte." class="portada">

                <p class="pdf-link"><a href="https://drive.google.com/file/d/1bgEg8hhjTM4gdyOk2vm0-Z4p97MjUQ35/view?usp=drive_link" target="_blank">PDF LINK</a></p>

                <p>Video: <br>
                    <a href="https://bit.ly/Flamantes_13_vide" target="_blank"> https://bit.ly/Flamantes_13_vide</a>
                </p>
            </div>
        </div>
        <div class="book-title three-book-title">
            <p><span>18</span> Flamantes #13</p>
        </div>
    </article>

    <article class="library-inner-element">
        <div class="book-content four-book-content">
            <div class="titles-inner-container">
                <h3>Chasama</h3>
            </div>
            <div class="info-book-inner-container">
            <p>Web: <br>
                    <a href="https://chashama.org/event/lenfant-brut/" target="_blank"> https://chashama.org/event/lenfant-brut/</a>
                </p>
                <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/Chashama_Jantus.png'); ?>" alt="Portada del sitio web donde se presenta la obra de arte." class="portada">
            </div>
        </div>
        <div class="book-title four-book-title">
            <p><span>19</span>Chasama</p>
        </div>
    </article>
    <article class="library-inner-element">
        <div class="book-content five-book-content">
            <div class="titles-inner-container">
                <h3>Murze Magazine</h3>
            </div>
            <div class="info-book-inner-container">
                <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/Murze.jpg'); ?>" alt="Portada del sitio web donde se presenta la obra de arte." class="portada">

                <p class="pdf-link"><a href="https://drive.google.com/file/d/1kbRyb_9E4Ie-CfV3YQqnXfU1WRV1SvnS/view?usp=drive_link" target="_blank">PDF LINK</a></p>

            </div>
        </div>
        <div class="book-title five-book-title">
            <p><span>19</span>Murze Magazine</p>
        </div>
    </article>

    <article class="library-inner-element">
        <div class="book-content six-book-content">
            <div class="titles-inner-container">
                <h3>BL8D #2</h3>
            </div>
            <div class="info-book-inner-container">
                <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/bl8d-1.jpg'); ?>" alt="Portada del sitio web donde se presenta la obra de arte." class="portada">
                <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/bl8d-2.jpg'); ?>" alt="Portada del sitio web donde se presenta la obra de arte." class="portada">
                <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/bl8d-3.jpg'); ?>" alt="Portada del sitio web donde se presenta la obra de arte." class="portada">
                <img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/publications/bl8d-4.jpg'); ?>" alt="Portada del sitio web donde se presenta la obra de arte." class="portada">
            </div>
        </div>
        <div class="book-title six-book-title">
            <p><span>23</span>BL8D #2</p>
        </div>
    </article>

    

<?php

require_once 'footer.php';

?>