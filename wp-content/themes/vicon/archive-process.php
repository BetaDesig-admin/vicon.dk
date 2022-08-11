<?php get_header();
$text = get_field('process_text', 'options');
$image = get_field('process_image', 'options')['url'];
$heading = get_field('process_heading', 'options');
require_once('gutenberg/partials/banner/banner.php')

?>
    <section class="archive std process">

        <div class="single heading"><h1><?= $heading ?></h1></div>
        <?php if (have_posts()):
            $p = 1;
            ?>
            <?php while (have_posts()) : the_post();
                $desc = get_field('desc');

                if ($p < 10) {
                    $p = '0' . $p;
                }

                ?>
                <div class="single">
                    <div class="num">
                        <?= $p ?>
                    </div>
                    <div class="content">
                        <h2><?php the_title(); ?></h2>
                        <?= $desc ?>
                    </div>
                </div>
            <?php
                $p++;
            endwhile;
            wp_reset_query(); ?>
        <?php endif; ?>

    </section>
<?php get_footer(); ?>