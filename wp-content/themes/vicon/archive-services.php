<?php get_header();
$text = get_field('serivces_text', 'options');
$image = get_field('serivces_image', 'options')['url'];
$heading = get_field('services_heading', 'options');
require_once('gutenberg/partials/banner/banner.php')
?>
    <section class="archive std services">

        <div class="single heading"><h1><?= $heading ?></h1></div>
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post();
                $svg = get_field('svg_header');
                $desc = get_field('desc_details');
                ?>
                <div class="single">
                    <div class="svg">
                        <?= file_get_contents(get_template_directory() . "/images/services/details/" . $svg . ".svg"); ?>
                    </div>
                    <div class="content">
                        <h2><?php the_title(); ?></h2>
                        <?= $desc ?>
                    </div>
                </div>
                <?php the_excerpt(); ?>
            <?php endwhile;
            wp_reset_query(); ?>
        <?php endif; ?>

    </section>
<?php get_footer(); ?>