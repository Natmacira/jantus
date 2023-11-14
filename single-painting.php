<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Jantus
 */

 require_once 'header-singles.php';

while (have_posts()) {
    the_post();
    ?>
    
    <section class="section-product">
        <article>
            <?php the_post_thumbnail('thumbnail', array('class' => 'painting-img')); ?>
        </article>
        <article>
            <p>Name:</p>
            <p> <?php echo esc_html(get_the_title()); ?> </p>
        </article>
        <article>
            <p>Year:</p>
            <p> <?php echo esc_html(get_post_meta(get_the_ID(), 'year', true)); ?> </p>
        </article>
        <article>
            <p>Technique:</p>
            <p> <?php echo esc_html(get_post_meta(get_the_ID(), 'technique', true)); ?> </p>
        </article>
        <article>
            <p>Size:</p>
            <p> <?php echo esc_html(get_post_meta(get_the_ID(), 'size', true)); ?> </p>
        </article>
    </section>

    <?php
}

get_footer();
?>
