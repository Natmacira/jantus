<?php

$body_class = "page-publications";
require_once 'header.php';


// <!-- traeme el post type paintings  -->

$query = new WP_Query( array( 'post_type' => 'painting') );
var_dump($query->posts);
foreach ($query->posts as $painting) {
    # code...
    echo $painting->post_title; 
    echo get_post_meta($painting->ID, 'year', true); 
    echo get_post_meta($painting->ID, 'technique', true); 
    echo get_post_meta($painting->ID, 'size', true); 
}
?>
