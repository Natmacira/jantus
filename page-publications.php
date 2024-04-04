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
    
   

    

<?php

require_once 'footer.php';

?>