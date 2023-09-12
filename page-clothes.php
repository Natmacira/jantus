<?php

$body_class = "page-clothes";
require_once 'header.php';


// <!-- traeme el post type cloth  -->

$query = new WP_Query( array( 'post_type' => 'cloth') );
foreach ($query->posts as $cloth) {
    echo $cloth->post_title; 
    echo get_post_meta($cloth->ID, 'author', true); 
    echo get_post_meta($cloth->ID, 'year', true); 
    echo get_post_meta($cloth->ID, 'code', true); 
    echo get_the_post_thumbnail( $cloth->ID, 'thumbnail', array( 'class' => 'cloth-img' ) );
}
?>


<?php

require_once 'footer.php';

?>