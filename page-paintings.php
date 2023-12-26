<?php

$body_class = "page-paintings";
require_once 'header.php';

?>

<div class="cards-inner-container"> 

<?php

// <!-- traeme el post type paintings  -->
$query = new WP_Query(array('post_type' => 'painting'));
foreach ($query->posts as $painting) {

?>
  
    <section class="card-product">
        <article>
            <a href="<?php echo get_permalink($painting->ID) ?>">
                <?php echo get_the_post_thumbnail($painting->ID, 'full', array('class' => 'painting-img'));
                ?>
                <p> <?php echo esc_html($painting->post_title); ?> </p>

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