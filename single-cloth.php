<?php
$body_class = 'single';
require_once 'header-singles.php';

while (have_posts()) {
    the_post();
?>

    <section class="section-product">
        <article>
            <?php
            echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'cloth-img'));
            ?>
        </article>
        <article class="zoom-in">
            <button>ZOOM IN</button>
            <div class="container-zoom-in">
                <?php the_post_thumbnail('full', array('class' => 'zoomed-img')); ?>
                <p class="exit">EXIT</p>
            </div>
        </article>
        <div class="inner-data-container">
            <article>
                <p>Author:</p>
                <p> <?php echo esc_html(get_post_meta(get_the_ID(), 'author', true)); ?> </p>
            </article>
            <article>
                <p>Title:</p>
                <p> <?php echo esc_html(get_the_title()); ?> </p>
            </article>
            <article>
                <p>Year:</p>
                <p> <?php echo esc_html(get_post_meta(get_the_ID(), 'year', true)); ?> </p>
            </article>
            <article>
                <p>Code:</p>
                <p> <?php echo esc_html(get_post_meta(get_the_ID(), 'code', true)); ?>
            </article>
        </div>
    </section>

<?php
}

get_footer();
?>