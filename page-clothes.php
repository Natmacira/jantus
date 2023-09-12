<?php

$body_class = "page-clothes";
require_once 'header.php';


// <!-- traeme el post type cloth  -->

$query = new WP_Query(array('post_type' => 'cloth'));
foreach ($query->posts as $cloth) {

?>
    <section>
            <article>
                <p>Author:</p>
                <p> <?php echo esc_html(get_post_meta($cloth->ID, 'author', true)); ?> </p>
            </article>
            <article>
                <p>Title:</p>
                <p> <?php echo esc_html($cloth->post_title); ?> </p>
            </article>
            <article>
                <p>Year:</p>
                <p> <?php echo esc_html(get_post_meta($cloth->ID, 'year', true)); ?> </p>
            </article>
            <article>
                <p>Code:</p>
                <p> <?php echo esc_html(get_post_meta($cloth->ID, 'code', true)); ?>
            </article>
            <article>
            <?php
            echo get_the_post_thumbnail($cloth->ID, 'thumbnail', array('class' => 'cloth-img'));
            ?>
            </article>
    </section>
<?php
}

require_once 'footer.php';

?>