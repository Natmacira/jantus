<?php

$body_class = "page-paintings";
require_once 'header.php';


// <!-- traeme el post type paintings  -->
$query = new WP_Query(array('post_type' => 'painting'));
foreach ($query->posts as $painting) {

?>
    <section>
        <article>
            <p>Name:</p>
            <p> <?php echo esc_html($painting->post_title); ?> </p>
        </article>
        <article>
            <p>Year:</p>
            <p> <?php echo esc_html(get_post_meta($painting->ID, 'year', true)); ?> </p>
        </article>
        <article>
            <p>Technique:</p>
            <p> <?php echo esc_html(get_post_meta($painting->ID, 'technique', true)); ?> </p>
        </article>
        <article>
            <p>Size:</p>
            <p> <?php echo esc_html(get_post_meta($painting->ID, 'size', true)); ?>
        </article>
        <article>
            <?php
            echo get_the_post_thumbnail($painting->ID, 'thumbnail', array('class' => 'painting-img'));
            ?>
        </article>
    </section>
<?php
}

require_once 'footer.php';

?>
