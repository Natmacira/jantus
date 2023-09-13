<?php

$body_class = "page-clothes";
require_once 'header.php';


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

require_once 'footer.php';

?>