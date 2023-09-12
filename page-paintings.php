<?php

$body_class = "page-publications";
require_once 'header.php';


// <!-- traeme el post type paintings  -->

$query = new WP_Query( array( 'post_type' => 'painting') );
foreach ($query->posts as $painting) {
    # code...
    echo $painting->post_title; 
    echo get_post_meta($painting->ID, 'year', true); 
    echo get_post_meta($painting->ID, 'technique', true); 
    echo get_post_meta($painting->ID, 'size', true); 
    echo get_the_post_thumbnail( $painting->ID, 'thumbnail', array( 'class' => 'painting-img' ) );
    // agregar img
}
?>
