<?php

$body_class = "page-clothes";
require_once 'header.php';

?>
<section class="titles">
<h1>Cutre Lux Jantus</h1>
<h2>Paintings</h2>
</section>
<section class="back-btn"><a href="javascript:history.back()"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/iconos/Atras.svg'); ?>" alt="Botón para volver atrás"></a></section>

<?php
?>

<div class="cards-inner-container"> 

<?php

// <!-- traeme el post type cloth  -->

$query = new WP_Query(array('post_type' => 'cloth'));
foreach ($query->posts as $cloth) {

?>

    <section class="card-product">
        <article>
            <a href="<?php echo get_permalink($cloth->ID) ?>">
                <?php echo get_the_post_thumbnail($cloth->ID, 'thumbnail', array('class' => 'cloth-img'));
                ?>
                <p> <?php echo esc_html($cloth->post_title); ?> </p>

            </a>
        </article>
    </section>

<?php
}
?>
</div>
<?php
require_once 'footer.php';

?>