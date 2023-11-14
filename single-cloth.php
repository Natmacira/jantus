<?php
$body_class = 'single';
require_once 'header-singles.php';

while (have_posts()) {
    the_post();
?>

    <section>
        <article>
            <?php
            echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('class' => 'cloth-img'));
            ?>
        </article>
        <article>
            <a href="">ZOOM IN</a>
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